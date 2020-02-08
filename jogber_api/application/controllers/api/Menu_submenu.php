<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Menu_submenu extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_menu');
    }

    
    function index_get() {
      
    }

    function menu_get(){

        $id_menu = $this->get('id_menu');

        if (!empty($id_menu)) {
           $where = array(
                          'id_menu' => $id_menu
                         ); 

           $data = $this->M_menu->submenu($where);
           $this->response($data, REST_Controller::HTTP_OK);

       } else if(empty($id_menu)){
           $data = $this->M_menu->submenuAll();
           $this->response($data, REST_Controller::HTTP_OK);

       }else{
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
       }


    }

    function insert_submenu_post(){
      $data = array('nama_submenu' => $this->post('nama_submenu'),
                     'id_menu' => $this->post('id_menu')
                    );

      $submenu= $this->M_menu->insert_submenu($data);
      if ($submneu) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    function del_submenu_delete(){
      $id_submenu=$this->delete('id');
      if ($this->M_menu->delete_submenu($id_submenu)) {
        $this->response(REST_Controller::HTTP_OK);
      }
      else {
        $this->response('Provide Parameters',REST_Controller::HTTP_BAD_REQUEST);
      }
    }

}
?>