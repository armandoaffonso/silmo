<?php
/**
 * Silmo functions and definitions
 *
 * @package WordPress
 * @subpackage Silmo
 * @since Silmo 1.0
 */

require_once 'inc/custom-types.php';

/**
 * Silmo setup.
 * 
 */
function silmo_setup()
{
	error_reporting(E_ALL);
	load_theme_textdomain('silmo', get_template_directory().'/languages');
	
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
}//silmo_setup
add_action('after_setup_theme', 'silmo_setup');

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Silmo 1.0
 */
function silmo_scripts()
{
	wp_deregister_script('jquery');
	
	wp_enqueue_style('font', get_template_directory_uri().'/css/font.css', array());
	wp_enqueue_style('curtain', get_template_directory_uri().'/css/curtain.css', array());
	wp_enqueue_style('base', get_template_directory_uri().'/css/base.css', array());
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css', array());
	wp_enqueue_style('jquery.fancybox', get_template_directory_uri().'/css/jquery.fancybox.css', array());
	wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', array());

	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array(), '', true);
	wp_enqueue_script('jquery-easing', get_template_directory_uri().'/js/jquery-easing.js', array('jquery'), '', true);
	wp_enqueue_script('curtain', get_template_directory_uri().'/js/curtain.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.flexslider-min', get_template_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'), '', true);	
	wp_enqueue_script('jquery.fancybox.pack', get_template_directory_uri().'/js/jquery.fancybox.pack.js', array('jquery'), '', true);
	wp_enqueue_script('mod', get_template_directory_uri().'/js/mod.js', array('jquery', 'curtain'), '', true);
	wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery', 'curtain', 'mod'), '', true);
	wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery', 'curtain', 'mod', 'custom'), '', true);
}//silmo_scripts
add_action('wp_enqueue_scripts', 'silmo_scripts');

function silmo_wp_title($title, $sep)
{
	global $paged, $page;

	if(is_feed())return $title;
	
	$title .= get_bloginfo('name', 'display');

	$site_description = get_bloginfo('description', 'display');
	if($site_description &&(is_home()|| is_front_page()))$title = "$title $sep $site_description";

	return $title;
}//silmo_wp_title
add_filter('wp_title', 'silmo_wp_title', 10, 2);

function add_project_js()
{	
	wp_enqueue_script('jquery2', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array(), '', true);
	wp_enqueue_script('admin-project', get_template_directory_uri().'/js/admin-project.js', array('jquery2'), '', true);
}//add_project_js
add_action('admin_init', 'add_project_js');
