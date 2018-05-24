<?php get_header(); ?>
<div id="primary">
  <div id="main">
    <div class="container">

      <h2>Search Results For: <?php echo get_search_query(); ?></h2>
      <?php

      get_search_form();

      while( have_posts() ):
        the_post();
        get_template_part( 'template-parts/content', 'search');
      endwhile;

      the_posts_pagination(
        array(
          'prev_test' => 'Previous',
          'next_text' => 'Next',
          'screen_reader_text' => __( ' ')
        )
      );
       ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
