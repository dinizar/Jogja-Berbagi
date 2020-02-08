<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{
  public function kategori()
    {
      return $this->db->get('kategori_unggahan')->result();
    }
 
}