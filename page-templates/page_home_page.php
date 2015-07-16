<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<!-- Content Panel -->
<div class="home_callout row">
  <div class="large-8 medium-8 small-10 small-offset-1 medium-offset-2 large-offset-2">
    <div class="panel radius">
      <h1><?php the_title(); ?></h1>
		  <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
