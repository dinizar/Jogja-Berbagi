<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
  public function cek_login($username, $pasword)
  {   
    $this->db->where('username', $username);
    $this->db->where('pasword', $pasword);
    return $this->db->get('admin')->row();
  }
}