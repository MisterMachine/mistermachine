<?php
/**
 * @package WordPress
 * @subpackage
 */
?>
	<?php get_header(); ?>

		<div id="content" class="container_12">
		<?php if (have_posts()) : ?>
			<div>
			<?php while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div>
				<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_query(); ?>
		
		<?php 
		query_posts( array('pagename' => 'about') );
		if (have_posts()) : 
		?>
			<div>
			<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<div>
				<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_query(); ?>
		
		<?php 
		query_posts( array('pagename' => 'work') );
		if (have_posts()) : 
		?>
			<div>
			<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<div>
				<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_query(); ?>
		
		<?php 
		query_posts( array('pagename' => 'process') );
		if (have_posts()) : 
		?>
			<div>
			<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<div>
				<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_query(); ?>
		
		<?php 
		query_posts( array('pagename' => 'team') );
		if (have_posts()) : 
		?>
			<div>
			<?php while (have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<div>
				<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_query(); ?>
		
		</div>

	<?php get_footer(); ?>