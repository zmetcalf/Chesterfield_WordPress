<?php get_header(); ?>

<div class="row">
  <div class="large-8 medium-8 columns right">
    <div class="large-12 small-12 columns panel">
      <h1><?php the_title(); ?></h1>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php edit_post_link(); ?>

      <?php endwhile; ?>
    </div>
  </div>

  <div class="large-4 medium-4 columns left">
    <ul class="large-block-grid-1 medium-block-grid-1 small-block-grid-2">
      <?php foreach ( get_post_meta( $post->ID, 'column_image_url' ) as $image_url ): ?>
        <li><img class="th" src="<?php echo $image_url; ?>"></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<?php get_footer(); ?>
