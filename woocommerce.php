<?php get_header(); // includes nav and hero ?>

<?php get_template_part( 'blocks/blocks' ); ?>


<div class="bg-white row-block page-block">
    <div class="w-max article-body">
        <?php woocommerce_content(); ?>
    </div>
</div>

<?php get_footer();  ?>