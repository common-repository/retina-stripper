<?php
/*
Author: David Favor
Author URI: http://DavidFavor.com
Plugin Name: Retina Stripper
Plugin URI: http://DavidFavor.com/
Description: Strip enqueued copies of retina.js 
Version: 1.4
License: GPL2

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.

*/

// Since this is simple code, no namespaces or classes,
// just a long function name to avoid function name collisions

function strip_enqueued_retina_js_occurrences () {

    global $wp_scripts;

    // List of scripts to strip
    $list = array('retina.js');

    foreach ($wp_scripts -> registered as $registered) {

       foreach ($list as $item) {

          if (preg_match("/$item/",$registered->src)) {
             wp_dequeue_script   ($registered->handle);
             wp_deregister_script($registered->handle);
          }   

       }   

    }

}
add_action( 'wp_enqueue_scripts', 'strip_enqueued_retina_js_occurrences', 1000 );
