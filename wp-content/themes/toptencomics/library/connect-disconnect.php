<?php
    add_action('wp_logout','go_home');
    add_action('wp_login','go_home');
    function go_home(){
        wp_redirect( home_url() );
        exit();
    }
?>
