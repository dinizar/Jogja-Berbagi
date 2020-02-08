<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Admin extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_admin');
    }

    function cek_login_post() {
       $username = $this->post('username');
       $pasword = $this->post('pasword');   

      $data=$this->M_admin->cek_login($username, $pasword);
      if ($data) {
        $this->response($data, REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    } 

}
?>