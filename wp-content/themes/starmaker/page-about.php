<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
  <div class ="about-contain">
    <article class= "about-post">
      <h2 class ="about-post-title">About</h2>
      <p class ="about-content"><?php the_content(); ?></p>
    </article>

    <article class= "about-post">
      <h2 class ="about-post-title">Contact</h2>
      <p class ="about-content">Booking:</p>
      <h2 class ="about-post-title"><a href ="">Statquest</a></h2>
    </article>
  </div>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;



get_footer();

?>
