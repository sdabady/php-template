<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
      }
    </style>
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <?php
               wp_nav_menu( array(
                   'menu'              => 'primary',
                   'theme_location'    => 'primary',
                   'depth'             => 2,
                   'container'         => 'div',
                   'container_class'   => 'collapse navbar-collapse',
                   'container_id'      => 'bs-example-navbar-collapse-1',
                   'menu_class'        => 'nav navbar-nav',
                   'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                   'walker'            => new WP_Bootstrap_Navwalker())
               );
            ?>
          </nav>
        </div>
      </div>
<section class="showcase">
        <div class="container">
          <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
          <p><?php echo get_theme_mod('showcase_text', 'Custom Bootstrap Wordpress Title'); ?></p>
          <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Enterrrrr'); ?></a>
        </div>
      </section>

      <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <?php if(is_active_sidebar('box1')) : ?>
                <?php dynamic_sidebar('box1'); ?>
              <?php endif; ?>
          </div>
    
          <div class="col-md-6">
              <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
<footer class="blog-footer">
    <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    <p>
    <a href="#">Back to top</a>
    </p>
</footer>
<?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
