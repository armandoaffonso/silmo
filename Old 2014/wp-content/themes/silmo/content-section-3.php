<?php 
$query = new WP_Query(array('posts_per_page'=>-1, 'post_type'=>'project', 'post_status'=>'publish', 'orderby'=>'id', 'order'=>'asc'));
?>
<?php $s = 2;while($query->have_posts()){$query->the_post();$s *= 2;?>
	<li id="section-<?php echo $s?>" class="sea">
		<div class="wrapper clearfix">
		    <div class="prev_btn"></div>
		    <div class="next_btn"></div>
		    <div class="project_all screens">	
		    	<?php $query_scr = new WP_Query(array('posts_per_page'=>-1, 'post_type'=>'screen', 'post_status'=>'publish', 'orderby'=>'id', 'order'=>'asc', 'meta_key'=>'project', 'meta_value'=>$post->ID))?>
		    	<?php $screens = get_field('screens'); foreach($screens as $scr){?>
		    		<?php include(locate_template('content-'.get_field('template', $scr->ID).'.php'))?>
				<?php }//foreach scrrens?>		
		    </div>
	    </div>
	</li>
<?php }wp_reset_query();?>