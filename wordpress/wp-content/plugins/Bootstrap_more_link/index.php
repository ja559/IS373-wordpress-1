<?php
/**
 * Plugin Name: Bootstrap more link
 * Description: Customized bootstrap more link
 * Version: 1.0
 * Author: Linbin Pang
 **/
function dh_modify_read_more_link() {
    $link = get_permalink();
    return "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
<button class='btn btn-primary' onclick=\"window.location.href='$link'\">Read More</button>";

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );
