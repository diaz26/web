<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_header');
    $this->load->model('model_clientes');
    $this->load->model('model_productos');
    $this->load->model('model_nav');
  }

  public function index()
  {
    $nav['nav']=$this->model_nav->consultNav(1);
    $nav['productos']=$this->model_productos->productos();
    $nav['categ']=$this->model_productos->categorias();
    $this->load->view('header_ecommerce',$nav);
    $this->load->view('view_ecommerce');
    $this->load->view('footer');
  }

  public function product($ban=NULL)
  {
    if ($ban!=NULL) {
      $nav['nav']=$this->model_nav->consultNav(1);
      $nav['product']=$this->model_productos->producto($ban);
      $nav['categ']=$this->model_productos->categorias();
      $this->load->view('header_ecommerce',$nav);
      $this->load->view('view_ecommerce');
      $this->load->view('footer');
    }else {
      redirect("productos",'refresh');
    }
  }

  public function despachar($cod){
    if ($this->session->userdata('logged_in')) {

      if($this->session->userdata('ROL')=='Admin'){

        $id_dueno=$this->session->userdata('ID');
        $num=$this->model_productos->verifica_priedadDE($cod);
        if ($id_dueno==$num) {
          $arr = array('estado_pedido' => 2, );
          $this->model_productos->despachar($arr,$cod);
        }
        redirect("Admin",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function buscar()
  {
    if (isset($_POST['search'])) {
      $flag=$this->input->post('search');
      $nav['nav']=$this->model_nav->consultNav(1);
      $nav['productos']=$this->model_productos->buscarproductos($flag);
      $nav['categ']=$this->model_productos->categorias();
      $this->load->view('header_ecommerce',$nav);
      $this->load->view('view_ecommerce');
      $this->load->view('footer');
    }else {
      redirect("productos",'refresh');
    }
  }

  public function categoria($ban=NULL)
  {
    if ($ban!=NULL) {
      $nav['nav']=$this->model_nav->consultNav(1);
      $nav['productos']=$this->model_productos->categproductos($ban);
      $nav['categ']=$this->model_productos->categorias();
      $this->load->view('header_ecommerce',$nav);
      $this->load->view('view_ecommerce');
      $this->load->view('footer');
    }else {
      redirect("productos",'refresh');
    }
  }

  public function Editar($id){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Admin'){

        $nav['nav']=$this->model_nav->consultNav(1);
        $dataid['producto']=$this->model_productos->producto($id);
        $this->load->view('header_loged_o',$nav);
        $this->load->view('view_modproductos',$dataid);
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }

  }

  public function modificar(){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Admin'){
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,999));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('tcarga')){
          $dataCargada = $this->upload->data();
          $datap = array(
            'nombre'=>$this->input->post('nombre'),
            'descripcion'=>$this->input->post('descripcion'),
            'parte'=>$this->input->post('parte'),
            'ubicacion'=>$this->input->post('ubicacion'),
            'precio'=>$this->input->post('precio'),
            'marca'=>$this->input->post('marca'),
            'referencia'=>$this->input->post('referencia'),
            'year'=>$this->input->post('year'),
            'color'=>$this->input->post('color'),
            'img'=>$urldeimagen.$dataCargada['file_name'],
          );
        }
        else {
          $datap = array(
            'nombre'=>$this->input->post('nombre'),
            'descripcion'=>$this->input->post('descripcion'),
            'parte'=>$this->input->post('parte'),
            'ubicacion'=>$this->input->post('ubicacion'),
            'precio'=>$this->input->post('precio'),
            'marca'=>$this->input->post('marca'),
            'referencia'=>$this->input->post('referencia'),
            'year'=>$this->input->post('year'),
            'color'=>$this->input->post('color'),
          );
        }
        $id=$this->input->post('id');
        $this->model_productos->modificar($id,$datap);
        redirect("Admin",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }
  public function agregar(){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Admin'){
        $nav['nav']=$this->model_nav->consultNav(1);
        $this->load->view('header_loged_o',$nav);
        $this->load->view('view_agregar');
        $this->load->view('footer');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function agregardeverdad(){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Admin'){
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,999));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('tcarga')) {
          // code...
          $dataCargada = $this->upload->data();
          $agregados = array(
            'nombre'=>$this->input->post('nombre'),
            'descripcion'=>$this->input->post('descripcion'),
            'parte'=>$this->input->post('parte'),
            'ubicacion'=>$this->input->post('ubicacion'),
            'precio'=>$this->input->post('precio'),
            'marca'=>$this->input->post('marca'),
            'referencia'=>$this->input->post('referencia'),
            'year'=>$this->input->post('year'),
            'color'=>$this->input->post('color'),
            'img'=>$urldeimagen.$dataCargada['file_name'],
          );
          $this->model_productos->agregar($agregados);
          redirect("Admin",'refresh');
        }else{
          $this->session->set_flashdata('error','<div class="alert alert-danger text-center">Carga incorrecta! Agregue una imagen</div>');
          redirect("productos/agregar");
        }
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function eliminar($id){
    if ($this->session->userdata('logged_in')) {

      if($this->session->userdata('ROL')=='Admin'){

        //$id_dueno=$this->session->userdata('ID');
        //  $num=$this->model_productos->verifica_priedad($id);
        //  if ($id_dueno==$num->id_dueno) {
        $this->model_productos->eliminar($id);
        //  }
        redirect("Admin",'refresh');
      }//else {
        //  $this->load->view('error_page');
        //}
      }else {
        redirect("login");
      }
    }


  }
