<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kategori extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_kategori');
    }

    //Menampilkan data
    function index_get() {
        $data = $this->M_kategori->kategori();
      if ($data) {  
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

}
?>