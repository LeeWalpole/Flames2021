<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php include ('fonts/fonts.php'); ?>
  <link rel="preload" as="style" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?ver=140"
    onload="this.rel='stylesheet'">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="prefetch" href="https://ipinfo.io/json?token=90226b7bd030b9">

  <!-- <link rel="pingback" href="<?php // echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">--->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <!-- <link rel="prefetch" href="https://www.flames.agency/talent/apply/"> -->



  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #0a0a0a;
    }

    @media (min-width:768px) {
      .desktop-linebreak {
        clear: both;
      }
    }
  </style>

  <!-- *** If Scripts have been detected, load the necessary scripts and styles. *** -->
  <?php $scripts_styles = get_field('scripts_styles'); // ACF variable that saves each option into an array ?>

  <?php if( in_array('flickity', $scripts_styles) ) : ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js" rel="preload" as="script">
  <?php endif; ?>
  <!-- *** *** *** -->


  <?php wp_head(); ?>

  <!-- LW Minified Scripts -->
  <script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/min.js?11"></script>

</head>

<body id="body" class="body">

  <!-- If Thai translated version exists, give visitor option to chose between English and Thai via popup -->

  <?php include ('snippets/loader.php'); ?>

  <?php include ('snippets/translate.php'); ?>

  <?php get_template_part( 'snippets/snippet', 'nav' ); ?>

  <main id="main">

