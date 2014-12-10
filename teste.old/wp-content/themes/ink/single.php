<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Stag_Customizer
 * @subpackage Ink
 */

get_header(); ?>

	<?php get_template_part( '_post', 'cover-wrap' ); ?>

	<main id="main" class="site-main">

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php /*stag_related_posts(); */ ?> 

<?php 
$prev_post = get_previous_post(true, 'category');
if (!empty( $prev_post )): ?>
  <?php /*<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail', array(120,120)); ?></a>
  <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a> /*/ ?>

  <?php /*
//Get the Thumbnail URL
$src = wp_get_attachment_image_src( get_post_thumbnail_id($prev_post->ID), array( 720,405 ), false, '' );
echo $src[0];
*/ ?>








<section class="related-posts">
<article id="post-435" class="post-435 post type-post status-publish format-standard has-post-thumbnail hentry category-colgate tag-colgate-2 post-grid">
	<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
	
	<style type="text/css">
				
		
				.post-cover-435 { background-image: url(<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($prev_post->ID), array( 720,405 ), false, '' ); echo $src[0]; ?>);  }
			</style>
<div class="post-cover post-cover-435 stag-image--none"></div>
	</a>
	<div class="post-content">
		<header class="entry-header">
			<h1 class="entry-title">
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a>
			</h1>
		</header><!-- .entry-header -->

		
		
			</div>
</article>
</section>
<?php endif; ?>


		<?php get_template_part( '_post', 'comments' ); ?>

	<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

<?php get_footer();
