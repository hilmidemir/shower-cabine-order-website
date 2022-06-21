<?php 

if(isset($_POST["action"]))
{
	if ($_POST["action"] == 'urunekle')
	{
		if($_POST["urunkodu"] != "" && $_POST["urunadi"] != "" && $_POST["urunfiyat"] != "" &&  $_POST["urunturu"] != "" &&  $_POST["urunadet"] != "" )
		{
			require_once("../database/database.php");

			$sorgucumlesi = "SELECT * FROM `urunler`";

			$sorgu1 = mysqli_query($baglanti,$sorgucumlesi);

		$devam = "true"; // Başlangıçta aynı ürün kodu var mı diye kontrol ediyoruz.

		//urun kodunu var mı yok mu diye kontrol ediyoruz
		while($sonuc = mysqli_fetch_row($sorgu1))
		{
			if($sonuc[1] == $_POST["urunkodu"])
			{
				$devam = "false";
				break;
			}
		}
		//urun kodunu var mı yok mu diye kontrol ediyoruz


		if($devam == "true")
		{
			$sorgucumlesi = 'INSERT INTO `urunler`(`urun_kodu`, `urun_adi`, `urun_fiyat`, `urun_turu`, `urun_adet`, `fremiktari`) VALUES ("'.$_POST["urunkodu"].'", "'.$_POST["urunadi"].'", '.$_POST["urunfiyat"].', "'.$_POST["urunturu"].'", '.$_POST["urunadet"].', 0)';

			$sorgu = mysqli_query($baglanti,$sorgucumlesi);

			if($sorgu == 0)
			{
				echo "Eklenemedi...";
			}
			else
			{
				echo "Ürün Eklendi...";
			}
		}
		else
		{
			echo "Bu ürün kodu daha önceden kullanılmıştır...";
		}
	}
	else
	{
		echo "Lütfen boş alanları doldurunuz...";
	}
}
}
else
{
	header("Refresh:1;url=../");

}


?>