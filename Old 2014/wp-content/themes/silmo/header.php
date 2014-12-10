<?php
/**
 *
 * @package WordPress
 * @subpackage Silmo
 * @since Silmo 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		<meta name="author" content="">
		<meta name="description" content="">	
		
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url')?>">
		
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>	
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

    <body class="home">
		<!--PRELOADER-->
        <div id="preloader">
            <img src="<?php echo get_template_directory_uri(); ?>/images/preloader.gif" />
			<span class="status" style="display:none">...</span>
        </div>
		<!--END PRELOADER-->
        <nav>
            <div class="wrapper clearfix">
                <div class="col1-4">
                    <h1 class="gamma"><a href="#">Anchor</a></h1>
                </div>
                <div class="col3-4" id="nav">
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="blog-curtain.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Standard Blog</a></li>
                                <li><a href="blog-curtain.html">Curtains Blog</a></li>
                                <li><a href="single.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio-curtain.html">Portfolio</a>
                            <ul>
                                <li><a href="portfolio.html">Standard Portfolio</a></li>
                                <li><a href="portfolio-curtain.html">Curtains Portfolio</a></li>
                                <li><a href="single-portfolio.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="sidebar.html">Page with Sidebar</a></li>
                                <li><a href="full.html">Full Width</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		
		<div class="top_menu">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
			</div>
			<ul>
				<li class="mn_home mn_active"><span>home</span></li>
				<li class="mn_reel"><span>reel</span></li>
				<?php 
				$query = new WP_Query(array('posts_per_page'=>-1, 'post_type'=>'project', 'post_status'=>'publish', 'orderby'=>'id', 'order'=>'asc'));
				if($query->have_posts()){?>				
					<li class="mn_projects"><span>projects</span></li>
				<?php }//if projects?>
				<li class="mn_contacts"><span>contacts</span></li>
			</ul>
		</div>