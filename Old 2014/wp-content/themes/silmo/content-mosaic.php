<div class="project_gallery">
    <div class="prj_title">
    	<?php echo $post->post_title?>
    </div>
    <div class="prj_images">
    	<?php for($i = 1; $i <= 8; $i++){?>
	        <div class="img_<?php echo $i?>">
	        	<?php if(get_field("thumb-$i", $scr->ID) != ''){?>
                	<img src="<?php echo get_field("thumb-$i", $scr->ID)?>" />
	            <?php }//if image?>
	        </div>
        <?php }//for i?>
    </div>
</div>	