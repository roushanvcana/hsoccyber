<?php $this->load->view('frontend/layout/header'); ?>
<style>
    .page_banner {
    position: relative;
    background-size: cover;
    width: 100%;
}
.page_banner:before {
    position: absolute;
    width:100%;
    height:100%;
    content:'';
    background:#000;
    opacity: 0.4;
}
.page_banner img {
    width: 1920px;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
}
.inner_banner {
    position: absolute;
    left: 0;
    right: 0;
    z-index: 4;
    text-align: center;
    top: 40%;
}
.inner_banner h2 {
    color:#000;
    font-size:60px;
}
.inner_banner ul {
    margin: 0;
    padding: 0;
}
.inner_banner  li {
    list-style:none;
    display:inline;
    padding: 0 6px 0 0;
}
.inner_banner  li a {
    color:#000;
}
.inner_banner  li a:hover {
    color:#fff;
    text-decoration:none;
}
</style>
<?php 
	   $data = $this->db->query('select * from manage_website_setting')->row_array();      
	   //echo $data['header_background_color']; die;
?>

<div class="page_banner">
<img src="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['contact_breadcom']; ?>">
    <div class="inner_banner">
        <h2>Contact us</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><i class="fas fa-arrow-right font-awesome-pro"></i></li>
            <li>Contact Us</li>
    </div>
</div>

<div data-elementor-type="wp-post" data-elementor-id="150" class="elementor elementor-150" data-elementor-settings="[]">
	<div class="elementor-section-wrap">
	
		<section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-5739281 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-eda2124">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e00cac4 ob-harakiri-inherit elementor-widget elementor-widget-heading">
							<div class="elementor-widget-container font-black">
								<h2 class="elementor-heading-title elementor-size-default">Get in Touch.</h2> </div>
						</div>
						<div class="elementor-element elementor-element-5b58107 ob-harakiri-inherit elementor-widget elementor-widget-text-editor">
							<div class="elementor-widget-container">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
							</div>
						</div>
						<div class="elementor-element elementor-element-5ca59ec elementor-widget-divider--view-line elementor-widget elementor-widget-divider">
							<div class="elementor-widget-container">
								<div class="elementor-divider">
									<span class="elementor-divider-separator">
        </span>
								

								</div>
							</div>
						</div>
						<section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-04d8457 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
							<div class="elementor-container elementor-column-gap-default">
								<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-aa9eb87">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-58fb413 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box">
											<div class="elementor-widget-container">
												<div class="ekit-wid-con">
													<!-- link opening -->
													<!-- end link opening -->

													<div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
														<div class="elementskit-box-header elementor-animation-">
															<div class="elementskit-info-box-icon  text-center bg-clr-none">
																<i class="fas fa-map-marker-alt font-awesome-free"></i>
															</div>
														</div>
														<div class="box-body">
															<h5 class="elementskit-info-box-title">Address</h5>

															<p>
																<?php 
																	echo str_replace(",","\n",$websitedata[0]['address']);
																?>
															</p>
														</div>


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-684f438">
									<div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-c71ff0a ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box">
											<div class="elementor-widget-container">
												<div class="ekit-wid-con">
													<!-- link opening -->
													<!-- end link opening -->

													<div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
														<div class="elementskit-box-header elementor-animation-">
															<div class="elementskit-info-box-icon  text-center bg-clr-none">
																<i class="far fa-envelope font-awesome-free"></i>
															</div>
														</div>
														<div class="box-body">
															<h5 class="elementskit-info-box-title">Email Us</h5>
															<?php 
																echo str_replace(",","\n",$websitedata[0]['email']);
															?>															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<!-- https://maps.google.com/maps?q=Jakarta&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near -->
				<?php //print_r($websitedata); ?>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ce87457">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0dc9c20 elementor-widget elementor-widget-google_maps">
							<div class="elementor-widget-container">
								<div class="elementor-custom-embed">
									<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $websitedata[0]['embed_map']; ?>" title="Jakarta" aria-label="Jakarta"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-light-blue-transparent ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-a947266 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
			<div class="elementor-container elementor-column-gap-default">
				
			</div>
			<div class="col-lg-6 offset-3">
				<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-element elementor-element-fcda1a9 ob-harakiri-inherit elementor-widget elementor-widget-heading">
						<div class="elementor-widget-container">
							<h6 class="elementor-heading-title elementor-size-default">Send Us a Message</h6> </div>
					</div>
					<div class="elementor-element elementor-element-d8f8ee5 ob-harakiri-inherit elementor-widget elementor-widget-heading">
						<div class="elementor-widget-container font-black">
							<h2 class="elementor-heading-title elementor-size-default">Drop us a message.</h2> </div>
					</div>
					<div class="elementor-element elementor-element-cfb83dd ob-harakiri-inherit elementor-widget elementor-widget-text-editor">
						<div class="elementor-widget-container">
							<p>Don&#8217;t hesitate to send us a message for more information or business inquiries.</p>
						</div>
					</div>
					<div class="elementor-element elementor-element-9feffd1 elementor-button-align-stretch elementor-widget elementor-widget-form">
						<div class="elementor-widget-container">
							<form class="elementor-form" method="post" name="New Form">
								<div class="elementor-form-fields-wrapper elementor-labels-above">
									<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-33">
										<label for="form-field-name" class="elementor-field-label">Name</label><input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-lg  elementor-field-textual" placeholder="Name"> </div>
									
									<div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_b078184 elementor-col-33">
										<label for="form-field-field_b078184" class="elementor-field-label">Phone Number</label><input size="1" type="tel" name="form_fields[field_b078184]" id="form-field-field_b078184" class="elementor-field elementor-size-lg  elementor-field-textual" placeholder="Phone Number" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted."> </div>
									<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-33 elementor-field-required">
										<label for="form-field-email" class="elementor-field-label">Email</label><input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-lg  elementor-field-textual" placeholder="Email" required="required" aria-required="true"> </div>
								
									<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
										<label for="form-field-message" class="elementor-field-label">Message</label><textarea class="elementor-field-textual elementor-field  elementor-size-lg" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Message"></textarea> </div>
									<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
										<button type="submit" class="elementor-button elementor-size-lg">
        <span >
                                            <span class=" elementor-button-icon">
                                                                                        </span>
                                                                        <span class="elementor-button-text">Submit</span>
                                    </span>
    </button>
									

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php $this->load->view('frontend/layout/footer'); ?>