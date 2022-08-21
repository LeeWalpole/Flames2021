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
<figure class="feature feature-single-image <?php echo esc_attr($featured_media); ?>">
    <picture class="ratio" data-ratio="<?php echo esc_attr($media_ratio); ?>">
        <source type="image/png" media="(min-width: 1600px)" srcset="<?php echo esc_attr($thumb); ?>">
        <source type="image/png" media="(min-width: 461px) and (max-width: 1600px)"
            srcset="<?php echo esc_attr($thumb); ?>">
        <source type="image/png" media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
            srcset="<?php echo esc_url($thumb); ?>">
        <source type="image/png" media="(min-width: 461px) and (max-width: 900px)"
            srcset="<?php echo esc_attr($thumb); ?>">
        <source type="image/png" media="(max-width: 460px)" srcset="<?php echo esc_url($thumb); ?>">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            alt="<?php echo esc_attr($alt);  ?>" data-src="<?php echo esc_url($thumb); ?>"
            class="lazyload prefade" loading="lazy">
    </picture>
</figure>

