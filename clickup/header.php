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
<?php /*
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <title><?php // wp_title( '|', true, 'right' ); ?></title>
*/?>

    <meta name="viewport" content="width=device-width" />
    

  <?php wp_head(); ?>
  
  <?php include ('fonts/fonts.php'); ?>
  <link rel="preload" as="style" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/min.css?ver=143"
    onload="this.rel='stylesheet'">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="prefetch" href="https://ipinfo.io/json?token=90226b7bd030b9">

  <!-- <link rel="pingback" href="<?php // echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">--->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <!-- <link rel="prefetch" href="https://www.flames.agency/talent/apply/"> -->

  <script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/min.js?13"></script>



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
  <?php
  /*
  $scripts_styles = get_field('scripts_styles'); // ACF variable that saves each option into an array ?>

  <?php if( in_array('flickity', $scripts_styles) ) : ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js" rel="preload" as="script">
  <?php endif;
  */ ?>
  <!-- *** *** *** -->

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

<?php if ( is_page(1544) || is_front_page()  ) :?>
   
  <style>
        .block-bridge {
            display: flex;

            align-items: center;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
            text-align: center;
            /* background-color: rgba(0, 0, 0, 0.99);
            position: fixed; top:0; left:0; 
                        padding-bottom:var(--nav-height)!important;
            */

        }

        .block-bridge section {
            padding: 0 var(--padding);
            width: 100vw;
            height: 50vh;
            display: flex;
align-items: center;
flex-direction: column;
justify-content: center;
        }

        .block-bridge section.bridge-fans { 
            padding-bottom:var(--nav-height);
        }

        .block-bridge figure img {
            height: 100px;
            padding:var(--padding-small);
        }

        .block-bridge h2 {
            font-size: 1.2rem;
        }

        .block-bridge p {
            font-size: 1rem;
        }


        @media (min-width:768px) {

            .block-bridge {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                flex-direction: row;
                height: 100vh;
                text-align: center;
            }



            .block-bridge section {
            padding: 0 var(--padding);
            width: 50vw;
            height: 100vh;
            display: flex;
align-items: center;
flex-direction: column;
justify-content: center;
        }

        .block-bridge section.bridge-fans { 
            padding-bottom:initial;
        }




            .block-bridge figure img {
                height: 175px;
            padding:var(--padding-small);
            }

            .block-bridge h2 {
                font-size: 2.2rem;
            }
        }
    </style>

    <div class="block-bridge">
        <section class="bg-black" data-theme="dark">
            <figure> 
                <a href="https://www.flames.agency/promos/">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="Flames Agency Logo"
                    data-src="https://www.flames.agency/wp-content/uploads/300-flames.png"
                    class="lazyload" loading="lazy"></a>
                </figure>
            <header>
                <h2>Join Flames Agency</h2>
                <p>Get free promos, photoshoots & marketing!</p>
                <div class="buttons">
                    <!-- CTA 1 is a Modal  -->
                    <a href="https://www.flames.agency/promos/" class="button">Join Flames Agency</a>
                    <!-- No CTA 2 here :(  -->
                </div>
            </header>
        </section>
        <section class="bridge-fans bg-white" data-theme="light">
            <figure>
                <a href="https://www.patreon.com/thaiflames/" target="_blank">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    alt="Flames Icon - Love and Support"
                    data-src="https://www.flames.agency/wp-content/uploads/Flames-Icon-Love-Support.png"
                    class="lazyload" loading="lazy">
                </a>
            </figure>
            <header>
                <h2>Become a Supporter</h2>
                <p>Help support Thai girls & join the Community</p>
                <div class="buttons">
                    <!-- CTA 1 is a Modal  -->
                    <a href="https://www.patreon.com/thaiflames/" target="_blank" class="button">Become a Supporter</a>
                    <!-- No CTA 2 here :(  -->
                </div>
            </header>
        </section>
    </div>
<?php endif; ?>
<!-- HEADER ENDS -->