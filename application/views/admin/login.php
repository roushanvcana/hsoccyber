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
      <a href="#"><b>HSOC Cyber</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">       
        <p class="login-box-msg">
        <?php 
          if($this->session->flashdata('error')){ 
            echo $this->session->flashdata('error');
          }else{
            echo "Sign in to start your session";
          }
        ?>  
        </p>
       <?php echo form_open('login'); ?>
          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <?php echo form_input(['class' => 'form-control',"id"=> "email", "name" => "email",  "placeholder" =>"Email","value" => set_value('email') ]); ?>
          </div>
        
          <div class="input-group mb-3">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <?php echo form_password(["type"=>"password", "class"=>"form-control", "id"=>"password", "name"=>"password", "placeholder"=>"Password"]) ?>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" name="remember_me"/>
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">            
              <?php echo form_submit(["type"=>"submit", "class"=>"btn btn-primary btn-block", "name"=>"submit", "value" => "Sign In"])?>
            </div>
            <div class="col-6">
              <p class="mb-0">
                <a href="<?php echo site_url(); ?>forget-password" class="text-center">Forget Password</a>
              </p>
            </div>
            <div class="col-md-12">
              <?php 
              // set of unic error message
              //echo form_error('email', '<div class="text-danger">', "</div>");   
              //echo form_error('password', '<div class="text-danger">', "</div>"); 
              
              echo form_error('email');
              echo form_error('password'); 
              ?>             
            </div>
          </div>
      </div>
        

    </div>
    <!-- /.login-card-body -->
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
  $(document).ready(function() {

    $('#myform').validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          
        }
      },
      messages: {
        email: "Please enter your email address",
        password: "Please enter your password",
      }
    });

  });
</script>