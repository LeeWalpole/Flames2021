<?php /* Template Name: Talent Application #1 */ ?>

<?php get_header(); // includes nav and hero ?>

<style>
    /* More Critical Font CSS */
    :root {
        --font-1: 'Modern Era';
        --font-1b: 'Modern Era';
        --font-1bb: 'Modern Era';
        --regular: 400;
        --medium: 500;
        --bold: 800;
        --heavy: 900;
        --form-large: 1.25rem;
    }


    * {
        font-family: var(--font-1);
        font-weight: var(--regular);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: var(--color-1b);

    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100%;
    }

    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    iframe,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
        box-sizing: border-box;
        text-decoration: none;
    }

    body {
        overflow-x: hidden;
    }

    html,
    body {
        box-sizing: border-box;
        max-width: 100vw;
        width: 100vw;
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        display: none;
    }


    :root {
        --padding-big: 40px;
        --padding: 20px;
        --padding-small: 10px;
        --padding-xsmall: 5px;
    }

    @media (min-width:768px) {
        :root {
            --padding-big: 100px;
            --padding: 50px;
            --padding-small: 25px;
            --padding-xsmall: 10px;
        }

    }

    :root {
        --w-safe: 768px;
        --w-max: 1280px;
    }


    .w-safe {
        max-width: var(--w-safe);
    }

    .w-max {
        max-width: var(--w-max);
    }


    .w-full {
        max-width: 100% !important;
    }


    .relative {
        position: relative;
    }

    .row-block {
        padding: var(--padding-big) var(--padding-small);
        display: block;
    }

    @media only screen and (min-width : 768px) {

        .row-block {
            padding: var(--padding-big) 0;
            display: block;
        }

    }


    .valign {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    .padding-x {
        padding-left: var(--padding);
        padding-right: var(--padding);
    }


    s {
        text-decoration: line-through;
        /* strikethrough text*/
    }

    .relative {
        position: relative;
    }


    .w-safe {
        max-width: var(--w-safe);
    }

    .w-max {
        max-width: var(--w-max);
    }

    .w-full,
    .w-full>* {
        max-width: 1500px !important;
        background: red !important;
    }

    .margin-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .m-auto {
        margin-left: auto !important;
        margin-right: auto !important;
    }


    :root {
        --black1: #0a0a0a;
        --black2: #1a1a1a;
        --black3: #2a2a2a;
        --white1: #fff;
        --white2: #f1f1f1;
        --white3: #e1e1e1;
        --color1: #c20091;
        --color1a: #dc1fac;
        --color2: #dc1fac !important;
        --grey: #887f88;
    }

    html[data-theme="dark"] *[data-theme="dark"] * {
        --color-0a: var(--black1);
        --color-0b: var(--black2);
        --color-0c: var(--black3);
        --color-1a: var(--white1);
        --color-1b: var(--white2);
        --color-1c: var(--white3);
    }

    html[data-theme="light"],
    *[data-theme="light"] *,
    *[data-theme="light"] *>* {
        --color-0a: var(--white1);
        --color-0b: var(--white2);
        --color-0c: var(--white3);
        --color-1a: var(--black1);
        --color-1b: var(--black2);
        --color-1c: var(--black3);
    }


    :root {
        --black: var(--black1);
        --white: #fff;
        --offblack: var(--black2);
        --offwhite: var(--white2);
        --color-light: #dadbdc;
        --color-lightgrey: #babbbc;
        --color-darkgrey: #2a2b2c;
        --color-lightgrey-half: #babbbc50;
        --color-grey: var(--color-1c);
        --color-grey-half: #9a9b9c50;
        /* --dark-border:#babbbc50; */
        --color-warning: #ee0099;
    }


    .bg-color {
        background-color: var(--color) !important;
    }

    .bg-white {
        background-color: var(--white) !important;
    }

    .bg-offwhite {
        background-color: var(--offwhite) !important;
    }

    .bg-black {
        background-color: var(--black) !important;
    }

    .bg-offblack {
        background-color: var(--offblack) !important;
    }

    .color {
        color: var(--color) !important;
    }

    .filter-black {
        filter: brightness(0);
    }

    .filter-white {
        /* filter:  brightness(100) invert(1); */
        filter: brightness(100);
    }


    .headline {
        color: var(--color-1a);
    }

    .subheadline {
        color: var(--color-1b);
    }






    :root {
        --temp-logo: 18px;
    }

    @media only screen and (min-width: 768px) {
        :root {
            --temp-logo: 32px;
        }
    }


    .temp-banner {
        position: relative;

        top: 0;
        left: 0;
        width: 100%;
        padding: var(--padding);
        display: flex;
        align-items: center;
        flex-direction: row;
        background: #fdfdfd;
        margin-bottom: var(--padding-big);
    }

    .temp-banner::after {
        content: "";
        border-bottom: 1px solid var(--grey);
        height: 0;
        opacity: .1;
        width: 100vw;
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .temp-banner img {
        height: var(--temp-logo);
    }

    .temp-banner span {
        margin: 0 var(--padding-small);
        color: var(--grey);
    }


    .temp-banner p {
        font-size: var(--xsmall);
        color: var(--grey);
        margin-top: -4.5px;
    }

    /* For the function */
    .msf_hide {
        display: none;
        opacity: 0;
        /* pointer-events: none;
                transition: 0.33s ease-in-out all; */
    }

    .msf_show {
        display: block;
        z-index: 999;
        /* opacity:1;
                pointer-events:initial;
                transition: 0.33s ease-in-out all; */
    }

    /* .msf_bullet_o {
                display: flex;
                flex-flow: row wrap;
                justify-content: center;
                position: absolute;
                top: var(--padding-big);
            }
    
            .msf_bullet_o>div {
                height: 15px;
                width: 15px;
                margin: 20px 10px;
                border-radius: 100px;
                z-index: 2;
            }
    
            .msf_bullet {
                background-color: lightgrey;
    
            }
    
            .msf_bullet_active {
                background-color: darkgrey !important;
            } */

    .form-container {
        display: flex;
        align-items: center;
        /* min-height: calc(50vh - var(--nav-height) - var(--padding));  */
        width: 100vw;
        padding: calc(var(--padding-big) + var(--nav-height)) var(--padding-big) !important;
    }

    .form .header {
        margin: 0;
        padding: var(--padding-xsmall) 0 var(--padding) !important;
    }


    :root {
        --form-header: 1.4rem;
    }

    @media only screen and (min-width : 768px) {

        :root {
            --form-header: 2.4rem;
        }


    }


    .form .header h2 {
        line-height: 1.25 !important;
        font-weight: 400;
        font-size: var(--form-header);
    }


    .form .header h2 strong {
        /* font-weight:600;  */
        font-weight: 400;
    }

    .form .header small {
        font-size: 1rem !important;
        color: var(--grey) !important;
        margin-top: var(--padding-xsmall) !important;
        display: block;
    }

    .form-step {
        font-size: var(--small);
        color: var(--color1);
    }




    .fields-block {
        margin-top: var(--padding);
    }

    .fields-block p {
        margin-bottom: var(--padding-small);
    }

    .form {
        width: 100%;
    }

    .form fieldset {
        width: 100%;
        border: 0;
    }




    :root {
        --form-large: 1.25rem;
        --input-height-big: 40px;
        --checkbox-height: 32px;
    }

    @media (min-width:768px) {
        :root {
            --form-large: 1.5rem;
            --input-height-big: 50px;
            --checkbox-height: 32px;

        }
    }

    select {
        -webkit-appearance: none;
        /* remove the strong OSX influence from Webkit */
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .form input,
    form input[type=number],
    .form select,
    input[type="search"] {
        width: 100%;
        border-radius: 0;
        border: none;
        -webkit-appearance: none;
        border-bottom: var(--grey) 1px solid;
        padding: var(--padding-xsmall) !important;
        margin-bottom: var(--padding) !important;
        background-color: transparent;
        color: var(--grey) !important;
        font-size: var(--form-large);
        font-weight: 400 !important;
        line-height: var(--input-height-big);
        height: var(--input-height-big);
    }

    .form .icon-input {
        width: 100%;
        position: relative;
        display: flex;
        line-height: var(--input-height-big);
        height: var(--input-height-big);
        margin-bottom: var(--padding) !important;
    }

    .form .icon-input .icon-box {
        /* position: absolute; left: 0; */
        height: 100%;
        padding-right: var(--padding-xsmall);
        /* position: absolute; top:0; left:0; */
    }

    .form .icon-input input,
    .form .icon-input select {
        width: fill;
    }

    .form select {
        background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat right !important;
        background-position-x: calc(100% - var(--padding-xsmall)) !important;

    }

    .form select {
        width: 100%;
        text-align: left;
        border-radius: none;
        background: #fff;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 0 !important;
    }

    .form textarea {
        width: 100%;
        height: 100px;
        line-height: 100px;
        font-size: 1.4rem;
        border: none !important;
        ;
        border-bottom: var(--grey) 1px solid !important;
        padding: var(--padding-xsmall);
        margin-bottom: var(--padding);
        background-color: transparent !important;
        border-radius: 0 !important;
        margin-top: var(--padding);

    }

    @media only screen and (min-width: 768px) {

        .form .grid-gap {
            grid-gap: 0 var(--padding);
        }



        .form textarea {
            margin-top: 0;
            height: 70px;
            line-height: 70px;

        }

        .form .icon-input {
            /* margin-bottom: 0 !important; */
        }

    }



    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: var(--grey);
        opacity: 1;
        font-weight: inherit;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: red;
    }


    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: red;
    }

    .form-buttons {
        display: flex;
        align-items: center;
        justify-content: center;
        height: var(--input-height-big);
    }


    input:focus::placeholder {
        transition: all 0.25s ease-in-out;
    }

    input {
        transition: all 0.25s ease-in-out;
        position: relative;
    }

    input:focus::placeholder {
        opacity: 0.2;

    }

    .username_prefix {
        position: relative;
    }

    .username_prefix input {
        position: relative;
    }


    .username_prefix:focus-within input {
        position: relative;
        padding-left: 32px !important;
    }


    .username_prefix:focus-within::before {
        content: "@";
        position: absolute;
        left: -20px;
        top: 0;
        height: var(--input-height-big);
        line-height: var(--input-height-big);
        font-size: var(--form-large);
        color: var(--grey);
        width: 20px;
        opacity: 0.25;
        transition: all 0.25s ease-in-out;
    }

    .username_prefix::before {
        margin-left: 20px;
        transition: all 0.25s ease-in-out;
        opacity: 0;
    }





    .form button {
        border: none;
        background-color: transparent;
        cursor: pointer;
    }


    .form-buttons .button:nth-child(2) {
        font-size: 1.24rem;
    }


    .form-buttons {
        position: relative;
        margin-top: var(--padding-big);
        font-size: 1.25rem;
    }

    .form-buttons svg {
        font-size: 2.25rem;

    }

    @media only screen and (min-width: 768px) {
        .form-buttons {
            font-size: 2rem;
        }

        .form-buttons svg {
            font-size: 3.33rem;
        }

    }

    .form button {
        font-size: var(--button-large);
    }

    button,
    .next-button,
    .back-button {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .back-button {
        left: 0;
        opacity: 0.25;
        font-size: 0.8rem;
    }

    .back-button span {
        display: none;
    }

    button,
    .next-button {
        right: 0;

    }

    .next-button span,
    .next-button * {
        fill: var(--color1) !important;
    }

    button:hover,
    .next-button *:hover {
        color: var(--color1) !important;
    }




    .back-button span,
    .back-button * {
        color: grey !important;
        fill: grey !important;

    }


    .back-button svg {
        margin-right: var(--padding-small);
        font-size: 1.2rem;

    }

    .next-button svg {
        margin-left: var(--padding-small);

    }

    .dob-fields {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: var(--padding-small);
        width: 100%;
    }





    .h-align,
    .icon-box {
        display: inline-flex;
        justify-content: center;
        align-items: center;

    }

    .form small.explainer {
        display: block;
        color: var(--color-0c);
    }

    .checkbox label {
        position: relative;
        cursor: pointer;
        line-height: var(--input-height-big);
        height: var(--input-height-big);
        display: flex;
        align-items: center;
        margin-bottom: var(--padding);
    }

    .styled-checkbox {
        position: absolute;
        opacity: 0;
    }

    .styled-checkbox+label {
        position: relative;
        cursor: pointer;
        padding: 0;
        font-size: var(--form-large);
        line-height: 1.2;
    }

    .styled-checkbox+label:hover {
        color: var(--color1) !important;
    }


    .styled-checkbox+label:before {
        content: "";
        margin-right: var(--padding-small);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: var(--checkbox-height);
        height: var(--checkbox-height);

        background: white;
        border: 1px solid var(--grey) !important;

    }

    .styled-checkbox:hover+label:before {
        border: 1px solid var(--color1) !important;
    }

    .styled-checkbox:focus+label:before {
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.12);
    }

    .styled-checkbox:checked+label:before {
        background: var(--color1) !important;
    }

    .styled-checkbox:disabled+label {
        color: #b8b8b8;
        cursor: auto;
    }

    .styled-checkbox:disabled+label:before {
        box-shadow: none;
        background: #ddd;
    }




    textarea,
    input.text,
    input[type="text"],
    input[type="button"],
    input[type="submit"],
    .input-checkbox {
        -webkit-appearance: none;
        border-radius: 0;
    }

    input:focus,
    select:focus,
    textarea:focus,
    button:focus {
        outline: none;
    }


    .grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        padding: 0;
        grid-gap: 0;
        grid-gap: 0;
    }

    .grid-gap {
        grid-gap: 0 var(--padding);
    }

    [class*=colspan-] {
        grid-column: span 12;
    }

    @media only screen and (min-width:768px) {

        .grid-gap {
            grid-gap: var(--padding-big) var(--padding-big);
        }

        .colspan-1 {
            grid-column: span 1
        }

        .colspan-2 {
            grid-column: span 2
        }

        .colspan-3 {
            grid-column: span 3
        }

        .colspan-4 {
            grid-column: span 4
        }

        .colspan-5 {
            grid-column: span 5
        }

        .colspan-6 {
            grid-column: span 6
        }

        .colspan-7 {
            grid-column: span 7
        }

        .colspan-8 {
            grid-column: span 8
        }

        .colspan-9 {
            grid-column: span 9
        }

        .colspan-10 {
            grid-column: span 10
        }

        .colspan-11 {
            grid-column: span 11
        }

        .colspan-12 {
            grid-column: span 12
        }
    }



    .grid-3 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: var(--padding-xsmall);
        padding: var(--padding-xsmall) 0;
    }
</style>



    <div class="form-container bg-white" data-theme="light">

        <form action="https://sheetdb.io/api/v1/98kxypnfywvak" method="POST" id="model-application-form"
            class="form w-max" name="Form">

            <!-- Your Name Below -->
            <!-- Your Name Below -->
            <!-- Your Name Below -->
            <fieldset class="msf_hide">

                <p class="form-step">Step #1 of 5</p>

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

                <p class="form-step">Step #2 of 5</p>

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

            <!-- Your Socials Below -->
            <!-- Your Socials Below -->
            <!-- Your Socials Below -->

            <fieldset class="msf_hide">

                <p class="form-step">Step #3 of 5</p>


                <header class="header">
                    <h2>Your social profiles</h2>
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



            <!-- Why Join Below -->
            <!-- Why Join Below -->
            <!-- Why Join Below -->
            <fieldset class="msf_hide">

                <p class="form-step">Step #4 of 5</p>

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
                        <input class="styled-checkbox mandatory-field" id="styled-checkbox-4" type="checkbox"
                            value="Other" name="data[model_other]">
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




            <!-- Your Contact Below -->
            <!-- Your Contact Below -->
            <!-- Your Contact Below -->

            <fieldset class="msf_hide" id="lasStep">

                <p class="form-step">Step #5 of 5</p>

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

                        <input type="text" placeholder="Line ID" value="" name="data[model_line]" class=""
                            id="mce-LINE">

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

    <style>
#footer        { 

}
    </style>

    <?php get_footer();  ?>


</body>

</html>