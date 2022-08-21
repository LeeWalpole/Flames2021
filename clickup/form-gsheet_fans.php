<?php
// $form_template = get_sub_field('form_template');
$form_trigger = get_sub_field('form_trigger');
$page_slug = get_post_field( 'post_name', get_post() );
// include ('clickup-lists.php');
$form_template = "gsheet"; // Template should always be this (leads)
$form_list_id = "180723755"; // All new entries go here: https://app.clickup.com/25659266/v/b/li/180723755
$form_tag = get_sub_field('form_template'); // should replace form template at some stage
$gsheet_deployment_id = "AKfycbxu3oXWnF2ebqdmwlYyrotid1GFZZBIC6BSyhT5zMAZSCAIOpcG403x1cLMAw5S5jgn";
// https://script.google.com/macros/s/AKfycbx3wanBbkK2VOhnyzKODyerGvxqyFx5AWG6BumOfI93Qq7TrvuZ25zucTa8wcxsOYAW/exec
// https://docs.google.com/spreadsheets/d/1wU4mcP68p3r4zH00n9Qgb4LF4dJY3bvd3l5CZB8GBzk/edit#gid=0
$form_tags = get_sub_field('form_tags');
?>



<style>
    .alert {
        display: block !important;
        opacity: 1 !important;
        width: 100%;
        display: block;
        height: 72px;
        line-height: 72px;
        color: white;
        position: fixed;
        bottom: 0;
        left: 0;
        background: green;
        text-align: center;
    }
</style>

</head>

<body>

    <style>
        .form-loader {
            pointer-event: initial !important;
            /* Prevent people closing form whilst it's submitting data */
        }

        .form-submitted .popup-form-container[data-form="popup-form-container-<?php echo $form_template; ?>"] {
            display: none !important;
        }
    </style>

    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>



    <!-- Submits Data to Google Sheet -->
    <section id="<?php echo $form_trigger; ?>" class="modal modal-popup bg-overlay">
        <!-- Background Overlay -->
        <div class="modal__transparent-layer modal-close"></div>
        <div data-form="popup-form-container-<?php echo $form_template; ?>"
            class="popup-form-container popup-form bg-white w-max" data-theme="light">

            <form id="google-sheet" name="google-sheet" class="form">


                <div class="form-fieldsets">
                    <fieldset id="fieldset_1">

                               <!-- <p class="kicker center">???</p> -->
                        <header class="header center">

                            <h2>Want more fans and followers?</h2><br>
                            <small>Join Flames and get free shoutouts!</small>
                        </header>

                        <div class="grid grid-gap">

                        

                        <div class="colspan-6 input-area">
                        <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Your name" class="required" id="name"
                                    name="name">
                            </div>

                            <div class="colspan-6 input-area">
                            <i class="fa-brands fa-instagram"></i>
                                <input type="text" placeholder="Instagram" class="required" id="instagram"
                                    name="instagram">
                            </div>

                            <div class="colspan-12 input-area">
                                <i class="far fa-envelope"></i>
                                <input type="email" placeholder="Your Email" class="required" id="email" name="email">
                            </div>


                        </div>
                        <div class="buttons bg-white">
                            <!-- CTA 1 is a Modal  -->
                            <button class="button button-next submit_disabled" type="submit" id="submit">Submit
                                form</button>
                        </div>

                        <p class="form-terms">
                            <small>Applicants must be aged 18+</small>
                        </p>


                    </fieldset>


                    <!-- *** Hidden Fields Below *** -->
                    <!-- *** Hidden Fields Below *** -->
                    <!-- *** Hidden Fields Below *** -->

                    <!-- Hide above fieldset when form is submitted -->
                    <!-- Date and Time Stamps for additional form data -->
                    <!-- <input type="hidden" id="instagram" name="instagram"> -->
                    <!-- <input type="hidden" id="print_ip" name="ip_address" value$_SERVER['REMOTE_ADDR'];> -->
                    <!-- <input type="hidden" id="print_country_code" name="country_code"> -->
                    <input type="hidden" id="permalink" name="permalink"
                        value="<?php echo esc_url( get_permalink( get_the_ID() )); ?>">
                    <input type="hidden" id="source_url" name="source_url"
                        value="<?php echo $source_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                    <input type="hidden" id="instagram_url" name="instagram_url" value="">
                    <!-- <input type="hidden" id="print_date" name="application_date">
                <input type="hidden" id="print_time" name="time"> -->

                    <input type="hidden" id="form_list_id" name="form_list_id" value="<?php echo $form_list_id; ?>">
                    <input type="hidden" id="form_template" name="form_template" value="<?php echo $form_template; ?>">
                    <input type="hidden" id="page_slug" name="page_slug" value="<?php echo $page_slug; ?>">
                    <input type="hidden" id="tag" name="tag" value="<?php echo $form_tag; ?>">


                    <?php 
                    // Get URL Tracking Params
                    // ?utm_source=instagram&utm_medium=story&utm_campaign=free_promo&utm_id=camp_id
                    $utm_source = $_GET['utm_source'];
                    $utm_medium = $_GET['utm_medium'];
                    $utm_campaign = $_GET['utm_campaign'];
                    $utm_id = $_GET['utm_id'];
                    $utm_term = $_GET['utm_term'];
                    $utm_content = $_GET['utm_content'];
                    ?>

                    <?php if ($utm_source) :?>
                    <input name="utm_source" type="hidden" value="<?php echo $utm_source; ?>">
                    <?php endif; ?>

                    <?php if ($utm_medium) :?>
                    <input name="utm_medium" type="hidden" value="<?php echo $utm_medium; ?>">
                    <?php endif; ?>

                    <?php if ($utm_campaign) :?>
                    <input name="utm_campaign" type="hidden" value="<?php echo $utm_campaign; ?>">
                    <?php endif; ?>

                    <?php if ($utm_id) :?>
                    <input name="utm_id" type="hidden" value="<?php echo $utm_id; ?>">
                    <?php endif; ?>

                    <?php if ($utm_term) :?>
                    <input name="utm_term" type="hidden" value="<?php echo $utm_term; ?>">
                    <?php endif; ?>

                    <?php if ($utm_content) :?>
                    <input name="utm_content" type="hidden" value="<?php echo $utm_content; ?>">
                    <?php endif; ?>


                    <!-- *** Hidden Fields Above *** -->
                    <!-- *** Hidden Fields Above *** -->
                    <!-- *** Hidden Fields Above *** -->

                    <input type="hidden" id="page_slug" name="page_slug" value="<?php echo $page_slug; ?>">

                </div><!-- Hide this div when form submits -->

            </form>
        </div>
        <!-- Loader Appears when form is waiting to be validated -->
        <div class="form-loader">
            <div class="spinners">
                <div class="square1"></div>
                <div class="square2"></div>
                <div class="square3"></div>
            </div>
        </div>
        <!-- Only Show this when form is successfully Submitted -->
        <section id="popup-success_message" class="bg-white w-max" data-theme="light">
            <header class="header w-safe bg-white" data-theme="light">

                <strong class="kicker ">ONE MORE THING</strong>
                <h5 class="headline ">Application Sent!</h5>

                <div class="lead w-safe ">
                    <p>Make sure you‘re following both <a href="https://www.instagram.com/thaiflames/" target="_blank">@ThaiFlames</a> and <a href="https://www.instagram.com/flamesagency/" target="_blank">@FlamesAgency</a> on Instagram. We will send you a DM shortly to confirm your Instagram.</p>
                </div>
                <div class="buttons">
                    <!-- CTA 1 is a Link  -->
                    <!-- <i class="fab fa-instagram" style="color:white!important;"></i>   -->
                    <a href="https://instagram.com/thaiflames/" class="button">Follow @ThaiFlames</a>
                    <a href="https://instagram.com/flamesagency/" class="button">Follow @FlamesAgency</a>
                </div>
            </header>
        </section>
    </section>
    <!-- Modal Popup -->








    <!--  
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyjN5g8dUiY0RyaXd0R8Vh7f6sdqy5ydxE8kUDi7AAg9uaDfqfOf3GTCzwnii6mxtUCfQ/exec'
        const form = document.forms['google-sheet']
        const result = document.querySelector("#form_alerts");
        form.addEventListener('submit', e => {
            result.innerHTML = "<div class='alert alert-loading'>One moment</div>"
            e.preventDefault()
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                // If success add class to main modal popup so we can hide webform and show success message
                .then(response => modal_popup.classList.add('form-submitted-success'))
                // If error, display this error message - this doesn't work yet
                .catch(error => form.classList.add('form-submitted-failed', 'nay'))
            /* Submit to Google Sheet (Above) */
        })
    </script>

-->

    <script>
        document.getElementById('google-sheet').onsubmit = function (e) {
            e.preventDefault();
            var required = document.getElementsByClassName('required');
            var valid = Array.from({
                length: required.length
            }, (v, i) => 0);

            for (var i = 0; i < required.length; i++) {
                if (required[i].value == '') {
                    required[i].parentElement.classList.add('input-value-no');
                    valid[i] = 0;
                } else {
                    var classes = required[i].parentElement.classList;
                    if (classes.contains('input-value-no')) {
                        required[i].parentElement.classList.remove('input-value-no');

                    }
                    valid[i] = 1;
                }
            }
            if (!valid.includes(0)) {
                // Form is ready, now what??? 
                // In below case, I've decided to send the data to Google Sheets.

                // alert("form submitted?");
                e.returnValue = true;

                /* Submit to Google Sheet (Below) */
                const scriptURL =
                    'https://script.google.com/macros/s/<?php echo $gsheet_deployment_id; ?>/exec'
                let form = document.getElementById('google-sheet');
                let instagram = document.getElementById('instagram');
                let email = document.getElementById('email');
                let name = document.getElementById('name');
                const modal_popup = document.querySelector(".modal-popup")
                modal_popup.classList.add('form-submitted');
                e.preventDefault()
                fetch(scriptURL, {
                        method: 'POST',
                        body: new FormData(form)
                    })
                    // If success add class to main modal popup so we can hide webform and show success message
                    .then(response => modal_popup.classList.add('form-submitted-success'))
                    // If error, display this error message - this doesn't work yet
                    .catch(error => form.classList.add('form-submitted-failed', 'nay'))
                /* Submit to Google Sheet (Above) */
            }
        }
    </script>


