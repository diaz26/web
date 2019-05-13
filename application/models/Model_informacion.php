<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_informacion extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultInfo(){
    $id=$this->session->userdata('ID');
    $sql= "SELECT * FROM baseo_usuarios WHERE id=$id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consultPage(){
    $id=$this->session->userdata('ID');
    $sql= "SELECT be.* FROM baseo_ecommerce be WHERE be.id_usuario=$id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consultPageO($flag){
    $sql= "SELECT be.*, bu.celular, bu.email FROM baseo_ecommerce be, baseo_usuarios bu WHERE be.nombre='$flag' and be.id_usuario=bu.id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function consultPagee($id){
    $sql= "SELECT be.*, bu.celular, bu.email FROM baseo_ecommerce be, baseo_usuarios bu WHERE be.id=$id and be.id_usuario=bu.id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function actInf($datos,$id){
    $this->db->where('id',$id);
    $this->db->update('baseo_usuarios',$datos);
  }

  public function actPage($datos,$id){
    $idd=$this->session->userdata('ID');
    $this->db->where('id',$id);
    $this->db->where('id_usuario',$idd);
    $this->db->update('baseo_ecommerce',$datos);
  }
}
