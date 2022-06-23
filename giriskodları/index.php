<?php
    //Session kulanabilmek için kullanılır
    //session_start();
    //$session_adi_degiskeni = $_SESSION["session_adi"];


    //kullanıcı girişi yapılmış mı gibi işlemler için şart kullanımı
    //if(false)
    //{
    //    header("Refresh: sayfaAçmaSüresi; url=gidilecek_olan_sayfa_yolu");
    //}

    require_once("database/database.php");
    //tüm yazıları getirmek için kullanılır
    //$sorgucumlesi = "SELECT * FROM `tabloadı`";
    //$sorgu1 = mysqli_query($baglanti, $sorgucumlesi);
    //while( $sonuc=mysqli_fetch_row($sorgu1) )
    //{
    //    //$sonuc[0]
    //}
?>

<?php 

    require_once("database/database.php");

 ?>




<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>ADMİN</title>

        <style type="text/css">

        </style>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">EMELTEK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Anasayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Envanter Listesi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Yetkilendirme </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bildirimler </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İletişim </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-4">
                    
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <p class="card-text">Some text inside the third card</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>