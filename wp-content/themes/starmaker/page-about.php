<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<<<<<<< HEAD
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
=======
  <article class= "about-post">
    <h2 class ="about-post-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <h2 class ="about-post-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <h2 class ="about-post-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
>>>>>>> 8e35fe1682194a6c1d71bb7cb1f128fcf1ee94e5

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

<<<<<<< HEAD


=======
>>>>>>> 8e35fe1682194a6c1d71bb7cb1f128fcf1ee94e5
get_footer();

?>
