<?php 
$section_kicker = get_sub_field('kicker');
$section_headline = get_sub_field('headline') ?: get_the_title();
$section_subheadline = get_sub_field('subheadline');
$section_hero_logo = get_sub_field('hero_logo');
$section_featured_media = get_sub_field('featured_media');
$acf_data_direction = get_sub_field('data_direction');
$data_direction = $acf_data_direction ?: "ltr";
?>
<?php if( $section_headline ) : ?>
<section class="w-max margin-auto" data-theme="<?php echo esc_attr($data_theme); ?>">
    <header class="header section-header" data-theme="<?php esc_attr($data_theme); ?>">
        <?php if( $section_kicker ) : ?><strong
            class="kicker prefade"><?php echo $section_kicker; ?></strong><?php endif; ?>
        <h2 class="headline prefade"><?php echo $section_headline; ?></h2>
        <?php if( $section_subheadline ) : ?><div class="lead w-safe margin-auto prefade">
            <?php echo $section_subheadline; ?></div><?php endif; ?>
    </header>
</section>
<?php endif; ?>