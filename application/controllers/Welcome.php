<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
    parent::__construct();
    $this->load->model('model_header');
    $this->load->model('model_informacion');
		$this->load->model('model_productos');
  }

	public function to($ban=NULL)
	{
    if ($ban!=NULL) {
			$headd=$this->model_informacion->consultPageO($ban);
			if (!empty($headd)) {
				if ($headd->nombre==$ban) {
					$head['page']=$this->model_informacion->consultPageO($ban);
					$head['head']=$this->model_header->consultOficial(1);
					$result['productos']=$this->model_productos->ProductosO($ban);
					$result['categ']=$this->model_productos->categorias($ban);
					$this->load->view('header_ecommerce',$head);
		  		$this->load->view('view_ecommerce',$result);
		  		$this->load->view('footer_ecommerce',$head);
				}else {
					$this->load->view('error_page');
				}
			}else {
				$this->load->view('error_page');
			}
    }else {
      $this->load->view('error_page');
    }
	}
}
