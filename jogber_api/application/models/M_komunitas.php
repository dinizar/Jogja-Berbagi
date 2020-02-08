<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_komunitas extends CI_Model
{
  public function get()
    {
      
      return $this->db->get('komunitas')->result();
  
    }

   public function getbyId()
    {
    	
    }
   
   public function insert_komunitas($data)
    {
      $komunitas = $this->db->insert('komunitas', $data);
      
      return  $komunitas;
    }

   public function delete_komunitas($id_komunitas)
    {
    	$this->db->where('id_komunitas', $id_komunitas);   
        $this->db->delete('komunitas'); 
    }

    public function update_komunitas($where, $data)
    {
    	$this->db->where('id_komunitas',$where);
        $update_komunitas = $this->db->update('komunitas',$data);
        return  $update_komunitas;
    }

}
