<?php get_header(); ?>

  <div class="row">
    <div class="large-12 columns">
      <div id="post-<?php the_ID(); ?>" <?php post_class('large-12 small-12 columns panel'); ?>>

        <h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

				<?php edit_post_link(); ?>


		<?php endwhile; ?>

		<?php else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'chesterfield_wordpress' ); ?></h2>

		<?php endif; ?>
		  </div>
		</div>
  </div>

<?php get_footer(); ?>
