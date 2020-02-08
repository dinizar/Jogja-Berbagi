<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tentangkami extends CI_Controller
{
    public function __construct()
      {
        parent::__construct();
        /*$this->API = 'http://103.195.90.35:2700/jogber_api/index.php/api/';*/
       $this->API = 'http://localhost/jogber_api/index.php/api/';
      }

    public function tentangkami()
    {  
       $data['notifikasi']= json_decode($this->curl->simple_get($this->API.'notifikasi'));     
       $this->load->view('v_tentang_kami', $data);
    }
}