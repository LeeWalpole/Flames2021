<?php $gallery = get_sub_field('gallery'); if( $gallery ): ?>
<figure class="feature">
    <div class="iphone-12-box">
        <figure class="iphone-12-frame">
            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://www.flames.agency/wp-content/uploads/flames-agency-iphone-12-case.png" style="box-shadow: inset -0px -0px 0px 14px var(--<?php echo esc_attr($bg_color_only); ?>)" class="prefade lazyload" loading="lazy" alt="Flames Agency Smartphone Case">
        </figure>
        <div class="carousel flickity-smartphone-slider"
            data-flickity='{ "autoPlay": 3333, "wrapAround": false , "pauseAutoPlayOnHover": true, "lazyload": true }'>
            <?php foreach( $gallery as $image ): ?>
            <figure class="iphone-12-cell">
                <picture>
                    <source type="image/png" media="(min-width: 461px)"
                    data-srcset="<?php echo esc_url($image['sizes']['medium']); ?>">
                    <source type="image/png" media="(max-width: 460px)"
                        data-srcset="<?php echo esc_url($image['sizes']['small']); ?>">
                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-flickity-lazyload="<?php echo esc_url($image['sizes']['medium']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" class="prefade" loading="lazy">
                </picture>
            </figure>
            <?php // echo esc_html($image['caption']); ?>
            <?php // echo esc_url($image['url']); ?>
            <?php endforeach; ?>
        </div>
    </div>
</figure>
<?php endif; ?>

