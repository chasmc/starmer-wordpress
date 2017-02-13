<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
  <article class= "about-post">
    <h2 class ="about-post-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>

  <article class= "about-post">
    <h2 class ="about-post-title">Contact</h2>
    <p>Booking:</p>
  </article>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;



get_footer();

?>
