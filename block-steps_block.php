<?php include ('block-settings.php'); ?>


<?php // include ('snippet-header.php'); ?>

<div id="<?php echo esc_attr($block_id); ?>" class=" row-block steps-block <?php echo esc_attr($bg_color); ?>" data-theme="<?php echo esc_attr($data_theme); ?>">
    
    <?php include ('snippet-block-section-header.php'); ?>
    <?php // include ('snippet-header.php'); ?>
    <?php if (have_rows('step') ) : ?>
    <section class="w-max margin-auto">
        <div class="grid grid-gap">
            <?php while( have_rows('step') ) : the_row(); ?>
            <?php 
            $step_kicker = get_sub_field('kicker');
            $step_headline = get_sub_field('headline') ?: get_the_title();
            $step_subheadline = get_sub_field('subheadline');
            $step_logo = get_sub_field('hero_logo');

            $step_logo_url = get_sub_field('hero_logo'); 
            $step_logo_short_url = substr($step_logo_url, 8); 
            substr($step_logo_url, 8);
            $step_logo_jetpack_url = "https://i0.wp.com/".$step_logo_short_url . "?h=100";

            ?>
            <aside class="colspan-4 step">

            <?php if( $step_logo_url ) :?>
                <figure class="step-feature">
                    <picture>
                        <source type="image/png" media="(min-width: 461px)"
                            srcset="<?php echo esc_attr($step_logo_jetpack_url); ?>>">
                        <source type="image/png" media="(max-width: 460px)"
                        srcset="<?php echo esc_attr($step_logo_jetpack_url); ?>">
                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            data-src="<?php echo esc_attr($step_logo_jetpack_url); ?>"
                            alt="Flames Agency" class="prefade" loading="lazy">
                    </picture>
                </figure>
                <?php endif; ?>

                <header class="header <?php esc_attr($bg_color); ?>" data-theme="<?php esc_attr($data_theme); ?>">
                    <?php if( $step_kicker ) : ?><strong class="kicker prefade"><?php echo $step_kicker; ?></strong><?php endif; ?>
                    <?php if( $step_headline ) : ?><h3 class="headline prefade"><?php echo $step_headline; ?></h3><?php endif; ?>
                    <?php if( $step_subheadline ) : ?><div class="lead w-safe prefade"><?php echo $step_subheadline; ?></div><?php endif; ?>
                </header>
            </aside>
            <?php endwhile; ?>
        </div>

        <?php include ('snippet-cta.php'); ?>

    </section>


    <?php endif; ?>



</div>