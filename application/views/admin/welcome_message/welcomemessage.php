<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Welcome Message</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Welcome Message</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="">
                            <div class="row">
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="title">Title </label>
                                    <input type="text" id="title" class="form-control" name="title"
                                        value="<?= !empty($getValue['title']) ? $getValue['title'] : set_value('title') ?>">
                                    <?php echo form_error('title'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="design_by">Small Image

                                        <?php if(!empty($getValue['small_image'])){?>
                                            <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['small_image']; ?>"
                                                class="badge badge-success">Download Upload Image</a>
                                        <?php }?>

                                    </label>
                                    <input type="file" class="form-control" name="small_image[]" id="small_image" multiple/>
                                    <span id="img_preview" style="display:none">
                                        <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="design_by">Full Image

                                       <?php if(!empty($getValue['full_width'])){?>
                                            <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['full_width']; ?>"
                                                class="badge badge-success">Download Upload Image</a>
                                        <?php }?>

                                    </label>
                                    <input type="file" class="form-control" name="full_width" id="full_width"/>

                                    <span id="img_preview2" style="display:none">
                                        <img id="imgPreview2" src="#" alt="pic" width="100" height="100" />
                                    </span>

                                </div>
                                <div class="col-md-12">
                                    <label for="design_by">Description</label>
                                    <textarea id="description" name="description">
                                     <?php echo !empty($getValue['message']) ? $getValue['message'] : ''; ?>                                        
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

        $("#small_image").change(function() {
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
        $("#full_width").change(function() {
            $('#img_preview2').css('display', 'block');
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $("#imgPreview2")
                        .attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>