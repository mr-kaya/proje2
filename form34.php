<?php 

/*fpdf  kütüphanesini çağırma*/
require('tfpdf.php');

class myPDF extends tFPDF{



	function header(){
		//Arka Plan Fotoğrafı 
		$this->Image('form34.png',0,0,212);

	}	

	function headerTableOgrenci($ogrenciadi,$ogrencino,$ogrencisoyadi,$anabilimdali,$kayittarihi,$tezdanismani){
		
		$this->Text(46,37.5,$ogrenciadi." ".$ogrencisoyadi);
		$this->Text(46,42.5,$anabilimdali);
		$this->Text(167,38,$ogrencino);
		$this->Text(46,47.5,$kayittarihi);
		$this->Text(46,52.5,$tezdanismani);
	}

	function headerTableTezKonusu($turkcetezbasligi,$ingilizcetezbasligi,$anahtarkelime,$tezyazimdili,$calismatarzi,$endustrialaniA,$endustrialaniB,$savunmavekonudegisikligi,$etikkurulizni,$verikullanimiizni,$kurumkurulusizni,$fikirhaksahipliğibeyani){
		

		//TÜRKÇE Tez Başlık
		$this->Text(46,70,$turkcetezbasligi);

		//Anahtar Kelimeler(En fazla 5 adet)
		$this->Text(46,84.5,$anahtarkelime);
		
		//İngilizce Tez Başlık
		$this->Text(46,98.5,$ingilizcetezbasligi);

		//Tez Yazım Dili
		if ($tezyazimdili=="0") {
			$this->Image('icon.png',61.8,104,7,7);
		}
		if ($tezyazimdili=="1") {
			$this->Image('icon.png',88,104,7,7);		
		}
		


		//Endüstri Alanı (A,B)
		$this->Text(50,121,$endustrialaniA);
		$this->Text(122,121,$endustrialaniB);



		//Çalışma Tarzı
		if ($calismatarzi=="0") {
			$this->Image('icon.png',61.7,110,7,7);
		}
		elseif ($calismatarzi=="1") {
			$this->Image('icon.png',87.7,110,7,7);
		}
		elseif ($calismatarzi=="2") {
			$this->Image('icon.png',117.5,110,7,7);
		}
		elseif ($calismatarzi=="3") {
			$this->Image('icon.png',168.4,110,7,7);
		}
		elseif ($calismatarzi=="4") {
			$this->Image('icon.png',197.5,110,7,7);
		}
		else{
			$this->Text("",0,0);
		}

		//EKLER

		if ($etikkurulizni=="0") {
			$this->Image('icon.png',114.5,122.2,7,7);
		}

		else{

			$this->Image('icon.png',148.5,122.2,7,7);
		}

		if ($verikullanimiizni=="0") {
			$this->Image('icon.png',114.5,127.5,7,7);
		}

		else{

			$this->Image('icon.png',148.5,127.5,7,7);
		}

		if ($kurumkurulusizni=="0") {
			$this->Image('icon.png',114.5,132.8,7,7);
		}

		else{

			$this->Image('icon.png',148.5,132.8,7,7);
		}

		if ($fikirhaksahipliğibeyani=="0") {
			$this->Image('icon.png',138.2,142.7,7,7);
		}

		else{

			$this->Image('icon.png',161.2,142.7,7,7);
		}



		

		//İLK SAVUNMA - İKİNCİ SAVUNMA - KONU DEĞİŞİKLİĞİ
		if ($savunmavekonudegisikligi=="0") {
			$this->Image('icon.png',77.6,149.8,7,7);
		}
		if ($savunmavekonudegisikligi=="1") {
			$this->Image('icon.png',120.5,149.8,7,7);
		}
		if ($savunmavekonudegisikligi=="2") {
			$this->Image('icon.png',174.5,149.8,7,7);
		}


	}

	function headerTableTikToplanti($toplantiyeri,$toplantitarihi,$toplantisaati,$retkabul,$oybirligicheck,$oybirligi,$retgerekcesi,$degistirilentezbasligi){
		
		$this->Text(36,168.5,$toplantitarihi);
		$this->Text(69.9,168.5,$toplantisaati); 
		$this->Text(93,168.5,$toplantiyeri); 
		$this->Text(48,223,$retgerekcesi); 
		$this->Text(48,232,$degistirilentezbasligi); 


		if ($retkabul=="1") {
			$this->Image('icon.png',181.2,186.7,7,7);
		}

		if ($retkabul=="2") {
			$this->Image('icon.png',181.2,192.3,7,7);
		}

		if ($retkabul=="3") {
			$this->Image('icon.png',181.2,197.8,7,7);
		}
		
		if ($retkabul=="4") {
			$this->Image('icon.png',181.2,203.5,7,7);
		}

		if ($oybirligicheck=="1") {
			$this->Image('icon.png',57.8,210.2,7,7);
		}


		
		$x = $this->GetX();
		$y = $this->GetY();
		$push_right = 0;
		$this->ln(106.2);
		$this->Cell(117);
		$this->SetFont('DejaVu','',8);
		$this->SetXY($x+8.7, $y+201.5);
		$this->MultiCell(140,5,$oybirligi,0, "C");
		
			



	}

}


/*Değişkenler*/

//Ogrenci Bilgileri
$ogrenciadi= $_POST["ogrenciadi"];
$ogrencisoyadi= $_POST["ogrencisoyadi"];
$ogrencino= $_POST["ogrencino"];
$kayittarihi= $_POST["kayittarihi"];
$tezdanismani= $_POST["tezdanismani"];
$anabilimdali= $_POST["anabilimdali"];

//Tez Konusu Bilgileri
$turkcetezbasligi=$_POST["turkcetezbasligi"];
$anahtarkelime=$_POST["anahtarkelime"];
$ingilizcetezbasligi=$_POST["ingilizcetezbasligi"];
$tezyazimdili=$_POST["tezyazimdili"];
$calismatarzi=$_POST["calismatarzi"];
$endustrialaniA=$_POST["endustrialaniA"];
$endustrialaniB=$_POST["endustrialaniB"];
$savunmavekonudegisikligi=$_POST["savunmavekonudegisikligi"];
$etikkurulizni=$_POST["etikkurulizni"];
$verikullanimiizni=$_POST["verikullanimiizni"];
$kurumkurulusizni=$_POST["kurumkurulusizni"];
$fikirhaksahipliğibeyani=$_POST["fikirhaksahipliğibeyani"];


//Tik Toplantı Tutanağı
$toplantiyeri=$_POST["toplantiyeri"];
$toplantitarihi=$_POST["toplantitarihi"];
$toplantisaati=$_POST["toplantisaati"];
$retkabul=$_POST["retkabul"];
$oybirligicheck=$_POST["oybirligicheck"];
$retgerekcesi=$_POST["retgerekcesi"];
$oybirligi=$_POST["oybirligi"];
$degistirilentezbasligi=$_POST["degistirilentezbasligi"];
//Pdf Sayfasının Formatı
$pdf=new myPDF('p','mm','A4');

//Yeni Bir PDF Sayfası Oluştur 
$pdf->AddPage();
$pdf->AddFont('DejaVu', '', 'DejaVuSerif.ttf', true);

$pdf->SetFont('DejaVu','',8);

//Fonksiyonları Çağırma
$pdf->headerTableOgrenci($ogrenciadi,$ogrencino,$ogrencisoyadi,$anabilimdali,$kayittarihi,$tezdanismani);
$pdf->headerTableTezKonusu($turkcetezbasligi,$ingilizcetezbasligi,$anahtarkelime,$tezyazimdili,$calismatarzi,$endustrialaniA,$endustrialaniB,$savunmavekonudegisikligi,$etikkurulizni,$verikullanimiizni,$kurumkurulusizni,$fikirhaksahipliğibeyani);
$pdf->headerTableTikToplanti($toplantiyeri,$toplantitarihi,$toplantisaati,$retkabul,$oybirligicheck,$oybirligi,$retgerekcesi,$degistirilentezbasligi);

//ÇIKIŞ
$pdf->Output();

?>