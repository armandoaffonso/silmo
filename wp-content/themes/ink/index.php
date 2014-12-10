<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Stag_Customizer
 * @subpackage Ink
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
	
			
				<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_home.jpg);"></div>
			
		</article>







		<?php

			$query = new WP_Query( array(
				'numberposts'       => 1,
				'post_type'         => 'post',
				'post_status'       => 'publish',
				'posts_per_page'    => 1,
				'category__not_in'  => 34
			) );

			$query_vml = new WP_Query( array(
				'numberposts'    => 1,
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'category_name'  => 'story',
				'posts_per_page' => 1
			) );

		?>


			
<style type="text/css">
	
.fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed	{
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

</style>




<article id="post-934" class="post-934 post type-post status-publish format-standard has-post-thumbnail hentry category-reel tag-reel-2">

	<div class="entry-content" style="max-width:100%">
		<div class="fluid-width-video-wrapper" style="padding-top: 56.2%;">
		<iframe src="//player.vimeo.com/video/97764302" frameborder="0" allowfullscreen="allowfullscreen" id="fitvid502955"></iframe>
		</div>
	</div>
	
</article>






			<!--<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
				<a href="http://www.silmobonomi.com/reel/reel/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_reel.jpg);"></div>
				</a>
			</article>-->







			
			<?php /* if( $query->have_posts() ): ?>

				<?php /* Start the Loop */ ?>
				<?php /* while ( $query->have_posts() ) : $query->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						/*get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?> */?>
           
           

			



			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="netflix/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_netflixB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="expedia/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_expediaB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="lenovo/social-media-content-for-those-who-do/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_lenovoB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="lg/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_lgB.jpg);"></div>
				</a>
			</article>


			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="barilla/barilla/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_barillaB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="colgate" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_colgateB.jpg);"></div>
				</a>
			</article>

			<!--<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="sensodyne/sensodyne/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_sensodyneB.jpg);"></div>
				</a>
			</article>-->

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="pg/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_pgB.jpg);"></div>
				</a>
			</article>

			<!--<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="woorka/woorka/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_woorkaB.jpg);"></div>
				</a>
			</article>-->

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="leader/leader/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_leaderB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="dafiti/dafiti/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_dafitiB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="piemonster/piemonster/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_montroB1.jpg);"></div>
				</a>
			</article>


			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="mpsp/missingpeople/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_mpspB.jpg);"></div>
				</a>
			</article>

			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="cirque/varekai/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_cirqueB.jpg);"></div>
				</a>
			</article>


			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="harley-davidson/box/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_hdB.jpg);"></div>
				</a>
			</article>


			<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				<a href="etc/etc/" rel="bookmark">
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_etcB.jpg);"></div>
				</a>
			</article>


		



<?php if( $query_vml->have_posts() ): ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $query_vml->have_posts() ) : $query_vml->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>


				<article id="post-18" class="post-18 post type-post format-standard has-post-thumbnail hentry post-grid">
		
				
					<div class="post-cover post-cover-18" style="background-image: url(wp-content/uploads/2014/09/cover_1920_plato21.jpg);"></div>
				
			</article>



		</main><!-- #main -->

		

	</div><!-- #primary -->

<?php get_footer();
