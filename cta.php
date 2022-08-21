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
<!-- No popup code yet -->
<?php $cta_1_url = null; ?>
<?php } elseif($cta_1 == "ecwid") { ?>
<?php 
$cta_1_id = get_sub_field('cta_1_id');
$cta_1_url = "#" // have this there just to pass variable test later;
// ecwid_prodyuct_id  ?>

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
<?php } elseif($cta_2 == "link") { ?>
<?php 
    $cta_2_link = get_sub_field('cta_2_link');
    if( $cta_2_link ): 
    $cta_2_url = $cta_2_link['url'];
    $cta_2_title = $cta_2_link['title'];
    $cta_2_target = $cta_2_link['target'] ? $cta_2_link['target'] : '_self';    
    endif; ?>
<?php } elseif($cta_2 == "ecwid") { ?>
<?php $cta_2_id = get_sub_field('cta_2_id'); // ecwid_prodyuct_id 
    $cta_2_url = "#" // have this there just to pass variable test later; ?>
<?php $cta_2_link = null; ?>
<?php } else { ?>
<?php $cta_2_link = null; ?>
<?php } // end_cta_2 ?>




    <?php if($cta_1 == "ecwid") { ?>

        <style>

/*Button color*/
.ecsp-Product
{ background-color: transparent!important;
}

.ecsp-Product *  { 
all:unset;
}


.ecsp-Product button  { 
    /* padding:0 var(--padding); */
    display:inline-block!important;
    text-align:center!important;
    height:var(--button-height)!important;
    line-height:var(--button-height)!important;
    padding:0 var(--padding)!important;
    font-weight: 500!important; 
}


html#ecwid_html body#body .ecsp.ecsp-SingleProduct-v2 .ecwid-SingleProduct-options, html#ecwid_html body#body .ecsp.ecsp-SingleProduct-v2 .ecwid-SingleProduct-qty, html#ecwid_html body#body .ecsp.ecsp-SingleProduct-v2 .ecwid-btn--addToBag, html#ecwid_html body#body .ecsp.ecsp-SingleProduct-v2 div[customprop='addtobag'], html#ecwid_html body#body .ecsp.ecsp-SingleProduct-v2 .ecwid-AddToBagButton { 
    margin:0!important;
}

html#ecwid_html body#body .ecsp, html#ecwid_html body#body .ecwid { 
padding:0!important;
}


        </style>

        <div class="buttons">

    <div class="ecsp ecsp-SingleProduct-v2 ecsp-Product ec-Product-<?php echo esc_attr($cta_1_id); ?> button"
        itemtype="http://schema.org/Product" data-single-product-id="<?php echo esc_attr($cta_1_id); ?>">
        <div class="ecsp-title" itemprop="name" style="display:none;" content="<?php echo esc_attr($cta_1_id); ?>">
        </div>
        <div customprop="addtobag"></div>
    </div>

    </div>

    <?php } elseif( isset ( $cta_1_url ) ) { ?>

    <div class="buttons">

        <a href="<?php echo esc_attr($cta_1_url); ?>" target="<?php echo esc_attr($cta_1_target); ?>"
            class="button"><?php echo $cta_1_title; ?></a>

        <?php if( isset ( $cta_2_url ) ) : ?>
        <a href="<?php echo esc_attr($cta_2_url); ?>" target="<?php echo esc_attr($cta_2_target); ?>"
            class="button"><?php echo $cta_2_title; ?></a>
        <?php endif; ?>

    </div>

    <?php } ?>