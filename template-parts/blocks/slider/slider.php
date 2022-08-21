<?php

/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}

?>



<?php $gallery = get_field('gallery'); if( $gallery ): ?>
<figure id="<?php echo esc_attr($id); ?>" class="feature">
    <div class="iphone-12-box">
        <figure class="iphone-12-frame ">
            <img src="https://www.flames.agency/wp-content/uploads/flames-agency-iphone-12-case.png">
        </figure>
        <div class="carousel flickity-smartphone-slider"
            data-flickity='{ "autoPlay": 1500, "wrapAround": false , "pauseAutoPlayOnHover": false }'>
            <?php foreach( $gallery as $image ): ?>
            <figure class="iphone-12-cell">
                <picture>
                    <source type="image/png" media="(min-width: 461px)"
                        srcset="<?php echo esc_url($image['sizes']['medium']); ?>">
                    <source type="image/png" media="(max-width: 460px)"
                        srcset="<?php echo esc_url($image['sizes']['medium']); ?>">
                    <img src="<?php echo esc_attr($image['alt']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" class="prefad lazyloa" loading="lazy">
                </picture>
            </figure>
            <?php // echo esc_html($image['caption']); ?>
            <?php // echo esc_url($image['url']); ?>
            <?php endforeach; ?>
        </div>
    </div>
</figure>
<?php endif; ?>

<?php /*

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php if( have_rows('slides') ): ?>
		<div class="slides">
			<?php while( have_rows('slides') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div>
					<?php echo wp_get_attachment_image( $image['id'], 'full' ); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php else: ?>
		<p>Please add some slides.</p>
	<?php endif; ?>
</div>
*/ ?>