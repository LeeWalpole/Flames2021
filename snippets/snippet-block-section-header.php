<?php 
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline') ?: get_the_title();
$subheadline = get_sub_field('subheadline');
$hero_logo = get_sub_field('hero_logo');
$featured_media = get_sub_field('featured_media');
$acf_data_direction = get_sub_field('data_direction');
$data_direction = $acf_data_direction ?: "ltr";
?>
<?php if( $headline ) : ?>
<div class="w-max margin-auto">
    <header class="header" data-theme="<?php esc_attr($data_theme); ?>">
        <?php if( $kicker ) : ?><strong class="kicker prefade"><?php echo $kicker; ?></strong><?php endif; ?>
        <h2 class="headline prefade"><?php echo $headline; ?></h2>
        <?php if( $subheadline ) : ?><div class="lead w-safe prefade"><?php echo $subheadline; ?></h2><?php endif; ?>
            <?php include ('snippet-cta.php'); ?>
    </header>
</div>
<?php endif; ?>