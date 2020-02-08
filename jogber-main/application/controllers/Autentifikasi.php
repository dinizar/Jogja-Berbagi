<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller
{
	  public function __construct()
    {
      parent::__construct();
      /*$this->API = 'http://103.195.90.35:2700/jogber_api/index.php/api/';*/
       $this->API = 'http://localhost/jogber_api/index.php/api/';
      
    }

    public function index()
    {  
      
      $data['sub_menu_barang'] =  json_decode($this->curl->simple_get($this->API.'menu_submenu/menu?id_menu=1')); 
      $data['sub_menu_jasa'] =  json_decode($this->curl->simple_get($this->API.'menu_submenu/menu?id_menu=2'));
        
      
      $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'unggahan'));
      // echo "<pre>";
      // print_r($data['unggahan']);
      // die;
       foreach ($data['unggahan'] as $key=>$value) {

          $data['unggahan'][$key]->komentar= json_decode($this->curl->simple_get($this->API.'unggahan/komentar?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->jml_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->gambar= json_decode($this->curl->simple_get($this->API.'foto_unggahan?id_unggahan='.$value->id_unggahan));
       }

      $this->load->view('autentifikasi/v_index',$data);
    }

    public function register()
    {
      /*insert > save session > redirect(beranda)*/
      $tgl_lahir = $_POST['datetimepicker'];
      $tgl_lahir = date('Y/m/d', strtotime($tgl_lahir));

          $config['upload_path']         = './Gambar/';  // folder upload 
          $config['allowed_types']        = 'jpg|png'; // jenis file
          $config['max_size']             = 2500; //2.5 mb maksimal ukuran
          $config['max_width']            = 1000; 
          $config['max_height']           = 1000;
 
          $this->load->library('upload', $config);

          if($this->upload->do_upload('foto-profil')){
            $file = $this->upload->data();  
            $foto = $file['file_name'];
          }else{
            $foto = 'user.png';
         }

                             
              $data = array('nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'username' => $this->input->post('username'),
                            'pasword' => $this->input->post('pasword'),
                            'jenis_kelamin' => $this->input->post('optionsRadios'),
                            'tgl_lahir' => $tgl_lahir,
                            'alamat' => $this->input->post('alamat'),
                            'foto_pengguna' => $foto,
                           );
          $id=json_decode($this->curl->simple_post($this->API.'pengguna', $data, array(CURLOPT_BUFFERSIZE => 10)));

          //login langsung
              
               $data_session = array(             
                 'id_pengguna' => $id,
                 'nama' => $data['nama'],
                 'email' => $data['email'],
                 'foto' => $data['foto_pengguna'],
                 'status' => "login"
               );

               $this->session->set_userdata($data_session);

          redirect(base_url('berbagi/index'));
             
    }

    public function cek_username()
    {
      $cek_username = array('username' => $this->input->post('username'));
      $getUsername = json_decode($this->curl->simple_post($this->API.'Pengguna/cek_username', $cek_username, array(CURLOPT_BUFFERSIZE => 10)));
      if($getUsername == 0)
      {
        echo 'true';
      }
      else
      {
        echo 'false';
      }
    }
  
    public function login()
    {
      /*pengecekan email pasword > save session > redirect(beranda)*/
        $emailusername = $this->input->post('emailusername');
        $pasword = $this->input->post('pasword');
        $where = array(
                       'emailusername' => $emailusername,
                       'pasword' => $pasword
                      );
        $data = json_decode($this->curl->simple_post($this->API.'pengguna/cek_login', $where, array(CURLOPT_BUFFERSIZE => 10)));
    

             if($data){
                     $data_session = array(             
                       'id_pengguna' => $data->id_pengguna,
                       'nama' => $data->nama,
                       'email' => $data->email,
                       'foto' => $data->foto_pengguna,
                       'status' => "login"
                     );

                     $this->session->set_userdata($data_session);

                     redirect(base_url('berbagi/index'));
 
              } else {
                    $this->session->set_flashdata('error','Gagal Login, Coba lagi');
                    redirect(base_url('autentifikasi/index'));
              }
    }

    public function logout()
    {
      $this->session->sess_destroy();
      redirect(base_url('autentifikasi/index'));
    }

}