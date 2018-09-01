<?php get_header(); ?>

<div class="main-content">
	<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): ?>
				<?php the_post(); ?>

				<article>
					<h3><?php echo get_the_date(); ?></h3>
					<h2><?php the_title(); ?></h2>
					<!-- <img src="images/fashion_photo2.jpeg" alt="fashion stuff"> -->
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
				</article>

				<?php previous_post_link(); ?>
				<?php next_post_link(); ?>

			<?php endwhile; ?>
		<?php endif; ?>
</div>

<?php get_footer(); ?>