<?php 

/*fpdf  kütüphanesini çağırma*/
require('tfpdf.php');

class myPDF extends tFPDF{



	function header(){
		//Arka Plan Fotoğrafı 
		$this->Image('form32.png',0,0,212);

	}	

	function headerTableFikirHak($customRadio){
		



		$this->Text(56,247,"Öğrenci");
		$this->Text(143,247,"Tez Danışmanı");



		
		

		if($customRadio=="1")
		{
			$this->Image('icon.png',28.7,136,9,9);
		}
		
		if ($customRadio=="2") {
			$this->Image('icon.png',28.7,147,9,9);
		}

		if($customRadio=="3"){
			$this->Image('icon.png',28.7,156.8,9,9);
		}

		if ($customRadio=="4") {
			$this->Image('icon.png',28.7,166.6,9,9);
		}

		if ($customRadio=="5") {
			$this->Image('icon.png',28.7,176.1,9,9);
		}



	
	}
}


/*Değişkenler*/


$customRadio= $_POST["customRadio"];





$pdf=new myPDF('p','mm','A4');
$pdf->AddPage();
$pdf->AddFont('DejaVu', '', 'DejaVuSerif-Bold.ttf', true);
$pdf->SetFont('DejaVu','',8);



//Fonksiyonları Çağırma
$pdf->headerTableFikirHak($customRadio);

//ÇIKIŞ
$pdf->Output();

?>