<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Jml_suka extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_jml_suka');
    }

    //Menampilkan data like
    function index_get() {
       $id_unggahan = $this->get('id_unggahan');
       $id_pengguna = $this->get('id_pengguna');

      if (!empty($id_unggahan)) {
        $data = $this->M_jml_suka->getbyIdU($id_unggahan);
        $this->response($data, REST_Controller::HTTP_OK);

      }elseif (!empty($id_pengguna)) {
         $data = $this->M_jml_suka->getbyIdP($id_pengguna);
        $this->response($data, REST_Controller::HTTP_OK);
        
      }elseif (empty($id_unggahan) or empty($id_pengguna)) {
        $data = $this->M_jml_suka->getAll();
        $this->response($data, REST_Controller::HTTP_OK);

      } else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }

    }

    function index_post() {
        $data = array('id_pengguna' => $this->post('id_pengguna'),
                      'id_unggahan' => $this->post('id_unggahan')
                     );
      $data=$this->M_jml_suka->tambah_suka($data);
      if ($data) {
        $this->response($data,REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }    
    } 

    function index_delete() {
      $data = array('id_pengguna' => $this->delete('id_pengguna'),
                      'id_unggahan' => $this->delete('id_unggahan')
                     );
      $data= $this->M_jml_suka->delete_suka($data);
      if ($data) {
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      } 
    }

}
?>