<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Indexie</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<? print base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<? print base_url('public/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<? print base_url('public/css/main.css'); ?>" rel="stylesheet" type="text/css"/>

        <script src="<?php print base_url('public/js/jquery.js'); ?>" type="text/javascript"></script>
        <script src="<?php print base_url('public/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php print base_url('public/js/core.js'); ?>" type="text/javascript"></script>

        <?php
        if (isset($scripts)) {
            foreach ($scripts as $script):
                ?>
        <script src="<?php print base_url('public/js/'.$script.'.js'); ?>" type="text/javascript"></script>
                <?php
            endforeach;
        }
        ?>
    </head>
    <body>
        <div class="container">
            <div style="text-align:center;">
                <div class="header-logo">
                    <a href="<?php print base_url(); ?>">
                        <img src="<?php print base_url('public/images/small_logo_black.png'); ?>" alt="INDEXIE" style="border:0;"/>
                    </a>
                </div>
            </div>
