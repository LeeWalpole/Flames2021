<?php /* Template Name: Talent Application #001 */ ?>

<?php get_header(); // includes nav and hero ?>


<div class="form-container bg-white" data-theme="light">

    <form action="https://sheetdb.io/api/v1/98kxypnfywvak" method="POST" id="model-application-form" class="form w-max"
        name="Form">

        <!-- Your Name Below -->
        <!-- Your Name Below -->
        <!-- Your Name Below -->
        <fieldset class="msf_hide">

            <p class="form-step">Step #1 of 6</p>

            <header class="header">
                <h2>What’s your name?</h2>
                <small>We will use this when communicating with you.</small>
            </header>

            <div class="grid grid-gap">

                <input type="text" name="data[model_name]" placeholder="My name is..." id="model_name"
                    class="mandatory-field colspan-9" onkeyup="showMe(this)">

                <!-- <div class="colspan-6">
                        <input type="text" name="second_name" placeholder="Second Name">
                    </div> -->

            </div>

            <!-- Form Buttons -->
            <div class="form-buttons">
                <!-- <a href="#!" class="back-button" onclick="msf_btn_back()">
                        <i class="fas fa-chevron-left"></i>
                        <span>Back</span>
                    </a> -->
                <a href="#!" class="next-button" onclick="msf_btn_next()">
                    <span>Next</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
            <!--  <div class="msf_bullet_o"></div> -->
        </fieldset>
        <!-- Your Name Above -->
        <!-- Your Name Above -->
        <!-- Your Name Above -->

        <!-- Your Birthday Below -->
        <!-- Your Birthday Below -->
        <!-- Your Birthday Below -->
        <fieldset class="msf_hide">

            <p class="form-step">Step #2 of 6</p>

            <header class="header">
                <h2>When is your birthday?</h2>
                <small>Models must be aged 18+.</small>
            </header>


            <div class="grid grid-gap">

                <div class="colspan-3 mspan-3">
                    <select name="data[model_dob_dd]" class="dob_day" id="dob_day">
                        <option value="NULL">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>

                    </select>
                </div>

                <div class="colspan-4 mspan-12">
                    <select name="data[model_dob_mm]" class="dob_day " id="dob_day">
                        <option value="NULL">Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>


                <input class="colspan-4 mandatory-field" type="number" maxlength="4" minlength="4"
                    onkeypress="return onlyNumberKey(event)" name="data[model_dob_yyyy]" placeholder="YYYY"
                    id="dob_year">

            </div>

            <!-- Form Buttons -->
            <div class="form-buttons">
                <a href="#!" class="back-button" onclick="msf_btn_back()">
                    <i class="fas fa-chevron-left"></i>
                    <span>Back</span>
                </a>
                <a href="#!" class="next-button" onclick="msf_btn_next()">
                    <span>Next</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
            <!--  <div class="msf_bullet_o"></div> -->
        </fieldset>
        <!-- Your Birthday Above -->
        <!-- Your Birthday Above -->
        <!-- Your Birthday Above -->


        <!-- Why Join Below -->
        <!-- Why Join Below -->
        <!-- Why Join Below -->
        <fieldset class="msf_hide">

            <p class="form-step">Step #3 of 6</p>

            <header class="header">
                <h2>Why do you want to join Flames Agency?</h2>
                <small>Select the options that apply to you.</small>
            </header>

            <div class="grid grid-gap">

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="styled-checkbox-2" type="checkbox"
                        value="Free Promotions" name="data[model_promotions]">
                    <label for="styled-checkbox-2">Free promotions</label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="styled-checkbox-1" type="checkbox"
                        value="Free Photoshoots" name="data[model_photoshoots]">
                    <label for="styled-checkbox-1">Free photoshoots</label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="styled-checkbox-3" type="checkbox"
                        value="Onlyfans Management" name="data[model_onlyfans_management]">
                    <label for="styled-checkbox-3">Onlyfans management</label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="styled-checkbox-4" type="checkbox" value="Other"
                        name="data[model_other]">
                    <label for="styled-checkbox-4">Other...</label>
                </div>

                <div class="colspan-6">
                    <input type="text" placeholder="I want to join because..." id="model_name"
                        name="data[model_other_message]">
                </div>

                <!-- <div class="colspan-6">
                        <input type="text" name="second_name" placeholder="Second Name">
                    </div> -->

            </div>

            <!-- Form Buttons -->
            <div class="form-buttons">
                <a href="#!" class="back-button" onclick="msf_btn_back()">
                    <i class="fas fa-chevron-left"></i>
                    <span>Back</span>
                </a>
                <a href="#!" class="next-button" onclick="msf_btn_next()">
                    <span>Next</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
            <!--  <div class="msf_bullet_o"></div> -->
        </fieldset>
        <!-- Why Join Above -->
        <!-- Why Join Above -->
        <!-- Why Join Above -->


        <!-- Why Join Below -->
        <!-- Why Join Below -->
        <!-- Why Join Below -->
        <fieldset class="msf_hide">

            <p class="form-step">Step #4 of 6</p>

            <header class="header">
                <h2>What type of jobs do you want?</h2>
                <small>Select the options that apply to you.</small>
            </header>

            <div class="grid grid-gap">

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="model-type-1" type="checkbox"
                        value="All Jobs" name="data[model_type_all]">
                    <label for="model-type-1">All Jobs</label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="model-type-2" type="checkbox"
                        value="Glamour / Lingerie" name="data[model_type_glamour]">
                    <label for="model-type-2">Glamour / Lingerie </label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="model-type-3" type="checkbox"
                        value="Promotional" name="data[model_type_charity]">
                    <label for="model-type-3">Free / Charity</label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="model-type-4" type="checkbox"
                        value="Fitness" name="data[model_type_fitness]">
                    <label for="model-type-4">Health / Fitness</label>
                </div>

                <div class="colspan-4 checkbox">
                    <input class="styled-checkbox mandatory-field" id="model-type-5" type="checkbox" value="Adult / X-Rated"
                        name="data[model_type_xrated]">
                    <label for="model-type-5">Adult / X-Rated Content</label>
                </div>

                <div class="colspan-4">
                    <input type="text" placeholder="Anything else?" id="model-type-6"
                        name="data[model_type_other]">
                </div>

                <!-- <div class="colspan-6">
                        <input type="text" name="second_name" placeholder="Second Name">
                    </div> -->

            </div>

            <!-- Form Buttons -->
            <div class="form-buttons">
                <a href="#!" class="back-button" onclick="msf_btn_back()">
                    <i class="fas fa-chevron-left"></i>
                    <span>Back</span>
                </a>
                <a href="#!" class="next-button" onclick="msf_btn_next()">
                    <span>Next</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
            <!--  <div class="msf_bullet_o"></div> -->
        </fieldset>
        <!-- Why Join Above -->
        <!-- Why Join Above -->
        <!-- Why Join Above -->


                <!-- Your Socials Below -->
        <!-- Your Socials Below -->
        <!-- Your Socials Below -->

        <fieldset class="msf_hide">

            <p class="form-step">Step #5 of 6</p>


            <header class="header">
                <h2>What are your social profiles?</h2>
                <small>Please share your social networks.</small>
            </header>

            <div class="grid grid-gap">


                <div class="colspan-4 icon-input">

                    <div class="icon-box">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <span class="username_prefix">
                        <input type="text" placeholder="Instagram username" name="data[model_instagram]"
                            class="instagram mandatory-field" id="mce-INSTAGRAM">
                    </span>
                </div>

                <div class="colspan-4 icon-input">
                    <div class="icon-box">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <span class="username_prefix">
                        <input type="text" placeholder="Twitter username" name="data[model_twitter]">
                    </span>
                </div>

                <div class="colspan-4 icon-input">
                    <div class="icon-box">
                        <i class="far fa-heart"></i>
                    </div>
                    <span class="username_prefix">
                        <input type="text" placeholder="Onlyfans username" name="data[model_onlyfans]">
                    </span>
                </div>


                <div class="colspan-4 icon-input">
                    <div class="icon-box"><i class="fab fa-tiktok"></i>
                    </div>
                    <span class="username_prefix">
                        <input type="text" placeholder="Tiktok username" name="data[model_tiktok]" class=""
                            id="mce-TIKTOK">
                    </span>
                </div>

                <div class="colspan-4 icon-input">
                    <div class="icon-box">
                        <i class="fab fa-twitch"></i>
                    </div>
                    <span class="username_prefix">
                        <input type="text" placeholder="Twitch username" name="data[model_twitch]">
                    </span>
                </div>



            </div>

            <!-- Form Buttons -->
            <div class="form-buttons">
                <a href="#!" class="back-button" onclick="msf_btn_back()">
                    <i class="fas fa-chevron-left"></i>
                    <span>Back</span>
                </a>
                <a href="#!" class="next-button" onclick="msf_btn_next()">
                    <span>Next</span>
                    <i class="fas fa-chevron-circle-right"></i>
                </a>
            </div>
            <!--  <div class="msf_bullet_o"></div> -->
        </fieldset>


        <!-- Your Socials Above -->
        <!-- Your Socials Above -->
        <!-- Your Socials Above -->



        <!-- Your Contact Below -->
        <!-- Your Contact Below -->
        <!-- Your Contact Below -->

        <fieldset class="msf_hide" id="lasStep">

            <p class="form-step">Step #6 of 6</p>

            <header class="header">
                <h2>Your contact details</h2>
                <small>Applicants must include their email.</small>
            </header>


            <div class="grid grid-gap">

                <div class="colspan-4 icon-input">
                    <div class="icon-box"><i class="fas fa-envelope"></i>
                    </div>

                    <input type="email" placeholder="Email" class="email mandatory-field" id="mce-EMAIL"
                        name="data[model_email]">

                </div>


                <div class="colspan-4 icon-input">
                    <div class="icon-box"><i class="fab fa-whatsapp"></i>
                    </div>

                    <input type="text" placeholder="WhatsApp" name="data[model_whatsapp]" class="phone" value=""
                        id="mce-PHONE">

                </div>

                <div class="colspan-4 icon-input">
                    <div class="icon-box"><i class="fab fa-line"></i>
                    </div>

                    <input type="text" placeholder="Line ID" value="" name="data[model_line]" class="" id="mce-LINE">

                </div>

            </div>

            <!-- Hidden Fields to capture date and order -->
            <input name="data[timestamp]" type="hidden" class="print_timestamp" value=""></input>
            <input name="data[date]" type="hidden" class="print_current_date" value=""></input>
            <input name="data[time]" type="hidden" class="print_current_time" value=""></input>


            <div class="form-buttons">
                <a href="#" class="back-button" onclick="msf_btn_back()">
                    <i class="fas fa-chevron-left"></i>
                    <span>Back</span>
                </a>
                <button type="submit" class="next-button">Send Application
                    <i class="fas fa-chevron-circle-right"></i>
                </button>

            </div>

        </fieldset>

        <!-- Your Contact Above -->
        <!-- Your Contact Above -->
        <!-- Your Contact Above -->


        <!-- Your Success Message Below -->
        <!-- Your Success Message Below -->
        <!-- Your Success Message Below -->

        <fieldset id="success_message" class="msf_hide" ">

                <p class=" form-step">Hooray!! 😊</p>

            <header class="header">
                <h2>All done!</h2>
                <small>Thanks for sending your application, <span class="print_first_name"></span>. We'll be in
                    touch soon.</small>
            </header>


            <div class="grid grid-gap">

                <div class="colspan-12">
                    <p>Please make sure you’re following <a href="https://www.instagram.com/thaiflames/"
                            target="_blank">@thaiflames on Instagram.</a></p>
                </div>
            </div>


            <!-- Your Success Message Above -->
            <!-- Your Success Message Above -->
            <!-- Your Success Message Above -->
        </fieldset>

    </form>
</div>


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

    document.querySelector('.print_timestamp').value = current_timestamp;
    document.querySelector('.print_current_date').value = current_date;
    document.querySelector('.print_current_time').value = current_time;
</script>

<script>
    console.log("Reloaded");

    // dom variables
    var msf_getFsTag = document.getElementsByTagName("fieldset");

    // declaring the active fieldset & the total fieldset count
    var msf_form_nr = 0;
    var fieldset = msf_getFsTag[msf_form_nr];
    fieldset.className = "msf_show";

    // creates and stores a number of bullets
    var msf_bullet_nr = "<div class='msf_bullet'></div>";
    var msf_length = msf_getFsTag.length;
    for (var i = 1; i < msf_length; ++i) {
        msf_bullet_nr += "<div class='msf_bullet'></div>";
    };
    // injects bullets
    var msf_bullet_o = document.getElementsByClassName("msf_bullet_o");
    for (var i = 0; i < msf_bullet_o.length; ++i) {
        var msf_b_item = msf_bullet_o[i];
        msf_b_item.innerHTML = msf_bullet_nr;
    };

    // removes the first back button & the last next button
    document.getElementsByName("back")[0].className = "msf_hide";
    document.getElementsByName("next")[msf_bullet_o.length - 1].className = "msf_hide";

    // Makes the first dot active
    var msf_bullets = document.getElementsByClassName("msf_bullet");
    msf_bullets[msf_form_nr].className += " msf_bullet_active";

    // Validation loop & goes to the next step
    function msf_btn_next() {
        var msf_val = true;
        var msf_fs = document.querySelectorAll("fieldset")[msf_form_nr];
        var msf_fs_i_count = msf_fs.querySelectorAll(".mandatory-field").length;
        var ab = document.getElementById("styled-checkbox-2");

        for (i = 0; i < msf_fs_i_count; ++i) {
            var msf_input_s = msf_fs.querySelectorAll(".mandatory-field")[i];
            var next_button = msf_fs.querySelectorAll(".next-button")[i];

            if (msf_input_s.getAttribute("type") === "button") {
                // nothing happens


            } else {
                if (msf_input_s.value === "" && ab.checked === false) {
                    msf_input_s.style.borderColor = "red";

                    msf_val = false;
                } else {
                    if (msf_val === false) {} else {
                        msf_val = true;
                        msf_input_s.style.borderColor = "lime";
                    }
                }
            };
        };
        if (msf_val === true) {
            // goes to the next step
            var selection = msf_getFsTag[msf_form_nr];
            selection.className = "msf_hide";
            msf_form_nr = msf_form_nr + 1;
            var selection = msf_getFsTag[msf_form_nr];
            selection.className = "msf_show";
            // refreshes the bullet
            var msf_bullets_a = msf_form_nr * msf_length + msf_form_nr;
            msf_bullets[msf_bullets_a].className += " msf_bullet_active";
        }

    };

    // goes one step back
    function msf_btn_back(e) {
        // e.preventDefault();

        msf_getFsTag[msf_form_nr].className = "msf_hide";
        msf_form_nr = msf_form_nr - 1;
        msf_getFsTag[msf_form_nr].className = "msf_showhide";

        let ab = document.getElementById('success_message')
        ab.style.display = "block";
        console.log(emx.value)
    };

    console.log("loaded");
</script>

<script>
    // Restricts input for the given textbox to the given inputFilter.
    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function (
            event) {
            textbox.addEventListener(event, function () {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        });
    }
    // Install input filters.
    setInputFilter(document.getElementById("flames_username"), function (value) {
        return /^[a-zA-Z0-9]*$/i.test(value);

    });
</script>


<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>



<!-- 
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script> -->

<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        document.getElementById('imageUpload').addEventListener('change', readURL, true);

        function readURL() {
            const file = document.getElementById("imageUpload").files[0];
            const reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById('clock').style.backgroundImage = "url(" + reader.result + ")";
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {}
        }
    </script>
    -->



<!-- NEED HELP WITH THIS BIT -->
<!-- NEED HELP WITH THIS BIT -->
<!-- NEED HELP WITH THIS BIT -->

<script>
    var model_application_form = document.getElementById('model-application-form');
    let form = document.getElementById('model-application-form');
    form.addEventListener("submit", e => {
        e.preventDefault();
        fetch(form.action, {
            method: "POST",
            body: new FormData(document.getElementById("model-application-form")),
        }).then(
            response => response.json()
        ).then((html) => {
            // you can put any JS code here
            //console.log(html);
            e.preventDefault();
            e.stopPropagation();
            //alert('success');
            //let form= document.getElementById('model-application-form')
            //form.style.display="none"

            let emx = document.forms["Form"]["data[model_email]"]
            if (emx.value === "") {
                emx.style.borderColor = "red";
            } else {

                let form = document.getElementById('lasStep')
                form.style.display = "none"

                let ab = document.getElementById('success_message')
                //ab.style.display="inline-block";
                ab.className = ".msf_show";
                console.log(ab);
            }
        });
    });
</script>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

<?php get_template_part( 'blocks/blocks' ); ?>

<?php if ( !empty( get_the_content() ) ) : ?>
<div class="bg-white row-block page-block">
    <div class="w-max article-body">
        <?php the_content(); ?>
    </div>
</div>
<?php endif; ?>
<?php endwhile; endif; ?>


<?php get_footer();  ?>


