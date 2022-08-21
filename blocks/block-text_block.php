<?php include ('block-settings.php'); ?>

<?php 
$text_area = get_sub_field('text_area');
?>

<div id="<?php echo esc_attr($block_id); ?>" class="row-block text-block <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <?php // include ('snippet-header.php'); ?>
    <?php include ('snippet-block-section-header.php'); ?>
    <div class="w-max margin-auto">
        <?php the_sub_field('text_area'); ?>
    </div>
</div>