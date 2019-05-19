<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
  //  $this->load->model('model_header');
    $this->load->model('model_admin');
    $this->load->model('model_service');
    $this->load->model('model_nav');
    $this->load->model('model_banner');
    $this->load->model('Model_productos');
  }

  public function index()
	{
		if($this->session->userdata('logged_in')){
			if($this->session->userdata('ROL')=='Admin'){
      	$nav['nav']=$this->model_nav->consultNav(1);
      //  $nav['banner']=$this->model_nav-> consultBanner(1);
        $nav['productos']=$this->Model_productos->consultaproductos();
				$this->load->view('header',$nav);

				$this->load->view('view_admin');
				$this->load->view('footer');
			}else {
				$this->load->view('error_page');
			}
		}else {
			redirect("login");
		}
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

        /*$url_con=  $this->input->post('url');
        $cod_yt = substr(strrchr($url_con, "/"), 1 );
        $base_yt= 'https://www.youtube.com/embed/';
        $url_yt = $base_yt.$cod_yt;*/

        if ($this->upload->do_upload('tcarga')){
          $dataCargada = $this->upload->data();
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'abreviacion'=>$this->input->post('abreviacion'),
            'nav_bg'=>$this->input->post('nav_bg'),
            'color'=>$this->input->post('color'),
            'fuente'=>$this->input->post('fuente'),
            'size'=>$this->input->post('size'),
            'op1'=>$this->input->post('op1'),
            'op2'=>$this->input->post('op2'),
            'op3'=>$this->input->post('op3'),
            'op4'=>$this->input->post('op4'),
            'search'=>$this->input->post('search'),
            'logo'=> $urldeimagen.$dataCargada['file_name']
          );
        }else {
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'abreviacion'=>$this->input->post('abreviacion'),
            'nav_bg'=>$this->input->post('nav_bg'),
            'color'=>$this->input->post('color'),
            'fuente'=>$this->input->post('fuente'),
            'size'=>$this->input->post('size'),
            'op1'=>$this->input->post('op1'),
            'op2'=>$this->input->post('op2'),
            'op3'=>$this->input->post('op3'),
            'op4'=>$this->input->post('op4'),
            'search'=>$this->input->post('search'),
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

  public function modBan1(){
    if($this->session->userdata('logged_in')){
      if ($this->session->userdata('ROL')=='Admin') {
        $urldeimagen							="/images/";
        $config['upload_path'] 		= ".".$urldeimagen;
        $file_name 								= md5(time()."-".rand(1,999));
        $config['allowed_types'] 	= "gif|jpg|jpeg|png";
        $config['file_name']      = $file_name;

        $this->load->library('upload', $config);

        $url_con=  $this->input->post('ban_1_url_vid');
        $cod_yt = substr(strrchr($url_con, "/"), 1 );
        $base_yt= 'https://www.youtube.com/embed/';
        $url_yt = $base_yt.$cod_yt;

        if ($this->upload->do_upload('tcarga')){
          $dataCargada = $this->upload->data();
          $datos=array(
            'ban_1_title'=>$this->input->post('ban_1_title'),
            'ban_1_text'=>$this->input->post('ban_1_text'),
            'ban_1_url_vid'=>$url_yt,
            'ban_1_url_img'=> $urldeimagen.$dataCargada['file_name']
          );
        }else {
          $datos=array(
            'ban_1_title'=>$this->input->post('ban_1_title'),
            'ban_1_text'=>$this->input->post('ban_1_text'),
            'ban_1_url_vid'=>$url_yt,
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

  public function modBan2(){
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
            'ban_2_title'=>$this->input->post('ban_2_title'),
            'ban_2_text'=>$this->input->post('ban_2_text'),
            'ban_2_url_img'=> $urldeimagen.$dataCargada['file_name']
          );
        }else {
          $datos=array(
            'ban_2_title'=>$this->input->post('ban_2_title'),
            'ban_2_text'=>$this->input->post('ban_2_text'),
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

  public function modFoot(){
    if($this->session->userdata('logged_in')){
      if ($this->session->userdata('ROL')=='Admin') {
        $datos=array(
          'sec_text'=>$this->input->post('sec_text'),
          'search'=>$this->input->post('search')
        );
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

  public function modPar(){
    if($this->session->userdata('logged_in')){
      if ($this->session->userdata('ROL')=='Admin') {
        $datos=array(
          'valor'=>$this->input->post('valor'),
          'dias'=>$this->input->post('dias')
        );
        $id=$this->input->post('id');
        $this->model_admin->actSer($datos,$id);
        redirect("admin",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

  public function modVisSer(){
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
            'descripcion'=>$this->input->post('descripcion'),
            'button'=>$this->input->post('button'),
            'valor_text'=>$this->input->post('valor_text'),
            'img'=> $urldeimagen.$dataCargada['file_name']
          );
        }else {
          $datos=array(
            'nombre'=>$this->input->post('nombre'),
            'descripcion'=>$this->input->post('descripcion'),
            'button'=>$this->input->post('button'),
            'valor_text'=>$this->input->post('valor_text'),
          );
        }
        $id=$this->input->post('id');
        $this->model_admin->actSer($datos,$id);
        redirect("admin",'refresh');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }
}
