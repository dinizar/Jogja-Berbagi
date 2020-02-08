<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
  public function cek_login($where)
    {   
        return $this->db->get_where('pengguna',$where);
        /*return $this->db->get('komentar')->result();*/
    }
  
  public function input_pengguna($data)
  {
    $this->db->insert('pengguna', $data);
  }

  public function getbyID($id)
  {
    return $this->db->get_where('pengguna', $id)->row(); 
  }

  public function update_pengguna($where,$data)
  {
    $this->db->where($where);
    $this->db->update('pengguna',$data);
  }
}
