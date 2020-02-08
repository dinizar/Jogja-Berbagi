<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller
{
   public function __construct()
    {
      parent::__construct();
      if($this->session->userdata('status') != "loginadmin"){
            redirect(base_url('admin/autentifikasi_admin'));
        }
       /*$this->API = 'http://103.195.90.35:2700/jogber_api/index.php/api/';*/
       $this->API = 'http://localhost/jogber_api/index.php/api/';
    }

    public function postingan()
    {   
        $data['pengguna'] = json_decode($this->curl->simple_get($this->API.'Pengguna'));
        $data['komunitas']= json_decode($this->curl->simple_get($this->API.'Komunitas'));
        $data['kategori_unggahan'] = json_decode($this->curl->simple_get($this->API.'Kategori'));
        $data['sub_menu'] =  json_decode($this->curl->simple_get($this->API.'Menu_submenu/menu'));
        $data['sub_menu_barang'] =  json_decode($this->curl->simple_get($this->API.'Menu_submenu/menu?id_menu=1')); 
        $data['sub_menu_jasa'] =  json_decode($this->curl->simple_get($this->API.'Menu_submenu/menu?id_menu=2'));     
        $data['wilayah'] = json_decode($this->curl->simple_get($this->API.'Wilayah/kecamatan'));
        $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'Unggahan'));
        foreach ($data['unggahan'] as $key=>$value) {
          $data['unggahan'][$key]->komentar= json_decode($this->curl->simple_get($this->API.'Unggahan/komentar?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->jml_suka= json_decode($this->curl->simple_get($this->API.'Jml_suka?id_unggahan='.$value->id_unggahan));
          $data['unggahan'][$key]->gambar= json_decode($this->curl->simple_get($this->API.'Foto_unggahan?id_unggahan='.$value->id_unggahan));
        }

      $this->load->view('admin/V_postingan', $data);
    }

    public function komunitas()
    {
      $data['komunitas']= json_decode($this->curl->simple_get($this->API.'Komunitas'));
      $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'Unggahan'));
      $data['pengguna'] = json_decode($this->curl->simple_get($this->API.'Pengguna'));

      $this->load->view('admin/V_komunitas', $data);
    }

    public function pengguna()
    {
      $data['komunitas']= json_decode($this->curl->simple_get($this->API.'Komunitas'));
      $data['unggahan'] = json_decode($this->curl->simple_get($this->API.'Unggahan'));
      $data['pengguna'] = json_decode($this->curl->simple_get($this->API.'Pengguna'));

      $this->load->view('admin/V_pengguna', $data);
    }

    public function tambah_submenu()
    {
      $data = array('nama_submenu' => $this->input->post('sub_menu'),
                     'id_menu' => $this->input->post('menu')
                    );
       json_decode($this->curl->simple_post($this->API.'Menu_submenu/insert_submenu', $data, array(CURLOPT_BUFFERSIZE => 10)));
       
       echo 1;
    }

    public function hapus_submenu()
    {
      $id_submenu=$this->input->post('id');
      $this->curl->simple_delete($this->API.'Menu_submenu/del_submenu', array('id'=>$id_submenu), array(CURLOPT_BUFFERSIZE => 10));
      echo 1;
    }

    public function tambah_komunitas()
    {
      $data = array('nama_komunitas' => $this->input->post('nama_komunitas'),
                     'keterangan' => $this->input->post('keterangan'),
                     'tipe_komunitas' => $this->input->post('tipe_komunitas'),
                     'kontak' => $this->input->post('kontak'),
                     'alamat' => $this->input->post('alamat')
                    );
       json_decode($this->curl->simple_post($this->API.'Komunitas', $data, array(CURLOPT_BUFFERSIZE => 10)));
       
       echo 1;
    }

    public function edit_komunitas($id_komunitas)
    {
      $data = array( 'id_komunitas' => $id_komunitas,
                     'nama_komunitas' => $this->input->post('nama_komunitas'),
                     'keterangan' => $this->input->post('keterangan'),
                     'tipe_komunitas' => $this->input->post('tipe_komunitas'),
                     'kontak' => $this->input->post('kontak'),
                     'alamat' => $this->input->post('alamat')
                    );
      $this->curl->simple_put($this->API.'Komunitas', $data, array(CURLOPT_BUFFERSIZE => 10));
      redirect(base_url('admin/manage/komunitas'));
    }

    public function hapus_komunitas()
    {
       $id_komunitas=$this->input->post('id');
       $this->curl->simple_delete($this->API.'Komunitas', array('id'=>$id_komunitas), array(CURLOPT_BUFFERSIZE => 10));
       echo 1;
    }

    public function hapus_pengguna()
    {
      $id_pengguna=$this->input->post('id');
       $this->curl->simple_delete($this->API.'Pengguna', array('id'=>$id_pengguna), array(CURLOPT_BUFFERSIZE => 10));
       echo 1;
    }
}