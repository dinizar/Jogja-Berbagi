<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komunitas extends CI_Controller
{
    public function __construct()
      {
        parent::__construct();
        /*$this->API = 'http://103.195.90.35:2700/jogber_api/index.php/api/';*/
       $this->API = 'http://localhost/jogber_api/index.php/api/';
        
      }

    public function komunitas()
    {  
       $data['notifikasi']= json_decode($this->curl->simple_get($this->API.'Notifikasi'));
       $data['komunitas']= json_decode($this->curl->simple_get($this->API.'Komunitas'));
       $this->load->view('v_komunitas', $data);
    }

    public function manage_komunitas()
    {

    }
}