<?php get_header(); ?>

<div class="container">
	<div class="ten columns offset-by-one">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="post">
				<h2><?php the_title(); ?></h2>
				<p class="postinfo"><?php the_author(); ?> | <?php the_date(); ?></p>

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

				<?php the_content(); ?>
			</div>

			<?php // comments_template( '', true ); ?>

		<?php endwhile; ?>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
