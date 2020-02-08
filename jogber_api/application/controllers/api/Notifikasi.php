<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Notifikasi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_notifikasi');
    }

    //Menampilkan data
    function index_get() { 
                          
        $data = $this->M_notifikasi->notifikasi();
      if ($data) {  
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    function index_post() {
      $data_notif = array(
                           'id_unggahan' => $this->post('id_unggahan'),
                           'waktu_komentar' => $this->post('waktu_komentar'),
                           'pengomentar' => $this->post('pengomentar')
                           );
      $id_notifikasi=$this->m_notifikasi->insert_notif($data_notif);
      if ($id_notifikasi) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
    }

    function index_delete() {
        $id_notifikasi=$this->delete('id');
        
      if ($this->M_notifikasi->del_notifikasi($id_notifikasi)) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
      }
    

}
?>