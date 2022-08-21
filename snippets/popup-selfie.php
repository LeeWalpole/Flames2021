<?php
if( have_rows('google_forms') ):
  while( have_rows('google_forms') ): the_row();
  $deployment_id = get_sub_field('deployment_id');
  $popup_id = get_sub_field('popup_id');
  endwhile;
endif;
 ?>

<?php if( have_rows('translation') ): while( have_rows('translation') ): the_row(); // Does article have a tranlated article? ?>
<?php 
$translation_thai = get_sub_field('thai');
$translation_english = get_sub_field('english');
?>
<?php endwhile; endif; // Does article have a tranlated article? ?>

<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $utm_link = "https://";   
    else  
         $utm_link = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $utm_link.= $_SERVER['HTTP_HOST'];   
    // Append the requested resource location to the URL   
    $utm_link.= $_SERVER['REQUEST_URI'];    
  ?>

<style>
.form-loader { 
pointer-event:initial!important;
/* Prevent people closing form whilst it's submitting data */
}
</style>



<?php 
/*
    if($post_slug == "th" { 
        // Translated to Thai if slug is "th"
        $kicker = "FLAMES APPLICATION!!!"; 
        $headline = "Join and get free promos & shoutouts!"; 
        $display_name = "Display Name"; 
        $instgram_username = "Instgram Username"; 
        $email = "Instgram Username"; 
        $cta_1_text = "Join flames Today!"; 
        $terms = 'By applying, you agree to our <a href="#" target="_blank"> terms of service</a>.'; 
        } else {  
        $kicker = "FLAMES APPLICATION"; 
        $headline = "Join and get free promos & shoutouts!"; 
        $display_name = "Display Name"; 
        $instgram_username = "Instgram Username"; 
        $email = "Instgram Username"; 
        $cta_1_text = "Join flames Today!"; 
        $terms = 'By applying, you agree to our <a href="#" target="_blank"> terms of service</a>.'; 
    } 
    */
?>

<?php if($deployment_id) : ?>
<!-- Submits Data to Google Sheet -->
<section id="<?php echo esc_attr($popup_id); ?>" class="modal modal-popup bg-overlay">
    <!-- Background Overlay -->
    <div class="modal__transparent-layer modal-close"></div>
    <div id="popup-form" class="popup-form bg-white w-max" data-theme="light">
        <form name="google-sheet" class="form" id="popup-free-shoutouts-form">
            <!-- Hide form-fieldsets when form is sucessfully submitted -->
            <div class="form-fieldsets">
                <fieldset id="fieldset_1">

                    <p class="kicker">SEND US YOUR SELFIE</p>
                    <header class="header">
           
                        <h2>Send us your Selfie!</h2><br>
                        <!-- <small>Complete form below and our marketing team will be in touch.</small> -->
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
                        <div class="colspan-6 input-area">
                            <i class="far fa-envelope"></i>
                            <input type="email" placeholder="Your Email" class="required" id="email" name="email">
                        </div>

                        <div class="colspan-6 input-area">
                            
                            <input type="text" placeholder="Link to selfie post" class="" id="post_url" name="post_url">
                        </div>

                        
                    </div>
                    <div class="buttons bg-white">
                        <!-- CTA 1 is a Modal  -->
                        <button class="button button-next submit_disabled" type="submit" id="submit">SEND US YOUR SELFIE</button>
                    </div>

                    <p class="form-terms">
                        <small>Applicants must be aged 18+</small>
                    </p>

                    
                </fieldset>
                <!-- Hide above fieldset when form is submitted -->
                <!-- Date and Time Stamps for additional form data -->
                <input type="hidden" id="instagram_url" name="instagram_url">
                <input type="hidden" id="print_ip" name="IP">
                <input type="hidden" id="print_country_code" name="country_code">
                <input type="hidden" id="print_date" name="date">
                <input type="hidden" id="print_time" name="time">
                <input type="hidden" id="permalink" name="permalink" value="<?php echo esc_attr(get_permalink()); ?>">
                <input type="hidden" id="utm_link" name="utm_link" value="<?php echo esc_attr($utm_link); ?>">
                <input type="hidden" id="instagram_url" name="instagram_url" value="">

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
            <strong class="kicker ">Application sent!</strong>
            <h5 class="headline ">We’ll be in touch soon...</h5>
            <div class="lead w-safe ">
                <p>Make sure you’re following <a href="https://www.instagram.com/thaiflames/">@thaiflames on
                        Instagram</a> so we can verify your account via DM.</p>
            </div>
            <div class="buttons">
                <!-- CTA 1 is a Link  -->
                <a href="https://instagram.com/thaiflames/" class="button">Follow @ThaiFlames</a>
                <!-- <i class="fab fa-instagram" style="color:white!important;"></i>   -->
            </div>
        </header>
    </section>
</section>
<!-- Modal Popup -->




<script>
    document.getElementById('popup-free-shoutouts-form').onsubmit = function (e) {
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
                'https://script.google.com/macros/s/<?php echo esc_attr($deployment_id); ?>/exec'
            let form = document.getElementById('popup-free-shoutouts-form');
            let name = document.getElementById('name');
            let instagram = document.getElementById('instagram');
            let email = document.getElementById('email');
            let post_url = document.getElementById('post_url');
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

<script>
    // Fetch date and time and submit to form
    // Function which returns a minimum of two digits in case the value is less than 10
    const getTwoDigits = (value) => value < 10 ? `0${value}` : value;
    const formatDate = (date) => {
        const day = getTwoDigits(date.getDate());
        const month = getTwoDigits(date.getMonth() + 1); // add 1 since getMonth returns 0-11 for the months
        const year = date.getFullYear();
        return `${year}-${month}-${day}`;
    }
    const formatTime = (date) => {
        const hours = getTwoDigits(date.getHours());
        const mins = getTwoDigits(date.getMinutes());
        return `${hours}:${mins}`;
    }
    const date = new Date();
    document.getElementById('print_date').value = formatDate(date);
    document.getElementById('print_time').value = formatTime(date);
</script>

<script>
    // Take First Name and address them in next form step.
    let model_name = document.getElementById('model_name');
    model_name.onkeyup = function () {
        document.querySelector('.print_first_name').innerHTML = model_name.value;
    };
    const today = new Date();
    const current_timestamp = Date.now();
    const current_date = today.toDateString();
    const current_time = today.toTimeString();
</script>

<script>
    // Grab Instagram username from form, and CONCAT to create hidden Instgram URL input field.
    let instagram = document.getElementById('instagram');
    instagram.onkeyup = function () {
        document.getElementById('instagram_url').value = 'https://www.instagram.com/' + instagram.value + '/';
    };
</script>
<?php endif; // deployment_id?>


