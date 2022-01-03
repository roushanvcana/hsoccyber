<?php $this->load->view('include/header'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Manage Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard">Home</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <?php
    if (!empty($this->session->flashdata('pmsg'))):?>
    <div class="row" style="position: relative; top: 56px;">
      <div class="col-md-4">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       <?php echo $this->session->flashdata('pmsg'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <div class="col-md-8"></div>
</div>
<?php if (isset($_SESSION['pmsg'])): unset($_SESSION['pmsg']); endif; endif;?>

<a class="btn btn-primary btn" style="float:right" href="<?php echo site_url(); ?>Page_controller/add_page">Add Pages
</a><br><br>
<div class="card">
  <div class="card-body p-0">
    <table class="table table-striped projects">
      <thead>
        <tr>
          <th>Sr. No</th>
          <th>Page Title</th>
          <th>Parent Page</th>
          <th>Banner Image</th>
          <th>Status</th>
          <th> Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
           $i=1;
           if(count($data)){
           foreach($data as $row):
            if(!empty($row['image'])){
              $img = $row['image'];
            }else{
              $img = "default.png";
            }
        ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= $row['title'];  ?></td>
          <td><?= $row['parent_page'];  ?></td>
          <td><img src="<?php echo base_url().'uploads/'.$img; ?>" alt="No Image" height="50px" width="50px" class="img-thumbnail"></td>
          <td><?= get_status($row['cstatus']);  ?></td>
          <td> 
            <a class="btn btn-info btn-sm" href="<?= site_url() ?>Page_controller/modify/<?= $row['id']; ?>"><i class="fas fa-edit"></i> Edit</a>
            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ! You want to delete this record');"  href="<?= base_url()?>Page_controller/delete/<?= $row['id']; ?>" onclick="getUserId(this)"><i class="fas fa-trash-alt"></i> Delete</a>
          </td>
        </tr>

        <?php endforeach; }else{?>
          <tr>
            <td colspan="6" align="center">No record found....</td>
          </tr>
        <?php }?>
      </tbody>

    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<?php $this->load->view('include/footer'); ?>