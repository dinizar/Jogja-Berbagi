<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Foto_unggahan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_foto_unggahan');
    }

    //Menampilkan data foto unggahan
    function index_get() {
       $id_unggahan = $this->get('id_unggahan');
      if (!empty($id_unggahan)) {
        $where = array(
                          'id_unggahan' => $id_unggahan
                      );
        $data = $this->M_foto_unggahan->gambar($where);
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    function index_post() {
        $uploadData = array('nama_foto' => $this->post('nama_foto'),
                            'id_unggahan' => $this->post('id_unggahan')
                           );
      $data=$this->M_foto_unggahan->insert_foto($uploadData);
      if ($data) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }    
    } 

    function index_delete() {
      $id_foto=$this->delete('id');
      
      if ($this->M_foto_unggahan->delete_foto($id_foto)) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
    }

}
?>