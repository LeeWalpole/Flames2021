<?php
$cta_1 = get_sub_field('cta_1'); 
$cta_2 = get_sub_field('cta_2'); 
?>

<?php if ($cta_1 != "no_cta") : // if CTA isn't no_cta  ?>


<div class="buttons">

    <?php switch ($cta_1) { case 'no_cta': ?>
    <!-- No CTA 1 here :(  -->
    <?php break; case 'link': ?>
    <!-- CTA 1 is a Link  -->
    <?php  
    $cta_1_link = get_sub_field('cta_1_link');
    if( $cta_1_link ): 
    $cta_1_url = $cta_1_link['url'];
    $cta_1_title = $cta_1_link['title'];
    $cta_1_target = $cta_1_link['target'] ? $cta_1_link['target'] : '_self';    
    endif; 
    ?>
    <?php if( $cta_1_link ): ?>
    <a href="<?php echo esc_attr($cta_1_url); ?>" target="<?php echo esc_attr($cta_1_target); ?>"
        class="button"><?php echo $cta_1_title; ?></a>
    <?php endif; ?>

    <?php break; case 'modal': ?>
    <!-- CTA 1 is a Modal  -->
    <?php  
    $cta_1_modal = get_sub_field('cta_1_modal');
    if( $cta_1_modal ): 
    $cta_1_url = $cta_1_modal['url'];
    $cta_1_title = $cta_1_modal['title'];
    $cta_1_target = $cta_1_modal['target'] ? $cta_1_link['target'] : '_self';    
    endif; 
    ?>

    
    <?php if( $cta_1_modal ): ?>
    <a href="javascript:void(0);" data-modal="<?php echo substr($cta_1_url, 1); ?>" class="button modal-trigger"><?php echo $cta_1_title; ?></a>
    <?php endif; ?>

    <?php break; case 'id': ?>

    <?php 
    $cta_1_id = get_sub_field('cta_1_id');
    ?>

    <!-- CTA 1 is a product ID  -->
    <?php if( $cta_1_id ): ?>
    <div class="buttons">
        <div class="ecsp button ec-Product-<?php echo esc_attr($cta_1_id); ?>" itemtype="http://schema.org/Product"
            data-single-product-id="<?php echo esc_attr($cta_1_id); ?>">
            <div class="ecsp-title" itemprop="name" style="display:none;" content="<?php echo esc_attr($cta_1_id); ?>">
            </div>
            <div customprop="addtobag"></div>
        </div>
    </div>
    <?php endif; ?>

    <?php break; default:?>

    <!-- CTA 1 Default is nothing :(  -->

    <?php } ?>


    <?php $cta_2 = get_sub_field('cta_2');  switch ($cta_2) { case 'no_cta': ?>

    <!-- No CTA 2 here :(  -->

    <?php break; case 'link': ?>

    <!-- CTA 2 is a Link  -->

    <?php  
    $cta_2_link = get_sub_field('cta_2_link');
    if( $cta_2_link ): 
    $cta_2_url = $cta_2_link['url'];
    $cta_2_title = $cta_2_link['title'];
    $cta_2_target = $cta_2_link['target'] ? $cta_2_link['target'] : '_self';    
    endif; 
    ?>

    <?php if( $cta_2_link ): ?>
    <a href="<?php echo esc_attr($cta_2_url); ?>" target="<?php echo esc_attr($cta_2_target); ?>"
        class="button"><?php echo $cta_2_title; ?></a>
    <?php endif; ?>


    <?php break; case 'modal': ?>
    <!-- CTA 2 is a Modal  -->
    <?php  
    $cta_2_modal = get_sub_field('cta_2_modal');
    if( $cta_2_modal ): 
    $cta_2_url = $cta_2_modal['url'];
    $cta_2_title = $cta_2_modal['title'];
    $cta_2_target = $cta_2_modal['target'] ? $cta_2_link['target'] : '_self';    
    endif; 
    ?>

    
    <?php if( $cta_2_modal ): ?>
    <a href="javascript:void(0);" data-modal="<?php echo substr($cta_2_url, 1); ?>" class="button modal-trigger"><?php echo $cta_2_title; ?></a>
    <?php endif; ?>

    <?php break; case 'id': ?>

    <?php 
    $cta_2_id = get_sub_field('cta_2_id');
    ?>

    <!-- CTA 2 is a product ID  -->
    <?php if( $cta_2_id ): ?>
    <div class="buttons">
        <div class="ecsp button ec-Product-<?php echo esc_attr($cta_2_id); ?>" itemtype="http://schema.org/Product"
            data-single-product-id="<?php echo esc_attr($cta_2_id); ?>">
            <div class="ecsp-title" itemprop="name" style="display:none;" content="<?php echo esc_attr($cta_2_id); ?>">
            </div>
            <div customprop="addtobag"></div>
        </div>
    </div>
    <?php endif; ?>

    <?php break; default:?>

    <!-- CTA 2 Default is nothing :(  -->

    <?php } ?>

    </div>

    <?php endif; // end not empty CTA buttons ?>