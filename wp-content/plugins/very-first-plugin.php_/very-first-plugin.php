<?php
/**
 * Plugin name: Very First Plugin
 * Plugin URI: http://saaravallik.ikt.khk.ee/
 * Description: This is the very first plugin I ever created
 * Version: 1.0
 * Author: Saara Vällik
 * Author URI: http://saaravallik.ikt.khk.ee/
 * */
 
 function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Loe rohkem!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );