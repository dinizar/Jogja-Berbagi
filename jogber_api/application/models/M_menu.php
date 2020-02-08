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
  
  public function submenuAll()
    {  
        return $this->db->get('sub_menu')->result();
    }
  public function insert_submenu($data)
    {
       $submenu = $this->db->insert('sub_menu', $data);
       return $submenu;
    }
  public function delete_submenu($id_submenu)
    {
    	$this->db->where('id_submenu', $id_submenu);   
        $this->db->delete('sub_menu'); 
    }
 
}