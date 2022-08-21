<?php include ('block-settings.php'); ?>
<?php // include ('hero-settings.php'); ?>



<?php $hero_layout = get_sub_field('hero_layout'); switch ($hero_layout) : case "hero_simple": ?>
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
<style>
.hero-block>div { 
top: unset!important; 
transform: unset!important;
}
</style>
<div id="<?php echo esc_attr($block_id); ?>" data-layout="<?php echo esc_attr($hero_layout); ?>"
    class="row-block split-block hero-block <?php if ($block_class == "slideshow_phone") : echo "split-block-phone-slider"; endif; ?> <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="split split-swap margin-auto" data-direction="<?php echo esc_attr($data_direction );?>">
        <?php include ('snippet-feature.php'); ?>
        <?php include ('snippet-header.php'); ?>
    </div>
</div>

<?php break; ?>

<?php case "hero_overlay": ?>
<style>
.hero-block>div { 
top: unset!important; 
transform: unset!important;
}

.hero-block-overlay { 
position:relative;
height:100vh; width:100vw;
background:blue;
display:flex; align-items:center;
padding:0 var(--padding-big);
}

.hero-block-overlay .header { 
    position: relative;
    z-index:2;

}

.hero-block-overlay .feature { 
position:absolute;
top:0;
left:0;
height:100%; width:100%;
}

.hero-overlay .feature {
opacity:0.33;
width:100%; 
height:100%; object-fit:cover;
} 

.hero-overlay .feature img {
width:100%; 
height:100%; object-fit:cover;
} 


</style>
<div id="<?php echo esc_attr($block_id); ?>" data-layout="<?php // echo esc_attr($hero_layout); ?>"
    class="row-block overlay-block hero-block-overlay <?php if ($block_class == "slideshow_phone") : echo "split-block-phone-slider"; endif; ?> <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="hero-overlay">
    <?php // include ('snippet-feature.php'); // adding the  PHP here instead for this one as image size is different ?>

<?php
$image = get_sub_field('image');
if( $image ):
// Image variables.
$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];
$caption = $image['caption'];
// Thumbnail size attributes.
$size_desktop = 'w-desktop_plus';
$size_tablet = 'w-tablet';
$size_smartphone = 'w-smartphone';
$image_desktop = $image['sizes'][ $size_desktop ];
$image_tablet = $image['sizes'][ $size_tablet ];
$image_smartphone = $image['sizes'][ $size_smartphone ];

$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
// $media_ratio = "1x1";
?>

<?php endif; ?>

    <figure class="feature feature-single-image <?php echo esc_attr($featured_media); ?>">
    <picture>
        <source media="(min-width: 1600px)" srcset="<?php echo esc_attr($image_desktop); ?>">
        <source media="(min-width: 461px) and (max-width: 1600px)"
            srcset="<?php echo esc_attr($image_desktop); ?>">
        <source media="(min-width: 461px) and (max-width: 1280px) and (orientation: landscape)"
            srcset="<?php echo esc_url($image_desktop); ?>">
        <source media="(min-width: 461px) and (max-width: 900px)"
            srcset="<?php echo esc_attr($image_tablet); ?>">
        <source media="(max-width: 460px)" srcset="<?php echo esc_url($image_tablet); ?>">
        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
            alt="<?php echo esc_attr($alt);  ?>" data-src="<?php echo esc_url($image_tablet); ?>"
            class="lazyload w-safe" loading="lazy">
    </picture>
</figure>



    </div>
    <?php include ('snippet-header.php'); ?>
</div>

<?php break; ?>


<?php case "hero_vertical_stack": ?>
<!-- Hero Removed -->

<style>
.hero-block>div { 
    top: unset!important; 
    transform: unset!important;
}
</style>





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


<?php  /*
$hero_layout = get_sub_field('hero_layout');
switch ($hero_layout) { ?>
<?php case 'hero_simple': ?>
<h1>hero_simple</h1>
<?php break; case 'hero_image_text':?>
<!-- hero_image_text -->
<?php break; case 'hero_text_image':?>
<h1>hero_text_image</h1>
<?php break; case 'hero_image_top':?>
<h1>hero_image_top</h1>
<?php break; case 'hero_text_top':?>
<h1>hero_text_top</h1>
<?php break; case 'hero_overlay':?>
<?php break; case 'hero_none':?>
<h1>hero_none</h1>
<?php break; default: 
}
*/
?>

