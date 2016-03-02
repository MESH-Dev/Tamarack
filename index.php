<?php get_header(); ?>

<main id="content">

	<div class="container">
		<div class="row">
			<div class="ten columns offset-by-one">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<div class="post">
						<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="postinfo"><?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>

						<hr>

						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
	</div>


	<?php // get_sidebar(); ?>

</main><!-- End of Content -->

<?php get_footer(); ?>
