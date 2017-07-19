<?php
// Put any helper functions for the theme here, however
// please consider putting custom functions in a custom site plugin.
// ===================================================

/*========================================================
// CUSTOM LOGIN LOGO
// Switching out Wordpress logo to our own logo
========================================================*/

function custom_login_logo() {
	
    echo '<style type="text/css">
    
    	body.login {
			background-color: #ffffff !important;
		}

        h1 a { 
        	background-image:url(/wp-content/uploads/2017/07/horizontal-logo.png) !important; 
          	background-size: 90% !important;
			width: 100% !important;
			height: 97px !important;
			background-position: center center;
        }
    </style>';
}

add_action('login_head', 'custom_login_logo');


/*========================================================
// ACF OPTIONS PAGE
// Adding Advance Custom Fields OPTIONS page
//source(https://www.advancedcustomfields.com/resources/options-page/)
========================================================*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}