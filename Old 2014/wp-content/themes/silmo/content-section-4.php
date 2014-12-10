<?php 
$post = get_post();
?>

<li id="section-7" class="asphalt">
	<div class="wrapper clearfix">
	    <div id="contato">
	        <div class="contato_col_right">
	            <img src="<?php echo get_template_directory_uri()?>/images/contato_title.png" class="contato_title" />
	            <div class="contato_dados">
	            	<div class="about-me">
		                <h1>About me</h1>
		                <p><?php echo get_field('about', $post->ID)?></p>
	                </div>	
	
	                <h2>Say hello</h2>
	                <p><a href="mailto:<?php echo get_field('email', $post->ID)?>"><?php echo get_field('email', $post->ID)?></a></p>	                
	            </div>
				<div class="icons_redes">
					<a title="Linkedin" target="_blank" href="<?php echo get_field('linkedin', $post->ID)?>"><img src="<?php echo get_template_directory_uri()?>/images/in_icon.png" /></a>
					<a title="Behance" target="_blank" href="<?php echo get_field('behance', $post->ID)?>"><img src="<?php echo get_template_directory_uri()?>/images/be_icon.png" /></a>
				</div>
				<div class="sign_end">
					<p>thanks for visiting :)</p>
					<img src="<?php echo get_template_directory_uri()?>/images/endmark.png" />
				</div>            
	        </div>
	    </div>
    </div>
</li>