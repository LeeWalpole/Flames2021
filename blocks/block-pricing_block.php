<?php include ('block-settings.php'); ?>

<div id="<?php echo esc_attr($block_id); ?>" class=" row-block steps-block <?php echo esc_attr($bg_color); ?>"
    data-theme="<?php echo esc_attr($data_theme); ?>">
    <?php include ('snippet-block-section-header.php'); ?>
    <?php if (have_rows('table_row') ) : ?>
    <section class="w-max margin-auto">

        <table>
            <caption><?php echo date('F, Y'); ?> Pricelist</caption>
            <thead>
                <tr>
                    <th scope="col">Promotion</th>
                    <th scope="col">What you get</th>
                    <th scope="col">Price</th>
                    <th scope="col">Button</th>
                </tr>
            </thead>
            <tbody>

                <?php while( have_rows('table_row') ) : the_row(); ?>
                <?php 
            $table_title = get_sub_field('title');
            $table_description = get_sub_field('description');
            $table_price = get_sub_field('price');
            $table_cta = get_sub_field('cta_1');
            ?>
                <tr>
                    <td data-label="Account"><strong><?php if( $table_title ) : echo $table_title; endif; ?></strong>
                    </td>
                    <td data-label="Due Date"><?php if( $table_title ) : echo $table_description; endif; ?></td>
                    <td data-label="Amount"><?php if( $table_price ) : echo $table_price; endif; ?></td>
                    <td data-label="Period">
                        <?php include ('snippet-cta.php'); ?>
                    </td>
                </tr>
                <?php endwhile; ?>
                <tr class="unavailable">
                    <td scope="row" data-label="Acount"><strong>Permanent Grid Post</strong></td>
                    <td data-label="Due Date">Appear on our main feed forever!</td>
                    <td data-label="Amount">฿750</td>
                    <td data-label="Period">
                        <div class="buttons"><a href="#" class="button">SOLD OUT</a></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <?php endif; ?>
    <?php include ('snippet-cta.php'); ?>
</div>