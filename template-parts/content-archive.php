<article <?php post_class()?> >
  <?php get_post_format(); ?>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <?php the_post_thumbnail( array(275, 275)); ?>
  <div class="meta-info">
  <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
  <p><?php the_tags( 'Tags: ', ', '); ?> </p>
</div>
  <p><?php the_excerpt(); ?></p>
</article>
