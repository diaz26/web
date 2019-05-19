<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('model_header');
    $this->load->model('model_service');
  }

  public function index()
  {
    $header['head']=$this->model_header->consultOficial(1);
    $result['service']=$this->model_service->consultService(1);
    $this->load->view('header',$header);
    $this->load->view('view_service',$result);
    $this->load->view('footer');
  }

}
