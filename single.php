<?php get_header(); ?>

<div class="container">
	<div class="ten columns offset-by-one">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="post">
				<h2><?php the_title(); ?></h2>
				<p class="postinfo"><?php the_author(); ?> | <?php the_date(); ?></p>

				<hr>

				<div class="share-post">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo str_replace(":", "%3A", get_permalink()); ?>"><i class="fa fa-facebook"></i> Share</a>
				</div>

				<?php the_content(); ?>
			</div>

			<?php // comments_template( '', true ); ?>

		<?php endwhile; ?>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
