<?php
$form_template = get_sub_field('form_template');
$form_trigger = get_sub_field('form_trigger');
$page_slug = get_post_field( 'post_name', get_post() );
include ('clickup-lists.php');
?>


<style>
    .form-loader {
        pointer-event: initial !important;
        /* Prevent people closing form whilst it's submitting data */
    }

    .form-submitted .popup-form-container[data-form="popup-form-container-<?php echo $form_template; ?>"] {
        display: none !important;
    }
</style>


<!-- Submits Data to Google Sheet -->
<section id="<?php echo $form_trigger; ?>" class="modal modal-popup bg-overlay">
    <!-- Background Overlay -->
    <div class="modal__transparent-layer modal-close"></div>
    <div data-form="popup-form-container-<?php echo $form_template; ?>"
        class="popup-form-container popup-form bg-white w-max" data-theme="light">

        <form name="google-sheet" class="form" id="popup-form-<?php echo $form_template; ?>">
            <!-- Hide form-fieldsets when form is sucessfully submitted -->
            <div class="form-fieldsets">
                <fieldset id="fieldset_1">

                    <p class="kicker center">EARLY BIRD</p>
                    <header class="header center">

                        <h2>Join the waiting list!</h2><br>
                        <small>Want to become one of the first Members of Thailand’s hottest app?</small>
                    </header>
                    <div class="grid grid-gap">
                        <!-- <input type="text" name="data[model_name]" placeholder="You name" id="model_name"
                            class="required colspan-6" onkeyup="showMe(this)"> -->
                        <div class="colspan-6 input-area">
                            <input type="text" placeholder="Display Name" class="required" id="name" name="name">
                        </div>
                        <div class="colspan-6 input-area">
                            <i class="fas fa-at"></i>
                            <input type="text" placeholder="Instagram Username" class="required" id="instagram"
                                name="instagram">
                        </div>

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

                        <div class="colspan-4 mobspan-3 input-area">
                            <input type="number" placeholder="DD" class="required center" id="dob-dd" name="dob-dd" minlength="2" maxlength="2">
                        </div>

                        <div class="colspan-4 mobspan-3 input-area">
                            <input type="number" placeholder="MM" class="required center" id="dob-mm" name="dob-mm"  minlength="2" maxlength="2">
                        </div>

                        <div class="colspan-4 mobspan-6 input-area">
                            <input type="number" placeholder="YYYY" class="required center" id="dob-yyyy" name="dob-yyyy" minlength="4" maxlength="4">
                        </div>

                        <div class="colspan-12 input-area">
                            <i class="far fa-envelope"></i>
                            <input type="email" placeholder="Your Email" class="required" id="email" name="email">
                        </div>
                    </div>
                    <div class="buttons bg-white">
                        <!-- CTA 1 is a Modal  -->
                        <button class="button button-next submit_disabled" type="submit" id="submit">Join waiting list!</button>
                    </div>

                    <p class="form-terms">
                        <small>Members must be aged 18+</small>
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
                <input type="hidden" id="permalink" name="permalink" value="<?php echo esc_url( get_permalink() ); ?>">
                <input type="hidden" id="source_url" name="source_url"
                    value="<?php echo $source_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" id="instagram_url" name="instagram_url" value="">
                <!-- <input type="hidden" id="print_date" name="application_date">
                <input type="hidden" id="print_time" name="time"> -->

                <input type="hidden" id="form_list_id" name="form_list_id" value="<?php echo $form_list_id; ?>">
                <input type="hidden" id="form_template" name="form_template" value="<?php echo $form_template; ?>">
                <input type="hidden" id="page_slug" name="page_slug" value="<?php echo $page_slug; ?>">
                

                <!-- *** Hidden Fields Above *** -->
                <!-- *** Hidden Fields Above *** -->
                <!-- *** Hidden Fields Above *** -->


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
            <strong class="kicker ">You’re in!</strong>
            <h5 class="headline ">We’ve added you to the guest list...</h5>
            <div class="lead w-safe ">
                <p>Did you know, you can help <a href="https://www.patreon.com/thaiflames">support Thai Flames on Patreon</a> for less than the price of a beer! 🍻</p>
            </div>
            <div class="buttons">
                <!-- CTA 1 is a Link  -->
                <a href="https://www.patreon.com/thaiflames" class="button">Patreon</a>
                <!-- <i class="fab fa-instagram" style="color:white!important;"></i>   -->
                <a href="https://instagram.com/thaiflames/" class="button">Follow @ThaiFlames</a>
            </div>
        </header>
    </section>
</section>
<!-- Modal Popup -->


<script>
    document.getElementById('popup-form-<?php echo $form_template; ?>').onsubmit = function (e) {
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
                '<?php echo get_template_directory_uri(); ?>/clickup/form-<?php echo $form_template; ?>-submit.php'
            let form = document.getElementById('popup-form-<?php echo $form_template; ?>');
            let name = document.getElementById('name');
            let email = document.getElementById('email');
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

<script>
    // Grab Instagram username from form, and CONCAT to create hidden Instgram URL input field.
    let instagram = document.getElementById('instagram');
    instagram.onkeyup = function () {
        document.getElementById('instagram_url').value = 'https://www.instagram.com/' + instagram.value + '/';
    };
</script>




<!--
<script>
    // Fetch IP address to check visitor location and submit with form (saves user hassle of entering location)
    fetch("https://ipinfo.io/json?token=90226b7bd030b9").then(
        (response) => response.json()
    ).then(
        //   (jsonResponse) => console.log(jsonResponse.ip, jsonResponse.country)
        (jsonResponse) => {
            const print_ip = jsonResponse.ip
            document.querySelector('#print_ip').value = print_ip
            const print_country_code = jsonResponse.country
            document.querySelector('#print_country_code').value = print_country_code
        }
    )
</script>
 -->