<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<html>

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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hint.min.css">

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

		<header data-parallax="scroll" data-image-src="<?php echo $thumb; ?>" <?php if((get_field("masthead_size") == 'full') || (is_front_page())) { ?> class="full" <?php } ?>>
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
								<?php if (is_user_logged_in()) { ?>
									<li class="creative-network"><a href="<?php echo bloginfo('url'); ?>/directory-profile">Your account</a></li><li><a href="<?php echo wp_logout_url(); ?>">Log out</a></li>
								<?php } else { ?>
									<li class="creative-network"><a href="<?php echo bloginfo('url'); ?>/register">Join our creative network</a></li><li><a href="<?php echo bloginfo('url'); ?>/login">Artist login</a></li>
								<?php } ?>
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
						<div class="two columns menu-item learn">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Learn</span>
									<span class="menu-block-secondary-text">New Skills</span>
								</div>
							</a>
							<div class="sub-menu-block">
								<div class="sub-menu-block-quote">
									<div class="sub-menu-block-quote-text"><span class="purple">The Marketplace</span> is a place for you to find products, goods, and fine art by the the best artists, creatives, and designers in West Virginia.</div>
									<div class="sub-menu-block-quote-cta">Browse Now <i class="fa fa-angle-double-right"></i></div>
								</div>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<li>Level 2 Links: Access New Markets
											<ul>
												<li>Rural to Urban Markets</li>
												<li>Find a Sales Representative</li>
												<li>WV Craft Week</li>
												<li>Sign up for the "Marketplace"</li>
												<li>Sign up for the "Trail"</li>
											</ul>
										</li>
									</ul>
									<ul class="half">
										<li>Find Support</li>
											<ul>
												<li>Coop Business Services</li>
												<li>Business Education</li>
											</ul>
									</ul>
								</div>
							</div>
						</div>
						<div class="two columns menu-item build">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Build</span>
									<span class="menu-block-secondary-text">Your Business</span>
								</div>
							</a>
							<div class="sub-menu-block">
								<div class="sub-menu-block-quote">
									<div class="sub-menu-block-quote-text"><span class="purple">The Marketplace</span> is a place for you to find products, goods, and fine art by the the best artists, creatives, and designers in West Virginia.</div>
									<div class="sub-menu-block-quote-cta">Browse Now <i class="fa fa-angle-double-right"></i></div>
								</div>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<li>Rural to Urban Markets</li>
										<li>Find a Sales Representative</li>
										<li>WV Craft Week</li>
										<li>Sign up for the "Markeplace"</li>
									</ul>
									<ul class="half">
										<li>Sign up for the "Trail"</li>
										<li>Reduced-Rate Business Services</li>
										<li>Cooperative Business Services</li>
										<li>Business Education & Service Network</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="two columns menu-item fund">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Fund</span>
									<span class="menu-block-secondary-text">Your Ideas</span>
								</div>
							</a>
							<div class="sub-menu-block">
								<div class="sub-menu-block-quote">
									<div class="sub-menu-block-quote-text"><span class="purple">The Marketplace</span> is a place for you to find products, goods, and fine art by the the best artists, creatives, and designers in West Virginia.</div>
									<div class="sub-menu-block-quote-cta">Browse Now <i class="fa fa-angle-double-right"></i></div>
								</div>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<li>Emerging Artist Fellowship</li>
										<li>Master Fellowship</li>
										<li>Fellowship 3</li>
									</ul>
									<ul class="half">
										<li>Fellowship 4</li>
										<li>Emergency Relief Fund</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="two columns menu-item connect">
							<a href="">
								<div class="menu-block menu-block-item">
									<span class="menu-block-primary-text">Connect</span>
									<span class="menu-block-secondary-text">With Creatives</span>
								</div>
							</a>
							<div class="sub-menu-block">
								<div class="sub-menu-block-quote">
									<div class="sub-menu-block-quote-text"><span class="purple">The Marketplace</span> is a place for you to find products, goods, and fine art by the the best artists, creatives, and designers in West Virginia.</div>
									<div class="sub-menu-block-quote-cta">Browse Now <i class="fa fa-angle-double-right"></i></div>
								</div>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<li>Sign up for the directory</li>
										<li>Ask for advice</li>
										<li>Join your local arts council</li>
									</ul>
									<ul class="half">
										<li>Start your local arts council</li>
										<li>Host a pop-up event</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="two columns menu-item-half">
								<a href="">
									<div class="menu-block-half-1">
										<span class="menu-block-primary-text">Find Artists</span>
									</div>
								</a>
								<a href="">
									<div class="menu-block-half-2">
										<span class="menu-block-primary-text">Shop Businesses</span>
									</div>
								</a>
								<div class="sub-menu-block-1">
									<div class="sub-menu-block-quote">
										<div class="sub-menu-block-quote-text"><span class="purple">The Marketplace</span> is a place for you to find products, goods, and fine art by the the best artists, creatives, and designers in West Virginia.</div>
										<div class="sub-menu-block-quote-cta">Browse Now <i class="fa fa-angle-double-right"></i></div>
									</div>
								</div>
								<div class="sub-menu-block-2">
									<div class="sub-menu-block-quote">
										<div class="sub-menu-block-quote-text"><span class="purple">The Marketplace</span> is a place for you to find products, goods, and fine art by the the best artists, creatives, and designers in West Virginia.</div>
										<div class="sub-menu-block-quote-cta">Browse Now <i class="fa fa-angle-double-right"></i></div>
									</div>
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
				<?php if (get_field("masthead_subtitle")) { ?>
					<div class="row">
						<div class="eight columns offset-by-two">
							<div class="masthead-subtitle">
								<div class="masthead-subtitle-inner">
									<?php echo get_field("masthead_subtitle"); ?>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if(get_field("masthead_url")) { ?>
					<div class="row">
						<div class="twelve columns">
							<div class="masthead-link">
								<a href="<?php echo get_field('masthead_url') ?>"><?php echo get_field("masthead_link_text"); ?> <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if((get_field("masthead_size") == 'full') || (is_front_page())) { ?>
					<div class="row bottom">
						<div class="masthead-arrow hint--top" data-hint="Scroll Down">
							<a href="#main" title="down"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" /></a>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php if (is_page_template('templates/text.php')) { dimox_breadcrumbs(); } ?>
			<?php if (get_field('masthead_image_citation')) { ?>
				<div class="citation">
					<?php echo get_field('masthead_image_citation'); ?>
				</div>
			<?php } ?>
			<?php if (!is_page_template('templates/text.php')) { ?>
				<div class="tagline">
					<?php if (get_field('tagline_url', get_page_by_title('frontpage')->ID)) { ?><a href="<?php echo get_field('tagline_url', get_page_by_title('frontpage')->ID) ?>"> <?php } ?>
						<span class="tagline-attention">Attention: </span><span class="tagline-message"><?php echo get_field('tagline', get_page_by_title('frontpage')->ID); ?></span>
					<?php if (get_field('tagline_url', get_page_by_title('frontpage')->ID)) { ?></a><?php } ?>
				</div>
			<?php } ?>
		</header>
