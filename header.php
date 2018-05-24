<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">

</head>
<body <?php body_class(); ?>>
  <p>This is a sentence inside of my header.php file</p>
  <header>
    <section class="top-bar">
      <div class="container">
        <div class="row">
          <div class="social-media-icons col-xl-9 col-md-7 col-sm-7 col-6">Social Icons</div>
          <div class="search col-xl-3 col-md-5 col-sm-5 col-6 text-right"><?php get_search_form(); ?></div>
        </div>
      </div>
    </section>
    <section class="menu-area">
      <div class="container">
        <div class="align">
          <div class="row">
            <section class="logo col-md-2 col-sm-12 text-center">Logo</section>
            <nav class="main-menu col-md-10 text-right">
              <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu')); ?>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </header>
