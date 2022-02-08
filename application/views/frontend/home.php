<?php $this->load->view('frontend/layout/header'); ?>
<!--slider start here-->
<style>
    .about_section_img {
        position: relative;
        padding: 0 0 70px;
    }

    .about_section_img .about_img_2 {
        position: absolute;
        top: 242px;
        left: 173px;
        border: 10px solid #4cb958;
        box-shadow: 0px 8px 16px 0px rgb(7 28 31 / 4%);
    }

    .sub_title {
        font-size: 16px;
        color: #ff5528;
        font-weight: bold;
        line-height: 1.75;
        letter-spacing: 4px;
        margin-bottom: 2px;
    }

    .pu_about_part_content .title {
        font-size: 26px;
        color: #4cb958;
        font-weight: bold;
        line-height: 1.1;
        margin-bottom: 15px;
    }

    .pu_about_part_content a {
        display: inline-block;
        color: #fff;
        background-color: #ff6015;
        border-radius: 6px;
        padding: 16px 25px;
        font-weight: 500;
    }
</style>
<div id="carousel-thumb" class="carousel carousel-thumbnails slide" data-ride="carousel" data-interval="15000">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!-- <div class="carousel-item active carousel-banner">
            <img class="d-block w-100 carousel-img-fit" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"
                alt="First slide">
            <div class="row carousel-ban-text-adj">
                <div class="row col-12">
                    <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                    <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elito. </p>

                </div>
            </div>
        </div>
        <div class="carousel-item carousel-banner">
            <img class="d-block w-100 carousel-img-fit" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"
                alt="Second slide">
            <div class="row carousel-ban-text-adj">
                <div class="row col-12">
                    <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                    <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elite. </p>

                </div>
            </div>
        </div>
        <div class="carousel-item carousel-banner">
            <img class="d-block w-100 carousel-img-fit" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"
                alt="Third slide">
            <div class="row carousel-ban-text-adj">
                <div class="row col-12">
                    <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                    <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                </div>
            </div>
        </div> -->

        <?php
        if (count($slider) > 0) {
            $i = 1;
            foreach ($slider as $value) {
                if ($i == 1) {
                    $act = 'active';
                } else {
                    $act = ' ';
                }

        ?>
                <div class="carousel-item <?php echo $act; ?> carousel-banner">
                    <img class="d-block w-100 carousel-img-fit" src="<?php echo base_url() ?>uploads/gallery-image/<?php echo $value['slider_image']; ?>" alt="First slide">
                    <div class="row carousel-ban-text-adj">
                        <div class="row col-12">
                            <h1 class="col-12 carousel-header-adj"><?php echo $value['heading_text']; ?></h1>
                            <p class="col-12 carousel-paragraph"><?php echo $value['slider_text']; ?> </p>
                            <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                                <span class="elementor-button-content-wrapper"> <span class="elementor-button-text"><?php echo $value['rename_button']; ?></span> </span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php $i++;
            }
        } ?>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--slide end-->
<div data-elementor-type="wp-post" data-elementor-id="798" class="elementor elementor-798" data-elementor-settings="[]">
    <div class="elementor-section-wrap">

        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-6a1c204 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-22f015a">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-0d39e3c elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                            <div class="elementor-container elementor-column-gap-default">
                                <?php foreach ($sliderBox as  $value) { ?>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9cddfdd">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-9d1d4f2 elementor-cta--skin-cover elementor-cta--valign-bottom elementor-cta--sequenced-animation elementor-animated-content elementor-widget elementor-widget-call-to-action">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-cta">
                                                        <div class="elementor-cta__bg-wrapper">
                                                            <div class="elementor-cta__bg elementor-bg bg-white" style="background-image: url(<?php echo base_url(); ?>uploads/gallery-image/<?php echo !empty($value['image']) ? $value['image'] : ''; ?>">
                                                            </div>
                                                            <div class="elementor-cta__bg-overlay"></div>
                                                        </div>
                                                        <div class="elementor-cta__content">
                                                            <div class="logo_ elementor-content-item elementor-cta__content-item elementor-cta__image elementor-animated-item--move-up">
                                                                <img src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo
                                                                                                                            !empty($value['logo']) ? $value['logo'] : ''; ?>" title="Hsoc" alt="Hsoc" />
                                                            </div>
                                                            <h4 class="elementor-cta__title elementor-cta__content-item elementor-content-item elementor-animated-item--move-up heading_h4">
                                                                <?php echo !empty($value['title']) ? $value['title'] : ''; ?>
                                                            </h4>
                                                            <div class="elementor-cta__description elementor-cta__content-item elementor-content-item elementor-animated-item--move-up">
                                                                <p class="space_desc" style="text-align:right;">
                                                                    <?php echo !empty($value['description']) ? $value['description'] : ''; ?>
                                                                </p>
                                                            </div>
                                                            <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item elementor-animated-item--move-up">
                                                                <a class="elementor-cta__button elementor-button elementor-size-sm">
                                                                    Discover More </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-80dcaf0 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-background-overlay about"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d478047">
                    <div class="elementor-widget-wrap elementor-element-populated" style="text-align:center;">

                        <div class="sectng">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="main_left_img">
                                            <div class="row">
                                                <?php
                                                $smallImg = explode(",", $welcomemsg_data['small_image']);
                                                foreach ($smallImg as $smallimgvalue) {
                                                ?>
                                                    <div class="col-lg-4">
                                                        <div class="abt_mg_box">
                                                            <img class="swiper-slide-image" src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo !empty($smallimgvalue) ? $smallimgvalue : ''; ?>" alt="logo-bikepro_" />
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <div class="col-lg-12">
                                                    <div class="abt_mg_box">
                                                        <img class="swiper-slide-image" src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo !empty($welcomemsg_data['full_width']) ? $welcomemsg_data['full_width'] : ''; ?>" alt="logo-bikepro_" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="main_right_cnt">
                                            <div class="heading_">
                                                <h4><?php echo !empty($welcomemsg_data['title']) ? $welcomemsg_data['title'] : ''; ?>
                                                </h4>
                                            </div>
                                            <div class="heading_desc">
                                                <p><?php echo !empty($welcomemsg_data['message']) ? $welcomemsg_data['message'] : ''; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-e0b7768 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f07a037">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ce110fb ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <?php echo !empty($brandrow['title']) ? $brandrow['title'] : ''; ?>
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9b48574 ob-harakiri-inherit elementor-widget elementor-widget-text-editor">
                            <div class="elementor-widget-container">
                                <p><?php echo !empty($brandrow['description']) ? $brandrow['description'] : ''; ?></p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e32d116 elementor-widget">
                            <div class="client-slider">
                                <?php
                                foreach ($brandSetion as $value) {
                                    if (!empty($value['upload_logo'])) {
                                ?>
                                        <div class="slide"><img src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value['upload_logo']; ?>" alt="Logo Autokit" />
                                        </div>
                                <?php }
                                } ?>
                            </div>
                            brandSetiontwo
                            <div class="client-slider1">
                                <?php foreach ($brandSetiontwo as $valuetwo) { ?>
                                    <div class="slide">
                                        <img src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $valuetwo['upload_logo']; ?>" alt="Logo Autokit" />
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-0e6d5ff elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-background-overlay"></div>
            <div class="container custom_container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about_section_img">
                            <?php
                            $imgCount =  explode(",", $aboutsus['image']);
                            $i = 1;
                            foreach ($imgCount as $value) {
                                if ($i == 2) {
                                    $cls = 'about_img_2 img-fluid wow fadeInUp';
                                    $ani = 'fadeInUp';
                                } else {
                                    $cls = 'about_img_1 img-fluid wow fadeInLeft';
                                    $ani = 'fadeInLeft';
                                }
                            ?>
                                <img src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value; ?>" alt="#" height="370" width="352" class="<?php echo $cls; ?>" data-wow-delay="1.5s" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 1.5s; animation-name:<?php echo $ani; ?>;">
                            <?php $i++;
                            } ?>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pu_about_part_content pl-lg-3">
                            <h5 class="sub_title">Who we are</h5>
                            <h2 class="elementor-heading-title elementor-size-default" style="color: #fff;">
                                <?php echo $aboutsus['title']; ?>
                            </h2>

                            <p class="description" style="line-height: 1.7; text-align: justify; color: #fff; font-family: Roboto, sans-serif;">
                                <?php echo $aboutsus['description']; ?></p>

                            <div class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item elementor-animated-item--move-up">
                                <a class="elementor-cta__button elementor-button elementor-size-sm" href="<?php echo site_url("/ about "); ?>"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-container elementor-column-gap-default" style="margin-top:70px;">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-18bff79">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-32b50e4 ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default"></h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-284da00 ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default" style="color: #fff;">

                                </h2>
                            </div>
                        </div>

                    </div>
                </div>
                <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-0ffd50b elementor-section-boxed elementor-section-height-default elementor-section-height-default col-lg-12">
                    <div class="row">
                        <?php foreach ($syllabussection as $value) { ?>
                            <div class="col-lg-4">
                                <div class="">
                                    <div class="single-challenges overly-one">
                                        <img src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value['image']; ?>" alt="">
                                        <h3><?php echo $value['title']; ?></h3>
                                        <?php echo $value['description']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>

            </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-63ce778 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b577159">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-78e8cf5 ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default"> WHAT WE DO</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2bee51c ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Our Professional Service</h2>
                                <p style="color:#fff;">The HSOC Cyber Roadmap indicates what you will do as you become
                                    more proficient and independent in your cybersecurity career journey. You will also
                                    build, learn, and practice real skills that last, create value, and produce
                                    observable change that make it easy for you to be noticed, known, and heard. Real
                                    skill employers desire are:</p>
                            </div>
                        </div>
                        <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-0ffd50b elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                            <div class="elementor-container elementor-column-gap-default">
                                <?php foreach ($serviceAdd as  $value) { ?>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4248acc">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-30f8f8f ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <!-- link opening -->
                                                        <a href="#" target="_self" rel="" class="ekit_global_links">
                                                            <!-- end link opening -->

                                                            <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation-float media  ">
                                                                <div class="elementskit-box-header">
                                                                    <div class="elementskit-info-box-icon text-center"> <img style="filter: brightness(0) invert(1);" width="512" height="512" src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value['image']; ?>" class="attachment- size-" alt="" loading="lazy" /> </div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <h3 class="elementskit-info-box-title" style="color: #fff"><?php echo $value['title']; ?>
                                                                    </h3>
                                                                    <?php echo $value['description']; ?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-c0fb530 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5bec30d" data-id="5bec30d" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-20f7337 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="20f7337" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <?php echo $evaluation['heading']; ?>
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f1637d1 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="f1637d1" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><?php echo $evaluation['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e47df26" data-id="e47df26" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-1ce71e1 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="1ce71e1" data-element_type="widget" data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper"> <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
                                        <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right"> <i class="fal fa-arrow-right"></i> </span> <span class="elementor-button-text"><?php echo $evaluation['button_rename']; ?></span>
                                        </span> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-62d0906 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-baadd4a">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8b7f1ea ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default" style="color: #fff;">
                                    Testimonial</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-bb2dd71 ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">What they say about us.</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c3f4f5e elementor-widget">
                            <div class="elementor-widget-container">

                                <div class="testimonial-slider">
                                    <?php foreach ($testimonial as $value) { ?>
                                        <div class="slide">
                                            <div class="auth_header">
                                                <ul class="elementskit-stars">
                                                    <?php for ($i = 0; $i < $value['rating']; $i++) { ?>
                                                        <li><a href="#"><i class="fas fa-star active font-awesome-free"></i></a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            <div class="auth_content">
                                                <p style="color: #fff;"><?php echo $value['description']; ?></p>
                                            </div>
                                            <div class="auth_details">
                                                <div class="testimonial--avatar"> <img width="500" height="500" src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value['photo']; ?>" class="attachment-full size-full" alt="Cheerful man portrait" loading="lazy" height="70" width="70" /> </div>
                                                <div class="profile-info" style="color: #fff;"> <strong class="elementskit-author-name"><?php echo $value['name']; ?></strong><br><span class="elementskit-author-des"><?php echo $value['designation']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6aa98a2" data-id="6aa98a2" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap"> </div>
                </div>
            </div>
        </section>
        <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-291b038 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="291b038" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1965635" data-id="1965635" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-2f3a779 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f3a779" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5b8f911" data-id="5b8f911" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-053c599 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="053c599" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Update</h6>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7b1459d ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="7b1459d" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default" style="color: #000;">Blog & Article</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-93bab5c" data-id="93bab5c" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-e38e813 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="e38e813" data-element_type="widget" data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="<?php echo site_url("/blog"); ?>" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-icon elementor-align-icon-right">
                                                                <i class="fal fa-arrow-right"></i>
                                                            </span> <span class="elementor-button-text" style="color: #fff;">All
                                                                Articles & Blogs</span> </span> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-cf4b2a1 elementor-grid-4 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-posts__hover-gradient elementor-widget elementor-widget-posts">
                            <div class="elementor-widget-container">
                                <div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid">
                                    <?php foreach ($articles as $value) { ?>
                                        <article class="elementor-post elementor-grid-item post-92 post type-post status-publish format-standard has-post-thumbnail hentry category-computer-virus tag-cyber-security tag-elementor tag-moxcreative tag-quickenworks tag-template-kit">
                                            <div class="elementor-post__card">
                                                <a class="elementor-post__thumbnail__link" href="<?php echo base_url() ?>blog-details/<?php echo $value['id']; ?>" target="_blank">
                                                    <div class="elementor-post__thumbnail"><img width="1080" height="721" src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value['image']; ?>" class="attachment-full size-full" alt="cropped view of african american businessman using laptop and smartphone in car with cyber security" loading="lazy" />
                                                    </div>
                                                </a>
                                                <div class="elementor-post__badge font-white" style="color: #000 !important;"><?php echo $value['title']; ?></div>
                                                <div class="elementor-post__text">
                                                    <h3 class="elementor-post__title">
                                                        <a href="#"><?php echo strip_tags(substr($value['description'], 0, 500)); ?>
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php $this->load->view('frontend/layout/footer'); ?>

<div id="myModal" class="modalcstm fade-in one">
    <div class="modal-content">
        <div class="border_line">
            <div class="hide_box" id="Menu1">
                <!--<span class="close">&times;</span>-->
                <h4 style="text-align:center; color:#020817;">Join me on Patreon</h4>
                <h3><?php echo $webmodel['heading']; ?></h3>
                <p class="pup_txt"><?php echo $webmodel['description']; ?></p>

                <p><a href="#" class="btn_jnmeptrn" onclick="toggleVisibility('Menu2');"><?php echo $webmodel['model_button']; ?></a></p>
            </div>
            <div class="show_box" id="Menu2" style="display: none;">
                <div class="preq_cnt">
                    <span class="close">&times;</span>
                    <h2>Prerequisites</h2>
                    <?php echo $webmodel['prerequisites']; ?>
                    <h2>System Requirements</h2>
                    <?php echo $webmodel['system_requirements']; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<style>
    .fade-in {
        opacity: 0;
        /* make things invisible upon start */
        -webkit-animation: fadeIn ease-in 1;
        /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }

    .fade-in.one {
        -webkit-animation-delay: 2s;
        -moz-animation-delay: 2s;
        animation-delay: 2s;
    }


    .slick-slide {
        margin: 0px 10px;
    }

    .slick-slide img {
        background: #fff;
        padding: 8px;
        border-radius: 4px;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: "";
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir=rtl] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
        /* background: #fff;
    padding: 10px;
    height: auto;
    border-radius: 6px;*/
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    .client-slider {
        padding-top: 0;
        padding-bottom: 20px;
    }

    .auth_header .elementskit-stars {
        padding: 0;
        margin: 0;
    }

    .auth_header .elementskit-stars li {
        list-style: none;
        display: inline;
    }

    .auth_details {
        /*display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;*/
    }

    .auth_details img {
        float: left;
        border-radius: 50%;
        height: 70px;
        width: 70px;
        border: 0;
        background: transparent;
        padding: 0;
        margin: 0 20px 0 0;
    }

    .profile-info {
        padding: 10px 0 0;
    }
</style>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
<script>
    $(document).ready(function() {
        $('.client-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.client-slider1').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.testimonial-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</script>
<script>
    var divs = ["Menu1", "Menu2"];
    var visibleDivId = null;

    function toggleVisibility(divId) {
        if (visibleDivId === divId) {
            //visibleDivId = null;
        } else {
            visibleDivId = divId;
        }
        hideNonVisibleDivs();
    }

    function hideNonVisibleDivs() {
        var i, divId, div;
        for (i = 0; i < divs.length; i++) {
            divId = divs[i];
            div = document.getElementById(divId);
            if (visibleDivId === divId) {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }
    }
</script>