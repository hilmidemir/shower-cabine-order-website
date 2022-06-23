<?php 
	session_start();
	require_once("../database/database.php");

	if ($_POST["user"] != "" && $_POST["password"] != "") 						
	{
		$querysentence="SELECT * FROM `users`";
		$query1 = mysqli_query($baglanti, $querysentence);
		while($sonuc = mysqli_fetch_row($query1))
		{
			if($sonuc[1] == $_POST["user"])
			{
				if($sonuc[3] == $_POST["password"])
				{
					$_SESSION["go"] = "True";  					
					header("Refresh:1;url=../");
				}
				else
				{
					echo "Şifre Yanlış...";
					header("Refresh:1;url=../girisyap/");
				}
			}
			else
			{
				echo $_POST["user"]  ." : " .$sonuc[1] . " : " . "Kullanıcı Adı yanlış...";
				header("Refresh:1;../girisyap/");
			}
		}
	}



?>