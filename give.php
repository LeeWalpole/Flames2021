<?php get_header(); // includes nav and hero ?>


<?php get_template_part( 'blocks/blocks' ); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<div id="donations" class="bg-white row-block donations-block">
    <div class="w-max m-auto ">
        <?php give_get_template_part( 'single-give-form/content', 'single-give-form' ); ?>
    </div>
</div>


<div id="donations-wall" class="row-block bg-offwhite donations-wall" data-theme="light">
    <section class="w-max margin-auto" data-theme="light">
        <header class="header section-header" data-theme="">
        <strong class="kicker postfade">SPECIAL THANKS TO</strong>
                    <h2 class="headline postfade">Our Current Supporters</h2>
                    <div class="lead w-safe margin-auto postfade">
                        <p>Here’s a list of amazing fans who are helping to support this project so far!</p>
            </div>
        </header>
    </section>
    <div class="w-safe m-auto article-body">
        <?php echo do_shortcode('[give_donor_wall show_name="true" show_avatar="true" orderby="date" show_comments="false"]'); ?>
    </div>
    <div class="buttons">
        <!-- CTA 1 is a Link  -->
            <a href="#donations" target="_self" class="button">Support this Event!</a>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer();  ?>



<?php /*



<div id="donations-block" class="bg-white row-block donations-block">
    <div class="w-max m-auto ">
    <?php echo do_shortcode('[give_totals total_goal="50000"]'); ?>
    </div>
</div>

<div id="donations-wall" class="row-block bg-offwhite donations-wall" data-theme="light">
    <section class="w-max margin-auto" data-theme="light">

    <?php echo do_shortcode('[give_register id="1730" ]'); ?>




</section>
</div>

<div id="donations-wall" class="row-block bg-offwhite donations-wall" data-theme="light">
    <section class="w-max margin-auto" data-theme="light">

    <?php echo do_shortcode('[give_goal id="1730" show_bar="true"]'); ?>


</section>
</div>





<?php if ( !empty( get_the_content() ) ) : ?>
<div class="bg-white row-block">
    <div class="w-max article-body">
        <?php the_content(); ?>
    </div>
</div>
<?php endif; ?>
<?php endwhile; endif; ?>


*/ ?>



