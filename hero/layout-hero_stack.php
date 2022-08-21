<?php include_once( 'hero-settings.php' ); ?>

<style>

.hero_stack  { 
height:100vh;
}

.hero_stack .hero  { 
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
height:100%;
}


.hero_stack .hero figure { 
height: 40%;
}


.hero_stack .hero figure img { 
height: 100%;
}


@media only screen and (min-width:768px) {

  .hero_stack .hero  { 
display: flex;
justify-content: center;
align-items: center;
height:100%;
}

  .hero_stack .hero figure, .hero_stack .hero header  { 
  width:100%;
}

}

.hero_stack figure  {  
    margin-bottom:var(--padding);
}

    </style>


<?php $hero_layout = get_field('hero_layout'); ?>
<?php if (have_rows('hero_stack') ) : ?>
            <?php while( have_rows('hero_stack') ) : the_row(); ?>
                <?php include_once( 'hero-header.php' ); ?>
            <?php endwhile; ?>
        <?php endif; //  end have_rows('hero_header' ?>
<div id="hero" class="<?php echo esc_attr($bg_color); ?> row-block hero-block <?php echo esc_attr($hero_layout); ?>" data-theme="<?php echo esc_attr($data_theme); ?>">
    <section class="w-max hero">
        <!-- Hero Feature Below -->
        <figure>
            <picture>
                <source type="image/jpeg" media="(min-width: 461px)"
                    srcset="<?php echo wp_get_attachment_image_src( $hero_image, $size)[0];?>">
                <source type="image/jpeg" media="(max-width: 460px)"
                    srcset="<?php echo wp_get_attachment_image_src( $hero_image, $size)[0];?>">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Flames Agency"
                    class="prefade lazyload" loading="lazy">
            </picture>
        </figure>
        <!-- Hero Header Below -->
        <?php include_once( 'snippet-header.php' ); ?>
    </section>
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