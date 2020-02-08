<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Unggahan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_unggahan');
    }

    //Menampilkan data unggahan
    function index_get() {
       $id = $this->get('id_unggahan');
        if ($id == '') {     
           $data = $this->M_unggahan->getAll();
           $this->response($data, REST_Controller::HTTP_OK);
       } elseif (!empty($id)) {
        
          $where = array(
                          'id_unggahan' => $id
                         );
      
             $data = $this->M_unggahan->getbyId($where);
           $this->response($data, REST_Controller::HTTP_OK);
        } else{
           $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST); 
        }
    }

   
    function index_post() {
      $data = array(  'judul_unggahan' => $this->post('judul_unggahan'),
                      'keterangan' => $this->post('keterangan'),
                      'detail_lokasi' => $this->post('detail_lokasi'),
                      'waktu_unggahan' => $this->post('waktu_unggahan'),
                      'status' => $this->post('status'),
                      'nomorwa' => $this->post('nomorwa'),
                      'id_pengguna' => $this->post('id_pengguna'),
                      'id_submenu' => $this->post('id_submenu'),
                      'id_kategori'=> $this->post('id_kategori'),
                      'id_kecamatan'=> $this->post('id_kecamatan')

         );
             
     $id_unggahan=$this->M_unggahan->insert($data);
      if ($id_unggahan) {
        $this->response($id_unggahan, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }      
    }

    function index_put() {
      $where = $this->put('id_unggahan');
      $data = array(  'judul_unggahan' => $this->put('judul_unggahan'),
                      'keterangan' => $this->put('keterangan'),
                      'detail_lokasi' => $this->put('detail_lokasi'),
                      'waktu_unggahan' => $this->put('waktu_unggahan'),
                      'status' => $this->put('status'),
                      'nomorwa' => $this->put('nomorwa'),
                      'id_pengguna' => $this->put('id_pengguna'),
                      'id_submenu' => $this->put('id_submenu'),
                      'id_kategori'=> $this->put('id_kategori'),
                      'id_kecamatan'=> $this->put('id_kecamatan')
                   );
      $update = $this->M_unggahan->update_post($where,$data);
      if ($update) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
      
    }

    function index_delete() {
      $id_unggahan = $this->delete('id');
      $delete = $this->M_unggahan->delete_data($id_unggahan);
      if ($delete) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
    }


    function komentar_get() {

    
      $id_unggahan = $this->get('id_unggahan');
      if (!empty($id_unggahan)) {
        $where = array(
                          'id_unggahan' => $id_unggahan
                      );
        $data = $this->M_unggahan->komentar($where);
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    } 

    function insert_komen_post() {
      $data = array('detail_komentar' => $this->post('detail_komentar'),
                     'waktu_komentar' => $this->post('waktu_komentar'),
                     'id_unggahan' => $this->post('id_unggahan'),
                     'id_pengguna' => $this->post('id_pengguna')
                    );

      $id_komentar= $this->M_unggahan->insert_komentar($data);
      if ($id_komentar) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
    }

    function edit_komen_put() {
         $where = $this->put('id_komentar'); 
         $data = array('detail_komentar' => $this->put('detail_komentar'),
                       'waktu_komentar' => $this->put('waktu_komentar'),
                       'id_unggahan' => $this->put('id_unggahan'),
                       'id_pengguna' => $this->put('id_pengguna')
                    );
         $update_komentar = $this->M_unggahan->update_komentar($where,$data);
         if ($update_komentar) {
           $this->response(REST_Controller::HTTP_OK);
         }
         else {
           $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
         } 
    }

    function del_komen_delete() {
      $id_komentar=$this->delete('id');
      if ($this->M_unggahan->delete_komentar($id_komentar)) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
    }

}
?>