<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_unggahan extends CI_Model
{
  public function getAll()
    {
    	$this->db->join('pengguna','pengguna.id_pengguna = unggahan.id_pengguna');
    	$this->db->join('sub_menu','sub_menu.id_submenu = unggahan.id_submenu');
      $this->db->join('kecamatan','kecamatan.id_kecamatan = unggahan.id_kecamatan');
      $this->db->join('kabupaten','kabupaten.id_kabupaten = kecamatan.id_kabupaten');
    	$this->db->join('kategori_unggahan',' kategori_unggahan.id_kategori = unggahan.id_kategori');
      
      return $this->db->get('unggahan')->result();
  
    }
  
  public function komentar($id_unggahan)
  {
    $this->db->join('pengguna','pengguna.id_pengguna = komentar.id_pengguna');
    $this->db->join('unggahan','unggahan.id_unggahan = komentar.id_unggahan');
    $this->db->where_in('unggahan.id_unggahan',$id_unggahan);
    return $this->db->get('komentar')->result();
  }

  public function insert($data)
  {
    $this->db->insert('unggahan', $data);
    $insertId = $this->db->insert_id();
    return  $insertId;
  } 

  public function insert_komentar($data)
  {
    $this->db->insert('komentar', $data);
  }

  public function delete_data($id_unggahan)
  {
    $this->db->where('id_unggahan', $id_unggahan);   
    $this->db->delete('unggahan');
    $this->db->where_in('unggahan.id_unggahan',$id_unggahan);
    $this->db->delete('komentar');;    
  }

  public function delete_komentar($id_komentar)
  {
    $this->db->where('id_komentar', $id_komentar);   
    $this->db->delete('komentar'); 
  }

  public function update($where,$data)
  {
    $this->db->where($where);
    $this->db->update('unggahan',$data);
  }

  public function filter()
  {

  }
}
