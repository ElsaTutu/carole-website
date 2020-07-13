<!DOCTYPE html>
<html <?php language_attributes(); ?> id="top">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> </title>
  
  <?php wp_head(); ?>
  
  <link rel="stylesheet" href="content/themes/carole/public/css/style.css" />
  <link rel="icon" href="images/favicon.ico" type="images/jpg" sizes="32x32">
  
</head>

<body class="index">

  <header class="header sticky">
    <div class="logo">
      <p class="logo_text"><?php bloginfo('name'); ?> </p>
    </div>

  <div class="main-menu-toggle">
      <a href="#main-menu"
      id="main-menu-toggle"
      class="menu-toggle"
      aria-label="Open main menu">
      <span class="sr-only">Open main menu</span>
      <span class="fa fa-bars" aria-hidden="true"></span>
    </a>
  </div>
  
  
<div id="sub-header">
        <nav id="main-menu" class="main-menu" aria-label="Main menu">
            <a href="#main-menu-toggle"
              id="main-menu-close"
              class="menu-close"
              aria-label="Close main menu">
              <span class="sr-only">Close main menu</span>
              <span class="fa fa-close" aria-hidden="true"></span>
            </a>
            <ul>

              <?php
                    $menu = wp_nav_menu([
                        'theme_location' => 'header-menu',
                        'echo' => false
                        ]);
                    // $menu = strip_tags($menu, '<a><div>');
                    $menu = str_replace(['menu-item', 'class="menu"'], ['main-nav__item', ''], $menu);
                    echo $menu;
                ?>

              <!-- <li><a  href="">Accueil</a></li>
              <li><a href="redaction.html">Rédaction Web</a></li>
              <li><a href="consulting.html">Consulting</a></li>
              <li><a href="tarifs.html">Tarifs</a></li>
              <li><a href="a-propos.html">A propos</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="blog.html">Blog</a></li> -->
            </ul>
        </nav>
        <a href="#main-menu-toggle"
          class="backdrop"
          tabindex="-1"
          aria-hidden="true" hidden>
        </a>
    </div>

  </header>

    <main class="main">