<?php

/**
 * split Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'split-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'split';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$quote = get_field('quote') ?: 'Your split here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>

<?php 
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline');
$lead = get_sub_field('lead');
?>
<?php 
$cta_1 = get_sub_field('cta_1');
if( $cta_1 ): 
    $cta_1_url = $cta_1['url'];
    $cta_1_title = $cta_1['title'];
    $cta_1_target = $cta_1['target'] ? $cta_1['target'] : '_self';
    ?>
<?php endif; ?>
<?php 
$cta_2 = get_sub_field('cta_2');
if( $cta_2 ): 
    $cta_2_url = $cta_2['url'];
    $cta_2_title = $cta_2['title'];
    $cta_2_target = $cta_2['target'] ? $cta_2['target'] : '_self';
    ?>
<?php endif; ?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="split-blockquote">
        <span class="split-text"><?php echo $quote; ?></span>
    </blockquote>
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php // echo $background_color; ?>;
            color: <?php // echo $text_color; ?>;
        }
    </style>
</div><?php

/**
 * split Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'split-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'split';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$quote = get_field('quote') ?: 'Your split here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

<div class="bg-color row-block split-block">
    <div class="split split-swap w-max bg-white" data-direction="???">

        <figure>
            <picture class="ratio bg-white" data-ratio="4x5">
                <source type="image/jpeg" media="(min-width: 461px)" srcset="<?php echo $image_smartphone; ?>">
                <source type="image/jpeg" media="(max-width: 460px)" srcset="<?php echo $image_smartphone; ?>">
                <!-- <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Flames Agency"
                    class="prefade lazyload" loading="lazy"> -->
                <?php
$image = get_sub_field('image');
if( $image ):

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];
    // Thumbnail size attributes.
    $size = 'thumbnail';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];
?>
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
                <?php 
    // End caption wrap.
    if( $caption ): ?>
                <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
    </div>
    <?php endif; ?>
    <?php endif; ?>

    </picture>
    </figure>

    <header class="header bg-white prefade">
        <!-- <strong class="kicker">BEST CELEB BARNETS</strong> -->
        <?php if( $headline ) : ?><h6 class="headline"><?php echo $headline; ?></h6><?php endif; ?>
        <?php if( $lead ) : ?><p class="lead w-safe"><?php echo $lead; ?></p><?php endif; ?>
        <div class="buttons">
            <a href="#hero" class="button view-modal">LEARN MORE</a>
        </div>
    </header>

</div>
</div>


</div>