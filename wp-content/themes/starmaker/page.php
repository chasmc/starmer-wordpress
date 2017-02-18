<!-- live page -->

<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
  <article class= "live-post">
    <h2 class ="live-post-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

get_footer();

?>
