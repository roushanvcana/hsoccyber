<?php $this->load->view('frontend/layout/header');
//print_r($about);
?>
<div data-elementor-type="wp-post" data-elementor-id="469" class="elementor elementor-469" data-elementor-settings="[]">
    <div class="elementor-section-wrap">
        <section
            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-7e90c9e elementor-section-boxed elementor-section-height-default elementor-section-height-default">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ec04429">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-837fb42 ob-harakiri-inherit elementor-widget elementor-widget-heading">
                            <div class="elementor-widget-container">
                                <h1 class="elementor-heading-title elementor-size-default">
                                    <?php echo $articles_details[0]['title']; ?>
                                </h1>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-cede374 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items elementor-inline-items">
                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                            class="elementor-icon-list-text">Home</span> </li>
                                    <li class="elementor-icon-list-item elementor-inline-item"><span
                                            class="elementor-icon-list-icon icon-align"> <i
                                                class="fas fa-arrow-right font-awesome-pro"></i> <span
                                                class="elementor-icon-list-text">Blog Details</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Works About 
    ============================================= -->
        <div class="works-about-area">
            <div class="container">
                <div class="works-about-items default-padding">
                    <div class="row align-center">
                        <div class="col-lg-8">

                            <div class="thumb" style="margin: 90px 0 50px 0;">
                                <div class="card">
                                    <img src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $articles_details[0]['image']?>"
                                        alt="icon" />
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <?php echo date('M d, Y', strtotime($articles_details[0]['created_at']))?>
                                        </h6>
                                        <h4><?php echo $articles_details[0]['title']; ?></h4>
                                        <p class="card-text"><?php echo $articles_details[0]['description']; ?></p>
                                        <br />
                                        <p class="dot" style="background: #dba70d; height: 5px; border-radius: 30px;">
                                        </p>
                                        <div class="img">
                                            <!-- <p><i class="fas fa-user-alt"></i> &nbsp; Byron Acohido</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="head">
                                <h4>CATEGORIES</h4>
                                <br />
                                <div class="list">
                                    <div class="row">
                                        <?php                        
                                            foreach($letest_artical as  $value) {                                              
                                        ?>
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="<?php echo base_url();?>uploads/gallery-image/<?php echo $value['image']; ?>" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">                                                   
                                                    <a href="<?php echo base_url()?>blog-details/<?php echo $value['id']; ?>" class="card-text" style="color:black" >
                                                    <?php echo $value['title']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tags" style="background:#dba70d;">
                                <div class="first">
                                    <h4>Tags</h4>
                                    <ul class="list">
                                        <li>
                                            <a class="elementor-cta__button elementor-button elementor-size-sm"
                                                href="#">
                                                Security
                                            </a>
                                        </li>

                                        <li>
                                            <a class="elementor-cta__button elementor-button elementor-size-sm"
                                                href="#">
                                                Hacking
                                            </a>
                                        </li>

                                    </ul>

                                    <ul>

                                        <li>
                                            <a class="elementor-cta__button elementor-button elementor-size-sm"
                                                href="#">
                                                Crime
                                            </a>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <a class="elementor-cta__button elementor-button elementor-size-sm"
                                                href="#">
                                                IP Address
                                            </a>
                                        </li>

                                        <li>
                                            <a class="elementor-cta__button elementor-button elementor-size-sm"
                                                href="#">
                                                Websites
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Works About Area -->
        <!-- Star About Area
    ============================================= -->
        <!-- <div class="about-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 info">
                        <h2 class="elementor-heading-title elementor-size-default color-black"><?php echo ucwords(strtolower($articles_details[0]['title'])); ?> Deatils</h2>
                        <p class="drdc">
                            <?php echo $articles_details[0]['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</div>

<?php $this->load->view('frontend/layout/footer'); ?>