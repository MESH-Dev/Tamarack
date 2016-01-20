<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<?php

	if( is_page_template('templates/homepage-fullscreen.php') ) {
		$imageArray = get_field('background_image');
		$imageURL = $imageArray['sizes']['background-fullscreen'];
	}

?>

<html <?php if( is_page_template('templates/homepage-fullscreen.php') ) { ?> style="background: url('<?php echo $imageURL; ?>') no-repeat center center fixed;" class="background-fullscreen" <?php } ?>>

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>'>

		<?php
		$image = get_field('masthead_image');

		if( !empty($image) ):
			$thumb = $image['sizes']['background-fullscreen'];
		endif; ?>

		<!-- <header style='<?php if( is_front_page() ) { ?> background-image: url(<?php echo $thumb; ?>) <?php } ?>'> -->
		<header data-parallax="scroll" data-image-src="<?php echo $thumb; ?>">
			<div class="container">
				<div class="row">
					<div class="utilities-nav">
						<div class="twelve columns">
							<?php if(has_nav_menu('utilities_nav')){
								$defaults = array(
									'theme_location'  => 'utilities_nav',
									'menu'            => 'utilities_nav',
									'container'       => false,
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s
																					<li class="social-icon"><a href=""><i class="fa fa-facebook"></i></a></li>
																					<li class="social-icon"><a href=""><i class="fa fa-twitter"></i></a></li>
																					<li class="social-icon"><a href=""><i class="fa fa-pinterest"></i></a></li>
																					<li class="social-icon"><a href=""><i class="fa fa-instagram"></i></a></li>
																					<li class="social-icon"><a href=""><i class="fa fa-envelope-o"></i></a></li>
																				</ul>',
									'depth'           => 0,
									'walker'          => ''
								); wp_nav_menu( $defaults );
							}else{
								echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
							} ?>
							<ul id="login-utilities-nav">
								<li class="creative-network"><a href="">Join our creative network</a></li>
								<li><a href="">Artist login</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="main-menu-container">
						<div class="two columns">
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</div>
						</div>
						<div class="two columns">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Learn</span>
									<span class="menu-block-secondary-text">New Skills</span>
								</div>
							</a>
						</div>
						<div class="two columns">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Build</span>
									<span class="menu-block-secondary-text">Your Business</span>
								</div>
							</a>
						</div>
						<div class="two columns">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Fund</span>
									<span class="menu-block-secondary-text">Your Ideas</span>
								</div>
							</a>
						</div>
						<div class="two columns">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Connect</span>
									<span class="menu-block-secondary-text">With Creatives</span>
								</div>
							</a>
						</div>
						<div class="two columns">
							<div class="menu-block-item">
								<a href="">
									<div class="menu-block-half">
										<span class="menu-block-primary-text">Find Artists</span>
									</div>
								</a>
								<a href="">
									<div class="menu-block-half">
										<span class="menu-block-primary-text">Shop Businesses</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="ten columns offset-by-one">
						<div class="masthead-title">
							<?php echo get_field("masthead_title"); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="eight columns offset-by-two">
						<div class="masthead-subtitle">
							<div class="masthead-subtitle-inner">
								<?php echo get_field("masthead_subtitle"); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="twelve columns">
						<div class="masthead-link">
							<a href="<?php echo get_field('masthead_url') ?>"><?php echo get_field("masthead_link_text"); ?> <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="masthead-arrow">
						<a href="#main"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" /></a>
					</div>
				</div>
			</div>
			<div class="citation">
				<?php echo get_field('masthead_image_citation'); ?>
			</div>
		</header>

		<div class="tagline">
			<span class="tagline-attention">Attention: </span><span class="tagline-message"><?php echo get_field('tagline'); ?></span>
		</div>
