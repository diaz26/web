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

  public function verifica_priedadDE($cod){
    $sql= "SELECT id_usuario from web_pagos where cod_pedido='$cod'";
    $query=$this->db->query($sql);
    return $query->row()->id_usuario;
  }

  public function despachar($arr,$cod){
    $this->db->where('cod_pedido',$cod);
    $this->db->update('web_pagos',$arr);
  }

  public function producto($id){
    $sql= "SELECT * from web_productos where id=$id";
    $query=$this->db->query($sql);
    return $query->row();
  }

  function categorias(){
    $sql="SELECT DISTINCT parte, COUNT(*) as num FROM web_productos GROUP BY parte";
    $query = $this->db->query($sql);
    return $query->result();
  }

  function buscarproductos($var){
    $sql="SELECT * FROM web_productos
    WHERE (nombre LIKE '%$var%' OR marca LIKE '%$var%' OR descripcion LIKE '%$var%' OR parte LIKE '%$var%' OR ubicacion LIKE '%$var%');";
    $query = $this->db->query($sql);
    return $query->result();
  }

  function categproductos($var){
    $sql="SELECT * FROM web_productos
    WHERE parte='$var';";
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

  public function consultPedidosP($id){
    $sql= "SELECT * FROM web_pagos WHERE id_usuario=$id and estado_pedido=1 order by fecha_pago asc";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function productosPedidos(){
    $sql= "SELECT pp.*, bp.img as img, bp.descripcion as descri FROM productos_pedidos pp, web_productos bp where pp.id_producto=bp.id";
    $query=$this->db->query($sql);
    return $query->result();
  }

  public function consultPedidosD($id){
    $sql= "SELECT * FROM web_pagos WHERE id_usuario=$id and estado_pedido=2 order by fecha_pago asc";
    $query=$this->db->query($sql);
    return $query->result();
  }

}
