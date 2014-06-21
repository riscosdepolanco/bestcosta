<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Website Horizontal Scrolling with jQuery" />
        <meta name="keywords" content="jquery, horizontal, scrolling, scroll, smooth"/>
        <!--link rel="stylesheet" href="css/jquery.sidr.dark.css"-->
        <!--link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen"/-->
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.sidr.dark.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300italic,400italic,700,300|Open+Sans:400,700,300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_enqueue_script('fullscreenCycler',get_template_directory_uri() . '/js/jquery.fullscreenCycler.min.js', array(jquery)); ?>
        <?php wp_enqueue_script('sidr',get_template_directory_uri() . '/js/jquery.sidr.min.js', array(jquery)); ?>

        <?php wp_head(); ?>
  </head>
    <style>
        a{
            color:#fff;
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
        }
    </style>
    <body>
        <?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>
        <!--div id="sidr">
          <ul>
            <li class="active"><a href="construction">Construcción</a></li>
            <li><a href="design">Diseño</a></li>
            <li><a href="real-estate">Servicio inmobiiario</a></li>
            <li><a href="resorts">Resorts exclusivos</a></li>
            <li><a href="friends">Amistad</a></li>
          </ul-->
        </div>
        <div id="header">
          <a href="<?php echo home_url('/'); ?>" id="logo">
            <img src="http://localhost:8888/test/wordpress/wp-content/uploads/2014/06/logoLu.png" alt="Best Costa logo">
          </a>
          <a id="simple-menu" href="#sidr">
            <div class="button">
              <div class="line line__first"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </a>
        </div>
