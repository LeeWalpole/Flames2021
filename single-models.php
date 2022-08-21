<?php get_header(); // includes nav and hero ?>


<style>
    .buttons-support {
        margin: 0 !important;
        position: absolute;
        right: var(--padding-small);
        display: block;
        height: var(--mugshot-height) !important;

    }

    .buttons-support .button {

        height: var(--mugshot-height) !important;
        line-height: var(--mugshot-height) !important;
    }
</style>



<?php // Profile Image
$profile_image = get_field('profile_image');
if( $profile_image ) : 
    $profile_image_url = wp_get_attachment_image_src( $profile_image,"full") [0];
else :
$profile_image_url = "https://static.vecteezy.com/system/resources/previews/002/275/818/original/female-avatar-woman-profile-icon-for-network-vector.jpg";
endif; 
?>

<?php // Profile Cover Image
$cover_image = get_field('cover_image');
if( $cover_image ) : 
$cover_image_url = wp_get_attachment_image_src( $cover_image,"full") [0];
else :
$cover_image_url = "https://static.vecteezy.com/system/resources/previews/002/275/818/original/female-avatar-woman-profile-icon-for-network-vector.jpg";
endif; 
?>

<?php 
$profile_name = get_the_title(); 
$profile_username = $post->post_name;
?>

<style>
    @media (min-width:768px) {
        .profile-desktop {
            margin: 0 auto;
            max-width: 600px;
        }

        .post-section {
            margin: 0 auto !important;
            max-width: 600px !important;
            text-align: center !important;
            display: block !important;
        }


        .post-section>div {
            margin: 0 auto !important;
            max-width: 600px !important;
            text-align: center !important;
            display: block !important;
        }

    }
</style>

<div class="profile-desktop">

    <section class="bg-black profile-feature" data-theme="dark">

        <figure class="feature-image">
            <picture class="ratio" data-ratio="1x1">
                <source type="image/jpg" media="" data-srcset="<?php echo esc_attr($profile_image_url); ?>">
                <img data-src="<?php echo esc_attr($profile_image_url); ?>"
                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="lazyload" loading="lazy"
                    alt="<?php echo esc_attr($profile_name); ?> Profile Pic for Flames Agency" />
            </picture>
        </figure>
    </section>


    <div id="profile-header-and-tabs" class="profile-header-and-tabs">

        <header id="profile-header" class="profile-header colspan-12 bg-black" data-theme="dark">

            <a class="js-close-modal js-modal-close icon-back" href="#!">
                <i class="fas fa-arrow-left" aria-hidden="true"></i>
            </a>

            <section href="http://localhost:3000/author/greenseller/" class="profile-header-items js-modal-close">
                <img src="https://i1.wp.com/www.flames.agency/wp-content/uploads/flames-thai-model-natcha-profile.jpg?fit=750%2C750&amp;ssl=1"
                    alt="Natcha Profile Image"
                    data-src="https://i1.wp.com/www.flames.agency/wp-content/uploads/flames-thai-model-natcha-profile.jpg?fit=750%2C750&amp;ssl=1"
                    class="profile-mugshot ls-is-cached lazyloaded" loading="lazy">
                <div class="profile-meta">
                    <h2 class="profile-name"><?php echo $profile_name; ?></h2>
                    <small>28, from Phuket, Thailand
                    </small>
                </div>
                <!-- <div class=" buttons-support">
                    <a href="#" class="button bg-gradient">Support Me

                    </a>
                </div> -->

                <a href="javascript:void(0);" data-modal="popup-1" style="position:absolute; right:var(--padding);" class="modal-trigger">
                    <img src="https://www.flames.agency/wp-content/uploads/Flames-Icon-Love-Support.png" height="40">
                </a>
            </section>

            <!-- <style>
                        .profile-buttons svg path {
                            fill: linear-gradient(#9F6CFF 0%, #9F6CFF 10%, #FF0AAA 75%, #FF6CCC 100%);
                            fill: white;
                        }
                    </style> -->
            <!-- 
                    <div class="profile-buttons"> -->

            <!-- 
                        <a href="#modal-message-request" class="nav_modal-button bg-black ">
                            <svg width="23.996" height="23.581" version="2.0">
                                <use href="#icon-message" />
                            </svg>
                        </a> -->

            <!-- <a href="#" class="profile-favourite bg-gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.217" height="24.2"
                                viewBox="0 0 26.217 24.2">
                                <path id="Icon_ionic-md-heart-empty" data-name="Icon ionic-md-heart-empty"
                                    d="M22.382,4.5a7.754,7.754,0,0,0-5.9,2.767,7.754,7.754,0,0,0-5.9-2.767,7.127,7.127,0,0,0-7.21,7.254c0,5.01,4.456,9.031,11.205,15.232l1.9,1.714,1.9-1.714c6.75-6.2,11.205-10.222,11.205-15.232A7.127,7.127,0,0,0,22.382,4.5ZM17.29,25.253l-.265.246-.542.492-.542-.492-.265-.246a80.1,80.1,0,0,1-7.733-7.689C6.179,15.377,5.4,13.588,5.4,11.754A5.242,5.242,0,0,1,6.892,8.017a5.129,5.129,0,0,1,3.693-1.5,5.78,5.78,0,0,1,4.355,2.048L16.483,10.4l1.544-1.834a5.759,5.759,0,0,1,4.355-2.048,5.154,5.154,0,0,1,3.7,1.5,5.253,5.253,0,0,1,1.494,3.737c0,1.828-.788,3.624-2.546,5.811A80.265,80.265,0,0,1,17.29,25.253Z"
                                    transform="translate(-3.375 -4.5)" fill="#fff" />
                            </svg>
                            <img src="https://www.flames.agency/wp-content/uploads/Flames-Icon-Love-Support.png" height="36"> 
                        </a> 

                    </div>-->



            <!-- <div class="profile-buttons">
                <a href="#" class="profile-favourite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.217" height="24.2" viewBox="0 0 26.217 24.2">
                        <path id="Icon_ionic-md-heart-empty" data-name="Icon ionic-md-heart-empty"
                            d="M22.382,4.5a7.754,7.754,0,0,0-5.9,2.767,7.754,7.754,0,0,0-5.9-2.767,7.127,7.127,0,0,0-7.21,7.254c0,5.01,4.456,9.031,11.205,15.232l1.9,1.714,1.9-1.714c6.75-6.2,11.205-10.222,11.205-15.232A7.127,7.127,0,0,0,22.382,4.5ZM17.29,25.253l-.265.246-.542.492-.542-.492-.265-.246a80.1,80.1,0,0,1-7.733-7.689C6.179,15.377,5.4,13.588,5.4,11.754A5.242,5.242,0,0,1,6.892,8.017a5.129,5.129,0,0,1,3.693-1.5,5.78,5.78,0,0,1,4.355,2.048L16.483,10.4l1.544-1.834a5.759,5.759,0,0,1,4.355-2.048,5.154,5.154,0,0,1,3.7,1.5,5.253,5.253,0,0,1,1.494,3.737c0,1.828-.788,3.624-2.546,5.811A80.265,80.265,0,0,1,17.29,25.253Z"
                            transform="translate(-3.375 -4.5)" fill="#fafafa" />
                    </svg>
                </a>

                <a href="#modal-message-request" class="nav_modal-button">
                    <svg width="23.996" height="23.581" version="2.0">
                        <use href="#icon-message" />
                    </svg>
                </a>
            </div> -->
        </header>

        <nav class="bg-offblack profile-tabs" data-theme="dark">
            <ul role="tablist" class="profile-tab-links">
                <li><a role="tab" aria-controls="gallery" href="#gallery" class="profile-tab-link"><i
                            class="fa-solid fa-camera"></i></a>
                </li>
                <li><a role="tab" aria-controls="about" href="#about" class="profile-tab-link"><i
                            class="fa-solid fa-address-card"></i></a></li>
                <li><a role="tab" aria-controls="links" href="#links" class="profile-tab-link"><i
                            class="fa-solid fa-link"></i></a></li>
                <li><a role="tab" aria-controls="wishlist" href="#wishlist" class="profile-tab-link"><i
                            class="fa-solid fa-star"></i></a></li>
            </ul>
        </nav>

    </div>


    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->
    <!-- *** TABS / PROFILE GRID (BELOW) *** -->

    <div class=" w-safe m-auto">

        <!-- Profile Gallery Below -->
        <section role="tabpanel" id="gallery" class="grid-3 w-safe m-auto gallery panel">
            <?php $gallery = get_field('gallery'); if( $gallery ): ?>

            <?php foreach( $gallery as $gallery_image ):  ?>
            <?php 
                $image_large = wp_get_attachment_image_src($gallery_image, 'large'); 
                $image_thumbnail = wp_get_attachment_image_src($gallery_image, 'thumbnail'); 
                ?>

            <figure class="image ratio bg-offwhite" data-ratio="1x1">
                <a href="<?php echo $image_large[0]; ?>">
                    <img class="lightbox-preview lazyload post-thumbnail" loading="lazy"
                        src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                        data-src="<?php echo $image_thumbnail[0]; ?>"
                        alt="<?php echo esc_attr($profile_name); ?> Profile Pic for Flames Agency">
                </a>
            </figure><!--  src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" -->

            <?php endforeach; ?>

            <?php endif; ?>
        </section>
        <!-- Profile Gallery Below -->

        <!-- Tab 2 Content Below -->
        <section role="tabpanel" id="about" class="w-safe m-auto about panel">

            <div class="grid">

                <aside class="profile-aside colspan-6 mobspan-6" data-theme="dark">
                    <strong>Age</strong>
                    <p>32</p>
                </aside>

                <aside class="profile-aside colspan-6  mobspan-6" data-theme="dark">
                    <strong>Nationality</strong>
                    <p>Thailand</p>
                </aside>

                <hr class="colspan-12">

                <aside class="profile-aside colspan-12" data-theme="dark">
                    <strong>Bio</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris
                        nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt
                        in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </aside>

                <hr class="colspan-12">

                <aside class="profile-aside colspan-12" data-theme="dark">
                    <strong>Why sponsor me?</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris
                        nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt
                        in
                        culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labort dolore magna aliqua. Ut enim
                        ad
                        minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt
                        in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </aside>

            </div>
        </section>
        <!-- Tab 2 Content Above -->

        <!-- Tab 3 Content Below -->
        <section role="tabpanel" id="links" class="w-safe m-auto links panel">

            <aside class="profile-aside" data-theme="dark">
                <!-- <strong class="kicker">Socials</strong> -->
                <ul class="list-socials">
                    <li>
                        <a href="https://www.instagram.com/thaiflames/" class="prefade"
                            title="More&nbspFlames Agency"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.patreon.com/thaiflames/" class="prefade" title="More&nbspFlames Agency"><i
                                class="fab fa-patreon" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.patreon.com/thaiflames/" class="prefade" title="More&nbspFlames Agency"><i
                                class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>


            </aside>

            <hr class="colspan-12">


            <aside class="profile-aside profile-aside-links" data-theme="dark">
                <!-- <strong class="kicker">Websites</strong> -->
                <ul class="list-links">
                    <li><a href="#" class="prefade">
                            this is some link text</a></li>
                    <li><a href="#" class="prefade">
                            steverogers.com</a></li>
                    <li><a href="#" class="prefade">
                            steverogers.com</a></li>
                    <li><a href="#" class="prefade">
                            steverogers.com</a></li>
                    <li><a href="#" class="prefade">
                            steverogers.com</a></li>
                </ul>
            </aside>



        </section>
        <!-- Tab 3 Content Above -->


    </div>



</div>

<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->
<!-- *** TABS / PROFILE GRID (ABOVE) *** -->





<style>
    .pop-nav {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 11 !important;
        ;
    }

    #js-modal {
        z-index: 10 !important;
    }
</style>



<?php // get_template_part("snippets/popup","message"); ?>


<nav class="profile-nav bg-black" data-theme="dark" style="display:none;">
    <ul>
        <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24.375" height="24.367"
                    viewBox="0 0 24.375 24.367">
                    <path id="home-Regular_1_"
                        d="M227.41,1018.582l-6.25-5.025a5.978,5.978,0,0,0-7.445,0l-6.25,5.025a5.9,5.9,0,0,0-2.215,4.62v7.49a5.942,5.942,0,0,0,5.937,5.931h3.438v-5.931a2.813,2.813,0,0,1,5.625,0v5.931h3.437a5.941,5.941,0,0,0,5.938-5.931v-7.49A5.9,5.9,0,0,0,227.41,1018.582Zm.34,12.11a4.064,4.064,0,0,1-4.063,4.056h-1.562v-4.056a4.688,4.688,0,0,0-9.375,0v4.056h-1.563a4.064,4.064,0,0,1-4.062-4.056v-7.49a4.033,4.033,0,0,1,1.514-3.159l6.25-5.025a4.094,4.094,0,0,1,5.1,0l6.25,5.025a4.034,4.034,0,0,1,1.514,3.159v7.49Z"
                        transform="translate(-205.25 -1012.257)" fill="#fff" />
                </svg>
            </a></li>
        <li><a href="" class="active"><svg xmlns="http://www.w3.org/2000/svg" width="26.414" height="26.414"
                    viewBox="0 0 26.414 26.414">
                    <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(1 1)">
                        <path id="Path_72" data-name="Path 72"
                            d="M26.293,15.4A10.9,10.9,0,1,1,15.4,4.5a10.9,10.9,0,0,1,10.9,10.9Z"
                            transform="translate(-4.5 -4.5)" fill="none" stroke="#fafafa" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" />
                        <path id="Path_73" data-name="Path 73" d="M29.775,29.775l-4.8-4.8"
                            transform="translate(-5.775 -5.775)" fill="none" stroke="#fafafa" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" />
                    </g>
                </svg>
            </a></li>
        <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="23.295" height="25.943"
                    viewBox="0 0 23.295 25.943">
                    <g id="Group_7" data-name="Group 7" transform="translate(1 1)">
                        <path id="Path_17" data-name="Path 17"
                            d="M27.3,30.486V27.824A5.324,5.324,0,0,0,21.972,22.5H11.324A5.324,5.324,0,0,0,6,27.824v2.662"
                            transform="translate(-6 -6.542)" fill="none" stroke="#0a84ff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" />
                        <path id="Path_18" data-name="Path 18"
                            d="M22.648,9.824A5.324,5.324,0,1,1,17.324,4.5a5.324,5.324,0,0,1,5.324,5.324Z"
                            transform="translate(-6.676 -4.5)" fill="none" stroke="#0a84ff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" />
                    </g>
                </svg>
            </a></li>
        <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="27.604" height="27.019"
                    viewBox="0 0 27.604 27.019">
                    <g id="Component_65_1" data-name="Component 65 – 1" transform="translate(1)">
                        <g id="Chate_message" transform="translate(0 2.439)">
                            <path id="Union_21" data-name="Union 21"
                                d="M11.606,23.575c-.048,0-.1.006-.146.006H2.292C1.026,23.581,0,22.273,0,20.661V11.7a3.7,3.7,0,0,1,.019-.374A12,12,0,0,1,24,12c0,6.626-5.371,11.582-12,11.582C11.867,23.581,11.736,23.579,11.606,23.575Z"
                                fill="none" stroke="#fff" stroke-width="2" />
                            <line id="Line_12" data-name="Line 12" x2="7" transform="translate(8.344 9.744)" fill="none"
                                stroke="#fff" stroke-linecap="round" stroke-width="2" />
                            <line id="Line_13" data-name="Line 13" x2="4" transform="translate(8.032 15.597)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                        </g>
                        <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(15.354)" fill="#e09"
                            stroke="#fafafa" stroke-width="1">
                            <circle cx="5.625" cy="5.625" r="5.625" stroke="none" />
                            <circle cx="5.625" cy="5.625" r="5.125" fill="none" />
                        </g>
                    </g>
                </svg>
            </a></li>
    </ul>
</nav>


<!-- Below code alows us to reuse SVGs 
<svg width="23.996" height="23.581" version="2.0">
    <use href="#icon-message" />
</svg>        
-->
<svg style="display: none" xmlns="http://www.w3.org/2000/svg" width="23.996" height="23.581"
    viewBox="0 0 23.996 23.581">
    <defs>
        <symbol id="icon-message">
            <g id="Component_65_2" data-name="Component 65 – 2" transform="translate(1 1)">
                <g id="Chate_message">
                    <path id="Union_21" data-name="Union 21"
                        d="M10.639,21.575c-.044,0-.089.005-.134.005H2.1A2.439,2.439,0,0,1,0,18.909v-8.2a3.382,3.382,0,0,1,.017-.342A11,11,0,0,1,22,10.981a10.671,10.671,0,0,1-11,10.6C10.878,21.581,10.758,21.579,10.639,21.575Z"
                        transform="translate(0 0)" fill="none" stroke="#fff" stroke-width="2" />
                    <line id="Line_12" data-name="Line 12" x2="7" transform="translate(7.362 8.918)" fill="none"
                        stroke="#fff" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_13" data-name="Line 13" x2="4" transform="translate(7.228 14.274)" fill="none"
                        stroke="#fff" stroke-linecap="round" stroke-width="2" />
                </g>
            </g>
        </symbol>
    </defs>
    <use href="#icon-message" />
</svg>




<style>
    :root {
        --nav-height: 62px !important;
    }

    @media (min-width:768px) {
        :root {
            --nav-height: 66px !important;
        }
    }

    .bottom-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9 !important;
        transition: all 0.33s;
        width: 100vw;
        /* transform: translateY(-100%); */
        /* background-color:var(--transparent)!important; */
        opacity: 0;
        pointer-events: none;
        box-shadow: 0px 0px 200px 0 rgb(0 0 0 / 100%) !important;
    }

    .scrolling-down .bottom-bar {
        opacity: 1;
        pointer-events: initial;
        /* transform: translateY(var(--nav-height)); */
    }

    .bottom-bar .buttons {
        padding: var(--padding);
        height: 100%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin: 0 auto !important;
    }


    .bottom-bar .buttons .button {
        margin: 0 !important;
    }

    .button-icon {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button-icon span {
        margin-left: var(--padding-small);
    }
</style>

<div class="bottom-bar bg-offblack" data-theme="dark">
    <div class="buttons w-safe">
        <a href="javascript:void(0);" data-modal="" class="button modal-trigger">Support Natcha</a>
        <a href="#modal-message-request" class="nav_modal-button bg-trans button-icon">
            <svg width="23.996" height="23.581" version="2.0">
                <use href="#icon-message" />
            </svg><span>Chat</span></a>
    </div>
</div>






<!-- Temp Popup Modal Below -->

<section id="popup-1" class="modal modal-popup bg-overlay">
    <!-- Background Overlay -->
    <div class="modal__transparent-layer modal-close"></div>
    <div data-form="popup-form-container-models"
        class="popup-form-container popup-form bg-white w-max" data-theme="light">

        <form name="google-sheet" class="form" id="popup-form-models">
            <!-- Hide form-fieldsets when form is sucessfully submitted -->
            <div class="form-fieldsets">
                <fieldset id="fieldset_1">

                    <p class="kicker center">DONATION FORM</p>
                    <header class="header center">

                        <h2>DONATION FORM</h2><br>
                        <small>The donation form allows fans to donate to their favourite models. I am thinking of using wpsimplepay.com - because it works with the affiliate tracking plugin I plan to use (https://affiliatewp.com/)</small>
                    </header>


                <!-- *** Hidden Fields Below *** -->
                <!-- *** Hidden Fields Below *** -->
                <!-- *** Hidden Fields Below *** -->

                <!-- Hide above fieldset when form is submitted -->
                <!-- Date and Time Stamps for additional form data -->
                <!-- <input type="hidden" id="instagram" name="instagram"> -->
                <!-- <input type="hidden" id="print_ip" name="ip_address" value$_SERVER['REMOTE_ADDR'];> -->
                <!-- <input type="hidden" id="print_country_code" name="country_code"> -->
                <input type="hidden" id="permalink" name="permalink" value="https://www.flames.agency/join/models/free-shoutouts/">
                <input type="hidden" id="source_url" name="source_url"
                    value="https://www.flames.agency/join/models/free-shoutouts/">
                <input type="hidden" id="instagram_url" name="instagram_url" value="">
                <!-- <input type="hidden" id="print_date" name="application_date">
                <input type="hidden" id="print_time" name="time"> -->

                <input type="hidden" id="form_list_id" name="form_list_id" value="181751532">
                <input type="hidden" id="form_template" name="form_template" value="models">
                <input type="hidden" id="page_slug" name="page_slug" value="free-shoutouts">
                

                <!-- *** Hidden Fields Above *** -->
                <!-- *** Hidden Fields Above *** -->
                <!-- *** Hidden Fields Above *** -->


            </div><!-- Hide this div when form submits -->
        </form>
    </div>
    <!-- Loader Appears when form is waiting to be validated -->
    <div class="form-loader">
        <div class="spinners">
            <div class="square1"></div>
            <div class="square2"></div>
            <div class="square3"></div>
        </div>
    </div>
    <!-- Only Show this when form is successfully Submitted -->
    <section id="popup-success_message" class="bg-white w-max" data-theme="light">
        <header class="header w-safe bg-white" data-theme="light">
            <strong class="kicker ">Application sent!</strong>
            <h5 class="headline ">We’ll be in touch soon...</h5>
            <div class="lead w-safe ">
                <p>Make sure you’re following <a href="https://www.instagram.com/thaiflames/">@thaiflames on
                        Instagram</a> so we can verify your account via DM.</p>
            </div>
            <div class="buttons">
                <!-- CTA 1 is a Link  -->
                <a href="https://instagram.com/thaiflames/" class="button">Follow @ThaiFlames</a>
                <!-- <i class="fab fa-instagram" style="color:white!important;"></i>   -->
            </div>
        </header>
    </section>
</section>
<!-- Modal Popup -->


<script>
    document.getElementById('popup-form-models').onsubmit = function (e) {
        e.preventDefault();
        var required = document.getElementsByClassName('required');
        var valid = Array.from({
            length: required.length
        }, (v, i) => 0);

        for (var i = 0; i < required.length; i++) {
            if (required[i].value == '') {
                required[i].parentElement.classList.add('input-value-no');
                valid[i] = 0;
            } else {
                var classes = required[i].parentElement.classList;
                if (classes.contains('input-value-no')) {
                    required[i].parentElement.classList.remove('input-value-no');

                }
                valid[i] = 1;
            }
        }
        if (!valid.includes(0)) {
            // Form is ready, now what??? 
            // In below case, I've decided to send the data to Google Sheets.

            // alert("form submitted?");
            e.returnValue = true;

            /* Submit to Google Sheet (Below) */
            const scriptURL =
                'https://www.flames.agency/wp-content/themes/LW-Flames/clickup/form-models-submit.php'
            let form = document.getElementById('popup-form-models');
            let name = document.getElementById('name');
            let email = document.getElementById('email');
            const modal_popup = document.querySelector(".modal-popup")
            modal_popup.classList.add('form-submitted');
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                // If success add class to main modal popup so we can hide webform and show success message
                .then(response => modal_popup.classList.add('form-submitted-success'))
                // If error, display this error message - this doesn't work yet
                .catch(error => form.classList.add('form-submitted-failed', 'nay'))
            /* Submit to Google Sheet (Above) */
        }
    }
</script>

<script>
    // Grab Instagram username from form, and CONCAT to create hidden Instgram URL input field.
    let instagram = document.getElementById('instagram');
    instagram.onkeyup = function () {
        document.getElementById('instagram_url').value = 'https://www.instagram.com/' + instagram.value + '/';
    };
</script>

<!-- Temp Modal Popup Above  -->




<?php get_footer();  ?>

<?php /* if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?> <?php endwhile; endif; */ ?>