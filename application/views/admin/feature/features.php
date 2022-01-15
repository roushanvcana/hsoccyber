
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Features</a></li>
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
                        <h3 class="card-title">Features</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="">        
                            <div class="row">
                                <div class="form-group  col-md-12">
                                    <label for="title">Feature Type</label>                                    
                                    <select class="form-control" name="featuretype" id="featuretype">
                                        <?php foreach ($faturetype as $key => $value) { ?>
                                           <option value="<?php echo $key;?>"><?php echo $value;?></option>
                                        <?php }?>                     
                                    </select>
                                </div>
                                <div class="form-group  col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" id="feature_title" class="form-control" name="feature_title" value="<?= !empty($getValue['feature_title']) ? $getValue['feature_title'] : set_value('feature_title') ?>" >
                                    <?php echo form_error('feature_title'); ?>
                                    <p style="color:#dc3545!important;" id="passerror"></p>
                                </div>
                                <div class="form-group  col-md-12 col-lg-12">
                                    <label for="address">Description</label>
                                    <textarea rows="5" cols="5" id="description" class="form-control" name="description" >
                                    <?php echo  !empty($getValue['description']) ? $getValue['description'] : set_value('description') ?>
                                    </textarea>
                                    <?php echo form_error('description'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>
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
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Feature List</h3>
                        <div class="card-tools">
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
                                    <th>Feature Type</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i =1; foreach ($featuresdata as  $value) {?> 
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo  array_value(feature_type(), $value['feature_type']); ?></td>
                                        <td><?php echo $value['feature_title']; ?></td>
                                        <td><?php echo $value['description']; ?></td>
                                        <td><?php echo array_value(status(),$value['status']) ?></td>
                                        <td class="project-actions text-center">
                                            <a class="btn btn-info btn" href="<?= site_url() ?>feature-edit/<?= $value['id']; ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn" href="<?php echo base_url()?>feature-delete/<?php echo $value['id']; ?>"
                                                onclick="return   confirm('Are you sure ! you want to delete this record')">
                                                <i class="fas fa-trash-alt"> </i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
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
