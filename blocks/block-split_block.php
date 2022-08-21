<?php include ('block-settings.php'); ?>

<style>
.iphone-12-frame img {
    box-shadow: inset 0px 0px 40px 33px var(--black);
}
</style>

<div id="<?php echo esc_attr($block_id); ?>"
    class="row-block split-block <?php if ($block_class == "slideshow_phone") : echo "split-block-phone-slider"; endif; ?> <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="split split-swap w-max margin-auto" data-direction="<?php echo esc_attr($data_direction );?>">
        <?php include ('snippet-feature.php'); ?>
        <?php include ('snippet-header.php'); ?>
        <?php // include ('snippet-block-section-header.php'); ?>
    </div>
    <?php // include ('snippet-cta.php'); ?>
</div>


