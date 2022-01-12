
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
                <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>slider-box">View Brand</a>
                </div>
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
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" 
                        action="">
                            <div class="row">
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="title">Title </label>
                                    <input type="text" id="title" class="form-control" name="title" 
                                    value="<?= !empty($getValue['title']) ? $getValue['title'] : set_value('title') ?>" >
                                    <?php echo form_error('title'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="background_color">Background Color</label>
                                    <input type="color" id="background_color" class="form-control" name="background_color" value="<?= !empty($getValue['background_color']) ? $getValue['background_color'] : set_value('background_color') ?>" >
                                    <?php echo form_error('background_color'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                               
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Upload Image
                                    <?php if(!empty($getValue['upload_logo'])){?>
                                        <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['upload_logo']; ?>" class="badge badge-success">Download Upload Image</a>
                                        <?php }?>
                                    </label>
                                    <input type="file" id="image" class="form-control" name="image" value="">
                                    <?php echo form_error('image'); ?>
                                    <p style="color:#dc3545!important;" id="hover_colorError"></p>
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
                                    <input type="submit" value="Save" class="btn btn-primary" name="submit" style="margin-top:30px">
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
        $("#image").change(function () {
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
