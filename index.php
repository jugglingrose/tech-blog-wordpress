<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <div class="content-area">
  <div class="content-area">
    <main>

      <section class="middle-area">
        <div class="container">
          <div class="row">
            <div class="news col-md-9">

              <?php
              //If posts
              if( have_posts() ):
                //while have_posts
                while( have_posts() ): the_post();

                get_template_part('template-parts/content', get_post_format() );
             ?>

             <?php
           endwhile;
           else:
            ?>

            <p> There is nothing to be displayed yet</p>
          <?php endif; ?>

            </div>
              <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'blog' ); ?></aside>
          </div>
        </div>
      </section>
      <section class="map">
      <div class="container">
        <div class="row">Map</div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>
