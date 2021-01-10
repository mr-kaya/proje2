<?php 

/*fpdf  kütüphanesini çağırma*/
require('tfpdf.php');


class myPDF extends tFPDF{
	function arkaPlan1($ogrenciadi,$ogrencisoyad,$ogrencinumara,$anabilimdali,$bilimdali,$danismanad,$danismansoyad,$radio16,$tezAmac,$tezTanim,$tezHipotez,$tezMotivasyon,$tezTurkce,$tezIngilizce){
		$this->AddFont('DejaVu','','DejaVuSerif.ttf',true);
		$this->SetFont('DejaVu','',10);
		//arka plan
		$this->Image('form31-1.png',0,0,212);

		//Ad Soyad
		$this->Text(52,38,$ogrenciadi." ".$ogrencisoyad);
		
		//öğrenci no
		$this->Text(167,38,$ogrencinumara);
		
		//Anabilim Dalı
		$this->Text(52,44,$anabilimdali);
		
		//Bilim Dalı
		$this->Text(167,48.5,$bilimdali);
		
		//Tez Danışmanı
		$this->Text(52,50.5,$danismanad." ".$danismansoyad);
		

		if ($radio16=="0") {
		$this->Image('icon.png',56.55,52.5,7,7);
		}
		elseif ($radio16=="1") {
		$this->Image('icon.png',101.5,52.5,7,7);		
		}
		
		else{

		$this->Image('icon.png',145.2,52.5,7,7);
				
		}

		//TEZ BAŞLIĞI


		$this->Text(52,64,$tezTurkce);
		$this->Text(52,70,$tezIngilizce);
	





		//TEZİN AMACI



		




        






		//!!!!!!710 HARF SINIRI KOYULACAK!!!!!

		$x = $this->GetX();
		$y = $this->GetY();
		$push_right = 0;
		$this->SetXY($x+9,$y+79);
		$this->MultiCell(183,3.5,$tezAmac,0,'L',0);


//Çalışma Gerekçisi
		//Promlem Tanımı
		//!!!!639 HARF SINIRI KOYULACAK!!!!!
		$this->SetXY($x+9,$y+144);
		$this->MultiCell(183,3.37,$tezTanim,0,'L',0);
		//Hipotezler
		//!!!!!639 HARF SINIRI KOYULACAK!!!!
		$this->SetXY($x+9,$y+178);
		$this->MultiCell(183,3.37,$tezHipotez,0,'L',0);
		//Yapılabilirlik
		//!!!!781 HARF SINIRI KOYULACAK!!!!!
		$this->SetXY($x+9,$y+212);
		$this->MultiCell(183,3.37,$tezMotivasyon,0,'L',0);



	}

	////Konu ve Kapsam
	function arkaPlan2($konuDetay,$literatur,$kaynak1,$kaynak1Tarih,$kaynak2,$kaynak2Tarih,$kaynak3,$kaynak3Tarih,$kaynak4,$kaynak4Tarih,$kaynak5,$kaynak5Tarih,$kaynak6,$kaynak6Tarih,$kaynak7,$kaynak7Tarih,$kaynak8,$kaynak8Tarih,$kaynak9,$kaynak9Tarih,$kaynak10,$kaynak10Tarih,$kaynak11,$kaynak11Tarih,$kaynak12,$kaynak12Tarih,$kaynak13,$kaynak13Tarih,$kaynak14,$kaynak14Tarih,$kaynak15,$kaynak15Tarih){


		  
    $orgDate1 = $kaynak1Tarih;  
    $newDate1 = date("d-m-Y", strtotime($orgDate1)); 
    $orgDate2 = $kaynak2Tarih;  
    $newDate2 = date("d-m-Y", strtotime($orgDate2)); 
    $orgDate3 = $kaynak3Tarih;  
    $newDate3 = date("d-m-Y", strtotime($orgDate3)); 
    $orgDate4 = $kaynak4Tarih;  
    $newDate4 = date("d-m-Y", strtotime($orgDate4)); 
    $orgDate5 = $kaynak5Tarih;  
    $newDate5 = date("d-m-Y", strtotime($orgDate5)); 
    $orgDate6 = $kaynak6Tarih;  
    $newDate6 = date("d-m-Y", strtotime($orgDate6)); 
    $orgDate7 = $kaynak7Tarih;  
    $newDate7 = date("d-m-Y", strtotime($orgDate7)); 
    $orgDate8 = $kaynak8Tarih;  
    $newDate8 = date("d-m-Y", strtotime($orgDate8)); 
    $orgDate9 = $kaynak9Tarih;  
    $newDate9 = date("d-m-Y", strtotime($orgDate9)); 
    $orgDate10 = $kaynak10Tarih;  
    $newDate10 = date("d-m-Y", strtotime($orgDate10)); 
    $orgDate11= $kaynak11Tarih;  
    $newDate11 = date("d-m-Y", strtotime($orgDate11)); 
    $orgDate12= $kaynak12Tarih;  
    $newDate12 = date("d-m-Y", strtotime($orgDate12)); 
    $orgDate13 = $kaynak13Tarih;  
    $newDate13 = date("d-m-Y", strtotime($orgDate13)); 
    $orgDate14 = $kaynak14Tarih;  
    $newDate14 = date("d-m-Y", strtotime($orgDate14)); 
    $orgDate15 = $kaynak15Tarih;  
    $newDate15 = date("d-m-Y", strtotime($orgDate15)); 
    






		$this->Image('form31-2.png',0,0,212);
	    //KONU DETAYI
	    //!!!!1065 HARF SINIRI KOYULACAK!!!!
		$x = $this->GetX();
		$y = $this->GetY();
		$push_right = 0;
		$this->SetXY($x+8.2,$y+43.6);
		$this->MultiCell(183,3.37,$konuDetay,0,'L',0);

		//LİTERATÜR ÖZETİ
		//!!!994 HARF SINIRI KOYULACAK!!!!
		$this->SetXY($x+8.2,$y+98);
		$this->MultiCell(183,3.37,$literatur,0,'L',0);

		$this->AddFont('DejaVu','','DejaVuSerif.ttf',true);
		$this->SetFont('DejaVu','',7.5);
		
		//Kaynaklar
		$this->SetXY($x+9,$y+157);
		$this->MultiCell(183,3,"1-".$kaynak1."(".$newDate1.")",0,'L',0);

		$this->SetXY($x+9,$y+163.5);
		$this->MultiCell(183,3,"2-".$kaynak2."(".$newDate2.")",0,'L',0);

		$this->SetXY($x+9,$y+170);
		$this->MultiCell(183,3,"3-".$kaynak3."(".$newDate3.")",0,'L',0);

		$this->SetXY($x+9,$y+176.5);
		$this->MultiCell(183,3,"4-".$kaynak4."(".$newDate4.")",0,'L',0);

		$this->SetXY($x+9,$y+183);
		$this->MultiCell(183,3,"5-".$kaynak5."(".$newDate5.")",0,'L',0);

		$this->SetXY($x+9,$y+189.5);
		$this->MultiCell(183,3,"6-".$kaynak6."(".$newDate6.")",0,'L',0);

		$this->SetXY($x+9,$y+196);
		$this->MultiCell(183,3,"7-".$kaynak7."(".$newDate7.")",0,'L',0);

		$this->SetXY($x+9,$y+202.5);
		$this->MultiCell(183,3,"8-".$kaynak8."(".$newDate8.")",0,'L',0);

		$this->SetXY($x+9,$y+209);
		$this->MultiCell(183,3,"9-".$kaynak9."(".$newDate9.")",0,'L',0);

		$this->SetXY($x+9,$y+215.5);
		$this->MultiCell(183,3,"10-".$kaynak10."(".$newDate10.")",0,'L',0);

		$this->SetXY($x+9,$y+222);
		$this->MultiCell(183,3,"11-".$kaynak11."(".$newDate11.")",0,'L',0);

		$this->SetXY($x+9,$y+228.5);
		$this->MultiCell(183,3,"12-".$kaynak12."(".$newDate12.")",0,'L',0);

		$this->SetXY($x+9,$y+235);
		$this->MultiCell(183,3,"13-".$kaynak13."(".$newDate13.")",0,'L',0);

		$this->SetXY($x+9,$y+241.5);
		$this->MultiCell(183,3,"14-".$kaynak14."(".$newDate14.")",0,'L',0);

		$this->SetXY($x+9,$y+248);
		$this->MultiCell(183,3,"15-".$kaynak15."(".$newDate15.")",0,'L',0);

		


	}


	function arkaPlan3($yontem,$Ozgun,$Yaygin,$Kurum){

		$this->Image('form31-3.png',0,0,212);
		//YÖNTEM
		//!!!!1222 HARF SINIRI KOYULACAK!!!!!!
		$x = $this->GetX();
		$y = $this->GetY();
		$push_right = 0;
		$this->SetXY($x+9,$y+31);
		$this->MultiCell(183,3.37,$yontem,0,'L',0);

		//Özgün Değer
		//!!!!1034 HARF SINIRI KOYULACAK!!!!
		$this->SetXY($x+9,$y+105);
		$this->MultiCell(183,3.37,$Ozgun,0,'L',0);

		//Yaygın Etki
		//!!!1034 HARF SINIRI KOYULACAK!!!!
		$this->SetXY($x+9,$y+169);
		$this->MultiCell(183,3.37,$Yaygin,0,'L',0);

		//Kurum Dışına Bağımlılık
		//!!!!1034 HARF SINIRI KOYULACAK!!!
		$this->SetXY($x+9,$y+229);
		$this->MultiCell(183,3.37,$Kurum,0,'L',0);

	}
	function arkaPlan4($radio,$radio1,$radio2,$radio4,$radio5,$radio6,$radio7,$radio8,$radio9,$radio10,$radio11,$radio12,$radio13,$radio14,$radio15,$calismaLab,$calismaAlan,$destekleyenKurum,$destek,$tezDisiplin,$ticariUrun,$patentalinmasi,$ikinciDanisman,$aciklama,$baslama,$bitis){
		//arka plan fotoğrafı
		$this->Image('form31-4.png',0,0,212);



		//1.iş paketi
		$this->SetXY($x+28,$y+42.85);
		$this->MultiCell(145,2,$aciklama,0,'L',0);
		$this->SetXY($x+175,$y+42);
		$this->MultiCell(26,2,$baslama,0,'C',0);
		$this->SetXY($x+175,$y+45);
		$this->MultiCell(26,2,$bitis,0,'C',0);

		/*//2.iş paketi
		$this->SetXY($x+28,$y+53);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+53);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//3.iş paketi
		$this->SetXY($x+28,$y+61);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+61);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//4.iş paketi
		$this->SetXY($x+28,$y+69);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+69);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//5.iş paketi
		$this->SetXY($x+28,$y+77);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+77);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//6.iş paketi
		$this->SetXY($x+28,$y+85);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+85);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//7.iş paketi
		$this->SetXY($x+28,$y+93);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+93);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//8.iş paketi
		$this->SetXY($x+28,$y+101);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+101);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//9.iş paketi
		$this->SetXY($x+28,$y+109);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+109);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);

		//10.iş paketi
		$this->SetXY($x+28,$y+117);
		$this->MultiCell(145,3,"AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA",0,'L',0);
		$this->SetXY($x+175,$y+117);
		$this->MultiCell(26,6,"1 - 4",0,'C',0);*/






		//İstatik amaçlı sorular -1-
		if ($radio=="1") {
		$this->Image('icon.png',123,148.2,7,7);
		}
		else{
		$this->Image('icon.png',175.3,148.2,7,7);		
		}


		//İstatik amaçlı sorular -2-
		
		if ($radio1=="1") {
		$this->Image('icon.png',123,154.7,7,7);
		}
		else {
		$this->Image('icon.png',175.3,154.7,7,7);		
		}
		

		//İstatik amaçlı sorular -3-
		
		if ($radio2=="1") {
		$this->Image('icon.png',123,161.3,7,7);
		$this->Text(138.8,166.6,"  ".$calismaLab);
		}
		else {
		$this->Image('icon.png',175.3,161.3,7,7);		
		}
		

		//İstatik amaçlı sorular -4-
		
		if ($radio4=="1") {
		$this->Image('icon.png',123,167.8,7,7);
		}
		else {
		$this->Image('icon.png',175.3,167.8,7,7);		
		}
		


		//İstatik amaçlı sorular -5-
		
		if ($radio5=="1") {
		$this->Image('icon.png',123,174.3,7,7);
		$this->Text(138,179.6,"   ".$destek);
		}
		else {
		$this->Image('icon.png',175.3,174.3,7,7);		
		}


		//İstatik amaçlı sorular -6-
		if ($radio6=="1") {
		$this->Image('icon.png',123,180.8,7,7);
		}
		else  {
		$this->Image('icon.png',175.3,180.8,7,7);		
		}
		

		//İstatik amaçlı sorular -7-
		
		if ($radio7=="1") {
		$this->Image('icon.png',123,187.3,7,7);
		}
		else  {
		$this->Image('icon.png',175.3,187.3,7,7);		
		}


		//İstatik amaçlı sorular -8-
		
		if ($radio8=="1") {
		$this->Image('icon.png',123,194.1,7,7);
		$this->Text(138,199.4,"   ".$ticariUrun);
		}
		else {
		$this->Image('icon.png',175.3,194.1,7,7);		
		}

		//İstatik amaçlı sorular -9-


		if ($radio9=="1") {
		$this->Image('icon.png',123,200.7,7,7);
		$this->Text(138,206,"   ".$patentalinmasi);
		}
		else {
		$this->Image('icon.png',175.3,200.6,7,7);		
		}

		//İstatik amaçlı sorular -10-
		
		if ($radio10=="1") {
		$this->Image('icon.png',123,207.3,7,7);
		}
		else  {
		$this->Image('icon.png',175.3,207.3,7,7);		
		}

		//İstatik amaçlı sorular -11-
		
		if ($radio11=="1") {
		$this->Image('icon.png',123,213.9,7,7);
		}
		else  {
		$this->Image('icon.png',175.3,213.9,7,7);		
		}

		//İstatik amaçlı sorular -12-


		if ($radio12=="1") {
		$this->Image('icon.png',123,220.5,7,7);
		$this->Text(138,225.8,"   ".$tezDisiplin);
		}
		else {
		$this->Image('icon.png',175.3,220.5,7,7);		
		}

		//İstatik amaçlı sorular -13-


		if ($radio13=="1") {
		$this->Image('icon.png',123,227.1,7,7);
		$this->Text(138,232.4,"   ".$ikinciDanisman);
		}
		else {
		$this->Image('icon.png',175.3,227.1,7,7);		
		}

		//İstatik amaçlı sorular -14-


		if ($radio14=="0") {
		$this->Image('icon.png',123,233.7,7,7);
		}
		elseif ($radio14=="1") {
		$this->Image('icon.png',140,233.7,7,7);		
		}
		elseif ($radio14=="2") {
		$this->Image('icon.png',155.6,233.6,7,7);
		}
		else {
		$this->Image('icon.png',175.3,233.7,7,7);
		}
		


		//İstatik amaçlı sorular -15-
		

		$this->Text(110,245.61,$destekleyenKurum);
		if ($radio15=="1") {
		
		$this->Image('icon.png',157.9,241,7,7);
		}
		else {
		$this->Image('icon.png',175.25,241,7,7);		
		}
		

		//İstatik amaçlı sorular -16-
		

		$this->Text(113,254,$calismaAlan);















	}
	function arkaPlan5(){

		$this->Image('form31-5.png',0,0,212);

	}


}


//sayfa1

$ogrenciadi=$_POST["ogrenciadi"];
$ogrencisoyad=$_POST["ogrencisoyad"];
$ogrencinumara=$_POST["ogrencinumara"];
$bilimdali=$_POST["bilimdali"];
$anabilimdali=$_POST["anabilimdali"];
$danismanad=$_POST["danismanad"];
$danismansoyad=$_POST["danismansoyad"];
$radio16=$_POST["radio16"];
$tezAmac=$_POST["tezAmac"];
$tezTanim=$_POST["tezTanim"];
$tezHipotez=$_POST["tezHipotez"];
$tezMotivasyon=$_POST["tezMotivasyon"];
$tezTurkce=$_POST["tezTurkce"];
$tezIngilizce=$_POST["tezIngilizce"];

//sayfa2

$konuDetay=$_POST["konuDetay"];
$literatur=$_POST["literatur"];
$kaynak1=$_POST["kaynak1"];
$kaynak1Tarih=$_POST["kaynak1Tarih"];
$kaynak2=$_POST["kaynak2"];
$kaynak2Tarih=$_POST["kaynak2Tarih"];
$kaynak3=$_POST["kaynak3"];
$kaynak3Tarih=$_POST["kaynak3Tarih"];
$kaynak4=$_POST["kaynak4"];
$kaynak4Tarih=$_POST["kaynak4Tarih"];
$kaynak5=$_POST["kaynak5"];
$kaynak5Tarih=$_POST["kaynak5Tarih"];
$kaynak6=$_POST["kaynak6"];
$kaynak6Tarih=$_POST["kaynak6Tarih"];
$kaynak7=$_POST["kaynak7"];
$kaynak7Tarih=$_POST["kaynak7Tarih"];
$kaynak8=$_POST["kaynak8"];
$kaynak8Tarih=$_POST["kaynak8Tarih"];
$kaynak9=$_POST["kaynak9"];
$kaynak9Tarih=$_POST["kaynak9Tarih"];
$kaynak10=$_POST["kaynak10"];
$kaynak10Tarih=$_POST["kaynak10Tarih"];
$kaynak11=$_POST["kaynak11"];
$kaynak11Tarih=$_POST["kaynak11Tarih"];
$kaynak12=$_POST["kaynak12"];
$kaynak12Tarih=$_POST["kaynak12Tarih"];
$kaynak13=$_POST["kaynak13"];
$kaynak13Tarih=$_POST["kaynak13Tarih"];
$kaynak14=$_POST["kaynak14"];
$kaynak14Tarih=$_POST["kaynak14Tarih"];
$kaynak15=$_POST["kaynak15"];
$kaynak15Tarih=$_POST["kaynak15Tarih"];

//sayfa3

$yontem=$_POST["yontem"];
$Ozgun=$_POST["Ozgun"];
$Yaygin=$_POST["Yaygin"];
$Kurum=$_POST["Kurum"];


//sayfa4

$aciklama="";
$baslama="";
$bitis="";
$x = 0;

while($x <= 30) {
if (isset($_POST["aciklama".$x])) {
	$aciklama=$aciklama."\n\n".$_POST["aciklama".$x]."\n\n";

}
if (isset($_POST["baslama".$x])) {
	
		$str = $_POST["baslama".$x];
		$deneme=explode("-",$str);
		$toplantitarihi=$deneme[2]."-".$deneme[1]."-".$deneme[0];
	$baslama=$baslama."\n\n".$toplantitarihi."\n\n";
	
}
if (isset($_POST["bitis".$x])) {
	
		$str1 = $_POST["bitis".$x];
		$deneme1=explode("-",$str1);
		$toplantitarihi1=$deneme1[2]."-".$deneme1[1]."-".$deneme1[0];
	$bitis=$bitis."\n\n".$toplantitarihi1."\n\n";
}

  $x++;
}



$radio=$_POST["radio"];
$radio1=$_POST["radio1"];
$radio2=$_POST["radio2"];
$radio4=$_POST["radio4"];
$radio5=$_POST["radio5"];
$radio6=$_POST["radio6"];
$radio7=$_POST["radio7"];
$radio8=$_POST["radio8"];
$radio9=$_POST["radio9"];
$radio10=$_POST["radio10"];
$radio11=$_POST["radio11"];
$radio12=$_POST["radio12"];
$radio13=$_POST["radio13"];
$radio14=$_POST["radio14"];
$radio15=$_POST["radio15"];
$calismaLab=$_POST["calismaLab"];
$ticariUrun=$_POST["ticariUrun"];
$tezDisiplin=$_POST["tezDisiplin"];
$ikinciDanisman=$_POST["ikinciDanisman"];
$calismaAlan=$_POST["calismaAlan"];
$patentalinmasi=$_POST["patentalinmasi"];
$destek=$_POST["destek"];
$destekleyenKurum=$_POST["destekleyenKurum"];



$pdf=new myPDF();
$pdf->AddPage();
$pdf->arkaPlan1($ogrenciadi,$ogrencisoyad,$ogrencinumara,$anabilimdali,$bilimdali,$danismanad,$danismansoyad,$radio16,$tezAmac,$tezTanim,$tezHipotez,$tezMotivasyon,$tezTurkce,$tezIngilizce);
$pdf->AddPage();
$pdf->arkaPlan2($konuDetay,$literatur,$kaynak1,$kaynak1Tarih,$kaynak2,$kaynak2Tarih,$kaynak3,$kaynak3Tarih,$kaynak4,$kaynak4Tarih,$kaynak5,$kaynak5Tarih,$kaynak6,$kaynak6Tarih,$kaynak7,$kaynak7Tarih,$kaynak8,$kaynak8Tarih,$kaynak9,$kaynak9Tarih,$kaynak10,$kaynak10Tarih,$kaynak11,$kaynak11Tarih,$kaynak12,$kaynak12Tarih,$kaynak13,$kaynak13Tarih,$kaynak14,$kaynak14Tarih,$kaynak15,$kaynak15Tarih);
$pdf->AddPage();
$pdf->arkaPlan3($yontem,$Ozgun,$Yaygin,$Kurum);
$pdf->AddPage();
$pdf->arkaPlan4($radio,$radio1,$radio2,$radio4,$radio5,$radio6,$radio7,$radio8,$radio9,$radio10,$radio11,$radio12,$radio13,$radio14,$radio15,$calismaLab,$calismaAlan,$destekleyenKurum,$destek,$tezDisiplin,$ticariUrun,$patentalinmasi,$ikinciDanisman,$aciklama,$baslama,$bitis);
$pdf->AddPage();
$pdf->arkaPlan5();
//ÇIKIŞ

$pdf->AddFont('DejaVu','','DejaVuSerif.ttf',true);
$pdf->SetFont('DejaVu','',10);


$pdf->Output();

?>


