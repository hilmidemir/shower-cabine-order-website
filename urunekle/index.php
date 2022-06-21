<?php 

require_once("../database/database.php");

session_start();


?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>DUŞAPARK.COM</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#urunekle").click(function()
			{
				var urunturu = $('#urunturu').val();
				var urunkodu = $('#urunkodu').val();
				var urunadi = $('#urunadi').val();
				var urunfiyat = $('#urunfiyat').val();
				var urunadet = $('#urunadet').val();
				//alert(urunturu+' : '+urunkodu+' : '+urunadi+' : '+urunfiyat+' : '+urunadet);

            //alert(id);
            $.ajax({
            	url:"islem.php",
            	method:"POST",
            	data:{action:"urunekle", urunturu:urunturu, urunkodu:urunkodu, urunadi:urunadi, urunfiyat:urunfiyat, urunadet:urunadet},
            	success:function(data){
            		alert(data);
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
				<a href="index3.html" class="brand-link">
					<img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					style="opacity: .8">
					<span class="brand-text font-weight-light">DUŞAPARK.COM</span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="../dist/img/user1-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
          				<a href="../" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>DUŞAKABİNLER</p>
          				</a>
          			</li>

          			<li class="nav-item">
          				<a href="#" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>AKSESUARLAR</p>
          				</a>
          			</li>

          			<li class="nav-item">
          				<a href="../cambalkon" class="nav-link">
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
          				<a href="../" class="nav-link">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Duşakabinler</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="" class="nav-link active">
          					<i class="far fa-circle nav-icon"></i>
          					<p>Ürün Ekle</p>
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
    <section class="content-wrapper">

    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row mb-2">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">ENVANTER LİSTESİ</h1>
    				</div><!-- /.col -->
    				<div class="col-sm-6">
    					<ol class="breadcrumb float-sm-right">
    						<li class="breadcrumb-item"><a href="../s">Anasayfa</a></li>
    						<li class="breadcrumb-item active">Ürün Ekle</li>
    					</ol>
    				</div><!-- /.col -->
    			</div><!-- /.row -->
    		</div><!-- /.container-fluid -->
    	</div>
    	<style type="text/css">
    		select, input
    		{
    			margin-bottom: 5px;
    		}
    	</style>

    	<div class="container-fluid" style="padding-left: 0px;">

    		<div class="row">
    			<div class="col-12 col-sm-12 col-md-4 col-lg-4"></div>
    			<div class="col-12 col-sm-12 col-md-4 col-lg-4"  style="margin-top: 20px;">
    				<select class="form-control w-100" id="urunturu">
    					<option>ÜRÜN TÜRÜ SEÇİNİZ</option>
    					<option value="aksesuar">Aksesuar</option>
    					<option value="cam">Cam</option>
    					<option value="profil">Profil</option>
    				</select>
    				<input type="text" class="form-control is-warning w-100" id="urunkodu" placeholder="Ürün Kodu">
    				<input type="text" class="form-control is-warning w-100" id="urunadi" placeholder="Ürün Adı">
    				<input type="text" class="form-control is-warning w-100" id="urunfiyat" placeholder="Ürün Fiyatı">
    				<input type="number" class="form-control is-warning w-100" id="urunadet" placeholder="Ürün adeti">
    				<div class="card-footer text-right w-100">
    					<button id="urunekle" class="btn btn-warning">Ürün Ekle</button>
    				</div>
    			</div>

    			
    		</div>
    		<!-- /.container-fluid -->
    	</section>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
  </div>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
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