

<!-- hero_simple : Default Hero (No image)
hero_featured : Hero with Image
hero_split : Image / Text Split (coming soon)
hero_stack : Image / Text Stacked (coming soon)
hero_youtube_inline : YouTube Inline (coming soon)
hero_youtube_overlay : YouTube BG (coming soon) -->


<!--
hero_simple : Default Hero (No image)
hero_featured : Hero with Image
hero_split : Image / Text Split (coming soon)
hero_stack : Image / Text Stacked (coming soon)
hero_youtube_inline : YouTube Inline (coming soon)
hero_youtube_overlay : YouTube BG (coming soon)
hero_none : Remove Hero
hero_vertical_stack : Image on top of Headline

hero_simple : Default Hero (No image)
hero_featured : Hero with Image
hero_split : Image / Text Split (coming soon)
hero_stack : Image / Text Stacked (coming soon)
hero_youtube_inline : YouTube Inline (coming soon)
hero_youtube_overlay : YouTube BG (coming soon)
hero_none : Remove Hero
hero_vertical_stack : Image on top of Headline

hero_simple : No Image (Default)
hero_image_text : Image Left / Text Right
hero_text_image : Text Left / Image Right
hero_image_top : Image Top / Text Bottom
hero_text_top : Text Top / Image Bottom
hero_overlay : Image Overlay
hero_none : Text Left / Image Right
-->
<?php 
$hero_layout = get_field('hero_layout');
switch ($hero_layout) { ?>
<?php case 'hero_simple': ?>
<h1>hero_simple</h1>
<?php break; case 'hero_image_text':?>
<h1>hero_image_text</h1>
<?php break; case 'hero_text_image':?>
<h1>hero_text_image</h1>
<?php break; case 'hero_image_top':?>
<h1>hero_image_top</h1>
<?php break; case 'hero_text_top':?>
<h1>hero_text_top</h1>
<?php break; case 'hero_overlay':?>
<h1>hero_overlay</h1>
<?php break; case 'hero_none':?>
<h1>hero_none</h1>
<?php break; default: 
}
?>
