<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nav extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultNav($id){
    $sql="SELECT wn.* from web_navbar wn where wn.id=$id";
    $query=$this->db->query($sql);
    return $query->row();
  }

}
