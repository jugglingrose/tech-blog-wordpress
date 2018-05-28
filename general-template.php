<?php
/*
Template Name: General Template
*/
 ?>


<?php get_header(); ?>
<img clas src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <div class="content-area">
    <main>
      <section class="middle-area">
        <div class="container">
          <div class="row">
            <aside class="sidebar col-md-3">Sidebar</aside>
            <div class="news col-md-9">
              <?php
               //If posts
               if( have_posts() ):
                 //while have_posts
                 while( have_posts() ): the_post();
              ?>
              <article>
                <h2><?php the_title(); ?></h2>

                <p><?php the_content(); ?></p>
              </article>
              <?php
            endwhile;
            else:
             ?>

             <p> There is nothing to be displayed yet</p>
           <?php endif; ?>

            </div>
          </div>
        </div>
      </section>

  </main>
</div>
<?php get_footer(); ?>
