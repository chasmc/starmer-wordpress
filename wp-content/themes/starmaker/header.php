<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset= "<?php bloginfo('charset'); ?>">
    <meta name "viewport" content= "width= device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class= "main-contain">
      <!-- site-header -->
      <header class= "site-header">
        <h1 class ="joshtitle"><a href= "<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h5><?php bloginfo('description'); ?></h5>

        <nav class ="site-nav">

          <?php
          $args = array(
            "theme_location" => "primary"
          );
          ?>

          <?php wp_nav_menu(); ?>
        </nav>
        <ul class= "albums-contain">
          <li class= "albums-title">Albums</li>
          <li class= "albums-list"><a class ="albums-link" href ="https://joshuastarmer.bandcamp.com/album/postcards-from-home-volume-1" target ="_blank"><img class ="albums" src ="<?php echo get_bloginfo('template_url') ?>/images/starmer_itunes_cover_v1.jpg"></a></li>

          <li class= "albums-list"><a class ="albums-link" href ="https://joshuastarmer.bandcamp.com/album/germany-zulu" target ="_blank"><img class ="albums" <img class ="albums" src ="<?php echo get_bloginfo('template_url') ?>/images/joshua_starmer_germany_cover_v1.png"></a></li>

          <li class= "albums-list"><a class ="albums-link" href ="https://joshuastarmer.bandcamp.com/album/starmakers" target ="_blank"><img class ="albums" <img class ="albums" src ="<?php echo get_bloginfo('template_url') ?>/images/STARMaKers_1400x1400_300dpi.jpg"></a></li>
        </ul>
      </header>
