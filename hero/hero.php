<!-- Hero Settings -->

<?php $hero_layout = get_field('hero_layout'); ?>
<?php switch ($hero_layout) { case 'layout_default': ?>
    <?php get_template_part( 'hero/layout', 'default' ); ?>
    <?php break; case 'hero_app_1': ?>
        <style>
/* .hero-block {
min-height: 100vh;
} */
    </style>
        <?php get_template_part( 'hero/layout', 'hero_app_1' ); ?>
        <?php break; case 'hero_none': ?>
        <!-- Hero has been Removed -->
        <?php break; case 'hero_stack': ?>
        <?php get_template_part( 'hero/layout', 'hero_stack' ); ?>
    <?php break; default: ?>
    <?php get_template_part( 'hero/layout', 'default' ); ?>
<?php } // hero_feature_tyle ?>