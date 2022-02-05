<?php $this->load->view('frontend/layout/header');
//print_r($service);
?>
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
    height: 650px;
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
<img src="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['service_breadcom']; ?>">
    <div class="inner_banner">
        <h2>Service</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><i class="fas fa-arrow-right font-awesome-pro"></i></li>
            <li>Service</li>
    </div>
</div>
<div data-elementor-type="wp-post" data-elementor-id="571" class="elementor elementor-571" data-elementor-settings="[]">
    <div class="elementor-section-wrap">
        <section class="space_top_bottom pt-100 pb-70">
            <div class="about-us-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-img mb_30">
                                
                                <img src="<?php echo base_url();?>uploads/gallery-image/<?php echo $service[0]['image']; ?>"
                                    alt="icon" height="200" width="200" /></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="about-title">
                                    <h2><?php echo $service[0]['title']; ?></h2>
                                </div>
                                <div class="react-tabs" data-tabs="true">
                                    <p>The HSOC Cyber Roadmap indicates what you will do as you become more proficient
                                        and independent in your cybersecurity career journey. You will also build,
                                        learn, and practice real skills that last, create value, and produce observable
                                        change that make it easy for you to be noticed, known, and heard. Real skill
                                        employers desire are:</p>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="listdc">
                            <li><i class="bx bx-check-circle"></i><strong>Self-Control:</strong> Completing tasks and
                                projects without letting distractors or bad habits get in the way (e.g., adaptability,
                                self-awareness, self-confidence, stress management)
                            </li>
                            <li><i class="bx bx-check-circle"></i><strong>Productivity:</strong> Using your
                                non-vocational skills and commitment to complete tasks (e.g., attention to detail,
                                crisis management, effective decision making, troubleshooting)
                            </li>
                            <li><i class="bx bx-check-circle"></i><strong>Wisdom:</strong> Real-world skills applied
                                based off experience, knowledge, and good judgment (e.g., conflict resolution instincts,
                                creativity in the face of challenges, critical thinking, supervising with confidence)
                            </li>
                            <li><i class="bx bx-check-circle"></i><strong>Perception:</strong> Experience and practice
                                that provide insight to point things out with courage and without influence from others
                                (e.g., designing, mapping, judging people and situations, strategic thinking)
                            </li>
                            <li> <strong>Influence:</strong> The skills needed to inspire others to act (e.g.,
                                constructive criticism, presentation skills, team building, writing for impact)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="bg-light-blue ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-b1182e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="b1182e2" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b09792d"
                    data-id="b09792d" data-element_type="column"
                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-227aaf0 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="227aaf0" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container font-white">
                                <h6 class="elementor-heading-title elementor-size-default">Services</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f7d1590 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="f7d1590" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Our Professional Service</h2>
                            </div>
                        </div>
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-9d3eac1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="9d3eac1" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7185282"
                                    data-id="7185282" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-8429dca ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="8429dca" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="design/wp-content/uploads/sites/48/2021/06/3-protection-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Network Protections </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e102283"
                                    data-id="e102283" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ed68467 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="ed68467" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/10-server-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Server Protection </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7c7e240"
                                    data-id="7c7e240" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-274c539 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="274c539" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/2-database-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Secure IT Infrastructure </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-43fa1e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="43fa1e1" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c50211f"
                                    data-id="c50211f" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-689f31d ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="689f31d" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/16-antivirus-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Vulnerability Assessment </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9761a87"
                                    data-id="9761a87" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c9392c6 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="c9392c6" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/4-payment-protection-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Payment Protections </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-99c25b8"
                                    data-id="99c25b8" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-53b8800 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="53b8800" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/25-shopping-online-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Secure Transactions </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-ba45695 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="ba45695" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ce73178"
                                    data-id="ce73178" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-30af9a8 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="30af9a8" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/18-laptop-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Antivirus </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ab1cd4a"
                                    data-id="ab1cd4a" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5efc158 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="5efc158" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/11-secret-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Spam Protections </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dea6b85"
                                    data-id="dea6b85" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-da759eb ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="da759eb" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <a href="#" target="_self" rel="" class="ekit_global_links">
                                                        <!-- end link opening -->

                                                        <div
                                                            class="background-none elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                            <div class="elementskit-box-header">
                                                                <div class="elementskit-info-box-icon text-center">
                                                                    <img style="filter: brightness(0) invert(1);"
                                                                        width="64" height="64"
                                                                        src="<?php echo base_url();?>design/wp-content/uploads/sites/48/2021/06/25-shopping-online-1.png"
                                                                        class="attachment- size-" alt=""
                                                                        loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title color-black">
                                                                    Secure Transactions </h3>
                                                                <p class="font-white">Quis neque fringilla duis auctor
                                                                    nam laoreet porttitor morbi diam suscipit montes
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </a>
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
        <section
            class="background-none ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-2d0f5ce elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="2d0f5ce" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6dab29e"
                    data-id="6dab29e" data-element_type="column"
                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-0313d28 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="0313d28" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h1 class="elementor-heading-title elementor-size-default">Our work will make you feel
                                    better.</h1>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5c1b706 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="5c1b706" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h5 class="elementor-heading-title elementor-size-default">Montes felis quam pretium
                                    luctus velit blandit vestibulum interdum efficitur.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0189c4b"
                    data-id="0189c4b" data-element_type="column"
                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fd4dd34 elementor-widget elementor-widget-elementskit-video"
                            data-id="fd4dd34" data-element_type="widget"
                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="elementskit-video.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="video-content">
                                        <a href="https://www.youtube.com/embed/1MTkZPys7mU?feature=oembed?autoplay=0&amp;playlist=1MTkZPys7mU&amp;loop=no&amp;controls=0&amp;mute=0&amp;start=0&amp;end=&amp;version=3"
                                            class="ekit-video-popup ekit-video-popup-btn ekit_icon_button glow-btn">
                                            <i class="fas fa-play font-awesome-pro"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6d19bb2 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="6d19bb2" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default">Play Video</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="bg-light-blue-transparent ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-c3ca36e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="c3ca36e" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-463590a"
                    data-id="463590a" data-element_type="column"
                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b9af787 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="b9af787" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default">Why Choose Us</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b0fa2a9 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                            data-id="b0fa2a9" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container font-black">
                                <h2 class="elementor-heading-title elementor-size-default">Our business is protecting
                                    yours</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3695aa7 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                            data-id="3695aa7" data-element_type="widget"
                            data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1121265 elementor-widget elementor-widget-button"
                            data-id="1121265" data-element_type="widget"
                            data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="#" class="elementor-button-link elementor-button elementor-size-md"
                                        role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Discover More</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d90ce33"
                    data-id="d90ce33" data-element_type="column"
                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-7b1aefa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7b1aefa" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5ef091f"
                                    data-id="5ef091f" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-50d804e ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="50d804e" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                                        <div class="elementskit-box-header elementor-animation-">
                                                            <div class="elementskit-info-box-icon  text-center">
                                                                <i class="fas fa-shield-check font-awesome-pro"></i>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Trusted Company </h3>
                                                            <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                                                consectetur maximus interdum eros </p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2313725"
                                    data-id="2313725" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-592bfe5 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="592bfe5" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                                        <div class="elementskit-box-header elementor-animation-">
                                                            <div class="elementskit-info-box-icon  text-center">
                                                                <i class="fas fa-jedi font-awesome-pro"></i>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Expertise </h3>
                                                            <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                                                consectetur maximus interdum eros </p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-09a55ee elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="09a55ee" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4af3c03"
                                    data-id="4af3c03" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-21907ac ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="21907ac" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                                        <div class="elementskit-box-header elementor-animation-">
                                                            <div class="elementskit-info-box-icon  text-center">
                                                                <i class="fas fa-lock-alt font-awesome-pro"></i>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                System Protection </h3>
                                                            <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                                                consectetur maximus interdum eros </p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6ed429a"
                                    data-id="6ed429a" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c75b565 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="c75b565" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
                                                        <div class="elementskit-box-header elementor-animation-">
                                                            <div class="elementskit-info-box-icon  text-center">
                                                                <i class="fas fa-comments-alt font-awesome-pro"></i>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                24/7 Support </h3>
                                                            <p>Lorem pellentesque scelerisque pharetra mus faucibus
                                                                consectetur maximus interdum eros </p>
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
            </div>
        </section>

    </div>
</div>

<?php $this->load->view('frontend/layout/footer'); ?>