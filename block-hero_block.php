<?php include ('block-settings.php'); ?>

<?php $hero_layout = get_sub_field('hero_layout'); switch ($hero_layout) : case "hero_simple": ?>
<?php // include ('snippet-feature-image.php'); ?>
<style>
    .hero-block-simple {
        padding-bottom: var(--padding-small);
    }
</style>
<div id="<?php echo esc_attr($block_id); ?>" class="row-block hero-block-simple <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="w-max margin-auto" data-direction="<?php echo esc_attr($data_direction );?>">
        <?php include ('snippet-header.php'); ?>
    </div>
</div>

<?php break; ?>

<?php case "hero_split": ?>
<div id="<?php echo esc_attr($block_id); ?>" data-layout="<?php echo esc_attr($hero_layout); ?>"
    class="row-block split-block hero-block <?php if ($block_class == "slideshow_phone") : echo "split-block-phone-slider"; endif; ?> <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="split split-swap margin-auto" data-direction="<?php echo esc_attr($data_direction );?>">
        <?php include ('snippet-feature.php'); ?>
        <?php include ('snippet-header.php'); ?>
    </div>
</div>

<?php break; ?>


<?php case "hero_vertical_stack": ?>
<!-- Hero Removed -->

<div id="<?php echo esc_attr($block_id); ?>" data-layout="<?php echo esc_attr($hero_layout); ?>"
    class="row-block split-block hero-block <?php if ($block_class == "slideshow_phone") : echo "split-block-phone-slider"; endif; ?> <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="split split-swap margin-auto" data-direction="<?php echo esc_attr($data_direction );?>">
        <?php include ('snippet-feature.php'); ?>
        <?php include ('snippet-header.php'); ?>
    </div>
</div>

<?php break; ?>

<?php case "hero_none": ?>
<!-- Hero Removed -->

<?php break; ?>
<?php default: ?>

<div id="<?php echo esc_attr($block_id); ?>" class="row-block <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="w-max margin-auto" data-direction="<?php echo esc_attr($data_direction );?>">
        <?php include ('snippet-header.php'); ?>
    </div>
</div>

<?php endswitch; ?>