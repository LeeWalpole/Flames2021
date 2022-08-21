<?php if( have_rows('translation') ): while( have_rows('translation') ): the_row(); // Does article have a tranlated article? ?>
<?php 
$translation_thai = get_sub_field('thai');
$translation_english = get_sub_field('english');
?>
<?php endwhile; endif; // Does article have a tranlated article? ?>


<!-- If Thai version available and Broswer is English  -->
<?php if($translation_thai && substr( $_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2 ) == 'th') : ?>

<style>






    .modal-translate {

        background-color: rgba(0, 0, 0, 0.9);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        animation-delay: 5s;

        -webkit-animation-delay: 5s;
        -moz-animation-delay: 5s;
        -o-animation-delay: 5s;
        -ms-animation-delay: 5s;

        -webkit-animation: fadeInModal ease-in 0.66s;
        -moz-animation: fadeInModal ease-in 0.66s;
        -o-animation: fadeInModal ease-in 0.66s;
        -ms-animation: fadeInModal ease-in 0.66s;

    }

    @keyframes fadeInModal{
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}


    .popup-translate {
        overflow: hidden;
        padding: var(--padding-big);
        text-align: center;

    }

    .translate-options {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
    }

    .translate-options li {
        padding: var(--padding-small) var(--padding);
    }


    .translate-options li a {
        display: flex;
        justify-content: center;
        align-items: center;

    }


    .translate-options a {
        display: block;
    }

    .translate-options img.country-flag {
        margin: 0 var(--padding-xsmall) 0 0;
        padding: 0;
        list-style: none;
        height: 36px;
        vertical-align: middle;
    }

    .translation-flag {
        font-size: 2rem;
        margin-right: var(--padding-xsmall);
        pointer-events:none!important;
    }


</style>




<div class="bg-modal modal-translate" id="modal-translate">

    <aside class="popup-translate bg-white">
        <h5>เลือกภาษา</h5>
        <ul class="translate-options">
            <li><a href="<?php echo esc_attr($translation_thai); ?>">
                    <!-- <img class="country-flag lazyload"
                        data-src="https://flagicons.lipis.dev/flags/4x3/th.svg" alt="Flag of Thailand">-->
                    <span class="translation-flag">🇹🇭</span>ไทย</li></a>
            <li><a href="#!" class="close-modal-translate">
                    <!-- <img class="country-flag lazyload"
                        data-src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="Flag of United Kingdom">  -->
                    <span class="translation-flag" class="close-modal-translate">🇬🇧</span>English
            </li></a>
        </ul>
    </aside>
</div>

<script>
    let close_flag = document.getElementById('close_flag');
    document.addEventListener(
        "click",
        function (event) {
            // If user either clicks X button OR clicks outside the modal window, then close modal by calling closeModal()
            if (
                event.target.matches(".close-modal-translate") ||
                !event.target.closest(".popup-translate")
            ) {
                closeModal()
            }
        },
        false
    )
    function closeModal() {
        document.querySelector("#modal-translate").style.display = "none"
    }
</script>

<?php endif; // if Thai article Available ?>