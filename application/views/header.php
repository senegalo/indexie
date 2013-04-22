<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
        <title>INDEXIE</title>
        <link href="<? print base_url('public/css/main.css'); ?>" rel="stylesheet" type="text/css"/>
        <script src="<?php print base_url('public/js/jquery.js'); ?>" type="text/javascript"></script>
        <?php
            if(isset($scripts)){
                foreach($scripts as $script)
                $this->load->view("scripts/".$script); 
            }
         ?>
    </head>
    <body>
        <div class="header-logo">
            <div style="padding:10px;">
                <a href="<?php print base_url(); ?>">
                    <img src="<?php print base_url('public/images/small_logo.png'); ?>" alt="INDEXIE" style="border:0;max-width: 45%"/>
                </a>
            </div>
        </div>
