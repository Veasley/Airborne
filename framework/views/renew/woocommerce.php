<?php

// =============================================================================
// VIEWS/RENEW/WOOCOMMERCE.PHP
// -----------------------------------------------------------------------------
// WooCommerce page output for Renew.
// =============================================================================
?>


<?php get_header(); ?>

	<?php
		// DECLAIRING ACF FIELDS
		//========================================
		$shop_header_img = get_field('shop_header_img', 'options');
		$shop_header_txt = get_field('shop_header_txt', 'options');
	?>

	<!-- CUSTOME SHOP HEADER -->
	<div id="shop-header" class="x-section bg-image _before _overlay-black" style=" margin: 0px; padding: 5% 0; background-image: url(<?php echo esc_url ( $shop_header_img['url'] ) ; ?>); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
		<!-- start container -->
		<div class="x-container max width cs-ta-center _tagline" style="margin: 0px auto; padding: 0px;">
			<div class="x-column x-sm header-top x-1-1" style="padding: 0px 0px 0px 0px;">
				<h2 class="h-custom-headline h-responsive h3 accent center" style="color: rgb(255, 255, 255); line-height: 1.5em; font-size: 32px;">
					<span>
						<?php if( $shop_header_txt ): ?>
							<?php echo $shop_header_txt; ?>
						<?php endif; ?>
					</span>
				</h2>
			</div>
	
		</div><!-- end container -->
	</div>

	<div class="x-container max width offset">
		<div class="<?php x_main_content_class(); ?>" role="main">
		
			<?php woocommerce_content(); ?>
		
		</div>
	
		<?php get_sidebar(); ?>
	</div>
	
	<?php
		// DECLAIRING ACF FIELDS
		//========================================
		$footer_img = get_field('footer_img', 'options');
		$footer_txt = get_field('footer_txt', 'options');
	?>
	
	<div id="footer-cta" class="x-section bg-image _before _overlay-black" style=" margin: 0px; padding: 0 0; background-image: url(<?php echo esc_url ( $footer_img['url'] ) ; ?>); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
		<div class="x-container max width">
			<div class="x-column x-sm x-1-1" style="padding: 6% 0; ">
				<h3 class="h-custom-headline cs-ta-center h4" style="color: hsl(0, 0%, 100%);line-height: 1.5em;">
					<span>
						<?php if( $footer_txt ): ?>
							<?php echo $footer_txt; ?>
						<?php endif; ?>
					</span>
				</h3>
				<?php echo do_shortcode('[gravityform id=1]'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

