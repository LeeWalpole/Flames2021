<header class="hero-header header prefade">
    <!-- <strong class="kicker">Flames Agency</strong> -->
    <?php if( $hero_logo ) :?>
    <style>
        .prescroll .nav-bar img { 
        opacity: 0!important;
        } 
    </style>
    <img src="<?php echo wp_get_attachment_image_src( $hero_logo, $size)[0];?>" alt="<?php echo esc_attr(get_the_title()); ?>"
        class="hero-logo prefade lazyload">
    <?php endif; ?>
    <?php if( $kicker ) : ?><small class="kicker"><?php echo $kicker; ?></small><?php endif; ?>
    <?php if( $headline ) : ?><h1 class="headline"><?php echo $headline; ?></h1><?php endif; ?>
    <?php if( $subheadline ) : ?><div class="subheadline"><em><?php echo $subheadline; ?></em></div><?php endif; ?>

    <?php if( $cta_1 ) :  ?>
    <div class="buttons">
        <?php 
$cta_1_url = $cta_1['url'];
$cta_1_title = $cta_1['title'];
$cta_1_target = $cta_1['target'] ? $cta_1['target'] : '_self';  ?>
        <a href="<?php echo esc_attr($cta_1_url); ?>" target="<?php echo esc_attr($cta_1_target); ?>"
            class="button" data-target="<?php echo esc_attr($cta_1_id);?>"><?php echo $cta_1_title; ?></a>
        <?php if( $cta_2 ) :
$cta_2_url = $cta_2['url'];
$cta_2_title = $cta_2['title'];
$cta_2_target = $cta_2['target'] ? $cta_2['target'] : '_self';  ?>
        <a href="<?php echo esc_attr($cta_2_url); ?>" target="<?php echo esc_attr($cta_2_target); ?>"
            class="button"data-target="<?php echo esc_attr($cta_1_id);?>"><?php echo $cta_2_title; ?></a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</header>

