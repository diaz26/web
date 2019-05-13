<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

  function __construct(){
    parent::__construct();

  }
  public function comprobar($usuario,$password){
    $sql="SELECT COUNT(*) apodo FROM baseo_usuarios WHERE user='$usuario' AND pass='$password'";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function actualizar_clave($user,$newpass){
    $this->db->where('user',$user);
    $this->db->update('baseo_usuarios',array('pass'=>$newpass));
  }

  public function traer($usuario,$password){
    $sql="SELECT * FROM baseo_usuarios WHERE user='$usuario' AND pass='$password'";
    $query=$this->db->query($sql);
    //cuando es un solo registro
    return $query->row();
    // cuando son varios registros
    //  return $query->result();
  }


}
