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
class Drug extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function _remap($method,$args){
        if($method == "alternatives"){
            $this->alternatives($args[0]);
        } else {
            $this->index($method);
        }
    }
    
    public function index($id){
        $this->load->model('api');
        
        $drug = $this->api->get_drug($id);
        
        $this->load->view('header');
        $this->load->view('drug',array("drug" => $drug));
        $this->load->view('footer');
        
    }
    
    public function alternatives($id){
        $this->load->model('api');
        $drug = $this->api->get_drug($id);
        $this->load->view('header',array("scripts"=>array("list")));
        $this->load->view('list',array("list" => $drug->alternatives));
        $this->load->view('footer');
    }
    
}

?>
