<div class="project_gallery" style="background: url('<?php echo get_field('bg', $scr->ID)?>') 50% 0 no-repeat;">
	<div class="click_to content_video">
		<div class="prj_title">
			<?php echo $post->post_title?>
		</div>
		<iframe src="http://player.vimeo.com/video/<?php echo get_field('video', $scr->ID)?>" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	</div>
</div>