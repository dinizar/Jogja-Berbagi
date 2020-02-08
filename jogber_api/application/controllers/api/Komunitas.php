<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Komunitas extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_komunitas');
    }

  
    function index_get(){
        $data = $this->M_komunitas->get();
        if ($data) {        
           $this->response($data, REST_Controller::HTTP_OK);
        } else{
           $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST); 
        }


    }

    function index_post(){
             $data = array('nama_komunitas' => $this->post('nama_komunitas'),
                           'keterangan' => $this->post('keterangan'),
                           'tipe_komunitas' => $this->post('tipe_komunitas'),
                           'kontak' => $this->post('kontak'),
                           'lokasi' => $this->post('alamat')
                          );

             $komunitas = $this->M_komunitas->insert_komunitas($data);
             if ($komunitas) {
                $this->response(REST_Controller::HTTP_OK);
            }
            else {
                $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
            }
    }

    function index_put(){
         $where = $this->put('id_komunitas');
         $data = array(
                         'nama_komunitas' => $this->put('nama_komunitas'),
                         'keterangan' => $this->put('keterangan'),
                         'tipe_komunitas' => $this->put('tipe_komunitas'),
                         'kontak' => $this->put('kontak'),
                         'lokasi' => $this->put('alamat')
                      );
         $update_komunitas = $this->M_komunitas->update_komunitas($where,$data);
         if ($update_komunitas) {
           $this->response(REST_Controller::HTTP_OK);
         }
         else {
           $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
         }
    }

    function index_delete(){
      $id_komunitas=$this->delete('id');
      if ($this->M_komunitas->delete_komunitas($id_komunitas)) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

}
?>