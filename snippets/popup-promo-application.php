<style>
    .modal__content .form-container {
        letter-spacing: hidden !important;
        font-size: 1rem;

    }


    .modal__content .form-container {
        letter-spacing: hidden !important;
        font-size: 1rem;
    }

    .popup-form {
       
        align-items: center;
        position: relative;
        padding: var(--padding);
        z-index: 11;
    }

    .form {
        position: relative;
        width: 100%;

    }


    .popup-form .buttons {
        display: flex;
        justify-content: space-between;
        height: var(--button-height);
        margin: var(--padding-small) 0 0 0;
        flex-direction: row-reverse;
    }

    .popup-form .buttons .button-back {
        /* padding:0 var(--padding-xsmall); */
        display: inline-block;
        text-align: left;
        height: var(--button-height);
        line-height: var(--button-height);
        font-size: var(--xsmall);
        background-color: transparent;
        color: var(--color-1c);
    }

    .popup-form .buttons .button-back * {
        display: inline-block;
        margin-right: var(--padding-xsmall);
        color: var(--color-1c);
    }


    .popup-form .buttons .button {
        background-color: var(--color-1a);
        color: var(--color-0a);
        transition: ease all 0.22s;
        cursor: pointer;
        box-shadow: 4px 4px 14px 0 rgb(0 0 0 / 20%) !important;
    }

    .button-next {
        background-color: var(--color1)!important;
        color: white!important;
    }

    .button-next:hover {
        background-color: var(--color1)!important;
        color: white!important;
    }

    .popup-form .buttons .button * {
        color: var(--color-0a);
        margin-left: var(--padding-xsmall);
        transition: ease all 0.22s;
    }

    .popup-form .buttons .button:hover * {
        margin-left: var(--padding-small);            
    }

</style>

<div class="buttons bg-white">
    <!-- CTA 1 is a Modal  -->
    <a href="javascript:void(0);" data-modal="modal-join" class="button modal-trigger">Apply
        now...</a>
    <!-- No CTA 2 here :(  -->
</div>


<div class="modal modal-join">
    <div class="modal__transparent-layer modal-close"></div>
    <div class="modal__conten ">
        <div class="popup-form bg-white w-max" data-theme="light">

            <form action="https://sheetdb.io/api/v1/kgiqb5yfp878c" method="POST" id="model-application-form"
                class="form" name="Form">

                <!-- Your Name Below -->
                <!-- Your Name Below -->
                <!-- Your Name Below -->
                <fieldset class="msf_hide" id="lasStep">

                    <p class="form-step">APPLICATION</p>

                    <header class="header">
                        <h2>Flames Promotions</h2>
                        <small>Make sure you're following @thaiflames on Instagram so we can DM you.</small>
                    </header>

                    <div class="grid grid-gap">

                        <!-- <input type="text" name="data[model_name]" placeholder="You name" id="model_name"
                            class="mandatory-field colspan-6" onkeyup="showMe(this)"> -->


                        <div class="colspan-6 icon-input">
                            <div class="icon-box">
                                <i class="far fa-envelope"></i>
                            </div>
                            <input type="text" placeholder="Your name" name="data[model_name]"
                                class="mandatory-field" id="model_name">
                        </div>


                        <div class="colspan-6 icon-input">
                            <div class="icon-box">
                                <!-- <i class="fab fa-instagram"></i> -->
                                <i class="fas fa-at"></i>
                            </div>
                            <input type="text" placeholder="Instagram username" name="data[model_instagram]"
                                class="mandatory-field" id="model_instagram">
                        </div>


                        <div class="colspan-12 icon-input">
                            <div class="icon-box">
                                <i class="far fa-envelope"></i>
                            </div>
                            <input type="email" placeholder="Email address" name="data[model_email]"
                                class="mandatory-field" id="model_email">
                        </div>


                        <!-- <div class="colspan-4 checkbox">
                            <input class="styled-checkbox mandatory-field" id="model_age" type="checkbox"
                                value="18+" name="data[model_18+]">
                            <label for="model-type-3">I am aged 18+</label>
                        </div> -->

    

                    </div>




                    <div class="buttons bg-white">
                        <!-- CTA 1 is a Modal  -->


                        <button type="submit" class="button button-next">Claim your free promotion <i class="fas fa-arrow-right"></i>
                        </button>

<!-- 
                        <a href="#!" class="button button-next" onclick="msf_btn_next()">
                            Claim your free promotion <i class="fas fa-arrow-right"></i>
                        </a> -->

                        <!-- <a href="#!" class="button-back" onclick="msf_btn_back()">
                            <i class="fas fa-arrow-left"></i> Back
                        </a> -->


                    </div>


                </fieldset>
                <!-- Your Name Above -->
                <!-- Your Name Above -->
                <!-- Your Name Above -->

                <input name="data[timestamp]" type="hidden" class="print_timestamp" value=""></input>
                <input name="data[date]" type="hidden" class="print_current_date" value=""></input>
                <input name="data[time]" type="hidden" class="print_current_time" value=""></input>




                <!-- Your Contact Below -->
                <!-- Your Contact Below -->
                <!-- Your Contact Below -->


                <fieldset id="success_message" class="msf_hide">
        
                        <p class=" form-step">Hooray!! 😊</p>

                    <header class="header">
                        <h2>All done!</h2>
                        <small>Thanks for sending your application, <span class="print_first_name"></span>. We'll be
                            in
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
    </div>
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