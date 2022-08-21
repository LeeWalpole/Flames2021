<?php 

/**
 *  The multi-Step form template and the donor dashboard load in an iframe, which prevents theme styles from interfering with their styles.
 *  To style them, use this PHP snippet to add inline styles. Replace lines 16-26 with your custom styles.
 */

function override_iframe_template_styles_with_inline_styles() {
    wp_add_inline_style(
        /**
         *  Below, use give-sequoia-template-css to style the multi-step donation form
         *  or use give-donor-dashboards-app to style the donor dashboard
         */
        'give-sequoia-template-css',
        '
        /* add styles here! A sample (turns the headline text blue): */
        .introduction .headline {
            color: blue;
        }
        
        /* It changes the donor name on the donor dashboard to green: */
        
        .give-donor-dashboard-donor-info__details .give-donor-dashboard-donor-info__name {
            color: green;
        }

        [class*="give-form"],
        form[class*="give-form"] .give-btn,
        form[class*="give-form"] .give-btn {
            background-color:linear-gradient(#9F6CFF 0%, #9F6CFF 10%, #FF0AAA 75%, #FF6CCC 100%)!important;
        }
        
        form[class*="give-form"] {width:100%!important; display:block!important;}
        
        .give-donor__details {display:flex;
            justify-content:space-evenly;
            align-items:center;
        }
        
        .give-form-goal-progress-meter:after {
            background:linear-gradient(#9F6CFF 0%, #9F6CFF 10%, #FF0AAA 75%, #FF6CCC 100%)!important;
            background-color:linear-gradient(#9F6CFF 0%, #9F6CFF 10%, #FF0AAA 75%, #FF6CCC 100%)!important;
        }


        '
    );
}

add_action('wp_print_styles', 'override_iframe_template_styles_with_inline_styles', 10);