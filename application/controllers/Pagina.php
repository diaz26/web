<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

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
				$result['page']=$this->model_informacion->consultPage();
				$this->load->view('header_loged',$header);
				$this->load->view('view_edit_page',$result);
				$this->load->view('footer_loged');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}

	public function modPage(){
		if($this->session->userdata('logged_in')){
			if ($this->session->userdata('ROL')=='Cliente') {
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,99));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);
				$url_yt="";
				if (!empty($_POST['yt'])) {
					$url_con=  $this->input->post('yt');
	        $cod_yt = substr(strrchr($url_con, "/"), 1 );
	        $base_yt= 'https://www.youtube.com/embed/';
	        $url_yt = $base_yt.$cod_yt;
				}

        if ($this->upload->do_upload('logo')){
          $dataCargada = $this->upload->data();
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'descripcion'=>$this->input->post('descripcion'),
						'nav_bg'=>$this->input->post('nav_bg'),
            'nav_color'=>$this->input->post('nav_color'),
						'body_bg'=>$this->input->post('body_bg'),
            'yt'=>$url_yt,
            'logo'=> $urldeimagen.$dataCargada['file_name']
          );
        }else {
          $datos=array(
						'nombre'=>$this->input->post('nombre'),
            'descripcion'=>$this->input->post('descripcion'),
						'nav_bg'=>$this->input->post('nav_bg'),
            'nav_color'=>$this->input->post('nav_color'),
						'body_bg'=>$this->input->post('body_bg'),
            'yt'=>$url_yt,
          );
        }
        $id=$this->input->post('id');
        $this->model_informacion->actPage($datos,$id);
        redirect("pagina",'refresh');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
	}
}
