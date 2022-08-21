<?php /* Template Name: Split Screen */ ?>

<?php get_header(); // includes nav and hero ?>



<!-- INJECT SHORTCODE (BELOW) -->
<!-- INJECT SHORTCODE (BELOW) -->
<!-- INJECT SHORTCODE (BELOW) -->

<?php // echo do_shortcode('[acf_frontend form="form_61daec74e79ec"]'); ?>

<!-- INJECT SHORTCODE (ABOVE) -->
<!-- INJECT SHORTCODE (ABOVE) -->
<!-- INJECT SHORTCODE (ABOVE) -->



<style>
    .lw-form {
        width: 100% !important;
        display: block !important;
        padding: var(--padding-big) !important;
    }

    .lw-form form {
        display: block;
        grid-gap: var(--padding-small);
        width: 100%;
        max-width: var(--w-max);

    }

    .lw-form form ul {
        display: grid;
        grid-gap: 0 var(--padding-small);
        width: 100%;
    }

    .lw-form ul>* {
        grid-column: span 12;
        margin: 0;
    }

    @media (min-width:768px) {
        .lw-form ul>* {
            grid-column: span 6;
        }

        .lw-form ul>.wppb-default-e-mail {
            grid-column: span 12;
        }

    }

    .lw-form .username_prefix:focus-within::before {
        content: " @";
        position: absolute;
        left: -24px !important;
        top: 0;
        height: var(--input-height-big);
        line-height: var(--input-height-big);
        font-size: var(--form-large);
        color: var(--grey);
        width: 20px;
        opacity: 0.25;
        transition: all 0.25s ease-in-out;
        margin-left: 32px !important;
    }


    .lw-form .submit,
    .lw-form .submit * {
        all: unset;
    }



    .lw-form p.form-submit {
        display: block;
    }



    .lw-form .submit {
        background: var(--color-1a);
        color: var(--color-0a) !important;
        height: var(--button-height) !important;
        line-height: var(--button-height) !important;
        display: block !important;
        padding: 0 var(--padding-small) !important;
        grid-column: span 12;
        text-align: center;
        width: 100%;

    }


    .lw-form input:required:focus:valid {
        border: 2px solid var(--color-1c) !important;
        background: unset;
    }
</style>

<style>
        .splitscreen {
            /* height: 100%;
                    width: 50%;
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    overflow-x: hidden;
                    padding-top: 20px; */
            display: flex;
            flex-direction: column;

        }

        /* .splitscreen-left,
                .splitscreen-right {
                    display: block;
                    position: relative;
                } */



        @media (min-width:768px) {

            .splitscreen {
                display: grid;
                grid-gap: 0;
                height: 100vh;
                grid-template-rows: 1fr;
                grid-template-columns: 1fr 1fr;
            }


            .splitscreen-left,
            .splitscreen-right {}


            .middle_me {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                margin: 0 auto;
                text-align: left;
            }
        }


        .splitscreen header {
            display: flex;
            justify-content: center;
            align-items: left;
            flex-direction: column;
            height: 100%;
            padding: var(--padding-big) !important;
            text-align:left!important;

        }

        .splitscreen header .headline {
            font-size: var(--headline);
            margin: var(--padding) 0 var(--padding-small);
        }

        .splitscreen header .subheadline {
            font-size: var(--p);
            margin-bottom: 0;
        }
    </style>



<main id="content" role="main">















    <main id="content" role="main">

        <div class="splitscreen">

            <section class="splitscreen-left bg-black" data-theme="dark">

                <header class="header">
                    <h2 class="headline"><?php the_title(); ?></h2>
                    <div class="subheadline"><?php the_excerpt(); ?></div>
                </header>

            </section>


            <section class="splitscreen-right bg-white" data-theme="light">
                <div class="middle_me">
                    <div class="bg-white" data-theme="light">
                        <article id="post-<?php the_ID(); ?>" class="form lw-form">
                            <?php the_content(); ?>
                        </article>
                    </div>
                </div>
            </section>

        </div>


    </main>


    <?php /*
<?php get_header(); ?>
    <main id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
                <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
            </header>
            <div class="entry-content" itemprop="mainContentOfPage">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
                <?php the_content(); ?>
                <div class="entry-links"><?php wp_link_pages(); ?></div>
            </div>
        </article>
        <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
        <?php endwhile; endif; ?>
    </main>


        <?php get_footer(); ?>