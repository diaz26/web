<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nav extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultNav($id){
    $sql="SELECT wn.*, wb.btn_fuente, wb.btn_bgcolor, wb.btn_bordercolor, wb.btn_fuente, wb.btn4 from web_navbar wn, web_banner wb where wn.id='$id' and wb.id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }

}
