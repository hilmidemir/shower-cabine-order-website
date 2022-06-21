<?php 

if(isset($_POST["action"]))
{
	require_once("database/database.php");
	
	if($_POST["action"] == "dusakabingetir")
	{
		$sorgucumlesi = 'SELECT * FROM `dusakabinler` WHERE `kategori`='.$_POST["id"];
		$sorgu = mysqli_query($baglanti,$sorgucumlesi);

		$kategoriler = "" ;
		$sayac=1;
		while($sonuc = mysqli_fetch_row($sorgu))
		{
			
			$kategoriler .= '<div class="col-6 col-sm-4 col-lg-2 text-center">
			<div class="position-relative">
			<img src="dist/img/'.$sonuc[1].'.jpg" alt="duşapark" class="img-fluid">
			<div class="card-title w-100 text-center" style="font-size:15px;">
			<b>'.$sonuc[1].'</b>
			</div>
			<a href="fiyatsorgula/'.$sonuc[3].'" class="btn btn-outline-dark text-center">
			<b>Fiyat Sorgula</b>
			</a>
			</div>
			</div>';
			$sayac++;
		}
		echo $kategoriler;
	}
	else if($_POST["action"] == "kategoriekle")
	{
		session_start();

		$sorgucumlesi = 'INSERT INTO `dusakabinler`(`katadi`) VALUES ("'.$_POST["yenikategoriadi"].'")';
		$sorgu = mysqli_query($baglanti,$sorgucumlesi);

		if($sorgu == 0)
		{
			echo "Veritabanına kaydedilmedi...";
		}
		else
		{
			$sorgucumlesi = 'SELECT * FROM `dusakabinler`';
			$sorgu = mysqli_query($baglanti,$sorgucumlesi);

			$kategoriler = "" ;
			$sayac=1;
			while($sonuc = mysqli_fetch_row($sorgu))
			{
				
				$kategoriler .= '<tr class="bg-light">
				<td>'.$sayac.'.</td>
				<td>'.$sonuc[1].'</td>
				<td style="text-align: right;">
				<span style="width: 100px;" class="btn badge bg-primary kategoriguncelle" id="katgun'.$sonuc[0].'">Güncelle</span>
				<span style="width: 100px;" id="katsil'.$sonuc[0].'" class="btn badge bg-danger kategorisil">Sil</span>
				</td>
				</tr>';
				$sayac++;
			}
			echo $kategoriler;
		}
	}
	else if($_POST["action"] == "kategorisil")
	{
		
		$sorgucumlesi = 'DELETE FROM `kategoriler` WHERE `id` = '. $_POST["id"];
		$sorgu = mysqli_query($baglanti,$sorgucumlesi);

		if($sorgu == 0)
		{
			echo "Silinemedi";
		}
		else
			{// kategori silindiyse burası çalışacak
				$sorgucumlesi = 'SELECT * FROM `kategoriler`';
				$sorgu = mysqli_query($baglanti,$sorgucumlesi);

				$kategoriler = "" ;
				$sayac=1;
				while($sonuc = mysqli_fetch_row($sorgu))
				{
					
					$kategoriler .= '<tr class="bg-light">
					<td>'.$sayac.'.</td>
					<td>'.$sonuc[1].'</td>
					<td style="text-align: right;">
					<span style="width: 100px;" class="btn badge bg-primary kategoriguncelle" id="katgun'.$sonuc[0].'">Güncelle</span>
					<span style="width: 100px;" id="katsil'.$sonuc[0].'" class="btn badge bg-danger kategorisil">Sil</span>
					</td>
					</tr>';
					$sayac++;
				}
				echo $kategoriler;
			}
		}
		else if($_POST["action"] == "kategoriguncelle")
		{
			$sorgucumlesi ='UPDATE `dusakabinler` SET `katadi`="'.$_POST["yenikategoriadi"].'" WHERE `id`=' .$_POST["id"];
			$sorgu = mysqli_query($baglanti,$sorgucumlesi);
			if($sorgu == 0)
			{
				echo "Veritabanına kaydedilmedi...";
			}
			else
			{
				$sorgucumlesi = 'SELECT * FROM `dusakabinler`';
				$sorgu = mysqli_query($baglanti,$sorgucumlesi);

				$kategoriler = "" ;
				$sayac=1;
				while($sonuc = mysqli_fetch_row($sorgu))
				{
					
					$kategoriler .= '<tr class="bg-light">
					<td>'.$sayac.'.</td>
					<td>'.$sonuc[1].'</td>
					<td style="text-align: right;">
					<span style="width: 100px;" class="btn badge bg-primary kategoriguncelle" id="katgun'.$sonuc[0].'">Güncelle</span>
					<span style="width: 100px;" id="katsil'.$sonuc[0].'" class="btn badge bg-danger kategorisil">Sil</span>
					</td>
					</tr>';
					$sayac++;
				}
				echo $kategoriler;
			}
		}
	}

/*



*/
?>