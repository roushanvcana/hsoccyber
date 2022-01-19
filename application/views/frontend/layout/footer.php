<?php 
    $websitedata = $this->db->query('select * from manage_website_setting')->result_array();
?>
<div data-elementor-type="footer" data-elementor-id="72" class="elementor elementor-72 elementor-location-footer" data-elementor-settings="[]">
	<div class="elementor-section-wrap">
		<section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-0a6193b elementor-section-boxed elementor-section-height-default elementor-section-height-default" >
			<div class="elementor-background-overlay"></div>
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a0ef3fc">
					<div class="elementor-widget-wrap elementor-element-populated">
						<section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-4f2d487 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ea7a810">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-276c298 elementor-widget elementor-widget-image">
											<div class="elementor-widget-container footer-logo"> <a href="<?php echo site_url("/home "); ?>"> <img src="<?php echo base_url();?>uploads/gallery-image/<?php echo $websitedata[0]['logo']; ?>" title="Hsoc Grey" alt="Hsoc Grey" /> </a> </div>
										</div>
										<div class="elementor-element elementor-element-24b80df ob-harakiri-inherit elementor-widget elementor-widget-text-editor" >
											<div class="elementor-widget-container">
												<p>HSOC Cyber, formerly Professional Certifications and Consulting Services, is a service-disabled, veteran-owned small business (SDVOSB).</p>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-93a8c85" >
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-3151745 ob-harakiri-inherit elementor-widget elementor-widget-heading">
											<div class="elementor-widget-container">
												<h5 class="elementor-heading-title elementor-size-default">Quick Links</h5>
											</div>
										</div>
										<div class="elementor-element elementor-element-2d943e8 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list">
											<div class="elementor-widget-container">
												<ul class="elementor-icon-list-items">
													<li class="elementor-icon-list-item"> <a href="<?php echo site_url("/about"); ?>"> <span class="elementor-icon-list-text">About Us</span> </a> </li>
													<li class="elementor-icon-list-item"> <a href="<?php echo site_url("/services"); ?>"> <span class="elementor-icon-list-text">Service</span> </a> </li>
													<li class="elementor-icon-list-item"> <a href="<?php echo site_url("/contact"); ?>"> <span class="elementor-icon-list-text">Contact</span> </a> </li>

												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-689a0ef">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-8dd927a ob-harakiri-inherit elementor-widget elementor-widget-heading">
											<div class="elementor-widget-container">
												<h5 class="elementor-heading-title elementor-size-default">Support</h5>
											</div>
										</div>
										<div class="elementor-element elementor-element-4a7e35e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list">
											<div class="elementor-widget-container">
												<ul class="elementor-icon-list-items">
													<li class="elementor-icon-list-item"> <a href="#"> <span class="elementor-icon-list-text">Help Center</span> </a> </li>
													<li class="elementor-icon-list-item"> <a href="#"> <span class="elementor-icon-list-text">FAQ</span> </a> </li>
													<li class="elementor-icon-list-item"> <a href="#"> <span class="elementor-icon-list-text">Ticket</span> </a> </li>
													<li class="elementor-icon-list-item"> <a href="#"> <span class="elementor-icon-list-text">Forum</span> </a> </li>
													<li class="elementor-icon-list-item"> <a href="#"> <span class="elementor-icon-list-text">Contact Us</span> </a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d4c11ae">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-e315390 ob-harakiri-inherit elementor-widget elementor-widget-heading">
											<div class="elementor-widget-container">
												<h5 class="elementor-heading-title elementor-size-default">Newsletter</h5>
											</div>
										</div>
										<div class="elementor-element elementor-element-ab27332 ob-harakiri-inherit elementor-widget elementor-widget-text-editor">
											<div class="elementor-widget-container">
												<p>Sign up our newsletter for update information, insight and promotion.</p>
											</div>
										</div>
										<div class="elementor-element elementor-element-ec07b74 elementor-button-align-stretch elementor-widget elementor-widget-form">
											<div class="elementor-widget-container">
												<form class="elementor-form" method="post" name="New Form">
													<input type="hidden" name="post_id" value="72"/>
													<input type="hidden" name="form_id" value="ec07b74"/>
													<input type="hidden" name="referer_title" value="Homepage"/>
													<input type="hidden" name="queried_id" value="798"/>
													<div class="elementor-form-fields-wrapper elementor-labels-">
														<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
															<label for="form-field-email" class="elementor-field-label elementor-screen-only">Enter your email address</label>
															<input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Enter your email address" required="required" aria-required="true">
														</div>
														<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
															<button type="submit" class="elementor-button elementor-size-md"> <span > <span class=" elementor-button-icon"> </span> <span class="elementor-button-text">Sign Up</span> </span> </button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-4e0a127 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-29382b9">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-0cec0b8 elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list">
											<div class="elementor-widget-container">
												<ul class="elementor-icon-list-items elementor-inline-items">
													<li class="elementor-icon-list-item elementor-inline-item"> <a href="<?php echo base_url(); ?>privacy-policy"> <span class="elementor-icon-list-text">Privacy Policy</span> </a> </li>
													<li class="elementor-icon-list-item elementor-inline-item"> <a href="<?php echo base_url(); ?>cookie"> <span class="elementor-icon-list-text">Cookie Policy</span> </a> </li>
													<li class="elementor-icon-list-item elementor-inline-item"> <a href="<?php echo base_url(); ?>term-of-use"> <span class="elementor-icon-list-text">Terms of Use</span> </a> </li>
													<li class="elementor-icon-list-item elementor-inline-item"> <a href="#"> <span class="elementor-icon-list-text">Site Map</span> </a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ce5b46">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-8afdbb6 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" >
											<div class="elementor-widget-container">
												<div class="elementor-social-icons-wrapper elementor-grid"> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-grow elementor-repeater-item-71798fc" target="_blank"> <span class="elementor-screen-only">Facebook</span> <i class="fab fa-facebook"></i> </a>
													</span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-grow elementor-repeater-item-b9c3e11" target="_blank"> <span class="elementor-screen-only">Linkedin</span> <i class="fab fa-linkedin"></i> </a>
													</span> <span class="elementor-grid-item"> <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-grow elementor-repeater-item-a54ab8b" target="_blank"> <span class="elementor-screen-only">Twitter</span> <i class="fab fa-twitter"></i> </a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-12b6a0e">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-72c8974 ob-harakiri-inherit elementor-widget elementor-widget-heading">
											<div class="elementor-widget-container"> <span class="elementor-heading-title elementor-size-default">Copyright © 2022, All rights reserved. Design by : Vcanaglobal.</span> </div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<link rel='stylesheet' id='premium-addons-css' href='<?php echo base_url(); ?>design/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-css/premium-addons.min1c9b.css?ver=4.6.1' type='text/css' media='all'/>
<link rel='stylesheet' id='e-animations-css' href='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/lib/animations/animations.mina7da.css?ver=3.4.7' type='text/css' media='all'/>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/ooohboi-steroids-for-elementor/assets/js/ooohboi-steroids-min9c0d.js?ver=1.8.103082021b' id='ooohboi-steroids-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script8d5a.js?ver=2.4.0' id='elementskit-framework-js-frontend-js'></script>
<script type='text/javascript' id='elementskit-framework-js-frontend-js-after'>
	var elementskit = {
		resturl: '',
	}
</script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts8d5a.js?ver=2.4.0' id='ekit-widget-scripts-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-includes/js/wp-embed.min080f.js?ver=5.8.2' id='wp-embed-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1' id='smartmenus-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1' id='jquery-numerator-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/lottie.min1c9b.js?ver=4.6.1' id='lottie-js-js'></script>
<!--<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-includes/js/jquery/ui/mouse.min35d0.js?ver=1.12.1' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-includes/js/jquery/ui/draggable.min35d0.js?ver=1.12.1' id='jquery-ui-draggable-js'></script>-->

<script type='text/javascript' id='premium-addons-js-extra'>
	/* <![CDATA[ */
	var PremiumSettings = {
		"ajaxurl": "",
		"nonce": "f547c95abb"
	};
	/* ]]> */
</script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/premium-addons-for-elementor/assets/frontend/min-js/premium-addons.min1c9b.js?ver=4.6.1' id='premium-addons-js'></script>
<!--<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>-->
<!--<script type='text/javascript' id='bdt-uikit-js-extra'>
	/* <![CDATA[ */
	var element_pack_ajax_login_config = {
		"ajaxurl": "",
		"loadingmessage": "Sending user info, please wait..."
	};
	var ElementPackConfig = {
		"ajaxurl": "",
		"nonce": "42f2e35418",
		"contact_form": {
			"sending_msg": "Sending message please wait...",
			"captcha_nd": "Invisible captcha not defined!",
			"captcha_nr": "Could not get invisible captcha response!"
		},
		"elements_data": {
			"sections": [],
			"columns": [],
			"widgets": []
		}
	};
	/* ]]> */
</script>-->
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/bdthemes-element-pack-lite/assets/js/bdt-uikit.min3d36.js?ver=3.3.1' id='bdt-uikit-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/js/webpack.runtime.mina7da.js?ver=3.4.7' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/js/frontend-modules.mina7da.js?ver=3.4.7' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/lib/share-link/share-link.mina7da.js?ver=3.4.7' id='share-link-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>design/wp-content/plugins/elementor/assets/js/frontend.mina7da.js?ver=3.4.7' id='elementor-frontend-js'></script>

<script type='text/javascript' id='elementor-frontend-js-extra'>
	/* <![CDATA[ */
	var PaModulesSettings = {
		"equalHeight_url": ""
	};
	/* ]]> */
</script>

<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/bdthemes-element-pack-lite/assets/js/element-pack-site.min3d36.js?ver=3.3.1' id='element-pack-site-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/prime-slider-site.min3c94.js?ver=2.1.0' id='prime-slider-site-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.minee9a.js?ver=3.2.2' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.minee9a.js?ver=3.2.2' id='elementor-sticky-js'></script>

<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/js/frontend.minee9a.js?ver=3.2.2' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.minee9a.js?ver=3.2.2' id='pro-preloaded-elements-handlers-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle8d5a.js?ver=2.4.0' id='animate-circle-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor8d5a.js?ver=2.4.0' id='elementskit-elementor-js'></script>
<script type='text/javascript' id='elementor-frontend-js-after'>
	window.scopes_array = {};
	window.backend = 0;
	jQuery( window ).on( "elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction( "frontend/element_ready/section", function ( $scope, $ ) {
			if ( "undefined" == typeof $scope ) {
				return;
			}
			if ( $scope.hasClass( "premium-equal-height-yes" ) ) {
				var id = $scope.data( "id" );
				window.scopes_array[ id ] = $scope;
			}
			if ( elementorFrontend.isEditMode() ) {
				var url = PaModulesSettings.equalHeight_url;
				jQuery.cachedAssets = function ( url, options ) {
					// Allow user to set any option except for dataType, cache, and url.
					options = jQuery.extend( options || {}, {
						dataType: "script",
						cache: true,
						url: url
					} );
					// Return the jqXHR object so we can chain callbacks.
					return jQuery.ajax( options );
				};
				jQuery.cachedAssets( url );
				window.backend = 1;
			}
		} );
	} );
	jQuery( document ).ready( function () {
		if ( jQuery.find( ".premium-equal-height-yes" ).length < 1 ) {
			return;
		}

		var url = PaModulesSettings.equalHeight_url;

		jQuery.cachedAssets = function ( url, options ) {
			// Allow user to set any option except for dataType, cache, and url.
			options = jQuery.extend( options || {}, {
				dataType: "script",
				cache: true,
				url: url
			} );

			// Return the jqXHR object so we can chain callbacks.
			return jQuery.ajax( options );
		};
		jQuery.cachedAssets( url );
	} );
</script>

<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/bdthemes-element-pack-lite/assets/js/element-pack-site.min3d36.js?ver=3.3.1' id='element-pack-site-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/prime-slider-site.min3c94.js?ver=2.1.0' id='prime-slider-site-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.minee9a.js?ver=3.2.2' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.minee9a.js?ver=3.2.2' id='elementor-sticky-js'></script>

<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/js/frontend.minee9a.js?ver=3.2.2' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.minee9a.js?ver=3.2.2' id='pro-preloaded-elements-handlers-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle8d5a.js?ver=2.4.0' id='animate-circle-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor8d5a.js?ver=2.4.0' id='elementskit-elementor-js'></script>
<script type='text/javascript' src='<?php echo base_url();?>design/wp-content/plugins/elementor/assets/js/preloaded-modules.mina7da.js?ver=3.4.7' id='preloaded-modules-js'></script>


</body>

</html>