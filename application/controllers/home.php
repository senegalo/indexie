<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {     
        
        $api = $this->config->item('api');
        
        $this->load->view('header',array("scripts"=>array("home")));
        $this->load->view('home');
        $this->load->view('footer');
    }

}
