<footer id="footer" class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<?php if (!is_page(array('Creative Network Profile', 'Made in West Virginia Profile', 'Trail Profile', 'Register'))) { ?>

	<div class="container">
		<div class="row">
			<div class="four columns">
				<div class="footer-block footer-block-1">

					<a href="">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Learn</span>
							<span class="menu-block-secondary-text">New Skills</span>
						</div>
					</a>
					<a href="">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Build</span>
							<span class="menu-block-secondary-text">Your Business</span>
						</div>
					</a>

					<a href="">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Fund</span>
							<span class="menu-block-secondary-text">Your Ideas</span>
						</div>
					</a>

					<a href="">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Connect</span>
							<span class="menu-block-secondary-text">With Creatives</span>
						</div>
					</a>

					<a href="">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Find</span>
							<span class="menu-block-secondary-text">Artists</span>
						</div>
					</a>

					<a href="">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Shop</span>
							<span class="menu-block-secondary-text">Businesses</span>
						</div>
					</a>

					<div class="footer-navigation">
						<?php if(has_nav_menu('footer_nav')){
							$defaults = array(
								'theme_location'  => 'footer_nav',
								'menu'            => 'footer_nav',
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
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							); wp_nav_menu( $defaults );
						}else{
							echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
						} ?>
					</div>

				</div>
			</div>
			<div class="four columns">
				<div class="footer-block footer-block-2">
					<span class="menu-block-primary-text">Connect with us</span>
					<span class="footer-block-title">Follow our day-to-day building the creative economy:</span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-twitter"></i> Tweet Us: <a href="https://twitter.com/tamarackfound">@tamarackfoundation</a></span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-instagram"></i> Follow Our Instagram: <a href="https://www.instagram.com/tamarackfoundation/">@tamarackfoundation</a></span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-facebook"></i> Find us on <a href="https://www.facebook.com/TamarackFoundation">Facebook</a></span>
					<br/>
					<span class="footer-block-title">Snail mail:</span>
					<span class="footer-block-text footer-block-full-width">555 Address Address St.</span>
					<span class="footer-block-text footer-block-full-width">Charleston, WV 23333</span>
					<br/>
					<div class="footer-block-info">
						<span class="footer-block-title">Call:</span> <span class="footer-block-text">304-333-3333</span><br/>
						<span class="footer-block-title">Fax:</span> <span class="footer-block-text">304-333-3333</span><br/>
						<span class="footer-block-title">Email:</span> <span class="footer-block-text">hello@artfoundation.com</span>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="footer-block footer-block-3">
					<span class="menu-block-primary-text">Join our conversation</span>
					<span class="footer-block-newsletter-text">Sign up for our newsletters:</span>

					<form action="//tamarackfoundation.us12.list-manage.com/subscribe/post?u=8eb3531f974a15694f5de5dba&amp;id=2e44333fb6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email here...">
						<input type="submit" value="Sign up!" name="subscribe" id="mc-embedded-subscribe" class="button">
					</form>


					<p>Copyright 2015 Tamarack Foundation for the Arts.</p>
					<span class="footer-citation"><a href="http://meshfresh.com" target="_blank">website by MESH</a></span>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="container">
		<p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
	</div> -->

	<?php } ?>

</footer>

</div><!-- #page -->

<div id="sidr">
  <!-- Your content -->
  <ul>
	  <li>
		<div class="menu-block menu-block-item">
			<span class="menu-block-primary-text">Learn</span>
			<span class="menu-block-primary-icon"><i class="fa fa-angle-down"></i></span>
			<span class="menu-block-secondary-text">New Skills</span>
		</div>
		<div class="sub-menu-block-item">
			<ul>
				<li><a href="<?php echo get_field('learn_main_link', 'option'); ?>">Learn New Skills</a></li>

				<?php
					if( have_rows('learn_links', 'option') ):
						while ( have_rows('learn_links', 'option') ) : the_row();
							echo "<li><a href=" . get_sub_field('learn_link', 'option')->guid . " >" . get_sub_field('learn_link', 'option')->post_title . "</a></li>";
						endwhile;
					endif;
				?>

			</ul>
		</div>
	  </li>
	  <li>
		<div class="menu-block menu-block-item">
			<span class="menu-block-primary-text">Build</span>
			<span class="menu-block-primary-icon"><i class="fa fa-angle-down"></i></span>
			<span class="menu-block-secondary-text">Your Business</span>
		</div>
		<div class="sub-menu-block-item">
			<ul>
				<li><a href="<?php echo get_field('build_main_link', 'option'); ?>">Build Your Business</a></li>

				<?php
					if( have_rows('build_links', 'option') ):
						while ( have_rows('build_links', 'option') ) : the_row();
							echo "<li><a href=" . get_sub_field('build_link', 'option')->guid . " >" . get_sub_field('build_link', 'option')->post_title . "</a></li>";
						endwhile;
					endif;
				?>
			</ul>
		</div>
		</a>
	  </li>
	  <li>
		  <div class="menu-block menu-block-item">
			  <span class="menu-block-primary-text">Fund</span>
			  <span class="menu-block-primary-icon"><i class="fa fa-angle-down"></i></span>
			  <span class="menu-block-secondary-text">Your Ideas</span>
		  </div>
		  <div class="sub-menu-block-item">
			<ul>
				<li><a href="<?php echo get_field('fund_main_link', 'option'); ?>">Fund Your Ideas</a></li>

				<?php
					if( have_rows('fund_links', 'option') ):
						while ( have_rows('fund_links', 'option') ) : the_row();
							echo "<li><a href=" . get_sub_field('fund_link', 'option')->guid . " >" . get_sub_field('fund_link', 'option')->post_title . "</a></li>";
						endwhile;
					endif;
				?>
			</ul>
		  </div>
	  </li>
	  <li>
		  <div class="menu-block menu-block-item">
			  <span class="menu-block-primary-text">Grow</span>
			  <span class="menu-block-primary-icon"><i class="fa fa-angle-down"></i></span>
			  <span class="menu-block-secondary-text">Creative Industry</span>
		  </div>
		  <div class="sub-menu-block-item">
			  <ul>
				<li><a href="<?php echo get_field('grow_main_link', 'option'); ?>">Grow Creative Industry</a></li>

				<?php
					if( have_rows('grow_links', 'option') ):
						while ( have_rows('grow_links', 'option') ) : the_row();
							echo "<li><a href=" . get_sub_field('grow_link', 'option')->guid . " >" . get_sub_field('grow_link', 'option')->post_title . "</a></li>";
						endwhile;
					endif;
				?>
			  </ul>
		  </div>
	  </li>
	  <li>
		<div class="menu-block menu-block-item">
			<span class="menu-block-primary-text">Connect</span><span class="menu-block-primary-icon"><i class="fa fa-angle-down"></i></span>
			<span class="menu-block-secondary-text">With Creatives</span>
		</div>
		<div class="sub-menu-block-item">
			<ul>
				<li><a href="<?php echo get_field('connect_main_link', 'option'); ?>">Connect With Creatives</a></li>

				<?php
					if( have_rows('connect_links', 'option') ):
						while ( have_rows('connect_links', 'option') ) : the_row();
							echo "<li><a href=" . get_sub_field('connect_link', 'option')->guid . " >" . get_sub_field('connect_link', 'option')->post_title . "</a></li>";
						endwhile;
					endif;
				?>
			</ul>
		</div>
	  </li>
	  <li>
		  <div class="menu-block menu-block-item">
			  <span class="menu-block-primary-text">Shop</span>
			  <span class="menu-block-primary-icon"><i class="fa fa-angle-down"></i></span>
			  <span class="menu-block-secondary-text">Businesses</span>
		  </div>
		  <div class="sub-menu-block-item">
			<ul>
				<li>
					<a href="<?php echo get_field('shop_main_link', 'option'); ?>">Shop Businesses</a>
				</li>

				<?php
					if( have_rows('shop_links', 'option') ):
						while ( have_rows('shop_links', 'option') ) : the_row();
							echo "<li><a href=" . get_sub_field('shop_link', 'option')->guid . " >" . get_sub_field('shop_link', 'option')->post_title . "</a></li>";
						endwhile;
					endif;
				?>
			</ul>
		  </div>
	  </li>
  </ul>

</div>

<?php wp_footer(); ?>

<script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>

<script>
	jQuery(document).ready(function() {
	  jQuery('#simple-menu').sidr();
	  jQuery('#simple-menu i').click(function() {
		  $(this).toggleClass('fa-navicon fa-close');
		  jQuery('.logo').toggle();
	  });



	  jQuery('#sidr ul li').click(function() {
		 $(this).find('.sub-menu-block-item').slideToggle();
		 $(this).find('.menu-block-primary-icon i').toggleClass('fa-angle-down fa-angle-up');
	  });
	});
</script>

</body>
</html>
