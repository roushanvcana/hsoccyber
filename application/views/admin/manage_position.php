<?php  $this->load->view('include/header');  error_reporting(0); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Manage Position</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>home/index">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user/logout">Setting</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> Manage Position</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <?php 
              if(empty($getValue['id'])){
                $Urlsc = "Setting/add"; 
              }else{
                $Urlsc = "Setting/edit"; 
              }
            ?>
            <form class="form" method="post" id="myform" action="<?php echo base_url().$Urlsc?>">
              <div class="row">
                <input type="hidden" name="hid" value="<?=$getValue['id']; ?>">
                <div class="form-group col-md-4 col-lg-4 ">
                  <label for="position_name">Position Name</label>
                  <input type="name" id="position_name" class="form-control" name="position_name" value="<?=$getValue['position_name']; ?>">
                  <span class="text-danger"><?php echo form_error('position_name'); ?></span>
                </div>
                <div class="form-group col-md-4 col-lg-4    ">
                  <label for="cstatus">Status</label>
                  <select name="cstatus" class="form-control" id="cstatus">
                    <?php foreach ($status as $key => $value) : ?>
                      <option <?php if($getValue['cstatus'] == $key){ echo "selected"; }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-4 col-lg-4">    
                  <?php if(empty($getValue['id'])){ ?>            
                    <input type="submit" value="Add Position" class="btn btn-primary" name="submit" style="margin-top:30px">
                  <?php }else{?>
                    <input type="submit" value="Update Position" class="btn btn-primary" name="submit" style="margin-top:30px">
                    <?php }?>
                <?php 
                  if($this->session->flashdata('msg')){
                    echo $this->session->set_flashdata('msg');
                    unset($_SESSION['msg']);
                  }
                ?>
                </div>
              </div>
            </form>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped table-class" id="table-id">
          <thead>
            <tr>
              <th>Sr. No</th>
              <th>Name</th>
              <th>status</th>
              <th class="text-center"> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            if (count($details) > 0) {
              foreach ($details as $data) { ?>
                <tr id="tbl_<?php echo $data['id']; ?>">
                  <td><?= $i; ?></td>
                  <td><?php echo $data['position_name']; ?></td>
                  <td><?php echo get_status($data['cstatus']); ?>
                  </td>
                  <td class="project-actions text-center">
                    <a class="btn btn-info btn" href="<?= site_url() ?>setting/modify/<?= $data['id']; ?>">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                  </td>
                </tr>
              <?php $i++;
              }
            } else { ?>
              <tr>
                <td colspan="4" text-align="center">No record found....</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('include/footer'); ?>
<script type="text/javascript">
  function getUserId(udata) {
    var uri = '<?php echo base_url("manage_contact/deleteUserdata"); ?>';
    var Udata = $(udata).attr('data-id');
    if (confirm("Do you really want to delete record?")) {
      $.ajax({
        url: uri,
        type: 'POST',
        data: "action=delete_user&userID=" + Udata,
        success: function(response) {

          if (response == 1) {
            $("#tbl_" + Udata + "").remove();
          }
        }
      });
    }

  }
</script>