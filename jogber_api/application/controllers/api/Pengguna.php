<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pengguna extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_pengguna');
    }

    //Menampilkan data pengguna
    function index_get() {
       $id = $this->get('id_pengguna');
        if (!empty($id)) { 
           $where = array(
                          'id_pengguna' => $id
                         );
      
           $data = $this->M_pengguna->getbyID($where);     
           $this->response($data, REST_Controller::HTTP_OK);

       } else if(empty($id)){
            $data = $this->M_pengguna->getAll();     
           $this->response($data, REST_Controller::HTTP_OK);
       } else {
          $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
       }
        
    }

    function index_post() {

       $data = array('nama' => $this->post('nama'),
                     'email' => $this->post('email'),
                     'username' => $this->post('username'),
                     'pasword' => $this->post('pasword'),
                     'jenis_kelamin' => $this->post('jenis_kelamin'),
                     'tgl_lahir' => $this->post('tgl_lahir'),
                     'alamat' => $this->post('alamat'),
                     'foto_pengguna' => $this->post('foto_pengguna'),
                    );


      $id=$this->M_pengguna->input_pengguna($data);
      if ($id) {
        $this->response($id, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    function index_put() {
       $where = $this->put('id_pengguna');
       $data = array('nama' => $this->put('nama'),
                     'email' => $this->put('email'),
                     'username' => $this->put('username'),
                     'pasword' => $this->put('pasword'),
                     'jenis_kelamin' => $this->put('jenis_kelamin'),
                     'tgl_lahir' => $this->put('tgl_lahir'),
                     'alamat' => $this->put('alamat'),
                     'foto_pengguna' => $this->put('foto_pengguna')
                    );
      $update_pengguna = $this->M_pengguna->update_pengguna($where,$data); 
      if ($update_pengguna) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    function index_delete() {
      $id_pengguna=$this->delete('id');
      if ($this->M_pengguna->delete_pengguna($id_pengguna)) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    function cek_login_post() {
       $emailusername = $this->post('emailusername');
       $pasword = $this->post('pasword');   

      $data=$this->M_pengguna->cek_login($emailusername, $pasword);
      if ($data) {
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    } 

    function cek_username_post() {
      $where = array('username' => $this->post('username'));
      $data = $this->M_pengguna->cek_username($where);
      if ($data) {
        $this->response($data, REST_Controller::HTTP_OK);
      } else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  
}

?>