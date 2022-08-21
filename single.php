<?php get_header(); // includes nav and hero ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

    <?php get_template_part( 'blocks/blocks' ); ?>

    <?php if ( !empty( get_the_content() ) ) : ?>
        <div class="bg-white row-block page-block">
            <div class="w-max article-body">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>

<?php endwhile; endif; ?>

<?php get_footer();  ?>