<?php 

    require_once("database/database.php");
    
    session_start();
    

 ?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>DUŞAPARK.COM</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
        $(".serisec").click(function()
        {
            var id = $(this).attr('id');
            $("#seribaslik").html($(this).text());
            id=id.substring(4);
            //alert(id);
            $.ajax({
                url:"anasayfa.php",
                method:"POST",
                data:{action:"dusakabingetir", id:id},
                success:function(data){
                    $("#serilistesi").html(data);
                }
            });
        });
    });
  </script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.html" class="nav-link">Anasayfa</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">İletişim</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">2 Bildiriminiz var</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> Malzeme Silme İsteği
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> Kişi Ekleme Talebi
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">Tüm Bildirimler</a>
                </div>
            </li>

            <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DUŞAPARK.COM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user1-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">MESUT KOÇAKER</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DUŞAKABİNLER</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="aksesuarlar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>AKSESUARLAR</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="cambalkon" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CAM BALKONLAR</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SİPARİŞLERİM</p>
                </a>
              </li>


              <li>
                <hr class="bg-light">
                <hr class="bg-light">
              </li>


              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fiyat Sorgula</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kategoriislemleri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategoriler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Duşakabinler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ürünler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok</p>
                </a>
              </li>

            </ul>

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ENVANTER LİSTESİ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Envanter Listesi</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 btn card-link serisec" id="seri1">
                                        <h5 class="w-100 text-center card-title">
                                            ALYUM SERİSİ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 btn card-link serisec" id="seri2">
                                        <h5 class="w-100 text-center card-title">
                                            DELUX SERİSİ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 btn card-link serisec" id="seri3">
                                        <h5 class="w-100 text-center card-title">
                                            EXPORT BEŞGEN SERİSİ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 btn card-link serisec" id="seri4">
                                        <h5 class="w-100 text-center card-title">
                                            KARİZMA SERİSİ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 btn card-link serisec" id="seri5">
                                        <h5 class="w-100 text-center card-title">
                                            RELAX SERİSİ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="w-100 btn card-link serisec" id="seri6">
                                        <h5 class="w-100 text-center card-title">
                                            TROY SERİSİ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <span id="seribaslik"></span>Nİ GÖRÜNTÜLÜYORSUNUZ
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="row" id="serilistesi">
                                    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
                                    
                                    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!-- / Main content -->




    </div>
    <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery
<script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
<!--

<div class="col-6 col-sm-4 col-lg-2 text-center">
    <div class="position-relative">
        <img src="dist/img/1 Sabit 1 Hareketli Köşe.jpg" alt="duşapark" class="img-fluid">
        <div class="ribbon-wrapper ribbon-lg">
            <div class="ribbon bg-success text-lg">
                İndirimli
            </div>
        </div>
        <div class="card-title w-100 text-center">
            <b>1 sabit 1 hareketli</b>
        </div>
        <div class="btn btn-outline-dark text-center">
            <b>Fiyat Sorgula</b>
        </div>
    </div>
</div>
    -->