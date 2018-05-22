<article <?php post_class()?> >
  <?php get_post_format(); ?>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <?php the_post_thumbnail( array(275, 275)); ?>
  <div class="meta-info">
    <p>Categories: <?php the_category( ''); ?><p>
    <p><?php the_tags( 'Tags: ', ', '); ?> </p>
  </div>
  <p><?php the_content(); ?></p>
</article>
