<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto_unggahan extends CI_Model
{

  public function insert_foto($data = array())
  {
    $insert = $this->db->insert_batch('foto',$data);
  }

  public function gambar($id_unggahan)
  {
    $this->db->join('unggahan','unggahan.id_unggahan = foto.id_unggahan');
    $this->db->where_in('unggahan.id_unggahan',$id_unggahan);
    return $this->db->get('foto')->result();
  }

  public function delete_foto($id_foto)
  {
    
    $this->db->where('id_foto', $id_foto);   
    $this->db->delete('foto'); 
  
  }

}