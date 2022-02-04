<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add About</a></li>
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
                        <h3 class="card-title"> Add About</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="">
                            <div class="row">
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="title">Title </label>
                                    <input type="text" id="title" class="form-control" name="title"
                                        value="<?= !empty($getValue['title']) ? $getValue['title'] : set_value('title') ?>">
                                    <?php echo form_error('title'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="year_of_experience">Year Of Experience</label>
                                    <input type="text" id="year_of_experience" class="form-control"
                                        name="year_of_experience"
                                        value="<?= !empty($getValue['year_of_experience']) ? $getValue['year_of_experience'] : set_value('year_of_experience') ?>">
                                    <?php echo form_error('year_of_experience'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="number_of_employee">Number Of Employee</label>
                                    <input type="text" id="number_of_employee" class="form-control"
                                        name="number_of_employee"
                                        value="<?= !empty($getValue['number_of_employee']) ? $getValue['number_of_employee'] : set_value('number_of_employee') ?>">
                                    <?php echo form_error('number_of_employee'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="number_of_partners">Number Of Partners</label>
                                    <input type="text" id="number_of_partners" class="form-control"
                                        name="number_of_partners"
                                        value="<?= !empty($getValue['number_of_partners']) ? $getValue['number_of_partners'] : set_value('number_of_partners') ?>">
                                    <?php echo form_error('number_of_partners'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="background_color">Background Color</label>
                                    <input type="text" id="background_color" class="form-control"
                                        name="background_color"
                                        value="<?= !empty($getValue['background_color']) ? $getValue['background_color'] : set_value('background_color') ?>">
                                    <?php echo form_error('background_color'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="heading">Heading</label>
                                    <input type="text" id="heading" class="form-control" name="heading"
                                        value="<?= !empty($getValue['heading']) ? $getValue['heading'] : set_value('heading') ?>">
                                    <?php echo form_error('heading'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>

                                <div class="col-md-12">
                                    <label for="design_by">Description</label>
                                    <textarea id="description" name="description">
                                     <?php echo !empty($getValue['description']) ? $getValue['description'] : ''; ?>                                        
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="design_by">Mission</label>
                                    <textarea id="summernote" name="mission">
                                     <?php echo !empty($getValue['mission']) ? $getValue['mission'] : ''; ?> 
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="design_by">Vision</label>
                                    <textarea id="vision" name="vision">
                                        <?php echo !empty($getValue['vision']) ? $getValue['vision'] : ''; ?> 
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="design_by">Moto</label>
                                    <textarea id="moto" name="moto">
                                        <?php echo !empty($getValue['moto']) ? $getValue['moto'] : ''; ?>                                        
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="design_by">Biography</label>
                                    <textarea id="biography" name="biography">
                                        <?php echo !empty($getValue['biography']) ? $getValue['biography'] : ''; ?>                                        
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="design_by">Upload Biography
                                    
                                     <?php if(!empty($getValue['upload_biography'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['upload_biography']; ?>" class="badge badge-success">Download Upload Image</a>
                                     <?php }?>
                                    </label>
                                    <input type="file" name="upload_biography" id="upload_biography" class="form-control">
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div>
                                <div class="col-md-12 mt-1">
                                    <label for="design_by">Small Biography Image
                                    
                                     <?php if(!empty($getValue['smaill_bio_img'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['smaill_bio_img']; ?>" class="badge badge-success">Download Image</a>
                                     <?php }?>
                                    </label>
                                    <input type="file" name="smaill_bio_img" id="smaill_bio_img" class="form-control">
                                    <span id="img_previewss" style="display:none">
                                        <img id="imgPreviewss" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="design_by">Image

                                     <?php 
                                     if(!empty($getValue['image'])){
                                     $imgCount =  explode(",",$getValue['image']);
                                     foreach($imgCount as $value){
                                    ?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo !empty($value) ? $value : ''; ?>"
                                         class="badge badge-success">Download Upload Image</a>
                                     <?php }}?>
                                    </label>
                                    <input type="file" name="image[]" id="image" class="form-control" multiple>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div>

                            </div>
                            <div class="form-group  col-md-6 col-lg-6">
                                <?php if (empty($getValue['id'])) { ?>
                                <input type="submit" value="Save" class="btn btn-primary" name="submit"
                                    style="margin-top:30px">
                                <?php } else { ?>
                                <input type="submit" value="Update" class="btn btn-primary" name="submit"
                                    style="margin-top:30px" id="btn">
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <iframe src="http://localhost/hsoccyber/" width="100%" height="300"></iframe>
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
        $("#upload_biography").change(function () {
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