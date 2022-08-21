<!-- This is a Showcase Block -->
<?php // include ('clone-header.php'); ?>

<?php include ('block-settings.php'); ?>

<?php 
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline') ?: get_the_title();
$subheadline = get_sub_field('subheadline');
$hero_logo = get_sub_field('hero_logo');
$featured_media = get_sub_field('featured_media');
$acf_data_direction = get_sub_field('data_direction');
$data_direction = $acf_data_direction ?: "ltr";
?>

<?php if( have_rows('hero_images') ) : ?>
<?php while( have_rows('hero_images') ): the_row(); ?>
<?php // grab ACF image if it exists...
$acf_hero_image_url = wp_get_attachment_image_src(get_sub_field('hero_image_portrait'), '')[0]; 
$acf_hero_image_url = wp_get_attachment_image_src(get_sub_field('hero_image_portrait'), '')[0]; 
?>
<?php endwhile; ?>
<?php endif; ?>

<?php 
// check if it exists, if not, grab the featured image or fallback image
// $hero_image_url = $acf_hero_image_url ?: get_the_post_thumbnail_url($post->ID, '') ?: "data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=";
// // use jetpack to resize images for screensizes
// $hero_smartphone = Jetpack_PostImages::fit_image_url ($hero_image_url, 360, 720);
// $hero_tablet = Jetpack_PostImages::fit_image_url ($hero_image_url, 768, 768);
// $hero_desktop = Jetpack_PostImages::fit_image_url ($hero_image_url, 1366, 683);
// $hero_desktop_plus = Jetpack_PostImages::fit_image_url ($hero_image_url, 1920, 960);
?>

<style>
    /* 
    .showcase-cell img {
        display: block;
        max-height: 100%;
        margin: 0 auto;
        max-width: 100%;
        opacity: 0;
        -webkit-transition: opacity 0.4s;
        transition: opacity 0.4s;
    }
    */

    /* fade in lazy loaded image 
    .showcase-cell img.flickity-lazyloaded,
    .showcase-cell img.flickity-lazyerror {
        opacity: 1;
    }
    */
</style>

<style>
    :root {
        --iphone-height: 606px;
        --iphone-width: 300px;
        --iphone-bleed: 2px;
        --iphone-radius: 2.2em;
    }


    .showcase-cell {
        overflow: hidden;
        opacity: 0.5;
        transition: transform 0.33s ease, opacity 0.33s ease;
        transform: scale(0.75);

    }

    .showcase-cell.is-selected {
        transform: scale(1);
        opacity: 1;
    }
</style>




<?php $gallery = get_sub_field('gallery'); if( $gallery ): ?>

<div id="<?php echo esc_attr($block_id); ?>" class="row-block <?php echo esc_attr($bg_color); ?> phone-slider-block"
    data-theme="<?php echo esc_attr($data_theme); ?>">

    <?php include ('snippet-block-section-header.php'); ?>

    <div class="iphone-12-box">
        <figure class="iphone-12-frame">
            <img src="https://www.flames.agency/wp-content/uploads/flames-agency-iphone-12-case.png">
        </figure>
        <div class="showcase-gallery"
            data-flickity='{ "autoPlay": 2000, "wrapAround": true , "pauseAutoPlayOnHover": true, "lazyLoad": 3 }'>
            <?php foreach( $gallery as $image ): $image_url = $image['sizes']['medium'];  ?>

            <figure class="showcase-cell">
                <picture>
                    <source type="image/png" media="(min-width: 461px)"
                        srcset="<?php echo $image = Jetpack_PostImages::fit_image_url ($image_url, 300, 606); ?>">
                    <source type="image/png" media="(max-width: 460px)"
                        srcset="<?php echo $image = Jetpack_PostImages::fit_image_url ($image_url, 300, 606); ?>">
                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                        data-flickity-lazyload="<?php echo $image = Jetpack_PostImages::fit_image_url ($image_url, 300, 606); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" class="prefade" loading="lazy">
                </picture>
            </figure>
            <?php // echo esc_html($image['caption']); ?>
            <?php // echo esc_url($image['url']); ?>
            <?php endforeach; ?>


        </div>
    </div>
</div>
<?php endif; ?>