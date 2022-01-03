<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Manage Slider Box</h1>
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
            <li class="breadcrumb-item">Manage Slider Box</li>
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
    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>add-slider-box">Add Slider Box
    </a><br><br>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th>Sr. No</th>
              <th>Title</th>
              <th>Background Color</th>
              <th>Hover Color</th>  
              <th>Image</th>           
              <th>Logo</th>           
              <th>Status</th>
              <th class="text-center"> Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1;
         
            foreach ($sliderbox as $data){            
              ?>
              <tr id="tbl_<?php echo $data['id']; ?>">
                  <td><?= $i; ?></td>
                  <td><?php echo $data['title']; ?></td>
                  <td><?php echo $data['background_color']; ?></td>
                  <td><?php echo $data['hover_color']; ?></td>
                  <td>
                  <a href="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['image']; ?>" 
                  class="badge badge-primary" download>Download Image</a>  
                  </td>
                  <td>
                  <a href="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['logo']; ?>" 
                  class="badge badge-primary" download>Download Image</a>  
                  </td>
                  <td><?php echo array_value(status(),$data['status']) ?></td>
                  <td class="project-actions text-center">
                      <a class="btn btn-info btn" href="<?= site_url() ?>edit-slider-box/<?= $data['id']; ?>">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a class="btn btn-danger btn" href="<?php echo base_url()?>sliderbox-delete/<?php echo $data['id']; ?>"
                          onclick="return   confirm('Are you sure ! you want to delete this record')">
                          <i class="fas fa-trash-alt"> </i>
                      </a>
                  </td>
                </tr>
            <?php $i++;  } ?>
          </tbody>
        </table>
          </div>
    </div>
   
  </section>
</div>
</div>

