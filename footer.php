<footer id="footer" class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<?php if (!is_page(array('Creative Network Profile', 'Made in West Virginia Profile', 'Trail Profile', 'Register'))) { ?>

	<div class="container">
		<div class="row">
			<div class="four columns">
				<div class="footer-block footer-block-1">

					<a href="<?php echo get_field('learn_main_link', 'option'); ?>">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Learn</span>
							<span class="menu-block-secondary-text">New Skills</span>
						</div>
					</a>
					<a href="<?php echo get_field('build_main_link', 'option'); ?>">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Build</span>
							<span class="menu-block-secondary-text">Your Business</span>
						</div>
					</a>

					<a href="<?php echo get_field('fund_main_link', 'option'); ?>">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Fund</span>
							<span class="menu-block-secondary-text">Your Ideas</span>
						</div>
					</a>

					<a href="<?php echo get_field('grow_main_link', 'option'); ?>">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Grow</span>
							<span class="menu-block-secondary-text">Creative Industry</span>
						</div>
					</a>

					<a href="<?php echo get_field('connect_main_link', 'option'); ?>">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Connect</span>
							<span class="menu-block-secondary-text">With Creatives</span>
						</div>
					</a>

					<a href="<?php echo get_field('shop_main_link', 'option'); ?>">
						<div class="footer-menu-block">
							<span class="menu-block-primary-text">Shop</span>
							<span class="menu-block-secondary-text">Businesses</span>
						</div>
					</a>

					<div class="footer-navigation">
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
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-twitter"></i> Tweet Us: <a href="https://twitter.com/tamarackfound">@tamarackfound</a></span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-instagram"></i> Follow Our Instagram: <a href="https://www.instagram.com/tamarackfoundation/">@tamarackfoundation</a></span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-facebook"></i> Find us on <a href="https://www.facebook.com/TamarackFoundation">Facebook</a></span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-pinterest"></i> Find us on <a href="https://www.pinterest.com/TamarackFound">Pinterest</a></span>
					<br/>
					<span class="footer-block-title">Snail mail:</span>
					<span class="footer-block-text footer-block-full-width">3310 Piedmont Road</span>
					<span class="footer-block-text footer-block-full-width">Charleston, WV 25306</span>
					<br/>
					<div class="footer-block-info">
						<span class="footer-block-title">Call:</span> <span class="footer-block-text">304-926-3770</span><br/>
						<span class="footer-block-title">Email:</span> <span class="footer-block-text"><a href="mailto:info@tamarackfoundation.org">info@tamarackfoundation.org</a></span>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="footer-block footer-block-3">
					<span class="menu-block-primary-text">Join our conversation</span>
					<span class="footer-block-newsletter-text">Sign up for our emails to receive the latest news and updates:</span>

					<form action="//tamarackfoundation.us12.list-manage.com/subscribe/post?u=8eb3531f974a15694f5de5dba&amp;id=2e44333fb6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email here...">
						<input type="submit" value="Sign up!" name="subscribe" id="mc-embedded-subscribe" class="button">
					</form>


					<p>Copyright <?php echo date("Y"); ?> Tamarack Foundation for the Arts.</p>
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

  <div class="close-sidr">
	<i class="fa fa-close"></i>
  </div>

  <ul>
	  <li>
	  	<a href="<?php echo get_field('learn_main_link', 'option'); ?>">
			<div class="menu-block menu-block-item">
				<span class="menu-block-primary-text">Learn</span>
				<span class="menu-block-secondary-text">New Skills</span>
			</div>
		</a>
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
	    <a href="<?php echo get_field('connect_main_link', 'option'); ?>">
			<div class="menu-block menu-block-item">
				<span class="menu-block-primary-text">Connect</span><span class="menu-block-primary-icon"></span>
				<span class="menu-block-secondary-text">With Creatives</span>
			</div>
		</a>
	  </li>
	  <li>
	  	  <a href="<?php echo get_field('shop_main_link', 'option'); ?>">
			  <div class="menu-block menu-block-item">
				  <span class="menu-block-primary-text">Shop</span>
				  <span class="menu-block-secondary-text">Businesses</span>
			  </div>
	  	  </a>
	  </li>
  </ul>

  <div class="footer-navigation">
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
			  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			  'depth'           => 0,
			  'walker'          => ''
		  ); wp_nav_menu( $defaults );
	  }else{
		  echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
	  } ?>
  </div>

</div>

<?php wp_footer(); ?>

<script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>

<script>
	jQuery(document).ready(function() {

	  jQuery('.main-menu-toggle').sidr();

	//   jQuery('.main-menu-toggle').click(function() {
	// 	  $(this).find('i').toggleClass('fa-navicon fa-close');
	// 	  $(this).toggleClass('main-menu-toggle-left');
	// 	  jQuery('.logo').toggle();
	  //
	// 	  console.log('test');
	//   });

	  jQuery('.close-sidr').sidr();

	  jQuery('#sidr ul li').click(function() {
		 $(this).find('.sub-menu-block-item').slideToggle();
		 $(this).find('.menu-block-primary-icon i').toggleClass('fa-angle-down fa-angle-up');
	  });
	});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46432156-15', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
