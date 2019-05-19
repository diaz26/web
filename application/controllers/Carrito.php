<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_carrito');
    $this->load->model('model_informacion');
    $this->load->model('model_header');
  }

  public function carga_carrito($ban=NULL){
    $result['Subtotalcar']= $this->caculo_Subtotal_carrito();
    $head['page']=$this->model_informacion->consultPageO($ban);
    $head['head']=$this->model_header->consultOficial(1);
    $this->load->view('header_carrito',$head);
    $this->load->view('view_carrito',$result);
    $this->load->view('footer_ecommerce');
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
        $page=$_GET['page'];
        redirect("carrito/carga_carrito/$page",  'refresh');
      }elseif($encontro==true and $_GET['ban']=="delete" ){
        $arreglo[$numero]['Cantidad']= $arreglo[$numero]['Cantidad']-1;
        if ($arreglo[$numero]['Cantidad']==0){
          unset($arreglo[$numero]);
          $arreglo = array_values($arreglo);
        }
        $_SESSION['carrito']=$arreglo;
        $page=$_GET['page'];
        redirect("carrito/carga_carrito/$page",  'refresh');
      }else{
        $nombre="";
        $precio=0;
        $urlimagen="";
        $producto=$this->model_carrito->con_carrito_pro($_GET['id']);
        $nombre=$producto->nombre;
        $precio=$producto->precio;
        $urlimagen=$producto->foto;
        //$descuento=$producto->descuento;
        $datosNuevos=array('Id'=>$_GET['id'],
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Cantidad'=>1,
        'Urlimagen'=>$urlimagen,
      );
      array_push($arreglo,$datosNuevos);
      $_SESSION['carrito']=$arreglo;
      $page=$_GET['page'];
      redirect("carrito/carga_carrito/$page",  'refresh');
    }
  }else{
    if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $urlimagen="";
      $producto=$this->model_carrito->con_carrito_pro($_GET['id']);
      $nombre=$producto->nombre;
      $precio=$producto->precio;
      $urlimagen=$producto->foto;
      //$descuento=$producto->descuento;
      $arreglo[]=array('Id'=>$_GET['id'],
      'Nombre'=>$nombre,
      'Precio'=>$precio,
      'Cantidad'=>1,
      'Urlimagen'=>$urlimagen,
    );
    $page=$_GET['page'];
    $_SESSION['carrito']=$arreglo;
    redirect("carrito/carga_carrito/$page",  'refresh');
  }
}
}
public function generapedido(){
  $totalpagar= $this->caculo_Subtotal_carrito();
  $cant_pro=$_POST["cant_pro"];
  $valor_pago=$_POST["valorpago"];

  if ($cant_pro>0){

    if($valor_pago>0){
      $cadena_seguridad= $this->get_random_string(35);
      $data_cliente = array(	"nombre" 		 => $_POST["nombrec"],
      "correo" 	     		=> $_POST["correoc"],
      "celular" 	 		  => $_POST["celularc"],
      "direccion" 	 		=> $_POST["direccionc"],
      "departamento" 	 	=> $_POST["departamentoc"],
      "ciudad" 	 				=> $_POST["ciudadc"],
      "fecha_registro" 	=> date("Y-m-d H:i:s"),
      "security"		 		=> $cadena_seguridad,
    );
    //  $id_usuario=$this->model_login->inserta_user($data_cliente);

    $pedido=array(
      "id_usuario" 	=> 10,//$id_usuario,
      "fecha_registro" 	=> date("Y-m-d H:i:s"),
      "valor_pago" 	=> $_POST["valorpago"],
      "moneda" 	=> "USD",
      "cod_pedido" 	=> "BE123"//$codpedido,
    );
    //	$id_pedido=$this->model_payments->inserta_pago_pedido($pedido);

    if($_POST["pay"]=="paypal"){
      //agregado datos para enviar al formulario de paypal
      $this->load->view('view_temp_paypal');
      $cuenta_paypal=$this->model_payments->consul_cuenta_paypal('cuenta_paypal');
      $paypal =	array( "cuenta_paypal" =>$cuenta_paypal);
      $pago= $pedido + $paypal+$data_cliente;
      $this->load->view('view_temp_paypal', $pago);
    }else {
      $accountId=$this->model_pagos->consul_cuenta_payU('accountId');
      $merchantId=$this->model_pagos->consul_cuenta_payU('merchantId');
      $ApiKey=$this->model_pagos->consul_cuenta_payU('apiKey');

      $payu =	array( "accountId" =>$accountId,
      "merchantId"=>$merchantId,
      "ApiKey"=>$ApiKey,);
      $pago= $pedido + $payu +$data_cliente;
      $this->load->view('view_temp_payu',$pago);

    }

  }else {
    //recorre para enviar los correos de los PDFS
    $consul_PDF=$this->model_login->consul_PDF('apiKey');
    if(isset($_SESSION['carrito'])){
      $subtotal=0;
      $datos=$_SESSION['carrito'];
      for($i=0;$i<count($datos);$i++){
        $subtotal= $subtotal + ($datos[$i]['Cantidad']*$datos[$i]['Precio']);
      }
      return $subtotal;
    }

  }
}else{
  $this->session->set_flashdata('reco', '<div class="alert alert-danger text-center">carrito vacío</div>');
  redirect(base_url()."index.php/Tienda/carga_carrito");
}
}

}
?>
