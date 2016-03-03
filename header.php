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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/MyFontsWebfontsKit.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/animate.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/jquery.sidr.bare.css">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/tam_white-2.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
	<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.js"></script>
	<script src="https://use.typekit.net/ofd3xas.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class='hfeed site <?php if( is_page_template('templates/homepage-fullscreen.php') && is_front_page() ) { echo "content-fullscreen"; } ?>'>

		<?php

		if (is_home()) {
			$image = get_field('masthead_image', 19);
		} else {
			$image = get_field('masthead_image');
		}


		if( !empty($image) ) {
			$thumb = $image['sizes']['background-fullscreen'];
		} else {
			$thumb = "http://tamarack.bkfk-t5yk.accessdomain.com/wp-content/uploads/2016/01/Placeholder-Image.png";
		} ?>

		<header data-parallax="scroll" data-image-src="<?php echo $thumb; ?>" <?php if((get_field("masthead_size") == 'full') || (is_front_page())) { ?> class="full" <?php } ?>>

			<div class="screen"></div>

			<?php if (!is_page(array('Creative Network Profile', 'Made in West Virginia Profile', 'Trail Profile', 'Register'))) { ?>

				<div class="utilities-nav">
					<div class="container">
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
																					<li class="social-icon"><a href="https://www.facebook.com/TamarackFoundation"><i class="fa fa-facebook"></i></a></li>
																					<li class="social-icon"><a href="https://twitter.com/tamarackfound"><i class="fa fa-twitter"></i></a></li>
																					<li class="social-icon"><a href="https://www.pinterest.com/TamarackFound/"><i class="fa fa-pinterest"></i></a></li>
																					<li class="social-icon"><a href="https://www.instagram.com/tamarackfoundation/"><i class="fa fa-instagram"></i></a></li>
																					<li class="social-icon"><a href="http://eepurl.com/bJ508f"><i class="fa fa-envelope-o"></i></a></li>
																				</ul>',
									'depth'           => 0,
									'walker'          => ''
								); wp_nav_menu( $defaults );
							}else{
								echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
							} ?>
							<ul id="login-utilities-nav">
								<?php if (is_user_logged_in()) { ?>
									<li class="creative-network"><a href="<?php echo bloginfo('url'); ?>/creative-network-profile">Your account</a></li><li><a href="<?php echo wp_logout_url(); ?>">Log out</a></li>
								<?php } else { ?>
									<li class="creative-network"><a href="<?php echo bloginfo('url'); ?>/register">Join<span class="join-mobile"> our creative network</span></a></li><li><a href="<?php echo bloginfo('url'); ?>/wp-login.php">Artist login</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>


				<?php } ?>

				<div class="container">

					<div class="home-container">

						<?php if (!is_page(array('Creative Network Profile', 'Made in West Virginia Profile', 'Trail Profile', 'Register'))) { ?>

						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/tam_white.png" /></a>
						</div>

						<div class="main-menu-container">

							<?php
								// $main_menu = wp_get_nav_menu_items('Main Nav');
							?>

							<div class="main-menu-item menu-item learn">
								<a href="<?php echo get_field('learn_main_link', 'option'); ?>">
									<div class="menu-block menu-block-item">
										<span class="menu-block-primary-text">Learn</span>
										<span class="menu-block-secondary-text">New Skills</span>
									</div>
								</a>
							</div>

							<div class="main-menu-item menu-item build">
								<a href="<?php echo get_field('build_main_link', 'option'); ?>">
									<div class="menu-block menu-block-item">
										<span class="menu-block-primary-text">Build</span>
										<span class="menu-block-secondary-text">Your Business</span>
									</div>
								</a>
							</div>

							<div class="main-menu-item menu-item fund">
								<a href="<?php echo get_field('fund_main_link', 'option'); ?>">
									<div class="menu-block menu-block-item">
										<span class="menu-block-primary-text">Fund</span>
										<span class="menu-block-secondary-text">Your Ideas</span>
									</div>
								</a>
							</div>

							<div class="main-menu-item menu-item grow">
									<a href="<?php echo get_field('grow_main_link', 'option'); ?>">
										<div class="menu-block menu-block-item">
											<span class="menu-block-primary-text">Grow</span>
											<span class="menu-block-secondary-text">Creative Industry</span>
										</div>
									</a>
							</div>

							<div class="main-menu-item menu-item connect">
								<a href="<?php echo get_field('connect_main_link', 'option'); ?>">
									<div class="menu-block menu-block-item">
										<span class="menu-block-primary-text">Connect</span>
										<span class="menu-block-secondary-text">With Creatives</span>
									</div>
								</a>
							</div>

							<div class="main-menu-item menu-item shop">
									<a href="<?php echo get_field('shop_main_link', 'option'); ?>">
										<div class="menu-block menu-block-item">
											<span class="menu-block-primary-text">Shop</span>
											<span class="menu-block-secondary-text">Businesses</span>
										</div>
									</a>
							</div>
						</div>

						<div class="main-menu-toggle">
							<a href="#sidr" id="simple-menu">
								<i class="fa fa-navicon"></i>
							</a>
						</div>



						<div class="sub-menu-block learn-sub">
							<div class="<?php if (have_rows('learn_links', 'option')) { echo 'sub-menu-block-quote'; } else { echo 'sub-menu-block-quote-full'; } ?>">
								<div class="sub-menu-block-quote-text">
									<?php echo get_field('learn_text', 'option'); ?>
								</div>
								<div class="sub-menu-block-quote-cta"><a href="<?php echo get_field('learn_main_link', 'option'); ?>">Browse Now <i class="fa fa-angle-double-right"></i></a></div>
							</div>

							<?php if (have_rows('learn_links', 'option')) { ?>
								<div class="sub-menu-block-nav">
									<ul class="half">

										<?php
											if( have_rows('learn_links', 'option') ):
										    while ( have_rows('learn_links', 'option') ) : the_row();
									        echo "<li><a href=" . get_sub_field('learn_link', 'option')->guid . " >" . get_sub_field('learn_link', 'option')->post_title . "</a></li>";
										    endwhile;
											endif;
										?>

									</ul>
								</div>
							<?php } ?>

						</div>

						<div class="sub-menu-block build-sub">
							<div class="<?php if (have_rows('build_links', 'option')) { echo 'sub-menu-block-quote'; } else { echo 'sub-menu-block-quote-full'; } ?>">
								<div class="sub-menu-block-quote-text"><?php echo get_field('build_text', 'option'); ?></div>
								<div class="sub-menu-block-quote-cta"><a href="<?php echo get_field('build_main_link', 'option'); ?>">Browse Now <i class="fa fa-angle-double-right"></i></a></div>
							</div>

							<?php if (have_rows('build_links', 'option')) { ?>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<?php
											if( have_rows('build_links', 'option') ):
										    while ( have_rows('build_links', 'option') ) : the_row();
									        echo "<li><a href=" . get_sub_field('build_link', 'option')->guid . " >" . get_sub_field('build_link', 'option')->post_title . "</a></li>";
										    endwhile;
											endif;
										?>
									</ul>
								</div>
							<?php } ?>

						</div>

						<div class="sub-menu-block fund-sub">
							<div class="<?php if (have_rows('fund_links', 'option')) { echo 'sub-menu-block-quote'; } else { echo 'sub-menu-block-quote-full'; } ?>">
								<div class="sub-menu-block-quote-text"><?php echo get_field('fund_text', 'option'); ?></div>
								<div class="sub-menu-block-quote-cta"><a href="<?php echo get_field('fund_main_link', 'option'); ?>">Browse Now <i class="fa fa-angle-double-right"></i></a></div>
							</div>
							<?php if (have_rows('fund_links', 'option')) { ?>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<?php
											if( have_rows('fund_links', 'option') ):
										    while ( have_rows('fund_links', 'option') ) : the_row();
									        echo "<li><a href=" . get_sub_field('fund_link', 'option')->guid . " >" . get_sub_field('fund_link', 'option')->post_title . "</a></li>";
										    endwhile;
											endif;
										?>
									</ul>
								</div>
							<?php } ?>
						</div>

						<div class="sub-menu-block grow-sub">
							<div class="<?php if (have_rows('grow_links', 'option')) { echo 'sub-menu-block-quote'; } else { echo 'sub-menu-block-quote-full'; } ?>">
								<div class="sub-menu-block-quote-text"><?php echo get_field('grow_text', 'option'); ?></div>
								<div class="sub-menu-block-quote-cta"><a href="<?php echo get_field('grow_main_link', 'option'); ?>">Browse Now <i class="fa fa-angle-double-right"></i></a></div>
							</div>

							<?php if (have_rows('grow_links', 'option')) { ?>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<?php
											if( have_rows('grow_links', 'option') ):
										    while ( have_rows('grow_links', 'option') ) : the_row();
									        echo "<li><a href=" . get_sub_field('grow_link', 'option')->guid . " >" . get_sub_field('grow_link', 'option')->post_title . "</a></li>";
										    endwhile;
											endif;
										?>
									</ul>
								</div>
							<?php } ?>
						</div>

						<div class="sub-menu-block connect-sub">
							<div class="<?php if (have_rows('connect_links', 'option')) { echo 'sub-menu-block-quote'; } else { echo 'sub-menu-block-quote-full'; } ?>">
								<div class="sub-menu-block-quote-text"><?php echo get_field('connect_text', 'option'); ?></div>
								<div class="sub-menu-block-quote-cta"><a href="<?php echo get_field('connect_main_link', 'option'); ?>">Browse Now <i class="fa fa-angle-double-right"></i></a></div>
							</div>
							<?php if (have_rows('connect_links', 'option')) { ?>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<?php
											if( have_rows('connect_links', 'option') ):
										    while ( have_rows('connect_links', 'option') ) : the_row();
									        echo "<li><a href=" . get_sub_field('connect_link', 'option')->guid . " >" . get_sub_field('connect_link', 'option')->post_title . "</a></li>";
										    endwhile;
											endif;
										?>
									</ul>
								</div>
							<?php } ?>
						</div>

						<div class="sub-menu-block shop-sub">
							<div class="<?php if (have_rows('shop_links', 'option')) { echo 'sub-menu-block-quote'; } else { echo 'sub-menu-block-quote-full'; } ?>">
								<div class="sub-menu-block-quote-text"><?php echo get_field('shop_text', 'option'); ?></div>
								<div class="sub-menu-block-quote-cta"><a href="<?php echo get_field('shop_main_link', 'option'); ?>">Browse Now <i class="fa fa-angle-double-right"></i></a></div>
							</div>
							<?php if (have_rows('shop_links', 'option')) { ?>
								<div class="sub-menu-block-nav">
									<ul class="half">
										<?php
											if( have_rows('shop_links', 'option') ):
										    while ( have_rows('shop_links', 'option') ) : the_row();
									        echo "<li><a href=" . get_sub_field('shop_link', 'option')->guid . " >" . get_sub_field('shop_link', 'option')->post_title . "</a></li>";
										    endwhile;
											endif;
										?>
									</ul>
								</div>
							<?php } ?>
						</div>


					<?php } ?>



					<div class="masthead-text">
						<div class="masthead-title <?php if (is_front_page()) { echo "masthead-title-home"; } ?>">
							<?php
								if (get_post_type() == 'directorylisting') {
									echo get_the_title();
								} elseif(is_home()) {
									echo get_field('masthead_title', 19);
								} elseif(get_post_type() == 'marketplacelisting') {
									echo get_the_title();
								} elseif(is_404()) {
									echo "Oops!";
								} elseif(get_post_type() == 'trail') {
									echo get_the_title();
								}
								else {
									echo get_field("masthead_title");
								}

							?>
						</div>
						<?php if(get_field("masthead_tagline")) { ?>
							<div class="masthead-tagline">
	 							<?php echo get_field("masthead_tagline"); ?>
							</div>
						<?php } ?>
						<?php if(get_field("masthead_url")) { ?>
							<div class="masthead-link">
								<a href="<?php echo get_field('masthead_url') ?>"><?php echo get_field("masthead_link_text"); ?> <i class="fa fa-angle-double-right"></i></a>
							</div>
						<?php } ?>
					</div>


					<?php dimox_breadcrumbs(); ?>
					<?php if (get_field('masthead_image_citation')) { ?>
						<div class="citation">
							<?php echo get_field('masthead_image_citation'); ?>
						</div>
					<?php } ?>

				</div>
			</div>

			<?php if (is_page("Creative Network")) { ?>
				<div class="join-bubble">
					<span class="join-text"><a href="<?php echo bloginfo('url'); ?>/register">Join Our Creative Network</a></span>
					<span class="join-login"><a href="<?php echo bloginfo('url'); ?>/wp-login.php">Or Login</a></span>
				</div>
			<?php } ?>

			<?php if (is_page("Made in West Virginia")) { ?>
				<div class="join-bubble join-bubble-made">
					<span class="join-text"><a href="<?php echo bloginfo('url'); ?>/register">Join Made in West Virginia</a></span><br/>
					<span class="join-login"><a href="<?php echo bloginfo('url'); ?>/wp-login.php">Or Login</a></span>
				</div>
			<?php } ?>

			<?php if((get_field("masthead_size") == 'full') || (is_front_page())) { ?>
				<div class="bottom">
					<div class="masthead-arrow hint--top" data-hint="Scroll Down">
						<a href="#main" title="down"><img src="<?php echo get_template_directory_uri(); ?>/img/down-angle.png" /></a>
					</div>
				</div>
			<?php } ?>

		</header>

		<?php if (is_front_page() and get_field('tagline', get_page_by_title('frontpage')->ID)) { ?>
			<div class="tagline">
				<?php if (get_field('tagline_url', get_page_by_title('frontpage')->ID)) { ?><a href="<?php echo get_field('tagline_url', get_page_by_title('frontpage')->ID) ?>"> <?php } ?>
					<span class="tagline-attention">Attention: </span><span class="tagline-message"><?php echo get_field('tagline', get_page_by_title('frontpage')->ID); ?></span>
				<?php if (get_field('tagline_url', get_page_by_title('frontpage')->ID)) { ?></a><?php } ?>
			</div>
		<?php } ?>
