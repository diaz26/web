<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_header extends CI_Model {

  function __construct(){
    parent::__construct();

  }
  public function consultOficial($id){
    $sql="SELECT * FROM baseo_oficial WHERE id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }
  
}
