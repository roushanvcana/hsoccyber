
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
                <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>manage-user">View Website Setting</a>
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
                                    <textarea rows="5" cols="5" id="address" class="form-control" name="address" >
                                    <?php echo  !empty($getValue['address']) ? $getValue['address'] : set_value('address') ?>
                                    </textarea>
                                    <?php echo form_error('address'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="embed_map">Embad Map</label>
                                    <input type="text" id="embed_map" class="form-control" name="embed_map" value="<?= !empty($getValue['embed_map']) ? $getValue['embed_map'] : set_value('embed_map') ?>"  maxlength="10">
                                    <?php echo form_error('embed_map'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>                              
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="copy_write">Copy Write</label>
                                    <input type="text" id="copy_write" class="form-control" name="copy_write" value="<?= !empty($getValue['copy_write']) ? $getValue['copy_write'] : set_value('copy_write') ?>"  maxlength="10">
                                    <?php echo form_error('copy_write'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>   
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Design By</label>
                                    <input type="text" id="design_by" class="form-control" name="design_by" value="<?= !empty($getValue['design_by']) ? $getValue['design_by'] : set_value('design_by') ?>"  maxlength="10">
                                    <?php echo form_error('design_by'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>   
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="design_by">Logo</label>
                                    <input type="file" id="logo" class="form-control" name="logo" value="<?= !empty($getValue['logo']) ? $getValue['logo'] : set_value('logo') ?>"  maxlength="10">
                                    <?php echo form_error('logo'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>   
                               
                            </div>
                            <div class="form-group  col-md-6 col-lg-6">

                                <?php if (empty($getValue['id'])) { ?>
                                    <input type="submit" value="Save" id="submit_btn" class="btn btn-primary" name="submit" style="margin-top:30px">
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
                        <iframe src="https://www.vcanaglobal.com/" width="100%" height="300"></iframe>                         
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function(){
        $('#submit_btn').click(function() {
            
        });
    });
</script>
