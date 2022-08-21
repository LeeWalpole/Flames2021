<?php if(have_rows('blocks')):  while (have_rows('blocks')) : the_row();  ?>

<?php if( get_row_layout() == 'hero_block' ) { ?>
<?php get_template_part( 'blocks/block-hero_block' ); ?>

<?php } elseif( get_row_layout() == 'text_block' ) { ?>
<?php get_template_part( 'blocks/block-text_block' ); ?>

<?php } elseif( get_row_layout() == 'intro_block' ) { ?>
<?php get_template_part( 'blocks/block-intro_block' ); ?>

<?php } elseif( get_row_layout() == 'split_block' ) { ?>
<?php get_template_part( 'blocks/block-split_block' ); ?>

<?php } elseif( get_row_layout() == 'showcase_block' ) { ?>
<?php get_template_part( 'blocks/block-showcase_block' ); ?>

<?php } elseif( get_row_layout() == 'steps_block' ) { ?>
<?php get_template_part( 'blocks/block-steps_block' ); ?>

<?php } elseif( get_row_layout() == 'table_block' ) { ?>
<?php get_template_part( 'blocks/block-table_block' ); ?>


<?php } else {  
  //  relax();
    }  // end get_row_layout and do nothing ?>
<?php endwhile; endif; ?>
