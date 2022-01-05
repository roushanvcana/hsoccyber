<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.js"></script>


    <style>
    /* Table styles. */
    td,
    th {
        text-align: left;
        padding: .5rem 1rem;

        color: #1a1919
    }

    tbody tr:nth-child(odd) {
        background-color: #ccc;
    }


    /* Pagination. */
    .pagination {
        background: white;
        font: white;
        padding: 1rem;
        margin-bottom: 1rem;
        text-align: center;
        display: flex;
        justify-content: center;
    }

    #numbers {
        padding: 0;
        margin: 0 2rem;
        list-style-type: none;
        display: flex;
    }

    #numbers li a {

        padding: .5rem 1rem;
        text-decoration: none;
        opacity: .7;
    }

    #numbers li a:hover {
        opacity: 1;
    }

    #numbers li a.active {
        opacity: 1;
        background: #4f5962;
        color: #f9f7f7;
    }

    .example button {
        float: left;
        background-color: #4E3E55;
        color: white;
        border: none;
        box-shadow: none;
        font-size: 17px;
        font-weight: 500;
        font-weight: 600;
        border-radius: 3px;
        padding: 15px 35px;
        margin: 26px 5px 0 5px;
        cursor: pointer;
    }

    .example button:focus {
        outline: none;
    }

    .example button:hover {
        background-color: #33DE23;
    }

    .example button:active {
        background-color: #81ccee;
    }

    label:not(.form-check-label):not(.custom-file-label) {
        font-weight: 400;
    }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#343a40">

                        <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image"
                            alt="User Image">

                        <span class="hidden-xs"
                            style="color:#343a40"><?php echo $this->session->userdata('name'); ?></span>

                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url(); ?>" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $this->session->userdata('email'); ?>

                            </p>
                        </li>
                        <li class="user-footer" style="background:#343a40">
                            <div class="pull-right">
                                <a href="<?php echo base_url(); ?>admin-logout" class="btn btn-default "
                                    style="color: #24272a">logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">
                    HSOC CYBER</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>" class="img-circle elevation-1">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?= $this->session->userdata('name'); ?>
                        </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <!-- <li class="nav-item">
                            <a href="<?php echo site_url() ?>manage-admin" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Manage Admin</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    Sidebar
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>add-website-setting" class="nav-link">
                                        <i class="far fa-user nav-icon"></i>
                                        <p>Manage Website Setting</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    Website Home Page
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>slider" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Slider</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>slider-box" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>Slider Box</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>brand-section" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                        <p>Brand Section</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>add-about" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Manage About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>service" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Manage Service</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>feature" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Feature</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>feature-details" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Feature Details</p>
                            </a>
                        </li>

                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>