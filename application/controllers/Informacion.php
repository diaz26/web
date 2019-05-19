<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informacion extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_header');
		$this->load->model('model_informacion');
		$this->load->model('model_clientes');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			if($this->session->userdata('ROL')=='Cliente'){
				$header['head']=$this->model_header->consultOficial(1);
				$result['info']=$this->model_informacion->consultInfo();
				$this->load->view('header_loged',$header);
				$this->load->view('view_info',$result);
				$this->load->view('footer_loged');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}

	public function modInf($flag=NULL){
		if($this->session->userdata('logged_in')){
			if ($this->session->userdata('ROL')=='Cliente') {
				$datos=array(
					'nombres'=>$this->input->post('nombres'),
					'apellidos'=>$this->input->post('apellidos'),
					'cc'=>$this->input->post('cc'),
					'ciudad'=>$this->input->post('ciudad'),
					'direccion'=>$this->input->post('direccion'),
					'celular'=>$this->input->post('celular'),
					'email'=>$this->input->post('email'),
					'paypal'=>$this->input->post('paypal'),
				);
				$id=$this->input->post('id');
				$this->model_informacion->actInf($datos,$id);
				redirect("informacion",'refresh');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}
}
