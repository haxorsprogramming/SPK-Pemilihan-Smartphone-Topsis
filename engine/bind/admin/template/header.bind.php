<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SPK Topsis - Pemilihan Smartphone</title>
    <!-- Icons-->
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?=STYLEBASE."admin/"; ?>asset/css/style.css" rel="stylesheet">
    <link href="<?=STYLEBASE."admin/"; ?>asset/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <script src="<?=STYLEBASE."admin/"; ?>asset/vendors/jquery/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?=STYLEBASE."admin/"; ?>asset/img/brand/logo.png" width="49" alt="Uinsu Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav ml-auto">
        
        <li class="nav-item d-md-down-none nama_admin">
          Halo, 
        </li>
        <li class="nav-item dropdown" style="margin-right: 25px">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="<?=STYLEBASE."admin/"; ?>asset/img/avatars/no-profile-picture.png" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="<?=HOMEBASE; ?>admin/logout">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?=HOMEBASE;?>admin/dasbor">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=HOMEBASE;?>admin/dataKriteria">
                <i class="nav-icon icon-list"></i> Data Kriteria
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=HOMEBASE;?>admin/dataSmartphone">
              <i class="nav-icon icon-list"></i> Data Smartphone
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
