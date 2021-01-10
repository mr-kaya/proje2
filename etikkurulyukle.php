<?php
error_reporting(0);
$etikKurul = $_POST['etikKurul'];
$ad= $_POST['ad'];
$soyad=$_POST['soyad'];
$ogrenciNo=$_POST['ogrenciNo'];
if (isset($etikKurul)){
	$dir = 'kullanici_resimler/'; //dosyalarin kaydedileceği klasor yolu
	$size_limit = 50000000000; //dosya boyutu en fazla kac KB boyutunda olmali
	$extension = explode('/',explode(';',$etikKurul)[0])[1]; //dosya uzantisi
	$rasgele=rand(9,999);
		$image = file_get_contents($etikKurul); //veriyi oku
		if (strlen($image) < $size_limit){ //dosya boyutu uygunsa
			$file_name = $dir."etikKurul".$rasgele.'.'.$extension; //
			$create_file = touch($file_name); //belirtilen klasöre belirtilen isimde icerigi bos bir dosya oluştur
			if ($create_file){ //dosya olusturma basarili ise
				$create_image = file_put_contents($file_name,$image); //olusturulan dosyanin içerigine resim verilerini isle, ekle
				if ($create_image){ //eklendiyse
					$result = 'success';
				}else{
					$result = 'error';
				}
			}else{
				$result = 'error message: Dosya oluşturulamadı';
			}
		}else{
			$result = 'error message: Dosya boyutu '.$size_limit.' byte\'dan küçük olmalı';
		}

}
$gonder="etikKurul".$rasgele.'.'.$extension;
$returnArray = [
"etikKurul"=> $gonder,
];
echo json_encode($returnArray);  //json formatında veriyi geri gönder
?>





