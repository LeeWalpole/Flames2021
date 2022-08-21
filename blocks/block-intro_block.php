<?php include ('block-settings.php'); ?>

<?php 
$text_area = get_sub_field('text_area');
?>

<?php if( $text_area ) : ?>
<div id="<?php echo esc_attr($block_id); ?>" class=" row-block intro-block <?php echo esc_attr($bg_color); ?>" data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="w-safe margin-auto">
        <p class="intro"><?php echo $text_area; ?></p>
    </div>
</div>
<?php endif; ?>