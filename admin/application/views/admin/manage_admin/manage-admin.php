<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Manage Admin</h1>
        </div>
        <div class="col-sm-6">
          <?php
          if (!empty($this->session->flashdata('msg'))) {
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('msg');
              if (isset($_SESSION['msg'])) {
                unset($_SESSION['msg']);
              } ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } else { ?>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
              <li class="breadcrumb-item">Manage Admin</li>
            </ol>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div id="successMessage">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
    <a class="btn btn-primary" style="float:right" href="<?php echo site_url(); ?>add-admin">Add Admin
    </a><br><br>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th>Sr. No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Image</th>
              <th>Status</th>
              <th class="text-center"> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($admin_details as $data) {
              if (!empty($data['image'])) {
                $image =  $data['image'];
              } else {
                $image = 'default.png';
              }
            ?>
              <tr id="tbl_<?php echo $data['id']; ?>">
                <td><?= $i; ?></td>
                <td><?php echo $data['fname'].' '.$data['lname']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td> <a href="<?php echo base_url() . "uploads/admin_img/" . $image ?>" target="_blank"><img src="<?php echo base_url() . "uploads/admin_img/" . $image ?>" height="50px" width="50px"></a></td>
                <td><?php echo array_value(status(), $data['status']) ?></td>
                <td class="project-actions text-center">
                  <a class="btn btn-info btn" href="<?= site_url() ?>edit-admin/<?= $data['id']; ?>">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a class="btn btn-danger btn" href="<?php echo base_url() ?>admin-delete/<?php echo $data['id']; ?>" onclick="return confirm('Are you sure ! you want to delete this record')">
                    <i class="fas fa-trash-alt"> </i>
                  </a>
                </td>
              <?php $i++;
            } ?>
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>
</div>

