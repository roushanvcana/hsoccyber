<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Web Model</a></li>
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
                        <h3 class="card-title">Web Model</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="<?php echo base_url()?>add-webmodel">
                            <div class="row">
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="heading">Heading</label>
                                    <input type="text" id="heading" class="form-control" name="heading"
                                        value="<?= !empty($getValue['heading']) ? $getValue['heading'] : set_value('heading') ?>">
                                    <?php echo form_error('heading'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>

                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="description">Description</label>
                                    <textarea rows="5" cols="5" id="description" class="form-control"
                                        name="description">
                                     <?= !empty($getValue['description']) ? $getValue['description'] : ''; ?>
                                    </textarea>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="Prerequisites">Prerequisites</label>
                                    <textarea rows="5" cols="5" id="biography" class="form-control"
                                        name="prerequisites">
                                     <?= !empty($getValue['prerequisites']) ? $getValue['prerequisites'] : ''; ?>
                                    </textarea>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="system_requirements">System Requirements</label>
                                    <textarea rows="5" cols="5" id="description" class="form-control"
                                        name="system_requirements">
                                     <?= !empty($getValue['system_requirements']) ? $getValue['system_requirements'] : ''; ?>
                                    </textarea>
                                </div>

                                <div class="form-group  col-md-12 col-lg-12"> 
                                    <label for="description">Model Button</label>
                                    <input type="text" name="model_button" id="model_button" class="form-control"  value="<?= !empty($getValue['model_button']) ? $getValue['model_button'] : set_value('model_button') ?>">
                                </div>

                                <div class="form-group  col-md-6 col-lg-6">
                                    <?php if (empty($getValue['id'])) { ?>
                                    <input type="submit" id="add_webmodel" value="Save" class="btn btn-primary" name="submit"
                                        style="margin-top:30px">
                                    <?php } else { ?>
                                    <input type="submit" value="Update" class="btn btn-primary" name="submit"
                                        style="margin-top:30px" id="add_webmodel">
                                    <?php } ?>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(() => {
    $("#icon_upload").change(function() {
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
    $("#image_upload").change(function() {
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

    $('#add_service').click(function(){

        var title = $('#title').val();
        if (title == '') {
            document.getElementById("title").style.borderColor = "#ff0000";
            document.getElementById("title").focus();
            return false;
        } else {
            $("#title").removeAttr("style");
        }

    });
});
</script>