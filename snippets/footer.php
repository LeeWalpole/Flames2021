</main>
<!-- Default Chapters -->

<?php get_template_part( 'snippets/snippet', 'footer' ); // col-1 ?>
<?php // get_template_part( 'snippets/footer', 'analytics' ); // ?>

<!-- LW Minified Scripts -->
<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/dist/min.js?5"></script>


<?php if(is_singular( 'models' )) : ?>

<script>
    // Get the button that opens the nav_modal
    var nav_modal_button = document.querySelectorAll(".nav_modal-button");

    // All page nav_modals
    var nav_modals = document.querySelectorAll('.nav_modal');

    // Get the <span> element that closes the nav_modal
    var spans = document.getElementsByClassName("modal-menu-close");

    // When the user clicks the button, open the nav_modal
    for (var i = 0; i < nav_modal_button.length; i++) {
        nav_modal_button[i].onclick = function (e) {
            e.preventDefault();
            nav_modal = document.querySelector(e.target.getAttribute("href"));
            nav_modal.classList.add("slide-up");
        }
    }

    // When the user clicks on <span> (x), close the nav_modal
    for (var i = 0; i < spans.length; i++) {
        spans[i].onclick = function () {
            for (var index in nav_modals) {
                //   if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].style.display = "none";    
                if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].classList.remove("slide-up");
            }
        }
    }

    // When the user clicks anywhere outside of the nav_modal, close it
    window.onclick = function (event) {
        if (event.target.classList.contains('nav_modal')) {
            for (var index in nav_modals) {
                //   if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].style.display = "none";  
                if (typeof nav_modals[index].style !== 'undefined') nav_modals[index].classList.remove("slide-up");
            }
        }
    }
</script>


<script>
    let popup_triggers = document.querySelectorAll(".popup-trigger");
    [].forEach.call(popup_triggers, function (popup_trigger) {
        let popup_target = popup_trigger.getAttribute('data-target-id');
        popup_trigger.onclick = function () {
            console.log(popup_target);
            document.getElementById(popup_target).scrollIntoView();
        };
    });
</script>

<?php endif; ?>


<?php if(!is_singular( 'models' )) : ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>

  <!-- needed to make ecwig CTA buttons work -->
<script data-cfasync="false" src="https://app.ecwid.com/script.js?64626576&data_platform=singleproduct_v2"></script>
    <script type="text/javascript">
      xProduct()
    </script>

<?php endif; ?>


<!-- <script src="dist/min.js"></script> -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>


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

<?php // wp_footer(); ?>

</body>

</html>


