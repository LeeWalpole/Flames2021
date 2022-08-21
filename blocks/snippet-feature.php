<?php $featured_media = get_sub_field('featured_media'); switch ($featured_media) : case "image": ?>
<?php include ('snippet-feature-image.php'); ?>
<?php break; ?>
<?php case "slideshow_phone": ?>
<?php include ('snippet-feature-slideshow_phone.php'); ?>
<?php break; ?>
<?php default: ?>
<?php endswitch; ?>