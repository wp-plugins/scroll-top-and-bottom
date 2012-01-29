<?php
/*
Plugin Name: Scroll Top and Bottom
Plugin URI: http://shariarbd.com/plugin/scroll-top-and-bottom/
Description: Scroll Top and Bottom is created to scroll to top and bottom. User can go to top and bottom of the site using this tool easily .Plugin is created by <cite><a href="http://shariarbd.com/" title="Md. Sahriar">Md. Shariar</a>.</cite>
Version: 1.0
Author: Md. Shariar
Author URI: http://shariarbd.com/ 

*/

function scroll_tandbhead() 
{
include('cssandjs.php');
include('jq.php'); // This portiong making problem if jQuery pre installed
}
   

function scroll_tandb() 
{
include('tandb.php');
}
add_action('wp_head', 'scroll_tandbhead');
add_action('wp_footer', 'scroll_tandb');
?>