<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<link rel="icon" type="image/png" href="https://www.flames.agency/wp-content/uploads/highlights-flames.png">
<!--<![endif]-->

<head>
<?php /*
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <title><?php // wp_title( '|', true, 'right' ); ?></title>
*/?>

    <meta name="viewport" content="width=device-width" />
    
    <?php wp_head(); ?>


  <?php include ('fonts/fonts.php'); ?>
  <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/dist/min.css"
    onload="this.rel='stylesheet'">
  <script defer src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/min.js"></script>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <!-- <link rel="prefetch" href="https://www.flames.agency/join/fans/">
  <link rel="prefetch" href="https://www.flames.agency/join/models/"> -->
  <!-- <link rel="prefetch" href="https://ipinfo.io/json?token=90226b7bd030b9"> -->


  <!-- <link rel="preconnect" href="https://www.flames.agency/models/"> -->

  
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

  <?php // wp_enqueue_script("jquery"); ?>


  <!-- LW Minified Scripts -->
  <!--
  <script defer src="<?php // echo esc_url(get_stylesheet_directory_uri()); ?>/dist/min.js?11"></script>
  -->

  

</head>

<body id="body" class="body">
<?php wp_body_open(); ?>

  <!-- If Thai translated version exists, give visitor option to chose between English and Thai via popup -->

  <?php include ('snippets/loader.php'); ?>

  <?php include ('snippets/translate.php'); ?>

  <?php get_template_part( 'snippets/snippet', 'nav' ); ?>

  <main id="main">



<style>

.donations-block iframe { 
  display:block; width:100%!important;
}

</style>
