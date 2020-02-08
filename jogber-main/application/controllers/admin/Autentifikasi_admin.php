<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi_admin extends CI_Controller
{
   public function __construct()
    {
      parent::__construct();
      
       /*$this->API = 'http://103.195.90.35:2700/jogber_api/index.php/api/';*/
       $this->API = 'http://localhost/jogber_api/index.php/api/';
    }

    public function index()
    {
      $this->load->view('admin/autentifikasi_admin');
    }

    public function login()
    {
    	$username = $this->input->post('username');
        $pasword = $this->input->post('pasword');
        $where = array(
                       'username' => $username,
                       'pasword' => $pasword
                      );

        $data = json_decode($this->curl->simple_post($this->API.'Admin/cek_login', $where, array(CURLOPT_BUFFERSIZE => 10)));
    

             if($data){
                     $data_session = array(             
                       'id_admin' => $data->id_admin,
                       'nama' => $data->nama,
                       'username' => $data->username,
                       'foto' => $data->foto,
                       'status' => "loginadmin"
                     );

                     $this->session->set_userdata($data_session);

                     redirect(base_url('admin/manage/postingan'));
 
              } else {
                    $this->session->set_flashdata('error','Gagal Login, Coba lagi');
                    redirect(base_url('admin/autentifikasi_admin/index'));
              }
    }

    public function logout_admin()
    {
      $this->session->sess_destroy();
      redirect(base_url('autentifikasi/index'));
    }
}