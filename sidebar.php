<div id="sidebar">
	<div class="share">
		<div class="share-title">SHARE THE BLOG:</div>
		<div class="sidebar-share-icon">
			<a href="https://twitter.com/home?status=http%3A//tamarackdounfation.org/blog" target="_blank"><i class="fa fa-twitter"></i> </a>
		</div>
		<div class="sidebar-share-icon">
			<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//tamarackdounfation.org/blog" target="_blank"><i class="fa fa-facebook"></i> </a>
		</div>
		<br class="clear">
	</div>
	<?php


	if ( ! dynamic_sidebar('primary-widget-area') ) : ?>

		<!-- Sidebar content if no widgets
			Example:
			<div class="box">
				<h1>Pages</h1>
				<ul>
					<?php wp_list_pages(); ?>
				</ul>
			</div>
		-->

	<?php endif; ?>

</div><!-- End of Sidebar -->
