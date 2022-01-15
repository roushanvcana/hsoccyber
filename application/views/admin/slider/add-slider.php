
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Slider</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>slider">View Slider</a>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Add Slider</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" 
                        action="">
                            <div class="row">
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="heading_text">Heading </label>
                                    <input type="text" id="heading_text" class="form-control" name="heading_text" 
                                    value="<?= !empty($getValue['heading_text']) ? $getValue['heading_text'] : set_value('heading_text') ?>" >
                                    <?php echo form_error('heading_text'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="slider_text">Tagline</label>
                                    <input type="text" id="slider_text" class="form-control" name="slider_text" value="<?= !empty($getValue['slider_text']) ? $getValue['slider_text'] : set_value('slider_text') ?>" >
                                    <?php echo form_error('slider_text'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                              
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="rename_button">Button Rename</label>
                                    <input type="rename_button" id="rename_button" class="form-control" name="rename_button" value="<?= !empty($getValue['rename_button']) ? $getValue['rename_button'] : set_value('rename_button') ?>">
                                    <?php echo form_error('rename_button'); ?>
                                    <p style="color:#dc3545!important;" id="passerror"></p>
                                </div>

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="link_pageon_button">Page Link Button</label>
                                    <input type="text" id="link_pageon_button" class="form-control" name="link_pageon_button" value="<?= !empty($getValue['link_pageon_button']) ? $getValue['link_pageon_button'] : set_value('link_pageon_button') ?>">
                                    <?php echo form_error('link_pageon_button'); ?>
                                    <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                </div>                            
                               
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Slider Image

                                    <?php if(!empty($getValue['slider_image'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['slider_image']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="logo" class="form-control" name="slider_image" value="">
                                    <?php echo form_error('logo'); ?>
                                    <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div> 

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <?php foreach ($status as $key => $value) : ?>
                                            <option <?php if(!empty($getValue['status']) == $key){?> selected <?php }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group  col-md-6 col-lg-6">
                                <?php if (empty($getValue['id'])) { ?>
                                    <input type="submit" id="add_slider" value="Save" class="btn btn-primary" name="submit" style="margin-top:30px">
                                <?php } else { ?>
                                    <input type="submit" value="Update" class="btn btn-primary" name="submit" style="margin-top:30px" id="btn">
                                <?php } ?>
                            </div>
                        </form>
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


    $('#add_slider').click(function(){
        var header = $('#heading_text').val();
        if (header == '') {
                document.getElementById("heading_text").style.borderColor = "#ff0000";
                document.getElementById("heading_text").focus();
                return false;
            } else {
                $("#heading_text").removeAttr("style");
            }

        var slidertext = $('#slider_text').val();
        if (slidertext == '') {
                document.getElementById("slider_text").style.borderColor = "#ff0000";
                document.getElementById("slider_text").focus();
                return false;
            } else {
                $("#slider_text").removeAttr("style");
            }
    });
});
</script>
