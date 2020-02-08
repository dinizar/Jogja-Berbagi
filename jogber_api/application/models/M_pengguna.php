<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
  public function cek_login($emailusername, $pasword)
  {   
    $this->db->where("email = '$emailusername' or username = '$emailusername'");
    $this->db->where('pasword', $pasword);
    return $this->db->get('pengguna')->row();
  }

  public function cek_username($where)
  {
    return $this->db->get_where('pengguna', $where)->num_rows();
  }
  
  public function input_pengguna($data)
  {
    $this->db->insert('pengguna', $data);
    $insertId = $this->db->insert_id();
    return  $insertId;

  }

  public function getbyID($id)
  {
    return $this->db->get_where('pengguna', $id)->row(); 
  }

  public function getAll()
  {
    return $this->db->get('pengguna')->result();
  }

  public function update_pengguna($where,$data)
  {
    $this->db->where('id_pengguna',$where);
    $update_pengguna = $this->db->update('pengguna',$data);
    return  $update_pengguna;
  }

  public function delete_pengguna($id_pengguna)
  {
    $this->db->where('id_pengguna', $id_pengguna);   
    $this->db->delete('pengguna'); 
  }
}
