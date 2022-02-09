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
<img src="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['about_breadcom']; ?>">
    <div class="inner_banner">
        <h2>Blog & Article</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><i class="fas fa-arrow-right font-awesome-pro"></i></li>
            <li>Blog & Article</li>
    </div>
</div>



<section style="padding: 100px 50px 100px 50px;" class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-291b038 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="291b038" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1965635" data-id="1965635" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
      <div class="elementor-widget-wrap elementor-element-populated">

        <div class="elementor-element elementor-element-cf4b2a1 elementor-grid-4 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-posts__hover-gradient elementor-widget elementor-widget-posts">
          <div class="elementor-widget-container">
            <div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid">
              <?php foreach ($articles_list as $value) { ?>

                <article class="elementor-post elementor-grid-item post-92 post type-post status-publish format-standard has-post-thumbnail hentry category-computer-virus tag-cyber-security tag-elementor tag-moxcreative tag-quickenworks tag-template-kit">
                  <div class="elementor-post__card" style="background: #202737; width: 95%">
                    <a class="elementor-post__thumbnail__link" href="<?php echo base_url() ?>blog-details/<?php echo $value['id']; ?>" target="_blank">
                      <div class="elementor-post__thumbnail"><img style="height: 100%; width: 100%;" src="<?php echo base_url(); ?>uploads/gallery-image/<?php echo $value['image']; ?>" class="attachment-full size-full" alt="cropped view of african american businessman using laptop and smartphone in car with cyber security" loading="lazy" />
                      </div>
                    </a>
                    <div class="elementor-post__badge font-white" style="color: #000 !important; background: #FFFFFF;"><?php echo $value['title']; ?></div>
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
  <br />
</section>

<?php $this->load->view('frontend/layout/footer'); ?>