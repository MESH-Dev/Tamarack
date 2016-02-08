<footer id="footer" class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<?php if (!is_page(array('Creative Network Profile', 'West Virginia Made Profile', 'Trail Profile'))) { ?>

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
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-twitter"></i> Tweet Us: @tamarackfoundation</span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-instagram"></i> Follow Our Instagram: @tamarackfoundation</span>
					<span class="footer-block-text footer-block-full-width"><i class="fa fa-facebook"></i> Find us on <a href="https://www.facebook.com">Facebook</a></span>
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
					<p>Special message can go across here. Special message can go across here. Copyright 2015 Tamarack Foundation for the Arts.</p>
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

<?php wp_footer(); ?>

<script src="https://use.typekit.net/ofd3xas.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>
