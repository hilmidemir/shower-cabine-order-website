<?php 
    
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>GİRİŞ</title>

    <style type="text/css">
      .secim
      {
            width: 100%;
            text-align: center;
            margin-top: 25px;
            border: none;
            border-radius: 25px;
            border-bottom: 2px darkred solid;
            outline: none;
      }
    </style>

  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top: 200px; margin-left: 500px;">
                <h1 align="text-center ">GİRİŞ</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-4"></div> 
            <div class="col-12 col-sm-12 col-lg-4" style="margin-top: 50px;">
                <div class="row text-center" >
                    <form method="POST" action="giris.php">
                        <input type="text" class="secim" name="user" placeholder="Kullanıcı Adı Giriniz">
                        <input type="password" class="secim" name="password" placeholder="Şifrenizi Giriniz">
                        <button class="btn btn-danger secim">GİR</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>