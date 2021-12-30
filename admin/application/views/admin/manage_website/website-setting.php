<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Manage Website Setting</h1>
        </div>
        <div class="col-sm-6">
          <?php 
            if(!empty($this->session->flashdata('msg'))){
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('msg'); if(isset($_SESSION['msg'])){ unset($_SESSION['msg']); } ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php }else{?>
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
            <li class="breadcrumb-item">Manage Website Setting</li>
          </ol>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div id="successMessage">
      <?php echo $this->session->flashdata('msg'); ?> 
    </div>
    <a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>add-website-setting">Add Website Setting
    </a><br><br>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th>Sr. No</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>  
              <th>Logo</th>           
              <th>Status</th>
              <th class="text-center"> Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1;
         
            foreach ($websetting as $data){            
              ?>
              <tr id="tbl_<?php echo $data['id']; ?>">
                  <td><?= $i; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['phone']; ?></td>
                  <td><?php echo $data['address']; ?></td>
                  <td>
                  <a href="<?php echo base_url()?>uploads/gallery-image/<?php echo $data['logo']; ?>" 
                  class="badge badge-primary" download>Download Image</a>   
                  </td>
                  <td><?php echo array_value(status(),$data['status']) ?></td>
                  <td class="project-actions text-center">
                      <a class="btn btn-info btn" href="<?= site_url() ?>website-edit/<?= $data['id']; ?>">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a class="btn btn-danger btn" href="<?php echo base_url()?>website-delete/<?php echo $data['id']; ?>"
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

