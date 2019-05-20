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

  public function consultConsec($aa){
    $sql= "SELECT pr900 FROM web_navbar WHERE id=$aa";
    $query=$this->db->query($sql);
    return $query->row()->pr900;
  }

  public function alteraConsec($datos){
    $this->db->where('id',1);
    $this->db->update('web_navbar',$datos);
  }

  public function consul_cuenta_paypal($id){
    $sql= "SELECT paypal FROM web_navbar WHERE id=$id";
    $query=$this->db->query($sql);
    return $query->row()->paypal;
  }

}
