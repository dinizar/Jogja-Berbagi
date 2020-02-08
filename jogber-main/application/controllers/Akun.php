<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller
{
   public function __construct()
    {
      parent::__construct();
      if($this->session->userdata('status') != "login"){
            redirect(base_url('autentifikasi/index'));
        }
       /*$this->API = 'http://103.195.90.35:2700/jogber_api/index.php/api/';*/
       $this->API = 'http://localhost/jogber_api/index.php/api/';
    }

    public function profil_timeline()
    {
        $data['kategori_unggahan'] = json_decode($this->curl->simple_get($this->API.'Kategori'));
        $data['notifikasi']= json_decode($this->curl->simple_get($this->API.'notifikasi'));
        $id_pengguna=$this->session->userdata('id_pengguna');
        $jumlah_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_pengguna='.$id_pengguna));
        
            foreach ($jumlah_suka as $key => $value) {
               $data['jumlah_suka'][$value->id_unggahan]= $value->id_unggahan;
            }

        $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'unggahan'));
        foreach ($data['unggahan'] as $key=>$value) {
          $data['unggahan'][$key]->komentar= json_decode($this->curl->simple_get($this->API.'unggahan/komentar?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->jml_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->gambar= json_decode($this->curl->simple_get($this->API.'foto_unggahan?id_unggahan='.$value->id_unggahan));
        }
      $this->load->view('profil/v_profil_timeline', $data);
    }

    public function profil_edit()
    {  

    // print_r($this->session->userdata);
    // die(); 
        $data['notifikasi']= json_decode($this->curl->simple_get($this->API.'notifikasi'));   
        $where = $this->session->userdata("id_pengguna");                   
        $data['pengguna'] = json_decode($this->curl->simple_get($this->API.'pengguna?id_pengguna='.$where));

        $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'unggahan'));
        foreach ($data['unggahan'] as $key=>$value) {
          $data['unggahan'][$key]->komentar= json_decode($this->curl->simple_get($this->API.'unggahan/komentar?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->jml_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->gambar= json_decode($this->curl->simple_get($this->API.'foto_unggahan?id_unggahan='.$value->id_unggahan));
        }

      $this->load->view('profil/v_profil_edit', $data);
    }

    public function update_profil()
    {
      $tgl_lahir = $_POST['datetimepicker'];
      $tgl_lahir = date('Y/m/d', strtotime($tgl_lahir));

          $config['upload_path']         = './Gambar/';  // folder upload 
          $config['allowed_types']        = 'jpg|jpeg|png'; // jenis file
          $config['max_size']             = 2500; //2.5 mb maksimal ukuran
          $config['max_width']            = 1000; 
          $config['max_height']           = 1000;
 
          $this->load->library('upload', $config);
          
          if($this->upload->do_upload('foto-profil')){
            $file = $this->upload->data();  
            $foto = $file['file_name'];
          }else{
            $foto = $this->session->userdata("foto");
         }
                             
              $data = array('id_pengguna'=> $this->session->userdata("id_pengguna"),
                            'nama' => $this->input->post('nama'),
                            'email' => $this->input->post('email'),
                            'username' => $this->input->post('username'),
                            'pasword' => $this->input->post('pasword'),
                            'jenis_kelamin' => $this->input->post('optionsRadios'),
                            'tgl_lahir' => $tgl_lahir,
                            'alamat' => $this->input->post('alamat'),
                            'foto_pengguna' => $foto,
                           );
          

            $this->curl->simple_put($this->API.'pengguna',$data, array(CURLOPT_BUFFERSIZE => 10));

            $where=$this->session->userdata("id_pengguna");
        
            $data_user  = json_decode($this->curl->simple_get($this->API.'pengguna?id_pengguna='.$where));

            $data_session = array(
                                        'id_pengguna' => $data_user->id_pengguna,
                                        'nama' => $data_user->nama,
                                        'email' => $data_user->email,
                                        'foto' => $data_user->foto_pengguna,
                                        'status' => "login"
                                       );
 
            $this->session->set_userdata($data_session);

        redirect(base_url('akun/profil_timeline'));
    }

     public function hapus_notif() 
    {
      $id_notifikasi=$this->input->post('id');
      if($this->m_notifikasi->del_notifikasi($id_notifikasi)){
        echo 1;

      }else{
        echo 1;
      }
    }

     public function manage_pengguna()
    {

    }
}