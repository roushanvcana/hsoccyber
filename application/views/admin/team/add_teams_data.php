<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Team</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>team-list">View
                        Team</a>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Add Team</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1"
                            action="<?php echo base_url()?>add-team">
                            <div class="row">
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="heading">Heading </label>
                                    <input type="text" id="heading" class="form-control" name="heading"
                                        value="<?= !empty($getValue['heading']) ? $getValue['heading'] : set_value('heading') ?>"
                                        placeholder="Heading">
                                    <?php echo form_error('heading'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="description">Description </label>
                                    <textarea id="description" name="description">
                                        <?= !empty($getValue['description']) ? $getValue['description'] : set_value('description') ?>
                                    </textarea>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="text-right">
                                        <button type="button" id="add_more" class="btn btn-primary btn-sm">Add more <i
                                                class="fa fa-plus-circle"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12" id="team_section">
                                    <div class="row">
                                        <div class="form-group  col-md-6 col-lg-6">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" name="name"
                                                value="<?= !empty($getValue['name']) ? $getValue['name'] : set_value('name') ?>"
                                                placeholder="Name">
                                            <?php echo form_error('name'); ?>
                                            <p style="color:#dc3545!important;" id="nameError"></p>
                                        </div>

                                        <div class="form-group  col-md-6 col-lg-6">
                                            <label for="designation">Designation</label>
                                            <input type="text" id="designation" class="form-control" name="designation"
                                                value="<?= !empty($getValue['designation']) ? $getValue['designation'] : set_value('designation') ?>"
                                                placeholder="Designation">
                                            <?php echo form_error('designation'); ?>
                                            <p style="color:#dc3545!important;" id="passerror"></p>
                                        </div>
                                        <div class="form-group  col-md-4 col-lg-4">
                                            <label for="facebook_link">Facebook Link</label>
                                            <input type="text" id="facebook_link" class="form-control"
                                                name="facebook_link"
                                                value="<?= !empty($getValue['facebook_link']) ? $getValue['facebook_link'] : set_value('facebook_link') ?>"
                                                placeholder="Facebook Link">
                                            <?php echo form_error('facebook_link'); ?>
                                            <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                        </div>
                                        <div class="form-group  col-md-4 col-lg-4">
                                            <label for="twitter_link">Twitter Link</label>
                                            <input type="text" id="twitter_link" class="form-control"
                                                name="twitter_link"
                                                value="<?= !empty($getValue['twitter_link']) ? $getValue['twitter_link'] : set_value('twitter_link') ?>"
                                                placeholder="Twitter Link">
                                            <?php echo form_error('twitter_link'); ?>
                                            <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                        </div>
                                        <div class="form-group  col-md-4 col-lg-4">
                                            <label for="linkdin">Linkdin Link</label>
                                            <input type="text" id="linkdin" class="form-control" name="linkdin"
                                                value="<?= !empty($getValue['linkdin']) ? $getValue['linkdin'] : set_value('linkdin') ?>"
                                                placeholder="Linkdin Link">
                                            <?php echo form_error('linkdin'); ?>
                                            <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                        </div>
                                        <div class="form-group  col-md-6 col-lg-6">
                                            <label for="instagram">Instagram Link</label>
                                            <input type="text" id="instagram" class="form-control" name="instagram"
                                                value="<?= !empty($getValue['instagram']) ? $getValue['instagram'] : set_value('instagram') ?>"
                                                placeholder="Instagram">
                                            <?php echo form_error('instagram'); ?>
                                            <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                        </div>

                                        <div class="form-group  col-md-6 col-lg-6">
                                            <label for="photo">Photo
                                            <?php if(!empty($getValue['photo'])){?>
                                                <a href="<?php echo base_url();?>uploads/gallery-image/<?php echo $getValue['photo']; ?>" class="badge badge-success">Download Upload Image</a>
                                            <?php }?>
                                            </label>
                                            <input type="file" id="photo" class="form-control" name="photo" value="">
                                            <?php echo form_error('photo'); ?>
                                            <p style="color:#dc3545!important;" id="rename_buttonError"></p>
                                            <span id="img_preview" style="display:none">
                                                <img id="imgPreview" src="#" alt="pic" width="100" height="100" />
                                            </span>
                                        </div>
                                    </div>
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
        $("#photo").change(function () {
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