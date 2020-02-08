<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{ 
    public function __construct()
    {
     $this->load->model('m_menu');
    }

    public function menu()
    {

    }

    function submenu()
    {
        /*$id=$this->input->post('id');
        $data=$this->m_menu->submenu($id);
        echo json_encode($data);*/
    }
}