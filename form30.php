<?php 

/*fpdf  kütüphanesini çağırma*/
require('tfpdf.php');

class myPDF extends tFPDF{



	function header(){
		//Arka Plan Fotoğrafı 
		$this->Image('form30.png',0,0,212);

	}	

	function headerTableTezOneri($ad,$soyad,$ogrenciNo,$etikKurul,$veriKullanim,$kurumizin,$fikirHak,$danismanad,$danismansoyad,$calismatarzi,$anaBilimdali,$dilSecim,$oybirligi,$oybirligi1,$oybirligi2,$kabul,$bilimdali,$ilkteklifdegisiklik,$gerekce,$turkcetezbasligi,$anahtarkelimeler,$ingilizcetezbasligi,$endustrialaniA,$endustrialaniB,$ogrenciderstamamlama,$etikkurulizni,$verikullanimiizni,$kurumkurulusizni,$fikirhaksahipliğibeyani){

		$this->Text(48,98,$ad." ".$soyad);
		$this->Text(48,106,$ogrenciNo);
		$this->Text(48,112,$bilimdali);
		$this->Text(48,120.5,$danismanad." ".$danismansoyad);
		$this->Text(48,150,$turkcetezbasligi);
		$this->Text(48,176,$ingilizcetezbasligi);
		$this->Text(48,163,$anahtarkelimeler);
		$this->Text(53,198.3,$endustrialaniA);
		$this->Text(133,198.3,$endustrialaniB);
		

		if($ilkteklifdegisiklik=="1")
		{

			$this->Text(140,138.8,"(".$gerekce.")");
			$this->Image('icon.png',118,133.7,7,7);
		}

		else{
			$this->Image('icon.png',67.2,133.7,7,7);
		}

		
		if ($dilSecim=="tr") {
			$this->Image('icon.png',63,181.8,7,7);
		}

		if($dilSecim=="eng"){
			$this->Image('icon.png',88.7,181.8,7,7);
		}

		if ($calismatarzi=="0") {
			$this->Image('icon.png',63,187.5,7,7);
		}

		if ($calismatarzi=="1") {
			$this->Image('icon.png',88.7,187.5,7,7);
		}

		if ($calismatarzi=="2") {
			$this->Image('icon.png',118.35,187.5,7,7);
		}

		if ($calismatarzi=="3") {
			$this->Image('icon.png',168.1,187.5,7,7);
		}

		if ($calismatarzi=="4") {
			$this->Image('icon.png',197.3,187.5,7,7);
		}

		if ($kabul=="0") {
			$this->Image('icon.png',84.8,70.5,7,7);
		}

		if ($kabul=="1") {
			$this->Image('icon.png',84.8,77,7,7);
		}

		if ($oybirligi=="1") {
			$this->Image('icon.png',121.2,59.8,7,7);
		}

		if ($ogrenciderstamamlama=="0") {
			$this->Image('icon.png',108.9,240,7,7);
		}

		if ($ogrenciderstamamlama=="1") {
			$this->Image('icon.png',108.9,245.6,7,7);
		}




		$x = $this->GetX();
		$y = $this->GetY();
		$push_right = 0;
		$this->ln(106.2);
		$this->Cell(117);
		$this->SetFont('DejaVu','',9);
		$this->SetXY($x+30, $y+25);
		$this->MultiCell(140,5,$anaBilimdali. " ANABİLİM DALI BAŞKANLIĞI",0, "C");
		$this->SetFont('DejaVu','',8);
		$this->SetXY($x+71, $y+51.2);
		$this->MultiCell(140,5,$oybirligi1,0, "C");
		$this->SetXY($x+77, $y+51.2);
		$this->MultiCell(140,5,$oybirligi2,0, "C");


		if ($etikkurulizni=="0") {
			$this->Image('icon.png',103.2,199.5,7,7);
		}

		else{

			$this->Image('icon.png',140.2,199.5,7,7);
		}

		if ($verikullanimiizni=="0") {
			$this->Image('icon.png',103.2,206,7,7);
		}

		else{

			$this->Image('icon.png',140.2,206,7,7);
		}

		if ($kurumkurulusizni=="0") {
			$this->Image('icon.png',103.2,212,7,7);
		}

		else{

			$this->Image('icon.png',140.2,212,7,7);
		}

		if ($fikirhaksahipliğibeyani=="0") {
			$this->Image('icon.png',138.5,222.5,7,7);
		}

		else{

			$this->Image('icon.png',161.2,222.5,7,7);
		}




			
	}
}







/*Değişkenler*/

//FEN BİLİMLERİ ENSTİTÜSÜ MÜDÜRLÜĞÜNE
$kabul= $_POST["kabul"];
$oybirligi= $_POST["oybirligi"];
$oybirligi1= $_POST["oybirligi1"];
$oybirligi2= $_POST["oybirligi2"];



//Anabilim Dalı Bilgileri
$anaBilimdali= $_POST["anaBilimdali"];


//Öğrenci Bilgileri
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$ogrenciNo=$_POST["ogrenciNo"];
$bilimdali=$_POST["bilimdali"];
$danismanad=$_POST["danismanad"];
$danismansoyad=$_POST["danismansoyad"];



//Tez Konusu Bilgileri
$ilkteklifdegisiklik=$_POST["ilkteklifdegisiklik"];
$gerekce=$_POST["gerekce"];
$turkcetezbasligi=$_POST["turkcetezbasligi"];
$anahtarkelimeler=$_POST["anahtarkelimeler"];
$ingilizcetezbasligi=$_POST["ingilizcetezbasligi"];
$dilSecim=$_POST["dilSecim"];
$calismatarzi=$_POST["calismatarzi"];
$endustrialaniA=$_POST["endustrialaniA"];
$endustrialaniB=$_POST["endustrialaniB"];
$etikKurul=$_POST["etikKurul"];
$veriKullanim=$_POST["veriKullanim"];
$kurumizin=$_POST["kurumizin"];
$fikirHak=$_POST["fikirHak"];
$ogrenciderstamamlama=$_POST["ogrenciderstamamlama"];
//Ekler
$etikkurulizni=$_POST["etikkurulizni"];
$verikullanimiizni=$_POST["verikullanimiizni"];
$kurumkurulusizni=$_POST["kurumkurulusizni"];
$fikirhaksahipliğibeyani=$_POST["fikirhaksahipliğibeyani"];




$pdf=new myPDF('p','mm','A4');
$pdf->AddPage();
$pdf->AddFont('DejaVu', '', 'DejaVuSerif.ttf', true);

$pdf->SetFont('DejaVu','',8);


//Fonksiyonları Çağırma
$pdf->headerTableTezOneri($ad,$soyad,$ogrenciNo,$etikKurul,$veriKullanim,$kurumizin,$fikirHak,$danismanad,$danismansoyad,$calismatarzi,$anaBilimdali,$dilSecim,$oybirligi,$oybirligi1,$oybirligi2,$kabul,$bilimdali,$ilkteklifdegisiklik,$gerekce,$turkcetezbasligi,$anahtarkelimeler,$ingilizcetezbasligi,$endustrialaniA,$endustrialaniB,$ogrenciderstamamlama,$etikkurulizni,$verikullanimiizni,$kurumkurulusizni,$fikirhaksahipliğibeyani);

//ÇIKIŞ
$pdf->Output();

?>