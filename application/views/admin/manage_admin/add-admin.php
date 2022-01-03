<?php error_reporting(0); // for hide of error for update value 


?>
<div class="content-wrapper">
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="<?php echo site_url(); ?>dashboard">Home</a></li>
                        <li class="breadcrumb-item">Add Admin</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>manage-admin">View Admin</a>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Add Admin</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" id="form1" action="">
                            <input type="hidden" name="hid" value="<?= $getValue['id']; ?>">

                            <div class="row">
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="name">Name</label>
                                    <input type="name"  id="name" class="form-control" name="name" value="<?= !empty($getValue['first_name']) ? $getValue['first_name'] : set_value('name') ?>" >
                                    <?php echo form_error('name'); ?>
                                    <p style="color:#dc3545!important;" id="nameError"></p>

                                </div>

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" value="<?= !empty($getValue['email']) ? $getValue['email'] : set_value('email') ?>">
                                    <span id="email_result"></span>

                                    <?php echo form_error('email'); ?>
                                </div>
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" value="<?= !empty($getValue['password']) ? $getValue['password'] : set_value('password') ?>">
                                    <?php echo form_error('password'); ?>
                                    <p style="color:#dc3545!important;" id="passerror"></p>
                                </div>

                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control" name="phone" value="<?= !empty($getValue['mobile_number']) ? $getValue['mobile_number'] : set_value('phone') ?>"  maxlength="10">
                                    <?php echo form_error('phone'); ?>
                                    <p style="color:#dc3545!important;" id="phoneError"></p>
                                </div>                              
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <?php foreach ($status as $key => $value) : ?>
                                            <option <?php if ($getValue['status'] == $key) { ?> selected <?php } ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                              
                                <div class="form-group  col-md-6 col-lg-6">
                                    <label for="myImg" class="col-form-label">Image <?php if(!empty($getValue['image'])): ?> <a href="<?php echo base_url()."uploads/admin_img/".$getValue['image'] ?>" target="_blank" class="badge badge-primary">Download Image</a> <?php endif; ?></label> 
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="file-input"><br>
                                       
                                    </div>
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
