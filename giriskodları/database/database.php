<?php 

	$servername = "localhost";
	$database = "emeltek";
	$username = "root";
	$password = "";

	$baglanti = mysqli_connect($servername,$username,$password,$database);
	$baglanti->set_charset("utf8");

	if (!$baglanti) 
	{
		die("Veri Bağlantıları : " . mysqli_connect_error());
	}

 ?>