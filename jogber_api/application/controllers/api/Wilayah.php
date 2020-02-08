<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Wilayah extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_wilayah');
    }

    //Menampilkan data
    function kabupaten_get() {
       
    }

    function kecamatan_get() {
      
        $data = $this->M_wilayah->get_kecamatan();
      if ($data) {  
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    } 

}
?>