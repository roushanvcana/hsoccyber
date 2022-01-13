<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Service</a></li>
                    </ol>
                </div>
                <!-- <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>service">View
                        Service</a>
                </div> -->
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Service Section</h3>
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

                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="description">Description</label>
                                    <textarea rows="5" cols="5" id="description" class="form-control"
                                        name="description">
                                     <?= !empty($getValue['description']) ? $getValue['description'] : ''; ?>
                                    </textarea>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="description">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
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
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Service Section List</h3>
                        <div class="card-tools">

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                <i class="fas fa fa-plus"></i> Add Service
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;         
                                foreach ($service as $data){            
                                ?>
                                <tr id="tbl_<?php echo $data['id']; ?>">
                                    <td><?= $i; ?></td>
                                    <td><?php echo $data['title']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['image']; ?>"
                                            class="badge badge-primary" download>Download Image</a>
                                    </td>
                                    <td><?php echo array_value(status(),$data['status']) ?></td>
                                    <td class="project-actions text-center">
                                        <a class="btn btn-info btn"
                                            href="<?= site_url() ?>service-edit/<?= $data['id']; ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <?php $i++;  } ?>

                                <?php $i = 1;         
                                foreach ($brand_photo as $data){            
                                ?>
                                <tr id="tbl_<?php echo $data['id']; ?>">
                                    <td><?= $i; ?></td>
                                    <td><?php echo $data['title']; ?></td>
                                    <td>
                                        <!-- <a href="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['logo']; ?>"
                                            class="badge badge-primary" download>Download Image</a> -->
                                        <div class="img-wrap">
                                            <a onclick="return confirm('Are you sure, you want to delete it?')"
                                                href="<?php echo base_url(); ?>del-service-photo/<?php echo $photo['id']?>"
                                                class="close"> &times;</a>
                                            <img src="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['logo']; ?>"
                                                class="img-thumbnail" alt="" srcset="" width="100" height="100">
                                        </div>
                                    </td>
                                    <td><?php echo array_value(status(),$data['status']) ?></td>
                                    <td class="project-actions text-center">
                                        <a class="btn btn-info btn"
                                            href="<?= site_url() ?>service-edit/<?= $data['id']; ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                    </td>
                                </tr>
                                <?php $i++;  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url();?>upload-service" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group  col-md-12 col-lg-12">
                            <label for="title">Title </label>
                            <input type="text" id="title" class="form-control" name="title"
                                value="<?= !empty($getValue['title']) ? $getValue['title'] : set_value('title') ?>">
                        </div>

                        <div class="form-group  col-md-12 col-lg-12">
                            <label for="description">Description</label>
                            <textarea rows="5" cols="5" class="form-control" name="description">
                                    <?= !empty($getValue['description']) ? $getValue['description'] : ''; ?>
                                </textarea>
                        </div>
                        <div class="form-group  col-md-12 col-lg-12">
                            <label for="description">Logo</label>
                            <input type="file" name="logo[]" id="logo" class="form-control" multiple>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="serviceImage" value="Add" />
                </div>
            </form>
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
});
</script>