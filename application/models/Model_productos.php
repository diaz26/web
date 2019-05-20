<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_productos extends CI_Model {

  function __construct(){
    parent::__construct();
  }


  public function productos()
  {
    $sql="SELECT * from web_productos";
    $query=$this->db->query($sql);
    return $query->result();
  }


  public function consultaproductos()
  {
    $sql="SELECT * from web_productos ORDER BY RAND() LIMIT 3";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function productosO($ban)
  {
    $id=$this->session->userdata('ID');
    $sql="SELECT bp.* from baseo_productos bp, baseo_ecommerce be, baseo_usuarios bu where be.nombre='$ban' and be.id_usuario=bu.id and bu.id=bp.id_dueno";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function producto($id){
    $sql= "SELECT * from web_productos where id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }

  function categorias($ban){
    $sql="SELECT DISTINCT bp.categoria, COUNT(*) as num FROM baseo_productos bp, baseo_ecommerce be, baseo_usuarios bu where be.nombre='$ban' and be.id_usuario=bu.id and bu.id=bp.id_dueno GROUP BY bp.categoria";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function verifica_priedad($id){
    $sql= "SELECT id_dueno from baseo_productos where id='$id'";
    $query=$this->db->query($sql);
    return $query->row();
  }

  public function modificar($id,$datap){
    $this->db->where('id',$id);
    $this->db->update('web_productos',$datap);
  }

  public function eliminar($id){
    $this->db->where('id',$id);
    $this->db->delete('web_productos');
  }

  public function agregar($agregados){
    $this->db->insert('web_productos',$agregados);
  }

}
