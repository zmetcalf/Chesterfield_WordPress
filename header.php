<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

    <?php if ( $post->ID AND get_post_meta( $post->ID, 'slider_image_url' ) ): // 404 ?>
      <?php foreach ( get_post_meta( $post->ID, 'slider_image_url' ) as $image_url ): ?>
      <div>
        <div class="background_images" data-image="<?php echo $image_url; ?>"></div>
      </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div>
        <div class="background_images" data-image="<?php echo get_template_directory_uri(); ?>/img/default_background.jpg"></div>
      </div>
    <?php endif; ?>

    <div class="sticky">
      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="<?php echo home_url(); ?>">Chesterfield Agency</a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

         <section class="top-bar-section">
            <!-- Left Nav Section -->
            <?php header_nav(); ?>
            <!-- Right Nav Section -->
            <ul class="right">
              <li><a href="https://www.linkedin.com/in/zmetcalf" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
              <li><a href="https://twitter.com/zmetcalf" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a></li>
              <li><a href="https://github.com/zmetcalf" target="_blank"><i class="fa fa-github-square fa-lg"></i></a></li>
            </ul>
          </section>
      </nav>
    </div>
