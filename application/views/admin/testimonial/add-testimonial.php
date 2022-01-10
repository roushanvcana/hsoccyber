
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Testimonial</a></li>
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
                        <h3 class="card-title"> Add Testimonial</h3>
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
                                    <label for="title">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" 
                                    value="<?= !empty($getValue['name']) ? $getValue['name'] : set_value('name') ?>" >
                                    <?php echo form_error('name'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="heading1">Heading1</label>
                                    <input type="text" id="heading1" class="form-control" name="heading1" value="<?= !empty($getValue['heading1']) ? $getValue['heading1'] : set_value('heading1') ?>" >
                                    <?php echo form_error('heading1'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="heading2">Heading2</label>
                                    <input type="text" id="heading2" class="form-control" name="heading2" value="<?= !empty($getValue['heading2']) ? $getValue['heading2'] : set_value('heading2') ?>" >
                                    <?php echo form_error('heading2'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="rating">Rating</label>
                                  
                                    <select id="rating" class="form-control" name="rating">
                                        <?php for($i=1; $i<=5; $i++){?>
                                        <option <?php if(!empty($getValue['rating']) == $i){ echo 'selected'; }?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php }?>
                                    </select>
                                    <?php echo form_error('rating'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                                <div class="form-group  col-md-4 col-lg-4">
                                    <label for="designation">Designation</label>
                                    <input type="text" id="designation" class="form-control" name="designation" value="<?= !empty($getValue['designation']) ? $getValue['designation'] : set_value('designation') ?>" >
                                    <?php echo form_error('designation'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                                <div class="form-group  col-md-4 col-lg-4">
                                    <label for="photo">Photo</label>
                                    <input type="file" id="photo" class="form-control" name="photo" value="" >
                                    <?php echo form_error('photo'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                                <div class="form-group  col-md-4 col-lg-4">
                                    <label for="backgroundimage">Background Image</label>
                                    <input type="file" id="backgroundimage" class="form-control" name="backgroundimage" value="" >
                                    <?php echo form_error('backgroundimage'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>           
                               
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="design_by">Description</label>
                                    <textarea name="description" id="description">
                                    <?php echo !empty($getValue['description']) ? $getValue['description'] : ''; ?>
                                    </textarea>
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
