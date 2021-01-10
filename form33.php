<?php 

/*fpdf  kütüphanesini çağırma*/
require('tfpdf.php');



class myPDF extends tFPDF{



	function header(){
		//Arka Plan Fotoğrafı 
		$this->Image('form33.png',0,0,212);

	}	

	function headerTableToplantiBilgileri($abdbaskaniadi,$abdbaskanisoyadi,$abdbaskaniUnvani,$toplantiyeri,$toplantitarihi,$toplantisaati,$ogrenciadi,$ogrencisoyadi,$ogrencino,$ogrencikayittarihi,$ogrenciprogrami,$birinciogretimuyesininadi,$ikinciogretimuyesininadi,$ucuncuogretimuyesininadi,$birinciogretimuyesininkurumu,$ikinciogretimuyesininkurumu,$ucuncuogretimuyesininkurumu,$birinciogretimuyesininsoyadi,$ikinciogretimuyesininsoyadi,$ucuncuogretimuyesininsoyadi,$birinciogretimuyesininepostasi,$ikinciogretimuyesininepostasi,$ucuncuogretimuyesininepostasi,$birinciogretimuyesininunvani,$ikinciogretimuyesininunvani,$ucuncuogretimuyesininunvani,$tikuyeleritarih1,$tikuyeleritarih2,$tikuyeleritarih3,$turkcetezbasligi,$ingilizcetezbasligi,$dilSecim){

		$str = $toplantitarihi;
		$deneme=explode("-",$str);
		$toplantitarihi=$deneme[2]."-".$deneme[1]."-".$deneme[0];

				$str = $ogrencikayittarihi;
		$deneme=explode("-",$str);
		$ogrencikayittarihi=$deneme[2]."-".$deneme[1]."-".$deneme[0];

				$str = $tikuyeleritarih1;
		$deneme=explode("-",$str);
		$tikuyeleritarih1=$deneme[2]."-".$deneme[1]."-".$deneme[0];

				$str = $tikuyeleritarih2;
		$deneme=explode("-",$str);
		$tikuyeleritarih2=$deneme[2]."-".$deneme[1]."-".$deneme[0];

				$str = $tikuyeleritarih3;
		$deneme=explode("-",$str);
		$tikuyeleritarih3=$deneme[2]."-".$deneme[1]."-".$deneme[0];




		


		$this->Text(56.5,107.5,$toplantitarihi);
		$this->Text(92,107.5,$toplantisaati);

		$this->Text(56.5,120,$turkcetezbasligi);
		$this->Text(92,120,$ingilizcetezbasligi);

		
		$x = $this->GetX();
		$y = $this->GetY();
		$push_right = 0;
		$this->ln(106.2);
		$this->Cell(117);
		$this->MultiCell(65,4,$abdbaskaniadi." ".$abdbaskanisoyadi,0, "C");
		$this->SetXY($x+130, $y+102);
		$this->MultiCell(40,5,$abdbaskaniUnvani,0, "C");
		
		$this->SetFont('DejaVu','',9.5);
		$this->SetXY($x+30, $y+25);
		$this->MultiCell(140,5,"Metalurji ve Malzeme Mühendisliği Teknolojileri". " ANABİLİM DALI BAŞKANLIĞI",0, "C");
		$this->SetFont('DejaVu','',8);


		$toplantiyeriuzunluk=strlen($toplantiyeri);
		$toplantiyeri = ucwords(strtolower($toplantiyeri));
		
		if($toplantiyeriuzunluk>31 && $toplantiyeriuzunluk<62){


			$this->SetXY($x+50, $y+105.5);
			$this->MultiCell(50,3,$toplantiyeri,0, "C");
		}
		elseif($toplantiyeriuzunluk==31){

			$this->SetXY($x+45, $y+106.5);
			$this->MultiCell(64,3,$toplantiyeri,0, "L");
		}

		elseif($toplantiyeriuzunluk==62){

			$this->SetXY($x+44, $y+106);
			$this->MultiCell(62,3,$toplantiyeri,0, "C");

		}

		elseif($toplantiyeriuzunluk>62){

			$this->SetXY($x+44, $y+104);
			$this->MultiCell(62,3,$toplantiyeri,0, "C");


		}

		else {


			$this->SetXY($x+45, $y+108);
			$this->MultiCell(61,2,$toplantiyeri,0, "L");


		}


		//TezIzlemeKomitesiUyeleri

		//Öğretim Üyesi 1,2,3
		$unvan=$birinciogretimuyesininunvani;
		$unvan2=$ikinciogretimuyesininunvani;
		$unvan3=$ucuncuogretimuyesininunvani;

		$adSoyad=$birinciogretimuyesininadi." ".$birinciogretimuyesininsoyadi;
		$adSoyad2=$ikinciogretimuyesininadi." ".$ikinciogretimuyesininsoyadi;
		$adSoyad3=$ucuncuogretimuyesininadi." ".$ucuncuogretimuyesininsoyadi;

		$kurum=$birinciogretimuyesininkurumu;
		$kurum2=$ikinciogretimuyesininkurumu;
		$kurum3=$ucuncuogretimuyesininkurumu;

		$mail=$birinciogretimuyesininepostasi;
		$mail2=$ikinciogretimuyesininepostasi;
		$mail3=$ucuncuogretimuyesininepostasi;

		$tarih=$tikuyeleritarih1;
		$tarih2=$tikuyeleritarih2;
		$tarih3=$tikuyeleritarih3;

		$ogretimUyesi=$unvan.$adSoyad;
		$ogretimUyesi2=$unvan2.$adSoyad2;
		$ogretimUyesi3=$unvan3.$adSoyad3;

		$ogretimUyesiUzunluk=strlen($ogretimUyesi);
		$ogretimUyesi = ucwords(strtolower($ogretimUyesi));	

		$ogretimUyesiUzunluk2=strlen($ogretimUyesi2);
		$ogretimUyesi2 = ucwords(strtolower($ogretimUyesi2));	

		$ogretimUyesiUzunluk3=strlen($ogretimUyesi3);
		$ogretimUyesi3 = ucwords(strtolower($ogretimUyesi3));	

		

		if ($ogretimUyesiUzunluk>0 || $ogretimUyesi2>0 || $ogretimUyesi3>0 ) {

			//Öğretim Üyesi1
			
			$this->SetXY($x+10, $y+191.5);
			$this->MultiCell(63,2,$unvan,0, "C");
			$this->SetXY($x+10, $y+195);
			$this->MultiCell(63,3,$adSoyad,0, "C");
			$this->SetXY($x+75, $y+194);
			$this->MultiCell(50,3,$kurum,0, "C");
			$this->SetXY($x+125, $y+192);
			$this->MultiCell(65,3,$mail,0, "C");
			$this->SetXY($x+136, $y+200.6);
			$this->MultiCell(22,2,$tarih,0, "L");

			//öğretim üyesi2
			$this->SetXY($x+10, $y+207);
			$this->MultiCell(63,2,$unvan2,0, "C");
			$this->SetXY($x+10, $y+211);
			$this->MultiCell(63,3,$adSoyad2,0, "C");
			$this->SetXY($x+75, $y+208);
			$this->MultiCell(50,3,$kurum2,0, "C");
			$this->SetXY($x+125, $y+206);
			$this->MultiCell(65,3,$mail2,0, "C");
			$this->SetXY($x+136, $y+214.6);
			$this->MultiCell(22,2,$tarih2,0, "L");

			//öğretim üyesi3
			$this->SetXY($x+10, $y+221);
			$this->MultiCell(63,2,$unvan3,0, "C");
			$this->SetXY($x+10, $y+225);
			$this->MultiCell(63,3,$adSoyad3,0, "C");
			$this->SetXY($x+75, $y+222);
			$this->MultiCell(50,3,$kurum3,0, "C");
			$this->SetXY($x+125, $y+220);
			$this->MultiCell(65,3,$mail3,0, "C");
			$this->SetXY($x+136, $y+228.7);
			$this->MultiCell(22,2,$tarih3,0, "L");


		}

		else{
			
		}




		/*------------ÖĞRENCİ BİLGİLERİ---------*/
		$this->Text(55,138,$ogrenciadi." ".$ogrencisoyadi);
		$this->Text(150,138,$ogrencino);
		$this->Text(55,145,$ogrencikayittarihi);
		
echo $turkcetezbasligi;
		//Öğrenci Programı
		if ($ogrenciprogrami=="Doktora") {
			$this->Image('icon.png',54.2,147.2,7,7);
		}
		elseif ($ogrenciprogrami=="Bütünleşik Doktora") {
			$this->Image('icon.png',80.7,147.2,7,7);		
		}
		else{

		}

		if ($dilSecim=="tr") {
			$this->Image('icon.png',54.2,147.2,7,7);

		}

if($dilSecim=="eng")
{
	$this->Image('icon.png',54.2,147.2,7,7);
}
		



		
		
	}
}


/*Değişkenler*/

//Toplantı Bilgileri
$toplantiyeri= $_POST["toplantiyeri"];
$toplantitarihi= $_POST["toplantitarihi"];
$toplantisaati= $_POST["toplantisaati"];


//AnaBilim Dalı Başkanı Bilgileri
$abdbaskaniadi= $_POST["abdbaskaniadi"];
$abdbaskanisoyadi= $_POST["abdbaskanisoyadi"];
$abdbaskaniUnvani= $_POST["abdbaskaniUnvani"];

//Öğrenci Bilgileri
$ogrenciadi=$_POST["ogrenciadi"];
$ogrencisoyadi=$_POST["ogrencisoyadi"];
$ogrencino=$_POST["ogrencino"];
$ogrencikayittarihi=$_POST["ogrencikayittarihi"];
$ogrenciprogrami=$_POST["ogrenciprogrami"];
$turkcetezbasligi=$_POST["turkcetezbasligi"];
$ingilizcetezbasligi=$_POST["ingilizcetezbasligi"];
$dilSecim=$_POST["dilSecim"];




//Tez İzleme Komitesi Üyeleri
$birinciogretimuyesininadi=$_POST["birinciogretimuyesininadi"];
$ikinciogretimuyesininadi=$_POST["ikinciogretimuyesininadi"];
$ucuncuogretimuyesininadi=$_POST["ucuncuogretimuyesininadi"];
$birinciogretimuyesininkurumu=$_POST["birinciogretimuyesininkurumu"];
$ikinciogretimuyesininkurumu=$_POST["ikinciogretimuyesininkurumu"];
$ucuncuogretimuyesininkurumu=$_POST["ucuncuogretimuyesininkurumu"];
$birinciogretimuyesininsoyadi=$_POST["birinciogretimuyesininsoyadi"];
$ikinciogretimuyesininsoyadi=$_POST["ikinciogretimuyesininsoyadi"];
$ucuncuogretimuyesininsoyadi=$_POST["ucuncuogretimuyesininsoyadi"];
$birinciogretimuyesininepostasi=$_POST["birinciogretimuyesininepostasi"];
$ikinciogretimuyesininepostasi=$_POST["ikinciogretimuyesininepostasi"];
$ucuncuogretimuyesininepostasi=$_POST["ucuncuogretimuyesininepostasi"];
$birinciogretimuyesininunvani=$_POST["birinciogretimuyesininunvani"];
$ikinciogretimuyesininunvani=$_POST["ikinciogretimuyesininunvani"];
$ucuncuogretimuyesininunvani=$_POST["ucuncuogretimuyesininunvani"];
$tikuyeleritarih1=$_POST["tikuyeleritarih1"];
$tikuyeleritarih2=$_POST["tikuyeleritarih2"];
$tikuyeleritarih3=$_POST["tikuyeleritarih3"];



$pdf=new myPDF('p','mm','A4');
$pdf->AddPage();
$pdf->AddFont('DejaVu', '', 'DejaVuSerif.ttf', true);

$pdf->SetFont('DejaVu','',10);


//Fonksiyonları Çağırma
$pdf->headerTableToplantiBilgileri($abdbaskaniadi,$abdbaskanisoyadi,$abdbaskaniUnvani,$toplantiyeri,$toplantitarihi,$toplantisaati,$ogrenciadi,$ogrencisoyadi,$ogrencino,$ogrencikayittarihi,$ogrenciprogrami,$birinciogretimuyesininadi,$ikinciogretimuyesininadi,$ucuncuogretimuyesininadi,$birinciogretimuyesininkurumu,$ikinciogretimuyesininkurumu,$ucuncuogretimuyesininkurumu,$birinciogretimuyesininsoyadi,$ikinciogretimuyesininsoyadi,$ucuncuogretimuyesininsoyadi,$birinciogretimuyesininepostasi,$ikinciogretimuyesininepostasi,$ucuncuogretimuyesininepostasi,$birinciogretimuyesininunvani,$ikinciogretimuyesininunvani,$ucuncuogretimuyesininunvani,$tikuyeleritarih1,$tikuyeleritarih2,$tikuyeleritarih3,$turkcetezbasligi,$ingilizcetezbasligi,$dilSecim);

//ÇIKIŞ
$pdf->Output();

?>