<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <div class="content-area">
  <div class="content-area">
    <main>
      <section class="middle-area">
        <div class="container">
          <div class="row">
            <div class="archive col-sm-12 error-404">
              <header>
                <h1>Page Not Found</h1>
                <p>Unfortunately, the page you tried to reach does not exist</p>
              </header>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <p>How about doing a search?</p>
            <?php get_search_form(); ?>
            <?php the_widget('WP_Widget_Recent_Posts', array('title' => 'Latest Posts', 'number' => 3 ) ); ?>
          </div>
        </div>
      </section>
  </main>
</div>
<?php get_footer(); ?>
