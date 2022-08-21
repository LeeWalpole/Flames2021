<?php
$cta_1 = get_sub_field('cta_1');
if ($cta_1 == "no_cta") { ?>
<?php $cta_1_url = null; ?>
<!-- No CTA -->
<?php } elseif ($cta_1 == "product") { ?>
    <?php 
    $cta_1_product_id = get_sub_field('cta_1_product');
    // $cta_1_id = get_sub_field('cta_1_id') ?: "";
    if( $cta_1_product_id ): 
    $cta_1_url = "https://flames.agency/checkout/?add-to-cart=".$cta_1_product_id;
    $cta_1_title = get_sub_field('cta_1_product_label') ?: get_the_title( get_the_ID($cta_1_product_id) );
    $cta_1_target = "_self";
    endif; ?>

<?php } elseif($cta_1 == "link") { ?>
<?php 
    $cta_1_link = get_sub_field('cta_1_link');
    if( $cta_1_link ): 
    $cta_1_url = $cta_1_link['url'];
    $cta_1_title = $cta_1_link['title'];
    $cta_1_target = $cta_1_link['target'] ? $cta_1_link['target'] : '_self';    
    endif; ?>
    
<?php } elseif($cta_1 == "popup") { ?>
<!-- No popup code yet -->
<?php $cta_1_url = null; ?>
<?php } else { ?>
    <?php $cta_1_url = null; ?>
<?php } // end_cta_1 ?>

<?php
$cta_2 = get_sub_field('cta_2');
if ($cta_2 == "no_cta") { ?>
<?php $cta_2_link = null; ?>
<!-- No CTA -->
<?php } elseif ($cta_2 == "product") { ?>
    <?php 
    $cta_2_product_id = get_sub_field('cta_2_product');
    // $cta_2_id = get_sub_field('cta_2_id') ?: "";
    if( $cta_2_product_id ): 
    $cta_2_url = "https://flames.agency/checkout/?add-to-cart=".$cta_2_product_id;
    $cta_2_title = get_the_title( get_the_ID($cta_2_product_id) );
    $cta_2_target = "_self";
    endif; ?>
<h2><?php echo $cta_2_url; ?></h2>
<?php } elseif($cta_2 == "link") { ?>
<?php 
    $cta_2_link = get_sub_field('cta_2_link');
    if( $cta_2_link ): 
    $cta_2_url = $cta_2_link['url'];
    $cta_2_title = $cta_2_link['title'];
    $cta_2_target = $cta_2_link['target'] ? $cta_2_link['target'] : '_self';    
    endif; ?>
    <h2><?php echo $cta_2_url; ?></h2>
<?php } elseif($cta_2 == "popup") { ?>
<!-- No popup code yet -->
<?php $cta_2_link = null; ?>
<?php } else { ?>
    <?php $cta_2_link = null; ?>
<?php } // end_cta_2 ?>