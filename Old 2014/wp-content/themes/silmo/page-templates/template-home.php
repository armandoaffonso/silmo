<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Silmo
 * @since Silmo 1.0
 */

get_header(); 
?>

<ol class="curtains">
    <?php get_template_part('content', 'section-1')?>

    <?php get_template_part('content', 'section-2')?>
    
    <?php get_template_part('content', 'section-3')?>
    
    <?php get_template_part('content', 'section-4')?>
</ol>
<span class="status">...</span>

<?php
get_footer();