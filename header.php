<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>DJI Drones</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg" >
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Drones <em>DJI</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse" id="navbarResponsive"   >

<?php 
        $args = array(
          'theme_location'  => 'top-menu',
          'menu'            => 'navigation',
          'container'       => '',
          'container_id'    => '',
          'container_class'    => '',
          'menu_class'      => 'navbar-nav ml-auto',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
          'add_li_class'  => 'nav-item'          
        );
        wp_nav_menu($args);

?>


          <!--
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php bloginfo('template_directory'); ?>/products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php bloginfo('template_directory'); ?>/about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php bloginfo('template_directory'); ?>/contact.html">Contact Us</a>
              </li>
            </ul>
-->

          </div>


        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4 style="margin-top: 4%">DJI mavic 3</h4>
            <h2>Best DJI Drone</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4 style="color: white;">DJI Mavic 3</h4>
            <h2>Explore the world!</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>DJI Mavic 3</h4>
            <h2 style="color: black;">Amazing photos!</h2>
          </div>
        </div>
      </div>
    </div>

      <!-- Banner Ends Here -->