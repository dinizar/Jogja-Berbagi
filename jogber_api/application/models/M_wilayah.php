<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_wilayah extends CI_Model
{
  public function kabupaten()
    {
      return $this->db->get('kabupaten')->result();
    }
  
  public function get_kecamatan()
  {   

  	  $this->db->join('kabupaten','kabupaten.id_kabupaten = kecamatan.id_kabupaten');
  	  // $this->db->where('kecamatan.id_kabupaten',$id);
      $hasil=$this->db->get("kecamatan");
      return $hasil->result();
  }

  
}
