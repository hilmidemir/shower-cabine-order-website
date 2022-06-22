<?php 

//header("Refresh:1; url=../");

?>

<?php 

require_once("../../database/database.php");

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
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript">
            //sayafanın yükleme işlemleri bittiğinde çalıştırılacak olan kodlar için kullanılır
            $(document).ready(function()
            {
                $('#hesapla').click(function(){
                    var cam_olcu = $("#cam-olcu").val();
                    var kulp = $("#kulp").val();
                    var yuzde = $("#yuzde").val();
                    var kumlama = $("#kumlama").val();
                    var suluk = $("#suluk").val();
                    var cam_tipi = $("#cam-tipi").val();
                    var h_secim = $("#h-secim").val();
                    var profil_tipi = $("#profil-tipi").val();
                    var delik = 0;

                    if(cam_olcu == "")
                    {
                        cam_olcu = 140;
                        $("#cam-olcu").val(cam_olcu);
                    }
                    /*if(kulp1 == "")
                    {
                    sbt_cam = 1.828;
                    $("#sbt-cam").val(sbt_cam);
                    }
                    if(hrkt_cam == "")
                    {
                    hrkt_cam = 1.875;
                    $("#hrkt-cam").val(hrkt_cam);
                    }*/
                    if(yuzde == "")
                    {
                        yuzde = 0;
                        $("#yuzde").val(yuzde);
                    }
                    if(kumlama == "")
                    {
                        kumlama = 0;
                        $("#kumlama").val(kumlama);
                    }
                    if ($("#kulp").val() == "3" || "4")
                    {
                        delik = 2;
                    }
                    else
                    {
                        delik = 4;
                    }
            
            
                    $.ajax({
                        url:"islem.php",
                        method:"POST",
                        data:{action:"hesapla", "cam_tipi":cam_tipi ,"kumlama":kumlama, "suluk":suluk, "profil_tipi":profil_tipi, "yuzde":yuzde,"kulp":kulp,"cam-olcu":cam_olcu, "delik":delik, "h_secim":h_secim},
                        success:function(data)
                        {
                            alert(data);
                            $("#sonuc").html(data);
                        }
                    });
                });

                $('#siparisver').click(function(){
                    var action = 'siparisver';
                    var adsoyad = $("#adsoyad").val();
                    var telefon = $("#telefon").val();
                    var adres = $("#adres").val();
                    var tarih = $("#tarih").val();


                    var urun = $("#cam-olcu").val()+"/";
                    urun += $("#sbt-cam").val()+"/";
                    urun += $("#hrkt-cam").val()+"/";
                    urun += $("#yuzde").val()+"/";
                    urun += $("#kumlama").val()+"/sabit_hareketli_1";
                    var fiyat1 = $("#sonuc").html();



                    $.ajax({
                        url:"islem.php",
                        method:"POST",
                        data:{action:action,adsoyad:adsoyad,telefon:telefon,adres:adres,tarih:tarih,urun:urun,fiyat:fiyat1},
                        success:function(data){
                            if(data =="eklenemedi")
                                alert("Sipariş Verilemedi");
                            else
                                alert(data);
                        }
                    });
                });
            });
        //sayafanın yükleme işlemleri bittiğinde çalıştırılacak olan kodlar için kullanılır
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
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">DUŞAPARK.COM</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user1-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                                    <a href="../" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DUŞAKABİNLER</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../aksesuarlar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>AKSESUARLAR</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../cambalkon" class="nav-link">
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
                                    <a href="../" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fiyat Sorgula</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../kategoriislemleri" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategoriler</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Duşakabinler</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ürünler</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
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

            <div class="container">

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3"></div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-6 inputlar">

                        <table class="w-100">
                            <tr>
                                <td>H Seçiniz</td>
                                <td>
                                    <select class="form-control" id="h-secim">
                                        <option>Cam Tipi Seçiniz...</option>
                                        <option value="180">180</option>
                                        <option value="190">190</option>
                                        <option value="192">192</option>
                                    </select>
                                </td>
                            </tr>
                            <td>Cam Tipi</td>
                            <td>
                                <select class="form-control" id="cam-tipi">
                                    <option>Cam Tipi Seçiniz...</option>
                                    <option value="14">4mm Şeffaf</option>
                                    <option value="15">4mm Bombeli</option>
                                    <option value="16">5mm Şeffaf</option>
                                    <option value="17">5mm Bombeli</option>
                                    <option value="18">5mm Füme</option>
                                    <option value="19">6mm Şeffaf</option>
                                    <option value="20">6mm Bombeli</option>
                                    <option value="21">6mm Füme</option>
                                </select>
                            </td>
                            <tr><!-- satır -->
                                <td>CAM ÖLÇÜSÜ : </td>
                                <td><input type="number" class="form-control" id="cam-olcu"></td>
                            </tr>
                            <td>Profil Tipi</td>
                            <td>
                                <select class="form-control" id="profil-tipi">
                                    <option>Profil Tipi Seçiniz...</option>
                                    <option value="30">Parlak Profil</option>
                                    <option value="31">Siyah Profil</option>
                                    <option value="32">Sarı (Gold) Profil</option>
                                    <option value="33">Parlak Kimyasal Profil</option>
                                    <option value="34">Bakır Profil</option>
                                </select>
                            </td>
                            <tr>
                                <td>Kulp</td>
                                <td>
                                    <select class="form-control" id="kulp">
                                        <option>Kulp Seçiniz...</option>
                                        <option value="3">Topuz Kulp Plastik</option>
                                        <option value="4">Topuz Kulp Metal</option>
                                        <option value="5">Ay Kulp Plastik</option>
                                        <option value="6">Ay Kulp Metal</option>
                                    </select>
                                </td>
                            </tr>
                            <td>Suluk</td>
                            <td>
                                <select class="form-control" id="suluk">
                                    <option>Suluk Seçiniz...</option>
                                    <option value="10">Şeffaf Suluk</option>
                                    <option value="11">Siyah Suluk</option>
                                    <option value="12">Sarı Suluk</option>
                                </select>
                            </td>
                            <tr><!-- satır -->
                                <td>KAR YÜZDESİ : </td>
                                <td><input type="number" class="form-control" id="yuzde" value="0"></td>
                            </tr>
                            <tr><!-- satır -->
                                <td>KUMLAMA : </td>
                                <td><input type="number" class="form-control" id="kumlama" value="0"></td>
                            </tr>
                            <tr><!-- satır -->
                                <td><b>Toplam Fiyat = <span id="sonuc"></span>  ₺</b></td>
                                <td class="text-right"><div class="btn btn-danger" id="hesapla">HESAPLA</div></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3"></div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                        <input type="text" class="form-control" id="adsoyad" placeholder="Ad Soyad/Ünvan Giriniz">
                        <input type="text" class="form-control" id="telefon" placeholder="Telefon giriniz">
                        <input type="text" class="form-control" id="adres" placeholder="adres giriniz">
                        <input type="date" class="form-control" id="tarih" placeholder="tarih giriniz">
                        <div class="text-right w-100">
                            <div class="btn btn-danger" id="siparisver">SİPRARİŞ VER</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ./wrapper -->
    </div>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery
    <script src="plugins/jquery/jquery.min.js"></script> -->
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