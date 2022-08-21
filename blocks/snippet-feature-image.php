<?php
$image = get_sub_field('image');
if( $image ):
// Image variables.
$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];
// Thumbnail size attributes.
$size = 'medium';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
$media_ratio = "1x1";
?>
<?php endif; ?>

<?php 
$bg_color = get_sub_field('bg_color');
switch ($bg_color) { ?>
<?php case 'black':
    $data_theme = "dark";
    $bg_color = "bg-black"; ?>
<?php break; case 'offblack':
    $data_theme = "dark";
    $bg_color = "bg-offblack"; ?>
<?php break; case 'white':
    $data_theme = "light";
    $bg_color = "bg-white"; ?>
<?php break; case 'offwhite':
    $data_theme = "light";
    $bg_color = "bg-offwhite"; ?>
<?php break; default: 
}
?>

<?php 
$media_ratio = get_sub_field('media_ratio');
switch ($media_ratio) { ?>
<?php case 'ratio_auto':
    $output_media_ratio = '<picture>';
    ?>
<?php break; case 'ratio_1x1':
    $output_media_ratio = '<picture class="ratio" data-ratio="'.$media_ratio.'">';
    ?>
<?php break; case 'ratio_16x9':
    $output_media_ratio = '<picture class="ratio" data-ratio="'.$media_ratio.'">';
    ?>
<?php break; case 'ratio_4x5':
    $output_media_ratio = '<picture class="ratio" data-ratio="'.$media_ratio.'">';
    ?>
<?php break; default: 
    $output_media_ratio = '<picture>';
}
?>


<figure class="feature feature-single-image <?php echo esc_attr($featured_media); ?>">
    <picture <?php echo esc_attr($output_media_ratio); // outputs data ratio and ratio class (if require) ?>>
        <source media="(min-width: 1600px)" srcset="<?php echo esc_attr($thumb); ?>">
        <source media="(min-width: 461px) and (max-width: 1600px)"
            srcset="<?php echo esc_attr($thumb); ?>">
        <source media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
            srcset="<?php echo esc_url($thumb); ?>">
        <source media="(min-width: 461px) and (max-width: 900px)"
            srcset="<?php echo esc_attr($thumb); ?>">
        <source media="(max-width: 460px)" srcset="<?php echo esc_url($thumb); ?>">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            alt="<?php echo esc_attr($alt);  ?>" data-src="<?php echo esc_url($thumb); ?>"
            class="lazyload w-safe" loading="lazy">
    </picture>
</figure>

