</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<div class="container">
		<div class="row">
			<div class="four columns">
				<div class="footer-block">

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

					<div class="footer-menu-block">
					</div>
					<div class="footer-menu-block">
					</div>

					<nav class="main-navigation">
						<?php wp_nav_menu( array('menu_id' => 'footer-menu', 'theme_location' => 'footer-menu') ); ?>
					</nav>

				</div>
			</div>
			<div class="four columns">
				<div class="footer-block">
				</div>
			</div>
			<div class="four columns">
				<div class="footer-block">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
	</div>

</footer>

<?php wp_footer(); ?>

<script src="https://use.typekit.net/ofd3xas.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>
