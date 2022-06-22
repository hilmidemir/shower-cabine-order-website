<?php 
if(isset($_POST["action"]))
{
	require_once("../../database/database.php");
	if($_POST["action"] == "hesapla")
	{
		
		$sorgucumlesi = "SELECT * FROM `urunler`";
		$sorgu = mysqli_query($baglanti,$sorgucumlesi);

		$fiyatlar = array();
		$i = 0;

		while($sonuc = mysqli_fetch_row($sorgu))
		{	
			$fiyatlar[$i] = $sonuc[3];
			$i++;
		}

			// AKSESUARLAR

		$rulman = 8 * $fiyatlar[0];
		$stoper = 8 * $fiyatlar[1];
		$kulp = 4 * $fiyatlar[$_POST["kulp"]];
		$miknatis = 1 * $fiyatlar[7];
		$suluk = 2 * $fiyatlar[$_POST["suluk"]];
		$camtutucu = 4 * $fiyatlar[28];
		//$delik = $_POST["delik"] * $fiyatlar[29];

		$aksesuar_fiyat = $rulman + $stoper + $kulp + $miknatis + $suluk + $camtutucu;
		//$result = $aksesuar_fiyat;
		echo "aksesuar_fiyat : ".$aksesuar_fiyat;

		
			// AKSESUARLAR
		$sbt_cam=1.728;
		$hrkt_cam=1.775;

			// CAM
		if ($_POST["h_secim"] == '190')
		{
			$sbt_cam=1.828;
			$hrkt_cam=1.875;
		}
		else if ($_POST["h_secim"] == '192')
		{
			$sbt_cam=1.928;
			$hrkt_cam=1.975;
		}
		else
		{
			$sbt_cam=1.728;
			$hrkt_cam=1.775;
		}

		
		$sabit_en = $_POST["cam-olcu"] - 20; //180	sabit_en = 1.728	hareketli_en=1.775
		$sabit_en = $sabit_en / 400;
		$hareketli_en = $sabit_en + 0.09;
		
		$s_camm2 = $sabit_en * $sbt_cam * $fiyatlar[$_POST["s_cam_tipi"]];
		$h_camm2 = $hareketli_en * $hrkt_cam * $fiyatlar[$_POST["h_cam_tipi"]];
		
		$cam_fiyat = ($s_camm2 + $h_camm2)*2; // buraya indexten çektiğimiz cam tipine göre fiyat uygulaması yapıyoruz
        echo "<br>sabit m22 : " . $s_camm2;
        echo "<br>hareketli m22 : " . $h_camm2;
        echo "<br>toplam cam fiyat : " . $cam_fiyat;
        $delik = $_POST["delik"] * $fiyatlar[29];

		$toplam_cam_fiyat = $delik + $cam_fiyat;
			// CAM
		echo "<br>toplam_cam_fiyat : ".$toplam_cam_fiyat;

			// PROFİL

		if($sbt_cam > $hrkt_cam)
		{
			echo "sabit cam : " . $sbt_cam ."<br>";
			$karsilastirma = strval($sbt_cam);
			//echo "karsilastirma1 : " . $karsilastirma ."<br>";
		}
		else
		{
			echo "hrkt_cam : " . $hrkt_cam ."<br>";
			$karsilastirma = strval($hrkt_cam);
			//echo "karsilastirma2 : " . $karsilastirma ."<br>";
		}

		$number = number_format($sbt_cam, 1, '.', '');
		//echo "number : " . $number ."<br>";
		$str = strval($number);
		//echo "str : " . $str ."<br>";
		if(explode(".",$karsilastirma)[1][0] == explode(".",$str)[1][0])
		{
			$number += 0.1 ;
		}
		
		//echo "number : " . $number ."<br>";


		$duvardikmesi = $number * $fiyatlar[35] * $fiyatlar[$_POST["profil_tipi"]];
		//echo "duvar dikmesi: ". $duvardikmesi."<br>";

		$uprofil = $number * $fiyatlar[36] * $fiyatlar[$_POST["profil_tipi"]];
		//echo "u profil: ". $uprofil."<br>";

		$icray = ($_POST["cam-olcu"] - 10) / 100 ;
		$icray = $icray * $fiyatlar[37] *  $fiyatlar[$_POST["profil_tipi"]];
		//echo "iç ray dikmesi: ". $icray."<br>";

		$profil_toplam = $duvardikmesi + $uprofil + $icray ;
		//echo " profil_toplam : ".$profil_toplam."<br>";

		$profil_fiyat = $profil_toplam * 2;// * $fiyatlar[$_POST["profil_tipi"]];
		//echo 'profil fiytat : '.$profil_fiyat."<br>";

			// PROFİL

			// SON HESAP

		$toplam = $aksesuar_fiyat + $toplam_cam_fiyat + $profil_fiyat ;

		$iscilik = $toplam * $_POST["yuzde"] / 100 ;
		$kumlama = $_POST["kumlama"];

		$result = $iscilik + $kumlama + $toplam;

			// SON HESAP

		
		echo $result;
	}
	else if($_POST["action"] == "siparisver")
	{
		$sorgucumlesi = 'INSERT INTO `siparisler`(`adsoyad`, `telefon`, `adres`, `tarih`, `urun`, `fiyat`, `durum`) VALUES ("'.$_POST["adsoyad"].'","'.$_POST["telefon"].'","'.$_POST["adres"].'","'.$_POST["tarih"].'","'.$_POST["urun"].'",'.$_POST["fiyat"].',1)';

		$sorgu = mysqli_query($baglanti,$sorgucumlesi);

		if($sorgu == 0)
		{
			echo $sorgucumlesi ." : <br>";
			die("eklenemedi");
		}else
		echo "sipariş verildi";
	}

}

?>