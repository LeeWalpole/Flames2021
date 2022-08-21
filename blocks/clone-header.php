<?php 
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline');
$lead = get_sub_field('lead');
?>
<?php 
$cta_1 = get_sub_field('cta_1');
if( $cta_1 ): 
    $cta_1_url = $cta_1['url'];
    $cta_1_title = $cta_1['title'];
    $cta_1_target = $cta_1['target'] ? $cta_1['target'] : '_self';
    ?>
<?php endif; ?>
<?php 
$cta_2 = get_sub_field('cta_2');
if( $cta_2 ): 
    $cta_2_url = $cta_2['url'];
    $cta_2_title = $cta_2['title'];
    $cta_2_target = $cta_2['target'] ? $cta_2['target'] : '_self';
    ?>
<?php endif; ?>