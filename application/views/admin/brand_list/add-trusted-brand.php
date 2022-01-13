<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Brand</a></li>
                    </ol>
                </div>
                <!-- <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>slider-box">View
                        Brand</a>
                </div> -->
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Add Brand box</h3>
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
                                    <label for="background_color">Background Color</label>
                                    <input type="color" id="background_color" class="form-control"
                                        name="background_color"
                                        value="<?= !empty($getValue['background_color']) ? $getValue['background_color'] : set_value('background_color') ?>">
                                    <?php echo form_error('background_color'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label>Description</label>
                                    <textarea id="description" name="description">
                                     <?= !empty($getValue['description']) ? $getValue['description'] : set_value('description') ?>
                                    </textarea>
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
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Brand</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa fa-plus"></i> Upload Logo
                                </button>
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="row">
                                    <?php foreach ($brand_photo as $photo) {?>
                                    <div class="col-md-3 mt-2 img-wrap">
                                    <a onclick="return confirm('Are you sure, you want to delete it?')" href="<?php echo base_url(); ?>del-brand-photo/<?php echo $photo['id']?>" class="close" > &times;</a>
                                        <img src="<?php echo base_url()?>uploads/gallery-image/<?php echo $photo['upload_logo']; ?>" class="img-thumbnail" alt="" srcset="" width="200" height="200">
                                    </div>  
                                    <?php }?>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url();?>upload-brand" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input type="file" name='files[]' id="file_input" class="form-control" multiple>             
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
$(document).ready(() => {
    $("#image").change(function() {
        $('#img_preview').css('display', 'block');
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $("#imgPreview")
                    .attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});
</script>