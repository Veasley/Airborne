<?php

// =============================================================================
// VIEWS/RENEW/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Renew.
// =============================================================================

?>

	<div class="x-column x-sm x-1-1" style="padding: 0px 3% 3%; background-color:hsla(0, 0%, 73%, 0.25);"><h3 class="h-custom-headline cs-ta-center h4" style="color: hsl(0, 0%, 100%);line-height: 1.5em;"><span>For the latest news and product updates,<br>
submit your name and email below.</span></h3>
                <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1"><a id="gf_1" class="gform_anchor"></a><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1" action="/#gf_1">
                        <div class="gform_body"><ul id="gform_fields_1" class="gform_fields top_label form_sublabel_above description_above"><li id="field_1_1" class="gfield gf_inline field_sublabel_above field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_1_1">Name</label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_1_1" type="text" value="" class="large" tabindex="1" placeholder="Name" aria-invalid="false"></div></li><li id="field_1_2" class="gfield gf_inline field_sublabel_above field_description_above gfield_visibility_visible"><label class="gfield_label" for="input_1_2">Email</label><div class="ginput_container ginput_container_text"><input name="input_2" id="input_1_2" type="text" value="" class="large" tabindex="2" placeholder="Email" aria-invalid="false"></div></li>
                            </ul></div>
        <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" tabindex="3" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=1&amp;title=&amp;description=&amp;tabindex=1">
            <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
            <input type="hidden" class="gform_hidden" name="gform_submit" value="1">
            
            <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
            <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjI3ZjZjYWZmYTIxNzc4Y2I1MTA5MmZiY2Q2Y2NlMTg3Il0=">
            <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
            <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
            <input type="hidden" name="gform_field_values" value="">
            
        </div>
                        </form>
                        </div>
                <iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_1" id="gform_ajax_frame_1">This iframe contains the logic required to handle AJAX powered Gravity Forms.</iframe>
                <script type="text/javascript">jQuery(document).ready(function($){gformInitSpinner( 1, 'https://airborneoutfitters.com/wp-content/plugins/gravityforms/images/spinner.gif' );jQuery('#gform_ajax_frame_1').load( function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_1').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_1').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_1').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner( 1, 'https://airborneoutfitters.com/wp-content/plugins/gravityforms/images/spinner.gif' );jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting_1'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_1').offset().top);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting_1'] = false;}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );</script><script type="text/javascript"> if(typeof gf_global == 'undefined') var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"https:\/\/airborneoutfitters.com\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/airborneoutfitters.com\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 1) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); </script></div>

	<?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
	<?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
	<?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>

	<?php if ( x_get_option( 'x_footer_bottom_display' ) == '1' ) : ?>
	
	<footer class="x-colophon bottom" role="contentinfo">
	  <div class="x-container marginless-columns">
	
	    <?php if ( x_get_option( 'x_footer_menu_display' ) == '1' ) : ?>
	      <?php x_get_view( 'global', '_nav', 'footer' ); ?>
	    <?php endif; ?>
		
			
	    <?php if ( x_get_option( 'x_footer_content_display' ) == '1' ) : ?>
	      <div class="x-colophon-content">
	        <?php echo do_shortcode( x_get_option( 'x_footer_content' ) ); ?>
	      </div>
	    <?php endif; ?>
	    
		    <?php if ( x_get_option( 'x_footer_social_display' ) == '1' ) : ?>
		      <?php x_social_global(); ?>
		    <?php endif; ?>
		

	  </div>
	</footer>
	
	<?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>