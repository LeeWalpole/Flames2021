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
    <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/dist/min2.css"
        onload="this.rel='stylesheet'">
    <script defer src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/min2.js"></script>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <style>
        /* More Critical Font CSS 
        :root {
            --font-1: 'Modern Era';
            --font-1b: 'Modern Era';
            --font-1bb: 'Modern Era';
            --regular: 400;
            --medium: 500;
            --bold: 800;
            --heavy: 900;
        }

        * {
            font-family: var(--font-1);
            font-weight: var(--regular);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: var(--color-1b);
        }
        */
    </style>




</head>





<body id="body" class="body">

    <?php wp_body_open(); ?>

    <!-- If Thai translated version exists, give visitor option to chose between English and Thai via popup -->

    <?php include ('snippets/loader.php'); ?>

    <?php // include ('snippets/translate.php'); ?>

    <?php get_template_part( 'snippets/snippet', 'nav' ); ?>

    <main id="app" class="w-safe">

        <section class="hero">

            <div class="hero-row">

                <a href="javascript:void(0)" target="_blank" class="hero-icon"><i
                        class="fa-brands fa-instagram"></i></a>

                <?php $profile_image = get_field( 'profile_image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $profile_image ) : ?>
                <figure class="hero-feature">
                    <img data-src="<?php echo wp_get_attachment_image_url( $profile_image, $size ); ?>"
                        src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="lazyload"
                        loading="lazy" alt="Natcha Profile Pic for Flames Agency">
                </figure>
                <?php endif; ?>






                <!-- <a href="javascript:void(0)" data-target="modal-hero-more" data-toggle="modal" class="hero-icon"><i
                        class="fa-solid fa-ellipsis"></i></a> -->


                <a href="javascript:void(0)" data-target="modal-hero-more" data-toggle="modal"
                    class="hero-icon hero-icon-message">

                    <svg id="Iconly_Light-outline_Message" data-name="Iconly/Light-outline/Message"
                        xmlns="http://www.w3.org/2000/svg" width="48" height="43" viewBox="0 0 48 43">
                        <g id="Message" transform="translate(0 0)">
                            <path id="Message-2" data-name="Message"
                                d="M13.094,43a12.625,12.625,0,0,1-9.4-4.044A14.557,14.557,0,0,1,0,29V14A14.557,14.557,0,0,1,3.7,4.044,12.625,12.625,0,0,1,13.094,0H34.86A13.3,13.3,0,0,1,47.977,14l0,14.9A13.3,13.3,0,0,1,34.84,43ZM3.642,14V29c0,5.994,3.974,10.346,9.452,10.346H34.819A9.664,9.664,0,0,0,44.335,29l0-15.115A9.657,9.657,0,0,0,34.819,3.651H13.094C7.616,3.651,3.642,8,3.642,14ZM20.118,24.218l-.387-.282L9.808,16.041a1.824,1.824,0,0,1,2.041-3.012l.225.151,9.91,7.886a3.317,3.317,0,0,0,3.793.211l.283-.2L35.9,13.186a1.823,1.823,0,0,1,2.473,2.666l-.2.183-9.856,7.91a6.963,6.963,0,0,1-8.2.273Z"
                                transform="translate(0 0)" fill="#fff" />
                        </g>
                    </svg>


                </a>




                <!-- <a href="#" class="hero-icon"><img src="/assets/OnlyFans_Social_Icon_Square_Blue.svg" class="lazyload"></a> -->

            </div>

            <header class="header">
                <h1 class="display_name">{{display_name}}</h1>
                <p class="username">{{username}}</p>
                <a href="javascript:void(0)" data-target="modal-hero-more" data-toggle="modal" class="button">Connect
                    with Me</a>
            </header>
            <!-- <span class="feature-gradient"></span> -->

        </section>





        <?php 
$images = get_field('gallery');
if( $images ): ?>
 <section class="grid-3">
        <?php foreach( $images as $image ): ?>

            <figure class="grid-feature">
                <a href="<?php echo esc_url($image['sizes']['large']); ?>" class="glightbox2">
                    <picture class="ratio" data-ratio="1x1">
                        <source media="" data-srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                            srcset="<?php echo esc_url($image['sizes']['thumbnail']); ?>">
                        <img data-src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            class="lazyload" loading="lazy"
                            alt="<?php echo esc_attr($profile_name); ?> Profile Pic for Flames Agency">
                    </picture>
                </a>
            </figure>

        <?php endforeach; ?>
        </section>
<?php endif; ?>

        <?php $gallery = get_field('gallery'); if( $gallery ): ?>
       
            <?php foreach( $gallery as $gallery_image ):  ?>


            <?php endforeach; ?>
   
        <?php endif; ?>



        <?php /* <?php echo esc_attr( $menuLink['target'] ? $menuLink['target'] : '_self' ); ?> */ ?>

        <?php if(have_rows('links')): ?>
        <section id="weblinks" class="profile-links">
            <h6 class="small-headline">Connect with <?php echo esc_attr($profile_name); ?> on:</h6>
            <ul class="w-safe">
                <?php while (have_rows('links')) : the_row(); $menuLink  = get_sub_field('link'); ?>
                <li class="profile-link"><a href="<?php echo esc_attr($menuLink['url']); ?>" class="button-ghost"
                        target="_blank"
                        title="<?php echo esc_attr($profile_name); ?> - "><?php echo $menuLink['title'] ?></a></li>
                </li>
                <?php endwhile; ?>
            </ul>
        </section>
        <?php endif;  ?>



        <?php if(have_rows('socials')): ?>
        <section id="weblinks" class="profile-links">
            <h6 class="small-headline">Social Link with <?php echo esc_attr($profile_name); ?> on:</h6>
            <ul class="w-safe">
                <?php while (have_rows('socials')) : the_row(); 
                echo $social_icon  = get_sub_field('social_icon');
                echo $social_link  = get_sub_field('social_link');
                ?>
                <?php endwhile; ?>
            </ul>
        </section>
        <?php endif;  ?>




    </main>


    <script src="http://afarkas.github.io/lazysizes/lazysizes.min.js"></script>

    <script src="https://unpkg.com/vue@3"></script>





    <script>
        const {
            createApp
        } = Vue

        createApp({
                data() {
                    return {
                        display_name: 'Name of User',
                        short_bio: 'Short bio goes here',
                        username: '@username'

                    }
                }
            })



            .mount('#app')
    </script>






    <footer class="footer color-bg-1" data-theme="dark">


        <figure class="flex footer-logo w-max  margin-auto center"> <a href="https://www.flames.agency center"
                title="Flames Agency Logo"> <img
                    src="https://i0.wp.com/www.flames.agency/wp-content/uploads/flames-logo-horizontal-white.png?h=80"
                    data-src="https://i0.wp.com/www.flames.agency/wp-content/uploads/flames-logo-horizontal-white.png?h=80"
                    alt="Flames Agency" class="lazyload" loading="lazy"></a></figure>

        <nav class="footer-nav">
            <ul class="footer-nav-ul">
                <li><a href="https://www.ladsholidayguide.com/about/">About</a></li>
                <li><a href="https://www.ladsholidayguide.com/about/privacy-policy/">Privacy</a></li>
                <li><a href="https://www.ladsholidayguide.com/about/terms-and-conditions/">Terms</a></li>
                <li><a href="https://www.ladsholidayguide.com/contact/">Contact</a></li>
            </ul>
        </nav>

        <ul class="footer-socials w-max m-auto">
            <li>
                <a href="https://www.facebook.com/LadsGuide/" class="postfade"
                    title="More&amp;nbspLads Holiday Guide"><svg class="svg-inline--fa fa-facebook-f fa-w-10"
                        aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg><!-- <i class="fab fa-facebook-f" aria-hidden="true"></i> --></a>
            </li>
            <li>
                <a href="https://www.instagram.com/ladsholidayguide/" class="postfade"
                    title="More&amp;nbspLads Holiday Guide"><svg class="svg-inline--fa fa-instagram fa-w-14"
                        aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg><!-- <i class="fab fa-instagram" aria-hidden="true"></i> --></a>
            </li>
        </ul>




        <small class="footer-copyright"> Thai Flames | ?? 2022<br>
            <span>Connecting beautiful people, brands and ideas.</span>
        </small>

        <a href="https://www.leewalpole.co.uk/" class="footer-credit" target="_blank">
            Crafted with <i class="fas fa-heart color-gradient" style="padding:0 4px;"></i> by Flames Agency Ltd.
        </a>

    </footer>


    <!-- Modals Below -->
    <aside id="modal-hero-more" class="modal">
        <!-- <div class="modal-inner"> -->
        <div class="modal-menu w-safe">
            <ul class="modal-list">
                <li class="modal-list-item"><a href="#" target="_blank">Onlyfans</a></li>
                <li class="modal-list-item"><a href="#" target="_blank">Glamourfans</a></li>
                <li class="modal-list-item"><a href="#" target="_blank">Fanvue</a></li>
            </ul>
            <ul class="modal-list">
                <li class="modal-list-item" data-dismiss="modal">Cancel</li>
            </ul>
        </div>
        <!--  
            <span class="close" data-dismiss="modal">&times;</span>
            <h3>Dismiss with [&times;] button</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button data-dismiss="modal">Close</button>
         -->
    </aside>




    <!-- Modals Below -->
    <aside id="modal-contact" class="modal">

        <div class="modal-inner w-safe">






        </div>



    </aside>






    <script defer src="dist/min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>



    <script>
        document.addEventListener('click', function (e) {
            e = e || window.event;
            var target = e.target || e.srcElement;

            if (target.hasAttribute('data-toggle') && target.getAttribute('data-toggle') == 'modal') {
                if (target.hasAttribute('data-target')) {
                    var m_ID = target.getAttribute('data-target');
                    document.getElementById(m_ID).classList.add('open');
                    e.preventDefault();
                }
            }

            // Close modal window with 'data-dismiss' attribute or when the backdrop is clicked
            if ((target.hasAttribute('data-dismiss') && target.getAttribute('data-dismiss') == 'modal') ||
                target.classList.contains('modal')) {
                var modal = document.querySelector('[class="modal open"]');
                modal.classList.remove('open');
                e.preventDefault();
            }
        }, false);
    </script>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>


    <script>
        var lightbox = GLightbox();
        lightbox.on('open', (target) => {
            console.log('lightbox opened');
        });
        var lightboxDescription = GLightbox({
            selector: '.glightbox2',
            openEffect: 'zoom',
            closeEffect: 'fade',
        });
        var lightboxVideo = GLightbox({
            selector: '.glightbox3'
        });
        lightboxVideo.on('slide_changed', ({
            prev,
            current
        }) => {
            console.log('Prev slide', prev);
            console.log('Current slide', current);

            const {
                slideIndex,
                slideNode,
                slideConfig,
                player
            } = current;

            if (player) {
                if (!player.ready) {
                    // If player is not ready
                    player.on('ready', (event) => {
                        // Do something when video is ready
                    });
                }

                player.on('play', (event) => {
                    console.log('Started play');
                });

                player.on('volumechange', (event) => {
                    console.log('Volume change');
                });

                player.on('ended', (event) => {
                    console.log('Video ended');
                });
            }
        });

        var lightboxInlineIframe = GLightbox({
            selector: '.glightbox4'
        });

        /* var exampleApi = GLightbox({ selector: null });
        exampleApi.insertSlide({
            href: 'https://picsum.photos/1200/800',
        });
        exampleApi.insertSlide({
            width: '500px',
            content: '<p>Example</p>'
        });
        exampleApi.insertSlide({
            href: 'https://www.youtube.com/watch?v=WzqrwPhXmew',
        });
        exampleApi.insertSlide({
            width: '200vw',
            content: document.getElementById('inline-example')
        });
        exampleApi.open(); */
    </script>







</body>

</html>