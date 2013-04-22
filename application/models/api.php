<?php

class Api extends CI_MODEL {

    public function search($keyword) {
        $api = $this->config->item('api');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api['location']."/search?q=".$keyword);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $res = curl_exec($ch);

        curl_close($ch);
        
        return json_decode($res);
        
    }
    
    public function get_drug($id) {
        $api = $this->config->item('api');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api['location']."/drugs/".$id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $res = curl_exec($ch);

        curl_close($ch);
        
        return json_decode($res);
        
    }

}

?>
