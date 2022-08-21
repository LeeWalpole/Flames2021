<?php get_template_part( 'snippets/footer', 'cta' ); ?>
</main>

<?php get_template_part( 'snippets/snippet', 'footer' ); // col-1 ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
    function n() {
        e = document.querySelectorAll(".prefade"), t = window.innerHeight
    }

    function i() {
        for (let n = 0; n < e.length; n++) {
            let i = e[n];
            e[n].getBoundingClientRect().top - t <= 0 && (i.classList.remove("prefade"), i.classList.add("postfade"))
        }
    }
</script>

<script id="google_gtagjs" src="https://www.googletagmanager.com/gtag/js?id=UA-186184655-1" async></script>
<script id="google_gtagjs-inline">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-186184655-1', {});
</script>


<!-- *** If Flickity Blocks have been detected, load the necessary scripts. *** -->
<?php /* if( in_array('flickity', $scripts_styles) ) : ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
<?php endif;
*/
?>

<?php // get_template_part( 'clickup/forms' ); // col-1 ?>

<?php include ('clickup/forms.php'); ?>

<?php wp_footer(); ?>

<?php if ( is_singular( 'models' ) ) : ?>
<?php include ('footer-models.php'); ?>
<?php endif; ?>




</body>

</html>
<?php /*
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/nav-modal.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/nav-menu.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/nav-bar.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/lazysizes.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/prefade.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/clone-menu.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/0.modal-popup.js?11"></script>
<script defer src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/prefade.js?11"></script>
*/?>
<?php // if(is_single( '427') || is_front_page() ) : // Free Instagram Shoutouts - https://www.flames.agency/promotions/instagram-shoutouts/#why ?>
<?php // get_template_part( 'snippets/popup', 'free-shoutout' ); // col-1 ?>
<?php // endif;?>