<?php 
$kicker = get_field('kicker');
$headline = get_field('headline');
$subheadline = get_field('subheadline');
?>
<?php 
$hero_image = get_field('hero_image');
$hero_logo = get_field('hero_logo');

$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<?php 
$cta_1 = get_field('cta_1');
if( $cta_1 ): 
    $cta_1_url = $cta_1['url'];
    $cta_1_title = $cta_1['title'];
    $cta_1_target = $cta_1['target'] ? $cta_1['target'] : '_self';
    ?>
<?php endif; ?>
<?php 
$cta_2 = get_field('cta_2');
if( $cta_2 ): 
    $cta_2_url = $cta_2['url'];
    $cta_2_title = $cta_2['title'];
    $cta_2_target = $cta_2['target'] ? $cta_2['target'] : '_self';
    ?>
<?php endif; ?>


<div class="bg-color row-block hero-block" id="hero">
    <div class="bg-white w-max hero">

        <figure class="hero-figure">
            <picture class="ratio bg-white" data-ratio="4x5">
                <source type="image/jpeg" media="(min-width: 461px)" srcset="">
                <source type="image/jpeg" media="(max-width: 460px)" srcset="">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Flames Agency"
                    class="prefade lazyload" loading="lazy">
            </picture>
        </figure>




        <header class="hero-header header bg-white prefade">
            <!-- <strong class="kicker">Flames Agency</strong> -->
            <?php if( $hero_logo ) :?>
            <img src="<?php echo wp_get_attachment_image_src( $hero_logo, $size)[0];?>" alt="Flames Agency"
                class="hero-logo prefade lazyload filter-black">
            <?php endif; ?>
            <?php if( $headline ) : ?><h1 class="headline"><?php echo $headline; ?></h1><?php endif; ?>
            <?php if( $subheadline ) : ?><div class="subheadline"><?php echo $subheadline; ?></div><?php endif; ?>
            <!-- <em class="lead">We connect beautiful brands with beautiful people.</em> -->
            <!-- <em class="lead">Thailand's hottest agency.</em> -->
            <div class="buttons">
                <a href="#" class="button view-modal">APPLY NOW</a>
                <a href="mailto:hello@flames.agency" class="button">Got a question?</a>
            </div>
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