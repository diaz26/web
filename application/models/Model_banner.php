<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_banner extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultBanner($id){
    $sql="SELECT * from web_banner wb where id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }

}
