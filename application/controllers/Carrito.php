<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_carrito');
    $this->load->model('model_nav');
  }

  public function carga_carrito(){
    $result['Subtotalcar']= $this->caculo_Subtotal_carrito();
    $nav['nav']=$this->model_nav->consultNav(1);
    $this->load->view('header_carrito',$nav);
    $this->load->view('view_carrito',$result);
    $this->load->view('footer');
  }

  public function caculo_Subtotal_carrito(){

    if(isset($_SESSION['carrito'])){
      $subtotal=0;
      $datos=$_SESSION['carrito'];
      for($i=0;$i<count($datos);$i++){
        $subtotal= $subtotal + ($datos[$i]['Cantidad']*$datos[$i]['Precio']);
      }
      return $subtotal;
    }
  }

  public function agrega_item_carrito(){
    if(isset($_SESSION['carrito']) and isset($_GET['id'])){
      $arreglo=$_SESSION['carrito'];
      $encontro=false;
      $numero=0;
      for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['Id']==$_GET['id'] ){
          $encontro=true;
          $numero=$i;
        }
      }
      if($encontro==true and $_GET['ban']=="agrega"){
        $arreglo[$numero]['Cantidad']= $arreglo[$numero]['Cantidad']+1;
        $_SESSION['carrito']=$arreglo;
        redirect("carrito/carga_carrito",  'refresh');
      }elseif($encontro==true and $_GET['ban']=="delete" ){
        $arreglo[$numero]['Cantidad']= $arreglo[$numero]['Cantidad']-1;
        if ($arreglo[$numero]['Cantidad']==0){
          unset($arreglo[$numero]);
          $arreglo = array_values($arreglo);
        }
        $_SESSION['carrito']=$arreglo;
        redirect("carrito/carga_carrito",  'refresh');
      }else{
        $nombre="";
        $precio=0;
        $urlimagen="";
        $producto=$this->model_carrito->con_carrito_pro($_GET['id']);
        $idd=$producto->id;
        $nombre=$producto->nombre;
        $precio=$producto->precio;
        $urlimagen=$producto->foto;
        //$descuento=$producto->descuento;
        $datosNuevos=array('Id'=>$_GET['id'],
        'id_pr'=>$idd,
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Cantidad'=>1,
        'Urlimagen'=>$urlimagen,
      );
      array_push($arreglo,$datosNuevos);
      $_SESSION['carrito']=$arreglo;
      redirect("carrito/carga_carrito",  'refresh');
    }
  }else{
    if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $urlimagen="";
      $producto=$this->model_carrito->con_carrito_pro($_GET['id']);
      $nombre=$producto->nombre;
      $idd=$producto->id;
      $precio=$producto->precio;
      $urlimagen=$producto->foto;
      //$descuento=$producto->descuento;
      $arreglo[]=array('Id'=>$_GET['id'],
      'Nombre'=>$nombre,
      'id_pr'=>$idd,
      'Precio'=>$precio,
      'Cantidad'=>1,
      'Urlimagen'=>$urlimagen,
    );
    $_SESSION['carrito']=$arreglo;
    redirect("carrito/carga_carrito",  'refresh');
  }
}
}
public function generapedido(){
  $totalpagar= $this->caculo_Subtotal_carrito();
  $cant_pro=$_POST["cant_pro"];
  $valor_pago=$_POST["valorpago"];

  if ($cant_pro>0){
    if($valor_pago>0){
      $cadena_seguridad=$this->genera_cod_pedido();

      if(isset($_SESSION['carrito'])){
        $datos=$_SESSION['carrito'];
        for($i=0;$i<count($datos);$i++){
          $add = array(
            'id_producto' => $datos[$i]['id_pr'],
            'cod_pedido' => $cadena_seguridad,
            'cantidad' => $datos[$i]['Cantidad'],
          );
          $this->model_carrito->insertItem($add);
        }
      }
      $data_pedido = array(
        "nombre" 		 => $_POST["nombre"],
        "correo" 	     		=> $_POST["correo"],
        "celular" 	 		  => $_POST["celular"],
        "cedula" 	 		=> $_POST["cedula"],
        "direccion" 	 		=> $_POST["direccion"],
        "departamento" 	 	=> $_POST["departamento"],
        "ciudad" 	 				=> $_POST["ciudad"],
        "fecha_pedido" 	=> date("Y-m-d H:i:s"),
        "cod_pedido"		 		=> $cadena_seguridad,
        "monto"		 		=> $_POST["valorpago"],
        "id_usuario" 	=> 1,

      );
      $this->model_carrito->insertaPedido($data_pedido);
      $pedido=array(
        "valor_pago" 	=> $_POST["valorpago"],
        "moneda" 	=> "USD",
        "nombre_producto" 	=> "Factura",
      );
      $cuenta_paypal=$this->model_nav->consul_cuenta_paypal(1);
      $paypal =	array( "cuenta_paypal" =>$cuenta_paypal);
      $pago= $pedido+$paypal+$data_pedido;
      $this->load->view('view_temp_paypal', $pago);
    }else {
      $this->session->set_flashdata('reco', '<div class="alert alert-danger text-center">El monto es 0 $USD</div>');
      redirect(base_url()."index.php/carrito/carga_carrito");
    }
  }else{
    $this->session->set_flashdata('reco', '<div class="alert alert-danger text-center">carrito vacío</div>');
    redirect(base_url()."index.php/carrito/carga_carrito");
  }
}

public function genera_cod_pedido(){
  #cosulta consecutivo
  $consecutivo= $this->model_nav->consultConsec(1);
  $data_update = array("pr900"	=> $consecutivo+1,);
  $this->model_nav->alteraConsec($data_update);
  //Genera número de pedido
  $cod_pedido ="COD_PED".$this->generateRandomString(6).$consecutivo;
  return $cod_pedido;
}

function generateRandomString($length) {
  return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

public function insertPago($cod_pedido=NULL,$id_usuario=NULL,$valor_pago=NULL){
  $pago=$this->model_carrito->buscaPedido($cod_pedido);
  if ($pago->cod_pedido==$cod_pedido) {
    $insertarPago=array(
      'cod_pedido'=>$pago->cod_pedido,
      'monto'=>$pago->monto,
      'fecha_pago'=>date("Y-m-d H:i:s"),
      'fecha_pedido'=>$pago->fecha_pedido,
      'id_usuario'=> $pago->id_usuario,
      'estado_pedido'=> 1,
    );
    $this->model_carrito->insertPago($insertarPago);
    $arreglo=$_SESSION['carrito'];
    $numero=0;
    for($i=0;$i<count($arreglo);$i++){
      $numero=$i;
    }
    unset($_SESSION['carrito']);
  }
  redirect("productos",  'refresh');
}

}
