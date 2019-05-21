<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_admin');
    $this->load->model('model_nav');
    $this->load->model('model_productos');
  }

  public function index()
	{
		if($this->session->userdata('logged_in')){
			if($this->session->userdata('ROL')=='Admin'){
      	$nav['nav']=$this->model_nav->consultNav(1);
        $nav['productos']=$this->model_productos->productos();
        $result['pedidosP']=$this->model_productos->consultPedidosP(1);
        $result['pedidosD']=$this->model_productos->consultPedidosD(1);
				$result['products']=$this->model_productos->productosPedidos();
				$this->load->view('header_loged',$nav);
				$this->load->view('view_admin',$result);
				$this->load->view('footer');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}

  public function session_dest(){
		$session = array(
			'logged_in' => FALSE
		);
		$this->session->set_userdata($session);
		$this->session->sess_destroy();
		redirect("".base_url()."index.php/login");
	}

  public function modNav(){
    if($this->session->userdata('logged_in')){
      if ($this->session->userdata('ROL')=='Admin') {
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,999));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('tcarga')){
          $dataCargada = $this->upload->data();
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'nombre_web'=>$this->input->post('nombre_web'),
            'op1'=>$this->input->post('op1'),
            'op2'=>$this->input->post('op2'),
            'op4'=>$this->input->post('op4'),
            'op3'=>$this->input->post('op3'),
            'op31'=>$this->input->post('op31'),
            'op32'=>$this->input->post('op32'),
            'op33'=>$this->input->post('op33'),
            'bg_color'=>$this->input->post('bg_color'),
            'fuente'=>$this->input->post('fuente'),
            'size'=>$this->input->post('size'),
            'search'=>$this->input->post('search'),
            'btn_bgcolor'=>$this->input->post('btn_bgcolor'),
            'btn_bordercolor'=>$this->input->post('btn_bordercolor'),
            'logo'=> $urldeimagen.$dataCargada['file_name'],
            'paypal'=>$this->input->post('paypal'),
          );
        }else {
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'nombre_web'=>$this->input->post('nombre_web'),
            'op1'=>$this->input->post('op1'),
            'op2'=>$this->input->post('op2'),
            'op4'=>$this->input->post('op4'),
            'op3'=>$this->input->post('op3'),
            'op31'=>$this->input->post('op31'),
            'op32'=>$this->input->post('op32'),
            'op33'=>$this->input->post('op33'),
            'bg_color'=>$this->input->post('bg_color'),
            'fuente'=>$this->input->post('fuente'),
            'size'=>$this->input->post('size'),
            'search'=>$this->input->post('search'),
            'btn_bgcolor'=>$this->input->post('btn_bgcolor'),
            'btn_bordercolor'=>$this->input->post('btn_bordercolor'),
            'paypal'=>$this->input->post('paypal'),
          );
        }
        $id=$this->input->post('id');
        $this->model_admin->actNav($datos,$id);
        redirect("admin",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

}
