
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Website Setting</a></li>
                    </ol>
                </div>  
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Add Website Setting</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="<?php echo base_url(); ?>add-website-setting">
                            <div class="row">
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="phone">Phone</label>
                                    <input type="phone" id="phone" class="form-control" name="phone" value="<?= !empty($getValue['phone']) ? $getValue['phone'] : set_value('phone') ?>" >
                                    <?php echo form_error('phone'); ?>
                                    <p style="color:#dc3545!important;" id="passerror"></p>
                                </div>

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" name="email" value="<?= !empty($getValue['email']) ? $getValue['email'] : set_value('email') ?>" >
                                    <?php echo form_error('email'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                              
                                
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="address">Address</label>
                                    <textarea  id="description" class="form-control" name="address" >
                                    <?php echo  !empty($getValue['address']) ? $getValue['address'] : set_value('address') ?>
                                    </textarea>
                                    <?php echo form_error('address'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>

                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="embed_map">Embad Map</label>
                                    <input type="text" id="embed_map" class="form-control" name="embed_map" value="<?= !empty($getValue['embed_map']) ? $getValue['embed_map'] : set_value('embed_map') ?>" >
                                    <?php echo form_error('embed_map'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>                              
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="copy_write">Copy Write</label>
                                    <input type="text" id="copy_write" class="form-control" name="copy_write" value="<?= !empty($getValue['copy_write']) ? $getValue['copy_write'] : set_value('copy_write') ?>">
                                    <?php echo form_error('copy_write'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>   
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Design By</label>
                                    <input type="text" id="design_by" class="form-control" name="design_by" value="<?= !empty($getValue['design_by']) ? $getValue['design_by'] : set_value('design_by') ?>">
                                    <?php echo form_error('design_by'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>   
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Logo
                                        <?php if(!empty($getValue['logo'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['logo']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="logo" class="form-control" name="logo" value="">
                                    <?php echo form_error('logo'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Footer Logo
                                        <?php if(!empty($getValue['footer_logo'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['footer_logo']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="footer_logo" class="form-control" name="footer_logo" value="">
                                    <?php echo form_error('footer_logo'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div> 

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">About Breadcom Image
                                        <?php if(!empty($getValue['about_breadcom'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['about_breadcom']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="about_breadcom" class="form-control" name="about_breadcom" value="">
                                    <?php echo form_error('about_breadcom'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div> 

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Service Breadcom Image
                                        <?php if(!empty($getValue['service_breadcom'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['service_breadcom']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="service_breadcom" class="form-control" name="service_breadcom" value="">
                                    <?php echo form_error('service_breadcom'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div> 

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Contact Breadcom
                                        <?php if(!empty($getValue['contact_breadcom'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['contact_breadcom']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="contact_breadcom" class="form-control" name="contact_breadcom" value="">
                                    <?php echo form_error('contact_breadcom'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div> 


                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Design By</label>
                                    <input type="text" id="design_by" class="form-control" name="design_by" value="<?= !empty($getValue['design_by']) ? $getValue['design_by'] : set_value('design_by') ?>">
                                    <?php echo form_error('design_by'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Facebook</label>
                                    <input type="text" id="facebook" class="form-control" name="facebook" value="<?= !empty($getValue['facebook']) ? $getValue['facebook'] : set_value('facebook') ?>">
                                    <?php echo form_error('facebook'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Linkdin</label>
                                    <input type="text" id="linkdin" class="form-control" name="linkdin" value="<?= !empty($getValue['linkdin']) ? $getValue['linkdin'] : set_value('linkdin') ?>">
                                    <?php echo form_error('linkdin'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" id="instagram" class="form-control" name="instagram" value="<?= !empty($getValue['instagram']) ? $getValue['instagram'] : set_value('instagram') ?>">
                                    <?php echo form_error('instagram'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" id="twitter" class="form-control" name="twitter" value="<?= !empty($getValue['twitter']) ? $getValue['twitter'] : set_value('twitter') ?>">
                                    <?php echo form_error('twitter'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="twitter">Header Background Color</label>
                                    <input type="color" id="header_background_color" class="form-control" name="header_background_color" value="<?= !empty($getValue['header_background_color']) ? $getValue['header_background_color'] : set_value('header_background_color') ?>">
                                    <?php echo form_error('header_background_color'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="twitter">Footer Background Color</label>
                                    <input type="color" id="footer_background_color" class="form-control" name="footer_background_color" value="<?= !empty($getValue['footer_background_color']) ? $getValue['footer_background_color'] : set_value('footer_background_color') ?>">
                                    <?php echo form_error('footer_background_color'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div> 
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="twitter">Description</label>
                                    
                                    <textarea id="description" name="footer_content" ></textarea>
                                </div> 
                               
                            </div>
                            <div class="form-group  col-md-6 col-lg-6">
                                <?php if (empty($getValue['id'])) { ?>
                                    <input type="submit" value="Save" id="submit_btn" class="btn btn-primary" name="submit" style="margin-top:30px" >
                                <?php } else { ?>
                                    <input type="submit" value="Update" class="btn btn-primary" name="submit" style="margin-top:30px" id="btn">
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Website Frame</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        <iframe src="http://localhost/hsoccyber" width="100%" height="682"></iframe>                         
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(() => {
        $("#logo").change(function () {
            $('#img_preview').css('display','block');
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $("#imgPreview")
                        .attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
