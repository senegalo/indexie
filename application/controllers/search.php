<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of search
 *
 * @author senegalo
 */
class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function i($query) {

        $data = array('list' => array());

        $data['query'] = $query;
        
        $this->load->model('api');
        
        $data['list'] = $this->api->search($query);
        if (!isset($data['list']->groups[0])) {
            $data['list'] = array();
        } else {
            $data['list'] = $data['list']->groups[0]->results;
        }

        $this->load->view("header", array("scripts" => array("list","home")));
        
        $this->load->view("home", array("query"=>$query));
        
        $this->load->view("list", $data);
        $this->load->view("footer");
    }

}

?>
