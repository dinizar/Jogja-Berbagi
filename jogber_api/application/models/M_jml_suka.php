<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_jml_suka extends CI_Model
{

  public function insert_suka($data)
  {
    return $this->db->insert('jml_suka',$data);
  }

  public function getbyIdP($where)
  {
    $this->db->where('id_pengguna', $where );
    return $this->db->get('jml_suka')->result();
  }

  public function getbyIdU($where)
  {
    $this->db->where('id_unggahan', $where );
    return $this->db->get('jml_suka')->result();
  }

  public function getAll()
  {
    return $this->db->get('jml_suka')->result();
  }

  public function tambah_suka($data)
  {
    $this->db->insert('jml_suka', $data);
    $this->db->where('id_unggahan', $data['id_unggahan']);
    return $this->db->get('jml_suka')->result();
  }

  public function delete_suka($data)
  { 
    $id_pengguna=$data['id_pengguna'];
    $id_unggahan=$data['id_unggahan'];
    $this->db->where("id_unggahan = '$id_unggahan' and id_pengguna = '$id_pengguna'");   
    $this->db->delete('jml_suka');
    $this->db->where('id_unggahan', $data['id_unggahan']);
    return $this->db->get('jml_suka')->result(); 
  }

}