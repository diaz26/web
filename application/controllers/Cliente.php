<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_header');
    $this->load->model('model_clientes');
    $this->load->model('model_productos');
    $this->load->model('model_informacion');
  }

  public function index()
  {
    if ($this->session->userdata('logged_in')) {
      if($this->session->userdata('ROL')=='Cliente'){
        $header['head']=$this->model_header->consultOficial(1);
        $result['page']=$this->model_informacion->consultPage();
        $this->load->view('header_loged',$header);
        $this->load->view('view_cliente',$result);
        $this->load->view('footer_loged');
      }else {
        $this->load->view('error_page');
      }
    }else {
      redirect("login");
    }
  }

}
