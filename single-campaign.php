<?php get_header(); // includes nav and hero
// https://github.com/Charitable/library/tree/master/donation-form
?>


<?php get_template_part( 'blocks/blocks' ); ?>

<?php echo do_shortcode("[charitable_progress_bar campaign_id=1637]") ?>




<div class="row-block bg-white">
    <div class="w-max m-auto">


    <style>
            .amounts {
                display: grid;
                grid-template-rows: 1fr 1fr 1fr;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: var(--padding-xsmall);
                margin-top: var(--padding-xsmall);

            }


            .amounts li {}


            .presets {
                text-align: center;
                background-color: red !important;

            }

            .presets button {
                background-color: rgba(0, 0, 0, 0.085);
                color: black;
                font-size: 1.4rem;
                border: none;
                outline: none;
                border-radius: 25px;
                padding: var(--padding-small);
                position: relative;
            }

            .presets button.active,
            .presets button.active:hover {
                background-color: #42c8f4;
                color: #fff;
                border-color: #42c8f4;
            }

            .presets button:hover {
                cursor: pointer;
                background-color: transparent;
                color: #42c8f4;
                border-color: #42c8f4;
            }





            .pretotal {
                width: 100%;
                height: var(--input-height);
                line-height: var(--input-height);
                position: relative;
            }

            .pretotal input {
                width: 100%;
                height: var(--input-height);
                line-height: var(--input-height);
                font-size: var(--headline);
                text-align: right;
                padding: 0 var(--padding-small);
                display: block;
                z-index: 9;
                background-color: transparent;
                font-weight: bold;

            }

            .pretotal::before {
                width: 100%;
                display: block;
                height: var(--input-height);
                line-height: var(--input-height);
                font-size: var(--p);
                text-align: left;
                padding: 0 var(--padding-small);
                position: absolute;
                left: 0;
                top: 0;
                content: "$";
                z-index: 2;
            }
        </style>


<div class="bg-offwhite w-safe m-auto">

<form id="donate" method="post" action="">


    <div class="pretotal ">
        <input type="input" name="amount" id="amount" class="required" placeholder="Custom Amount"
            value="10" />
    </div>

    <fieldset id="dontion">
        <ul class="presets amounts">
            <button data-button-value="5">5</button>
            <button data-button-value="10" class="active">10</button>
            <button data-button-value="25">25</button>
            <button data-button-value="50">50</button>
            <button data-button-value="100">100</button>
            <button id="button-other" data-button-value="">Other</button>
        </ul>
        <div class="buttons center">
            <a data-trigger-modal="charitable-donation-form-modal-1637 " class="button"
                href="https://www.flames.agency/campaigns/test-campaign/donate/"
                aria-label="Make a donation to Test Campaign">
                LW Donate Now</a>
        </div>
    </fieldset>


</form>

</div>



<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>


<style>
    .donations-block {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    .donations-block iframe {
        width: 100% !important;
        margin: 0 auto;
        text-align: center;
        overflow: hidden;
    }

    @media (min-width:768px) {
        .donations-block iframe {
            min-width: 100% !important;
        }
    }


    .charitable-donation-form input {
        height:var(--input-height);
        line-height:var(--input-height);
        padding:0 var(--padding-small);
        width:100%; display:block;

    }

#custom-donation-amount-field::before {
    content:"$: "
}

</style>



<style>
    .give-donor__details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<?php $postid = get_the_ID(); ?>


<style>
    .give-donor__header {
        border-bottom: 1px solid var(--lightgrey);
    }

    .give-donor__header {
        content: "";
        display: block;
        padding: var(--padding-small);
    }

    @media (min-width:768px) {
        .give-donor__name {
            width: 50%;
        }
    }
</style>







<?php if ( !empty( get_the_content() ) ) : ?>
<div class="bg-white row-block">
    <div class="w-max m-auto article-body">
        <?php the_content(); ?>
    </div>
</div>
<?php endif; ?>
<?php endwhile; endif; ?>

<a data-trigger-modal="charitable-donation-form-modal-1637"
    class="button charitable-button donate-button button-primary"
    href="https://www.flames.agency/campaigns/test-campaign/donate/" aria-label="Make a donation to Test Campaign">
    LW Button </a>





        <div id="donations-wall" class="row-block bg-offwhite donations-wall" data-theme="light">
            <section class="w-max m-auto" data-theme="light">
                <header class="header section-header" data-theme="">
                    <strong class="kicker postfade">SPECIAL THANKS TO</strong>
                    <h2 class="headline postfade">Our Supporters</h2>
                    <div class="lead w-safe margin-auto postfade">
                        <p>Here’s a list of amazing fans who are helping to support this project!</p>
                    </div>
                </header>
            </section>
            <div class="w-max m-auto article-body">
                <?php echo do_shortcode('[charitable_donors campaign=current]'); ?>
            </div>
        </div>





        <script>
            var donationForm = document.querySelector('#donate');
            // Change Donation Amount
            // ========================================
            function changeAmount(event) {
                event.preventDefault(); // Stop button

                //Set Amount  value
                // var donation = event.target.innerHTML;
                let donation = event.target.getAttribute("data-button-value");


                var amount = document.querySelector('#amount');
                amount.value = donation;

                var donation_input = document.querySelector('.custom-donation-input');
                donation_input.value = amount.value;

            }

            // Add events to amount presets
            var presets = donationForm.querySelectorAll('.presets button');
            for (var i = 0; i < presets.length; i++) {
                presets[i].addEventListener('click', changeAmount);
            }
        </script>

        <?php get_footer();  ?>