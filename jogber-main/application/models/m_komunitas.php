<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_komunitas extends CI_Model
{
  public function get()
    {
      
      return $this->db->get('komunitas')->result();
  
    }
  

}
