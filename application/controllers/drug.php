<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of display
 *
 * @author senegalo
 */
class Drug extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function _remap($method, $args) {
        if ($method == "alternatives") {
            $this->alternatives($args[0]);
        } else {
            $this->i($args[0], isset($args[1]) ? $args[1] : "");
        }
    }

    public function i($id, $query) {
        $this->load->model('api');

        $drug = $this->api->get_drug($id);


        $this->load->view('header', array("scripts" => array("home")));

        $this->load->view("home", array("query" => $query, "back_button" => true));

        $this->load->view('drug', array("drug" => $drug));
        $this->load->view('footer');
    }

    public function alternatives($id) {
        $this->load->model('api');
        $drug = $this->api->get_drug($id);
        $this->load->view('header', array("scripts" => array("list", "home")));
        
        $this->load->view("home", array("back_alt_button" => true, "alt_id" => $id));
        
        $this->load->view('list', array("list" => $drug->alternatives));
        $this->load->view('footer');
    }

}

?>
