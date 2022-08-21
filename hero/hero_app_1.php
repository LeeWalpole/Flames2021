<?php include_once( 'hero-settings.php' ); ?>

<?php if (have_rows('hero_app_1') ) : ?>
<?php while( have_rows('hero_app_1') ) : the_row(); ?>
    <?php include_once( 'hero-header.php' ); ?>
    <?php include_once( 'cta.php' ); ?>
<?php endwhile; ?>
<?php endif; //  end have_rows('hero_header' ?>


<?php $hero_image = get_field('hero_image'); ?>
<?php $hero_layout = get_field('hero_layout'); ?>
<div id="hero" class="row-block hero-block <?php echo esc_attr($bg_color); ?> <?php echo esc_attr($hero_layout); ?>" data-theme="<?php echo esc_attr($data_theme); ?>">
    <div class="bg-white w-max hero">

        
        <figure class="hero-figure">
            <picture class="ratio" data-ratio="4x5">
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="<?php echo wp_get_attachment_image_src( $hero_image, $size)[0];?>">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="<?php echo wp_get_attachment_image_src( $hero_image, $size)[0];?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Flames Agency"
                    class="prefade lazyload" loading="lazy">
            </picture>
        </figure>

        <header class="hero-header header prefade">
            <!-- <strong class="kicker">Flames Agency</strong> -->
            <?php if( $hero_logo ) :?>
            <img src="<?php echo wp_get_attachment_image_src( $hero_logo, $size)[0];?>" alt="Flames Agency"
                class="hero-logo prefade lazyload filter-black">
            <?php endif; ?>
            <?php if( $kicker ) : ?><small class="kicker"><?php echo $kicker; ?></small><?php endif; ?>
            <?php if( $headline ) : ?><h1 class="headline"><?php echo $headline; ?></h1><?php endif; ?>
            <?php if( $subheadline ) : ?><div class="subheadline"><?php echo $subheadline; ?></div><?php endif; ?>
            <?php if( isset ( $cta_1_url ) ) : ?>
            <div class="buttons">
                <a href="<?php echo esc_attr($cta_1_url); ?>" target="<?php echo esc_attr($cta_1_target); ?>"
                    class="button"><?php echo $cta_1_title; ?></a>
                <?php if( isset ( $cta_2_url ) ) : ?>
                <a href="<?php echo esc_attr($cta_2_url); ?>" target="<?php echo esc_attr($cta_2_target); ?>"
                    class="button"><?php echo $cta_2_title; ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </header>
    </div>
</div>

<?php 
/*
switch ($hero_feature) { case 'feature-slideshow': ?>
<?php get_template_part( 'hero/feature', 'slideshow' ); ?>
<?php break; case 'feature-video': ?>
<?php get_template_part( 'hero/feature', 'video' ); ?>
<?php break; default: ?>
<!-- Default -->
<?php } 
*/    
?>

