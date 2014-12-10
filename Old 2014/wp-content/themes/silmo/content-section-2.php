<?php 
$post = get_post();
?>
<li id="section-2" class="cover cover_reel">
	<div class="content_video">
		<iframe src="http://player.vimeo.com/video/<?php echo get_field('main_video', $post->ID)?>?api=1" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	</div>
</li>