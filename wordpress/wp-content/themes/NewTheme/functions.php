<?php
    function load_stylesheets()
    {
        wp_register_style('stylesheet',get_template_directory_uri() . '/css/bootstrap.min.css',
            array(), false, 'all');
        wp_enqueue_style('stylesheet');
    }
    add_action('wp_enqueue_style', 'load_stylesheets');
?>