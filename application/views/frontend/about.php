<?php $this->load->view('frontend/layout/header');?>
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
<img src="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['about_breadcom']; ?>">
    <div class="inner_banner">
        <h2>About us</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><i class="fas fa-arrow-right font-awesome-pro"></i></li>
            <li>About Us</li>
    </div>
</div>

<div data-elementor-type="wp-post" data-elementor-id="469" class="elementor elementor-469" data-elementor-settings="[]">
 <div class="elementor-section-wrap">
  

	  <!-- Start Works About 
    ============================================= -->
    <div class="works-about-area">
        <div class="container">
            <div class="works-about-items default-padding">
                <div class="row align-center">
                    <div class="col-lg-6 info">
                        <h2><?php echo $about[0]['title']; ?></h2>
                        <p><?php echo $about[0]['description']; ?></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb">
                           <img src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/about_.jpg" alt="icon" style="max-width:100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Works About Area -->
	<!-- Star About Area
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
							<div class="col-lg-7 info">
                        <h2 class="elementor-heading-title elementor-size-default color-black">Biography</h2>
                    <p class="sp">Dr. <a href="https://www.linkedin.com/in/drwesleyphillips/" target="_blank" style="color:#000;"> Wesley Phillips</a> (Doc Wes)</p>
                        <p class="drdc">
                        <?php echo $about[0]['biography']; ?>
                        </p>
                    </div>
                <div class="col-lg-5">
                    <div class="thumb">
                        <img src="<?php echo base_url();?>uploads/gallery-image/drwec.jpg" alt="">
                        <div class="overlay">
                            <div class="content">
                                <h4>Doc Wes is the recipient of the 2021 Blacks in Cyber Outstanding Cybersecurity Training & Curriculum Award</h4>
                            </div>
                        </div>
                    </div>
                </div>

						

            </div>
            <div class="row">
                	<div class="col-lg-12"><div class="doc_img">
			<img src="<?php echo base_url();?>uploads/gallery-image/<?php echo $about[0]['upload_biography'];?>" alt="icon" style="max-width:100%" />
			</div></div>
            </div>
        </div>
    </div>
	 
  <section class="bg-dark-blue ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-b2805a7 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="b2805a7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
   <div class="elementor-container elementor-column-gap-no">
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-925752d" data-id="925752d" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
     <div class="elementor-widget-wrap elementor-element-populated">
      <div class="elementor-element elementor-element-9b8ccf9 elementor-widget elementor-widget-image" data-id="9b8ccf9" data-element_type="widget" data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="image.default">
       <div class="elementor-widget-container"> 
       <img src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/back-view-of-hackers-pointing-on-computer-screens-e1624634354233.jpg" class="attachment-full size-full" 
       alt="Back view of hackers pointing on computer screens" loading="lazy" style="max-width:100%" /> </div>
      </div>
     </div>
    </div>
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-df9ecc3" data-id="df9ecc3" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
     <div class="elementor-widget-wrap elementor-element-populated">
      <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-6bcf751 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6bcf751" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
       <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-551ca0b" data-id="551ca0b" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
         <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-8cdd562 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="8cdd562" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
           <div class="elementor-widget-container">
            <h6 class="elementor-heading-title elementor-size-default theme-color color-white">Our Value</h6>
           </div>
          </div>
          <div class="elementor-element elementor-element-dfecf33 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="dfecf33" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
           <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Professional Service Ready for You.</h2>
           </div>
          </div>
          <div class="elementor-element elementor-element-da13c31 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="da13c31" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
           <div class="elementor-widget-container">
            <p class="color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
           </div>
          </div>
          <div class="elementor-element elementor-element-619b277 elementor-widget elementor-widget-eael-feature-list" data-id="619b277" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="eael-feature-list.default">
           <div class="elementor-widget-container">
            <div class="-icon-position-left -tablet-icon-position-left -mobile-icon-position-left">
             <ul id="eael-feature-list-619b277" class="eael-feature-list-items circle framed p-0">
              <li class="eael-feature-list-item elementor-repeater-item-e9bd0b0 icon-align">
               <div class="eael-feature-list-icon-box">
                <div class="eael-feature-list-icon-inner bg-none"> <span class="eael-feature-list-icon fl-icon-0 bg-none"> <i class="fas fa-low-vision font-awesome-free"></i> </span> </div>
               </div>
               <div class="eael-feature-list-content-box">
                <h5 class="eael-feature-list-title color-white">Vision</h5>
                <p class="eael-feature-list-content color-white"><?php echo $about[0]['vision'];?></p>
               </div>
              </li>
              <li class="eael-feature-list-item elementor-repeater-item-9262403 icon-align">
               <div class="eael-feature-list-icon-box">
                <div class="eael-feature-list-icon-inner bg-none"> <span class="eael-feature-list-icon fl-icon-1 bg-none"> <i class="fas fa-cogs font-awesome-pro"></i> </span> </div>
               </div>
               <div class="eael-feature-list-content-box color-white">
                <h5 class="eael-feature-list-title">Mission</h5>
                <p class="eael-feature-list-content"><?php echo $about[0]['mission'];?></p>
               </div>
              </li>
              <li class="eael-feature-list-item elementor-repeater-item-96f0f9d icon-align">
               <div class="eael-feature-list-icon-box">
                <div class="eael-feature-list-icon-inner bg-none"> <span class="eael-feature-list-icon fl-icon-2 bg-none"> <i class="fas fa-paw font-awesome-free"></i> </span> </div>
               </div>
               <div class="eael-feature-list-content-box color-white">
                <h5 class="eael-feature-list-title">Motto</h5>
                <p class="eael-feature-list-content"><?php echo $about[0]['moto'];?></p>
               </div>
              </li>
             </ul>
            </div>
           </div>
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

<?php $this->load->view('frontend/layout/footer'); ?>