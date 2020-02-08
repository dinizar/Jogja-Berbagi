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
      $this->db->order_by('waktu_unggahan', 'DESC');
      return $this->db->get('unggahan')->result();
  
    }
  
  public function komentar($id_unggahan)
  {
    $this->db->select('*,komentar.id_pengguna as id_pengguna_k');
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
    $insertId = $this->db->insert_id();
    return  $insertId;
  }

  public function delete_data($id_unggahan)
  {  
    $this->db->where('id_unggahan',$id_unggahan); 
    $this->db->delete('komentar');
    
    $this->db->where('id_unggahan',$id_unggahan); 
    $this->db->delete('foto');
    
    $this->db->where('id_unggahan',$id_unggahan); 
    $this->db->delete('notifikasi');

    $this->db->where('id_unggahan',$id_unggahan);       
    $delete = $this->db->delete('unggahan');

    return $delete;
  }

  public function delete_komentar($id_komentar)
  {
    $this->db->where('id_komentar', $id_komentar);   
    $this->db->delete('komentar'); 
  }

  public function update_post($where,$data)
  {
    $this->db->where('id_unggahan',$where);
    $update = $this->db->update('unggahan',$data);
    return $update;
  }

  public function update_komentar($where, $data)
  {
   $this->db->where('id_komentar',$where);
    $update_komentar = $this->db->update('komentar',$data);
    return  $update_komentar;
  }

  public function update_jml_suka($where, $data)
  {
    
  }
}
