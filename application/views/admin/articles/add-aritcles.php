
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Article</a></li>
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
                        <h3 class="card-title"> Add Article</h3>
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
                                <div class="form-group  col-md-4 col-lg-4">
                                    <label for="authorname">Author Name</label>
                                    <input type="text" id="authorname" class="form-control" name="authorname" 
                                    value="<?= !empty($getValue['authorname']) ? $getValue['authorname'] : set_value('authorname') ?>" >
                                    <?php echo form_error('authorname'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-4 col-lg-4">
                                    <label for="publishdate">Publish Date</label>
                                    <input type="date" id="publishdate" class="form-control" name="publishdate" value="<?= !empty($getValue['publishdate']) ? $getValue['publishdate'] : set_value('publishdate') ?>" >
                                    <?php echo form_error('publishdate'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-4 col-lg-4">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" class="form-control" name="image" value="" >
                                    <?php echo form_error('image'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="design_by">Description</label>
                                    <textarea rows="4" cols="4" class="form-control" name="description">
                                    <?php echo !empty($getValue['description']) ? $getValue['description'] : ''; ?>
                                    </textarea>
                                </div> 
                            </div>
                            <div class="form-group  col-md-4 col-lg-4">
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
