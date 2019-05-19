<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_header');
    $this->load->model('model_clientes');
    $this->load->model('model_productos');
  }

  public function index()
	{
		$this->load->view('header');
		$this->load->view('view_productos');
		$this->load->view('footer');
	}

  public function aaaa()
  {
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Cliente'){
        $header['head']=$this->model_header->consultOficial(1);
        $header['productos']=$this->model_productos->Productos();
        $this->load->view('header_loged',$header);
        $this->load->view('view_productos');
        $this->load->view('footer_loged');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function Editar($id){
    if ($this->session->userdata('logged_in')) {

      if($this->session->userdata('ROL')=='Cliente'){

        $id_dueno=$this->session->userdata('ID');
        $num=$this->model_productos->verifica_priedad($id);
        if ($id_dueno==$num->id_dueno) {
          $header['head']=$this->model_header->consultOficial(1);
          $dataid['producto']=$this->model_productos->producto($id);
          $this->load->view('header_loged',$header);
          $this->load->view('view_modproductos',$dataid);
          $this->load->view('footer_loged',$header);
        }else {
          $this->load->view('error_page');
        }
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }

  }

  public function modificar(){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Cliente'){
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,999));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('tcarga')){
          $dataCargada = $this->upload->data();
          $datap = array(
            'Nombre' => $this->input->post('Nombre'),
            'Marca'=>$this->input->post('Marca'),
            'Descripcion'=>$this->input->post('Descripcion'),
            'Imagen'=>$urldeimagen.$dataCargada['file_name'],
            'Precio'=>$this->input->post('Precio'),
          );
        }
        else {
          $datap = array(
            'Nombre' => $this->input->post('Nombre'),
            'Marca'=>$this->input->post('Marca'),
            'Descripcion'=>$this->input->post('Descripcion'),
            'Precio'=>$this->input->post('Precio'),
          );
        }
        $id=$this->input->post('id');
        $this->model_productos->modificar($id,$datap);
        redirect("Productos",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }
  public function agregar(){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Cliente'){
        $header['head']=$this->model_header->consultOficial(1);
        //$header['productos']=$this->model_productos->traerproductos();
        $this->load->view('header_loged',$header);
        $this->load->view('view_agregar');
        $this->load->view('footer_loged');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function agregardeverdad(){
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Cliente'){
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
            'Nombre'=>$this->input->post('Nombre'),
            'Marca'=>$this->input->post('Marca'),
            'Descripcion'=>$this->input->post('Descripcion'),
            'Imagen'=>$urldeimagen.$dataCargada['file_name'],
            'Precio'=>$this->input->post('Precio'),
            'id_dueno'=>$this->session->userdata('ID')
          );
        }else{
          $agregados = array(
            'Nombre'=>$this->input->post('Nombre'),
            'Marca'=>$this->input->post('Marca'),
            'Descripcion'=>$this->input->post('Descripcion'),
            'Precio'=>$this->input->post('Precio'),
            'id_dueno'=>$this->session->userdata('ID')
          );
        }
        $this->model_productos->agregar($agregados);
        redirect("Productos",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function eliminar($id){
    if ($this->session->userdata('logged_in')) {

      if($this->session->userdata('ROL')=='Cliente'){

        $id_dueno=$this->session->userdata('ID');
        $num=$this->model_productos->verifica_priedad($id);
        if ($id_dueno==$num->id_dueno) {
          $this->model_productos->eliminar($id);
        }
        redirect("Productos",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }


}
