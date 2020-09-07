<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">  
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>  
  </head>
  <body <?php body_class(); ?>>
  <!-- Start Header Section -->
    <header class="header-section">
      <div class="container">
        <div class="header-content">
          <div class="header-logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
          </div>
          <nav class="header-navigation">
            <?php $args = array(
              'theme_location' => 'header-menu'
            ) ?>
            <?php wp_nav_menu($args); ?>
          </nav>
        </div>
      </div>
    </header>
  <!-- End Header Section -->