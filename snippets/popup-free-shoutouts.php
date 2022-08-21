

<!-- Submits Data to Google Sheet -->
    <aside id="popup-free-shoutouts" class="modal modal-popup">
        <!-- Background Overlay -->
        <div class="modal__transparent-layer modal-close bg-white"></div>
        <div id="popup-form" class="popup-form bg-white w-max" data-theme="light">
            <form name="google-sheet" class="form" id="form">
                <!-- Hide form-fieldsets when form is sucessfully submitted -->
                <div class="form-fieldsets">
                    <fieldset id="fieldset_1">
                        <p class="form-step">SEXY SHOUTOUT</p>
                        <header class="header">
                            <h2>Free Instagram Promotion</h2><br>
                            <small>Complete this simple form to receive your personalised promotion.</small>
                        </header>
                        <div class="grid grid-gap">
                            <!-- <input type="text" name="data[model_name]" placeholder="You name" id="model_name"
                            class="required colspan-6" onkeyup="showMe(this)"> -->
                            <div class="colspan-6 input-area">
                                <input type="text" placeholder="Your name" class="required" id="name" name="name">
                            </div>
                            <div class="colspan-6 input-area">
                                <i class="fas fa-at"></i>
                                <input type="text" placeholder="Instagram Username" class="required" id="instagram"
                                    name="instagram">
                            </div>
                            <div class="colspan-12 input-area">
                                <i class="far fa-envelope"></i>
                                <input type="email" placeholder="Your Email" class="required" id="email" name="email">
                            </div>
                        </div>
                        <div class="buttons bg-white">
                            <!-- CTA 1 is a Modal  -->
                            <button class="button button-next submit_disabled" type="submit" id="submit">GET YOUR FREE
                                SHOUTOUT <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </fieldset>
                    <!-- Hide above fieldset when form is submitted -->
                    <!-- Date and Time Stamps for additional form data -->
                    <input name="data[timestamp]" type="hidden" class="print_timestamp" value=""></input>
                    <input name="data[date]" type="hidden" class="print_current_date" value=""></input>
                    <input name="data[time]" type="hidden" class="print_current_time" value=""></input>
                </div><!-- Hide this div when form submits -->
            </form>
        </div>
        <!-- Only Show this when form is successfully Submitted -->
        <aside id="popup-success_message" class="bg-white w-max" data-theme="light">
            <header class="header w-safe bg-white" data-theme="light">
                <strong class="kicker ">Hooray!! 😊</strong>
                <h5 class="hero-headline headline ">All Done!</h5>
                <div class="lead w-safe ">
                    <p>Thanks for sending your application, <span class="print_first_name"></span>. Make sure you're
                        follwing us on Instagram and we’ll be in touch soon.</p>
                </div>
                <div class="buttons">
                    <!-- CTA 1 is a Link  -->
                    <a href="https://www.flames.agency/promotions/instagram-shoutouts/" target="_self" class="button"><i
                            class="fab fa-instagram"></i> Follow @ThaiFlames</a>
                    <!-- CTA 2 is a Link  -->
                    <a href="mailto:hello@flames.agency" target="_blank" class="button">Visit homepage</a>
                </div>
            </header>
        </aside>
        <!-- Loader Appears when form is waiting to be validated -->
        <div class="form-loader">
            <div class="spinners">
                <div class="square1"></div>
                <div class="square2"></div>
                <div class="square3"></div>
            </div>
        </div>

    </aside>
    <!-- Modal Popup -->

    <script>
        document.getElementById('form').onsubmit = function (e) {
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
                    'https://script.google.com/macros/s/AKfycbwqUKDYZHMgywa2psoUM6h7Swt1dkpKrwL4eYfag-GfiHgS2MhGGzzr6Q74deS_ZKnF/exec'
                let form = document.getElementById('form');
                let name = document.getElementById('name');
                let instagram = document.getElementById('instagram');
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