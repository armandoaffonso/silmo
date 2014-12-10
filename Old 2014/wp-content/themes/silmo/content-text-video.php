<div class="project_gallery" style="background: url('<?php echo get_field('bg', $scr->ID)?>') 50% 0 no-repeat;">
    <div class="prj_title">
    	<?php echo $post->post_title?>
    </div>
    <div class="project_texto_video">
        <div class="video">
            <iframe src="//player.vimeo.com/video/<?php echo get_field('video', $scr->ID)?>?badge=0&amp;color=ffffff" width="100%" height="490" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="texto">
			<div class="texto_mid">
				<?php echo get_field('text', $scr->ID)?>
			</div>
		</div>
    </div>
</div>