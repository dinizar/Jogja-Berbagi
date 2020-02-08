<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berbagi extends CI_Controller
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

    public function index()
    {
        $data['notifikasi']= json_decode($this->curl->simple_get($this->API.'Notifikasi'));
        
        $data['kategori_unggahan'] = json_decode($this->curl->simple_get($this->API.'Kategori'));

        $data['sub_menu_barang'] =  json_decode($this->curl->simple_get($this->API.'Menu_submenu/menu?id_menu=1')); 
        $data['sub_menu_jasa'] =  json_decode($this->curl->simple_get($this->API.'Menu_submenu/menu?id_menu=2'));


        $id_pengguna=$this->session->userdata('id_pengguna');
        $jumlah_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_pengguna='.$id_pengguna));
        
            foreach ($jumlah_suka as $key => $value) {
               $data['jumlah_suka'][$value->id_unggahan]= $value->id_unggahan;
            }

        $data['wilayah'] = json_decode($this->curl->simple_get($this->API.'Wilayah/kecamatan'));
        // echo '<pre>';
        // print_r($data['jumlah_suka']);
        // die();

        $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'Unggahan'));
        foreach ($data['unggahan'] as $key=>$value) {
          $data['unggahan'][$key]->komentar= json_decode($this->curl->simple_get($this->API.'Unggahan/komentar?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->jml_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->gambar= json_decode($this->curl->simple_get($this->API.'Foto_unggahan?id_unggahan='.$value->id_unggahan));
        }

        /*load view bebagi/index */
        $this->load->view('berbagi/v_index', $data);
    }

  
    public function insert_jasa()
    {   

        $data = array('judul_unggahan' => $this->input->post('judul'),
                      'keterangan' => $this->input->post('keterangan'),
                      'detail_lokasi' => $this->input->post('lokasi'),
                      'waktu_unggahan' => date("Y-m-d H:i:s"),
                      'status' => 'Belum Terpenuhi',
                      'nomorwa' => $this->input->post('nomorwa'),
                      'id_pengguna' => $this->session->userdata('id_pengguna'),
                      'id_submenu' => $this->input->post('sub_menu'),
                      'id_kategori'=> $this->input->post('optionsRadios'),
                      'id_kecamatan'=> $this->input->post('kecamatan')

         );

        $id_unggahan = json_decode($this->curl->simple_post($this->API.'Unggahan', $data, array(CURLOPT_BUFFERSIZE => 10)));

        $data = array();
        // If file upload form submitted
        if($this->input->post('submit-post') && !empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = './Gambar/unggahan/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['nama_foto'] = $fileData['file_name'];
                    $uploadData[$i]['id_unggahan'] = $id_unggahan;
                }

                if(!empty($uploadData)){
                // Insert files data into the database
                   json_decode($this->curl->simple_post($this->API.'Foto_unggahan',$uploadData[$i], array(CURLOPT_BUFFERSIZE => 10)));
                }
            }
            

            
        }


        /*return JavaScript("window.scrollBy(0, 650);");*/
        redirect(base_url('berbagi/index'));

    }

    public function update_post($id_unggahan)
    {
         $data = array('id_unggahan' => $id_unggahan,
                      'judul_unggahan' => $this->input->post('judul'),
                      'keterangan' => $this->input->post('keterangan'),
                      'detail_lokasi' => $this->input->post('lokasi'),
                      'judul_unggahan' => $this->input->post('judul'),
                      'waktu_unggahan' => $this->input->post('waktu'),
                      'status' => $this->input->post('optionsRadios-status'),
                      'nomorwa' => $this->input->post('nomorwa'),
                      'id_pengguna' => $this->session->userdata('id_pengguna'),
                      'id_submenu' => $this->input->post('sub_menu'),
                      'id_kategori'=> $this->input->post('optionsRadios-keterangan'),
                      'id_kecamatan'=> $this->input->post('kecamatan')

         );

        json_decode($this->curl->simple_put($this->API.'Unggahan', $data, array(CURLOPT_BUFFERSIZE => 10)));

        $data = array();
        // If file upload form submitted
        if($this->input->post('submit-post') && !empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = './Gambar/unggahan/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['nama_foto'] = $fileData['file_name'];
                    $uploadData[$i]['id_unggahan'] = $id_unggahan;
                }
            
                       
                if(!empty($uploadData)){
                // Insert files data into the database
                   json_decode($this->curl->simple_post($this->API.'Foto_unggahan',$uploadData[$i], array(CURLOPT_BUFFERSIZE => 10)));
                }
            }
        }

        redirect(base_url('berbagi/index'));
    }

    public function tambah_jml_suka()
    {
      $data = array('id_pengguna' => $this->session->userdata('id_pengguna'),
                    'id_unggahan' => $this->input->post('id')
                   );
      $jml=json_decode($this->curl->simple_post($this->API.'Jml_suka', $data, array(CURLOPT_BUFFERSIZE => 10)));
      echo json_encode($jml);
    }
    public function kurang_jml_suka()
    {
      $data = array('id_pengguna' => $this->session->userdata('id_pengguna'),
                    'id_unggahan' => $this->input->post('id')
                   );
      $jml=json_decode($this->curl->simple_delete($this->API.'Jml_suka', $data, array(CURLOPT_BUFFERSIZE => 10)));
      echo json_encode($jml);
    }

    public function insert_komen()
    {  
       $data = array('detail_komentar' => $this->input->post('detail_komentar'),
                     'waktu_komentar' => date("Y-m-d H:i:s"),
                     'id_unggahan' => $this->input->post('id_unggahan'),
                     'id_pengguna' => $this->session->userdata('id_pengguna')
                    );
       json_decode($this->curl->simple_post($this->API.'unggahan/insert_komen', $data, array(CURLOPT_BUFFERSIZE => 10)));
       
       if ($this->input->post('id_pengguna') != $this->session->userdata('id_pengguna')){
           $data_notif = array(
                               'id_unggahan' => $this->input->post('id_unggahan'),
                               'waktu_komentar' => date("Y-m-d H:i:s"),
                               'pengomentar' => $this->session->userdata('nama')
                               );
           json_decode($this->curl->simple_post($this->API.'notifikasi', $data_notif, array(CURLOPT_BUFFERSIZE => 10)));
       }
       echo 1;
    }

    public function delete_post()
    { 
      $id_unggahan=$this->input->post('id');
      $this->curl->simple_delete($this->API.'Unggahan', array('id'=>$id_unggahan), array(CURLOPT_BUFFERSIZE => 10));
      echo 1;
      
    }


    public function delete_foto()
    { 
      $id_foto=$this->input->post('id');
      if($this->curl->simple_delete($this->API.'Foto_unggahan', array('id'=>$id_foto), array(CURLOPT_BUFFERSIZE => 10))){
        echo 1;

      }else{
        echo 1;
      }  


    }

    public function delete_komen()
    {
      $id_komentar=$this->input->post('id');
      $this->curl->simple_delete($this->API.'Unggahan/del_komen', array('id'=>$id_komentar), array(CURLOPT_BUFFERSIZE => 10));
        echo 1;
    }

    public function update_komentar()
    {
      $data = array( 'id_komentar' => $this->input->post('id'),
                     'detail_komentar' => $this->input->post('detail_komentar'),
                     'waktu_komentar' => $this->input->post('waktu_komentar'),
                     'id_unggahan' => $this->input->post('id_unggahan'),
                     'id_pengguna' => $this->input->post('id_pengguna')
                    );

       $this->curl->simple_put($this->API.'unggahan/edit_komen', $data, array(CURLOPT_BUFFERSIZE => 10));
       echo 1;
    }

    public function delete_notifikasi()
    {
      $id_notifikasi=$this->input->post('id');
      $delete = $this->curl->simple_delete($this->API.'Notifikasi', array('id'=>$id_notifikasi), array(CURLOPT_BUFFERSIZE => 10));
      echo 1;
      
    }

}