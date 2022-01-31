<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Manage Brand List</h1>
        </div>
        <div class="col-sm-6">
          <?php 
            if(!empty($this->session->flashdata('success'))){
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('success'); if(isset($_SESSION['success'])){ unset($_SESSION['success']); } ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php }else{?>
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
            <li class="breadcrumb-item">Manage Brand List</li>
          </ol>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div id="successMessage">
      <?php echo $this->session->flashdata('success'); ?> 
    </div>
    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>add-brand">Add Brand
    </a><br><br>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <tr>
            <td>Title</td>
            <td>Hello Title</td>
          </tr>         
          <tr>
            <td>Background Color</td>
            <td>#22222</td>
          </tr>         
          <tr>
            <td>Description</td>
            <td>#22222</td>
          </tr> 

        </table>

        <div class="row">
            <div class="col-md-12">
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
            </div>
        </div>
          </div>
    </div>
   
  </section>
</div>
</div>

