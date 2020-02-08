<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model
{
  public function menu()
    {
      return $this->db->get('menu')->result();
    }

  public function submenu($where)
    {  
        return $this->db->get_where('sub_menu', $where )->result();
    }
 
}