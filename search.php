<?php get_header(); ?>


<main id="content">

	<div class="container">
		<div class="row">
			<div class="nine columns offset-by-one">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="post">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<p class="postinfo"><?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>

							<hr>

							<div class="share-post">
								<div class="share-icon">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo str_replace(":", "%3A", get_permalink()); ?>"><i class="fa fa-facebook"></i> Share</a>
								</div>
								<div class="share-icon">
									<a href="https://twitter.com/home?status=<?php echo str_replace(":", "%3A", get_permalink()); ?>"><i class="fa fa-twitter"></i> Tweet</a>
								</div>
								<!-- <div class="share-icon">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php // echo str_replace(":", "%3A", get_permalink()); ?>"><i class="fa fa-pinterest"></i> Share</a>
								</div>
								<div class="share-icon">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php // echo str_replace(":", "%3A", get_permalink()); ?>"><i class="fa fa-fancy"></i> Share</a>
								</div> -->

							</div>

							<div class="post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>

							<?php the_excerpt(); ?>
						</div>

					<?php endwhile; ?>

				<?php else : ?>
					<h1>Nothing Found</h1>
					<p>Nothing matched your search criteria. Please try again with some different keywords.</p>

					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>

		</div>
	</div>

	<?php get_sidebar(); ?>

</main><!-- End of Content -->

<?php get_footer(); ?>
