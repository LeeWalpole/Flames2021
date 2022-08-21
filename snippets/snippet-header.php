<?php 
$kicker = get_sub_field('kicker');
$headline = get_sub_field('headline') ?: get_the_title();
$subheadline = get_sub_field('subheadline');
$hero_logo_url = get_sub_field('hero_logo'); 
$logo_short_url = substr($hero_logo_url, 8); 
substr($hero_logo_url, 8);
$hero_logo_jetpack_url = "https://i0.wp.com/".$logo_short_url . "?h=100";
?>

<?php if( get_row_layout() == 'hero_block' ): // change header to <h1> tag</h1> ?>

<?php 
$output_kicker = '<strong class="kicker ">'.$kicker.'</strong>';
$output_headline = '<h1 class="hero-headline headline ">'.$headline.'</h1>';
$output_subheadline = '<div class="lead w-safe ">'.$subheadline.'</div>';
?>
<?php else : ?>
<?php 
$output_kicker = '<strong class="kicker prefade"><?php echo $kicker; ?>'.$kicker.'</strong>';
$output_headline = '<h6 class="headline margin-auto prefade">'.$headline.'</h1>';
$output_subheadline = '<div class="lead w-safe margin-auto prefade">'.$subheadline.'</div>';
?>
<?php endif; ?>

<header class="header <?php esc_attr($bg_color); ?>" data-theme="<?php esc_attr($data_theme); ?>">
    <?php echo $output_header_opening; // opening <header> with relevant classes.  ?>
    <?php if( $hero_logo_url ) :?>
    <img src="<?php echo esc_attr($hero_logo_jetpack_url); ?>" alt="<?php echo esc_attr($headline); ?>"
        class="hero-logo prefade lazyload"><!-- filter-black -->
    <?php endif; ?>
    <?php if( $kicker ) : ?><?php echo $output_kicker; ?><?php endif; ?>
    <?php echo $output_headline; ?>
    <?php if( $subheadline ) : ?><?php echo $output_subheadline; ?><?php endif; ?>
    <?php include ('snippet-cta.php'); ?>

    <?php // Restiger Form (Instagram Only URL)
    if( is_single( 829 ) ) : ?>
    <?php get_template_part( './snippets/form', 'register-interest' ); // col-1 ?>
    <?php endif; ?>

</header>