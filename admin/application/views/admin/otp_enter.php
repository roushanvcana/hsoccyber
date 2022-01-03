
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style>
    .error {
      color: #ea3434;
      font-weight: 500 !important;
    }

    .input-group-text {
      border-left: 1px solid #766f6f57 !important;
      border-right: none !important;
    }

    input#email {
      width: 70%;
      border-right: 1px solid #766f6f57 !important;
    }

    input#password {
      width: 70%;
      border-right: 1px solid #766f6f57 !important;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Project</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <?php if ($this->session->flashdata('error')) { ?><div class="form-error"><?php echo $this->session->flashdata('error'); ?></div><?php } ?>
        <div class="hider">
          <form method="post" action="" id="myform">
            <p class="login-box-msg" style="color: #007bff;">otp</p>
            <?php echo $details['otp']; ?>
              <div class="input-group mb-3">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              <input type="text" class="form-control" id="otp" name="otp" onkeypress="return isNumberKey(event)"  maxlength="5" placeholder="Enter OTP" value="">
              <?php echo form_error('otp'); ?>
           </div>
           <div class="input-group mb-3">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              <input type="text" class="form-control" id="password" name="password" placeholder="enter password" value="">
              <?php echo form_error('password'); ?>
           </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit" id="hide">Submit</button>
            </div>
            <div class="col-6">
              <p class="mb-0">Back to
                <a href="<?php echo site_url();?>/welcome/index" class="text-center">Login</a>
              </p>
              <!-- /.col -->
            </div>
          </form>
        </div>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>
  // $(document).ready(function() {

  //   $('#myform').validate({
  //     rules: {
  //       email: {
  //         required: true,
  //         email: true
  //       },
  //       otp: {
  //         required: true,
  //         maxlength: 5
  //       }
  //     },
  //     messages: {
  //       email: "Please enter Valid email address",
  //       password: "Please enter your password",
  //     }
  //   });

  // });
</script>
<script>
function isNumberKey(evt){
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
        }
   
        </script>