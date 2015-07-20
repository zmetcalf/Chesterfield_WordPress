<?php /* Template Name: Portfolio Page Template */ ?>

<?php get_header(); ?>

<!-- Portfolio Panels -->
<main>
  <div class="row">
    <div class="grid">

      <?php
      $portfolio_items = get_posts(array(
        'taxonomy' => 'post_format',
        'post_status' => 'publish',
        'post_type' => 'portfolio_item',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => 1000
      ));

      foreach ($portfolio_items as $post):
        setup_postdata($post);
      ?>

        <div class="grid-item large-4 medium-6 small-12 column">
          <a href="<?php the_permalink(); ?>"></a>
          <?php the_post_thumbnail( 'large' ); ?>
          <div class="panel">
            <p><?php the_title(); ?></p>
          </div>
        </div>

        <?php wp_reset_postdata(); ?>
      <?php endforeach; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
