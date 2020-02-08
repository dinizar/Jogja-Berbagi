<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_notifikasi extends CI_Model
{
  public function notifikasi()
    {
      $this->db->join('unggahan','unggahan.id_unggahan = notifikasi.id_unggahan');
    	
      return $this->db->get('notifikasi')->result();
  
    }


  public function insert_notif($data)
  {
    $this->db->insert('notifikasi', $data);
  } 

  public function del_notifikasi($id_notifikasi)
  {
    $this->db->where('id_notifikasi', $id_notifikasi);   
    $this->db->delete('notifikasi'); 
  }
}
