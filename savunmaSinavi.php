<?php include 'header.php'; ?>
<?php include 'navigator.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<form action="form34.php"  target="_blank" method="POST" >
	
	
	<!-- ÖĞRENCİ BİLGİLERİ BİLGİLERİ-->
	
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Öğrenci Bilgileri</h4>
			</div>
		</div>
		
		<!-- ÖĞRENCİ NUMARASI,ADI SOYADI,ANABİLİM DALI,KAYIT TARİHİ,TEZ DANIŞMANI-->
		
		
		<div class="row">
			<div class="col-md-2 col-sm-12">
				<div class="form-group">
					<label class="col-form-label">Öğrenci Numarası</label>
				</div>
			</div>
			
			<div class="col-md-8 col-sm-12">
				<div class="form-group">
					<input name="ogrencino" id="ogrencino" type="number" placeholder="Lütfen Öğrenci Numarasını Giriniz" class="form-control" required>
				</div>
			</div>
			
			<div class="col-md-2 col-sm-12" align="Center">
				<div class="form-group">
					<button type="button" onclick="kontrolet()" class="btn btn-success">Kontrol Et</button>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Öğrenci Adı</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Öğrenci Adını Giriniz" type="text" name="ogrenciadi" required disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Öğrenci Soyadı</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Öğrenci Soyadını Giriniz" type="text" name="ogrencisoyadi" required disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Anabilim Dalı</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Anabilim Dalını Giriniz" type="text" name="anabilimdali" required disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Kayıt Tarihi</label>
			<div class="col-sm-12 col-md-10">
				<input type="date" class="form-control" placeholder="Lütfen Kayıt Tarihini Seçiniz" name="kayittarihi" required disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Tez Danışmanı</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Tez Danışmanını Giriniz" type="text" name="tezdanismani" required disabled="">
			</div>
		</div>
	</div>
	
	<!-- TEZ KONUSU BİLGİLERİ-->
	
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Tez Konusu Bilgileri</h4>
			</div>
		</div>
		<!-- TEZ BAŞLIKLARI,ANAHTAR KELİMELERİ,YAZIM DİLİ,ÇALIŞMA TARZI,ENDÜSTRİ ALANI ve SAVUNMASI-->
		
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Türkçe Tez Başlığı</label>
					<input type="text" name="turkcetezbasligi" id="turkcetezbasligi" class="form-control" placeholder="Tez Başlığını Giriniz" required disabled="">
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Anahtar Kelimeler</label>
					<input type="text" class="form-control" id="anahtarkelime" name="anahtarkelime" placeholder="Anahtar Kelimeleri Giriniz" required disabled>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>İngilizce Tez Başlığı</label>
					<input type="text" name="ingilizcetezbasligi" id="ingilizcetezbasligi" class="form-control" placeholder="Tez Başlığını Giriniz" required disabled="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Tez Yazım Dili</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio"  id="tezyazimdili1" name="tezyazimdili" value="0" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="tezyazimdili1">Türkçe</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="1" id="tezyazimdili2" name="tezyazimdili" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="tezyazimdili2" >İngilizce</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-sm-12">
				<div class="form-group">
					<label>Çalışma Tarzı</label>
					
				</div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="0" type="radio"  id="calismatarzi1" name="calismatarzi" class="custom-control-input" required disabled="">
					<label class="custom-control-label"  for="calismatarzi1">Deneysel</label>
				</div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="1" type="radio" id="calismatarzi2" name="calismatarzi" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="calismatarzi2">Teorik</label>
				</div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="2" type="radio" id="calismatarzi3" name="calismatarzi" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="calismatarzi3">Simülasyon</label>
				</div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="3" type="radio" id="calismatarzi4" name="calismatarzi" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="calismatarzi4">Sistem/Araç/Yazılım Geliştirme</label>
				</div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="4" type="radio" id="calismatarzi5" name="calismatarzi" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="calismatarzi5">Saha Analizi</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-sm-12">
				<div class="form-group">
					<label>Endüstri Alanı</label>
					
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="form-group">
					
					<input type="text" class="form-control" name="endustrialaniA" placeholder="A..." required disabled="">
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="form-group">
					
					<input type="text" class="form-control" name="endustrialaniB" placeholder="B..." required disabled="">
				</div>
			</div>
		</div>
		
		
	</div>
	
	<!--EKLER-->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Ekler</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Etik Kurul İzni</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="0" type="radio" id="etikkurulizni1" name="etikkurulizni" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="etikkurulizni1">Gerekmiyor</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="1" type="radio" id="etikkurulizni2" name="etikkurulizni" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="etikkurulizni2">Belge var</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Veri Kullanımı İzni</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="0" id="verikullanimiizni1" name="verikullanimiizni" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="verikullanimiizni1">Gerekmiyor</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input value="1" type="radio" value="1" id="verikullanimiizni2" name="verikullanimiizni" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="verikullanimiizni2">Belge var</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Kurum/Kuruluş İzni</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="0" id="kurumkurulusizni1" name="kurumkurulusizni" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="kurumkurulusizni1">Gerekmiyor</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="1" id="kurumkurulusizni2" name="kurumkurulusizni" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="kurumkurulusizni2">Belge var</label>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Fikir Hak Sahipliği Beyanı</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="0" id="fikirhaksahipliğibeyani1" name="fikirhaksahipliğibeyani" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="fikirhaksahipliğibeyani1">Gerekmiyor</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="1" id="fikirhaksahipliğibeyani2" name="fikirhaksahipliğibeyani" class="custom-control-input" required disabled="">
					<label class="custom-control-label" for="fikirhaksahipliğibeyani2">Belge var</label>
				</div>
			</div>
		</div>
	</div>
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4"></h4>
			</div>
		</div>
		<!-- TEZ BAŞLIKLARI,ANAHTAR KELİMELERİ,YAZIM DİLİ,ÇALIŞMA TARZI,ENDÜSTRİ ALANI ve SAVUNMASI-->
		
		
		
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio"  id="savunmavekonudegisikligi1"   name="savunmavekonudegisikligi" class="custom-control-input" value="0" required>
					<label class="custom-control-label" for="savunmavekonudegisikligi1">İLK SAVUNMA</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio"  id="savunmavekonudegisikligi2" name="savunmavekonudegisikligi" class="custom-control-input" value="1" required>
					<label class="custom-control-label" for="savunmavekonudegisikligi2">İKİNCİ SAVUNMA</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio"  id="savunmavekonudegisikligi3" name="savunmavekonudegisikligi" class="custom-control-input" value="2" required>
					<label class="custom-control-label" for="savunmavekonudegisikligi3">KONU DEĞİŞİKLİĞİ</label>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- TİK TOPLANTI TUTANAĞI-->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Tez İzleme Komitesi Toplantı Tutanağı</h4>
			</div>
		</div>
		<!-- TOPLANTI TARİHİ,SAATİ,YERİ ve KABUL VEYA REDDİ-->
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Toplantı Yeri</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Toplantı Yerini Giriniz" type="text" name="toplantiyeri" required disabled="">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Toplantı Tarihi</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Toplantı Tarihini Seçiniz" id="toplantitarihi" name="toplantitarihi" type="date" required disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Toplantı Saati</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Toplantı Saatini Seçiniz" name="toplantisaati" type="time" required disabled="">
			</div>
		</div>
		<div align="Center">
			<p><h5>FEN BİLİMLERİ ENSTİTÜSÜ MÜDÜRLÜĞÜNE</h5></p>
			<p>Yukarıda bilgileri verilen doktora öğrencisinin tez konusu önerisi aşağıda imzaları bulunan Komitemiz Üyelerince incelenmiş olup öğrencinin sözlü savunmasından sonra tez konusu önerisinin;</p>
		</div>
		<br><br>
		<div class="form-group">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input value="1" name="retkabul"type="radio"  class="custom-control-input" id="customCheck1" required>
						<label class="custom-control-label" for="customCheck1"><b>Mevcut haliyle KABULÜNE</b></label>
					</div>
					<div class="custom-control custom-radio mb-5">
						<input value="2" name="retkabul"type="radio" class="custom-control-input" id="customCheck2" required>
						<label class="custom-control-label" for="customCheck2"><b>Düzeltmeler yapıldıktan sonra KABULÜNE</b></label>
					</div>
					<div class="custom-control custom-radio mb-5">
						<input value="3" name="retkabul"type="radio" class="custom-control-input" id="customCheck3" required>
						<label class="custom-control-label" for="customCheck3"><b>Başlığı aşağıdaki şekilde değiştirilerek KABULÜNE</b></label>
					</div>
					<div class="custom-control custom-radio mb-5">
						<input value="4" name="retkabul" type="radio" class="custom-control-input" id="customCheck4" required>
						<label class="custom-control-label" for="customCheck4"><b>Aşağıda belirtilen gerekçe ile REDDİNE</b></label>
					</div>
				</div>
				
			</div>
			
			
			
			
			
		</div>
		<div>
			<div class="custom-control custom-checkbox mb-5" align="Center">
				<input  name="oybirligicheck" onclick="kontrol(value)" value="0" type="checkbox" class="custom-control-input" id="customCheck5">
				<label class="custom-control-label" for="customCheck5"><b>oybirliği/oyçokluğu(</b><input id="oybirligi" type="text" name="oybirligi" size="1" ><b>/3)</b><label></label> ile karar verilmiştir.</label>
			</div>
			
			
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="form-group">
					<label><b>RET Gerekçesi</b></label>
					<input name="retgerekcesi" type="text" placeholder="Lütfen Ret Gerekçesini Giriniz" class="form-control" required>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="form-group">
					<label><b>Değiştirilen Tez Başlığı</b></label>
					<input name="degistirilentezbasligi" type="text" placeholder="Lütfen Değiştirilen Tez Başlığını Giriniz" class="form-control" >
				</div>
			</div>
		</div>
		<div class="form-group" align="right">
			<button  type="submit" id="pdfkaydet34" name="pdfkaydet34" class="btn btn-danger">PDF</button>
			
			<button  type="button" id="verigonder" name="verigonder" class="btn btn-primary">Kaydet</button>
		</div>
	</div>
	<!--FOOTER-->
	<div class="footer-wrap pd-20 mb-20 card-box" style="background-color:white;">
		
		<a href="http://fbe.firat.edu.tr/" style=" text-decoration:none; color:black;"  >Fırat Üniversitesi - Fen Bilimleri Enstitüsü</a>
	</div>
</form>
<script>
var sayac=0;
var sayac2=0;
var sayac3=0;
var sayac4=0;
var sayac5=0;
var formAdi="form34";
function kontrol(value)
{
if(value==0)
{
value=1;
document.getElementById("customCheck5").value=value;
document.getElementById("oybirligi").disabled = true;
document.getElementById("oybirligi").value = "0";
}
else
{
value=0;
document.getElementById("customCheck5").value=value;
document.getElementById("oybirligi").disabled = false;
document.getElementById("oybirligi").value = "";
}
	}
</script>
<script>
	function kontrolet()
{
	//4536
	var kontrol=document.getElementById("ogrencino").value;
	$.getJSON("http://20.67.50.120:8000/form34?ogrencino="+kontrol,

		function(veri){
if(typeof(veri[0]) != "undefined")
{
	
		$("input[name=anabilimdali]").val("");
	$("input[name=turkcetezbasligi]").val("");
	$("input[name=anahtarkelime]").val("");
	$("input[name=ingilizcetezbasligi]").val("");
	$("input[name=endustrialaniA]").val("");
	$("input[name=endustrialaniB]").val("");
//33 den gelecek
	$("input[name=kayittarihi]").val("");
	$("input[name=toplantiyeri]").val("");
	$("input[name=toplantitarihi]").val("");
	$("input[name=toplantisaati]").val("");

			var anabilimdali=veri["5"];
			var turkcetezbasligi=veri["8"];
			var anahtarkelimeler=veri["9"];
			var ingilizcetezbasligi=veri["10"];
			var dilsecim=veri["11"];
			var calismatarzi=veri["12"];
			var endustrialaniA=veri["13"];
			var endustrialaniB=veri["14"];
			var etikkurul=veri["16"];
			var verikullanim=veri["18"];
			var kurumizin=veri["20"];
			var fikirbeyan=veri["22"];
			var kurulkarari=veri["24"];
	
if(dilsecim=="eng")
{
document.getElementById("tezyazimdili2").checked = true;
document.getElementById("tezyazimdili1").checked = false;
}
else
{
	document.getElementById("tezyazimdili2").checked = false;
document.getElementById("tezyazimdili1").checked = true;
}
if(calismatarzi==0)
{
document.getElementById("calismatarzi1").checked = true;
document.getElementById("calismatarzi2").checked = false;
document.getElementById("calismatarzi3").checked = false;
document.getElementById("calismatarzi4").checked = false;
document.getElementById("calismatarzi5").checked = false;
}
else if(calismatarzi==1)
{
document.getElementById("calismatarzi1").checked = false;
document.getElementById("calismatarzi2").checked = true;
document.getElementById("calismatarzi3").checked = false;
document.getElementById("calismatarzi4").checked = false;
document.getElementById("calismatarzi5").checked = false;
}
else if(calismatarzi==2)
{
document.getElementById("calismatarzi1").checked = false;
document.getElementById("calismatarzi2").checked = false;
document.getElementById("calismatarzi3").checked = true;
document.getElementById("calismatarzi4").checked = false;
document.getElementById("calismatarzi5").checked = false;
}
else if(calismatarzi==3)
{
document.getElementById("calismatarzi1").checked = false;
document.getElementById("calismatarzi2").checked = false;
document.getElementById("calismatarzi3").checked = false;
document.getElementById("calismatarzi4").checked = true;
document.getElementById("calismatarzi5").checked = false;
}
else
{
document.getElementById("calismatarzi1").checked = false;
document.getElementById("calismatarzi2").checked = false;
document.getElementById("calismatarzi3").checked = false;
document.getElementById("calismatarzi4").checked = false;
document.getElementById("calismatarzi5").checked = true;
}
if(etikkurul==0)
{
document.getElementById("etikkurulizni1").checked = true;
document.getElementById("etikkurulizni2").checked = false;
}
else
{
document.getElementById("etikkurulizni1").checked = false;
document.getElementById("etikkurulizni2").checked = true;
}

if(verikullanim==0)
{
document.getElementById("verikullanimiizni1").checked = true;
document.getElementById("verikullanimiizni2").checked = false;
}
else
{
document.getElementById("verikullanimiizni1").checked = false;
document.getElementById("verikullanimiizni2").checked = true;
}

if(kurumizin==0)
{
document.getElementById("kurumkurulusizni1").checked = true;
document.getElementById("kurumkurulusizni2").checked = false;
}
else
{
document.getElementById("kurumkurulusizni1").checked = false;
document.getElementById("kurumkurulusizni2").checked = true;
}

if(fikirbeyan==0)
{
document.getElementById("fikirhaksahipliğibeyani1").checked = true;
document.getElementById("fikirhaksahipliğibeyani2").checked = false;
}
else
{
document.getElementById("fikirhaksahipliğibeyani1").checked = false;
document.getElementById("fikirhaksahipliğibeyani2").checked = true;
}

	$("input[name=anabilimdali]").val(anabilimdali);
	$("input[name=turkcetezbasligi]").val(turkcetezbasligi);
	$("input[name=anahtarkelime]").val(anahtarkelimeler);
	$("input[name=ingilizcetezbasligi]").val(ingilizcetezbasligi);
	$("input[name=endustrialaniA]").val(endustrialaniA);
	$("input[name=endustrialaniB]").val(endustrialaniB);
//33 den gelecek
	$("input[name=kayittarihi]").val();
	$("input[name=toplantiyeri]").val();
	$("input[name=toplantitarihi]").val();
	$("input[name=toplantisaati]").val();}
	else
	{
		Swal.fire({
  icon: 'error',
  title: 'Hata',
  text: 'Öğrenci Bulunamadı',
  showConfirmButton: false,
})
	}
		});

$.getJSON("http://20.67.50.120:8000/ogrbilgi?ogrencino="+kontrol,
	function(veri){

if(typeof(veri[0]) != "undefined"){


		$("input[name=ogrenciadi]").val("");
	$("input[name=ogrencisoyadi]").val("");
		$("input[name=tezdanismani]").val("");

			var ogrenciadi=veri["1"];
			var ogrencisoyadi=veri["2"];
			var danismanad=veri["5"];
			var danismansoyad=veri["6"];

				$("input[name=ogrenciadi]").val(ogrenciadi);
	$("input[name=ogrencisoyadi]").val(ogrencisoyadi);
	$("input[name=tezdanismani]").val(danismanad+" "+danismansoyad);
}

else{Swal.fire({
  icon: 'error',
  title: 'Hata',
  text: 'Öğrenci Bulunamadı',
  showConfirmButton: false,
})}



})


$.getJSON("http://20.67.50.120:8000/form33?ogrencino="+kontrol,
	function(veri){

if(typeof(veri[0]) != "undefined"){
console.log(veri[0]);

		$("input[name=kayittarihi]").val("");
	$("input[name=toplantiyeri]").val("");
		$("input[name=toplantitarihi]").val("");
		$("input[name=toplantisaati]").val("");

		
			var toplantiyeri=veri["1"];
			var toplantitarihi=veri["2"];
			var toplantisaati=veri["3"];
			var kayittarihi=veri["26"];

				$("input[name=toplantiyeri]").val(toplantiyeri);
	$("input[name=toplantitarihi]").val(toplantitarihi);
	$("input[name=toplantisaati]").val(toplantisaati);
	$("input[name=kayittarihi]").val(kayittarihi);
}

else{Swal.fire({
  icon: 'error',
  title: 'Hata',
  text: 'Öğrenci Bulunamadı',
  showConfirmButton: false,
})}



})
			

	
}
$(document).ready(function(){
$("#verigonder").click(function(){
	var ogrencino=$("input[name=ogrencino]").val();
	var ogrenciadi=$("input[name=ogrenciadi]").val();
	var ogrencisoyadi=$("input[name=ogrencisoyadi]").val();
	var anabilimdali=$("input[name=anabilimdali]").val();
	var kayittarihi=$("input[name=kayittarihi]").val();
	var tezdanismani=$("input[name=tezdanismani]").val();
	var turkcetezbasligi=$("input[name=turkcetezbasligi]").val();
	var anahtarkelime=$("input[name=anahtarkelime]").val();
	var ingilizcetezbasligi=$("input[name=ingilizcetezbasligi]").val();
	var tezyazimdili=$("input[name=tezyazimdili]:checked").val();
	var calismatarzi=$("input[name=calismatarzi]:checked").val();
	var endustrialaniA=$("input[name=endustrialaniA]").val();
	var endustrialaniB=$("input[name=endustrialaniB]").val();
	var savunmavekonudegisikligi=$("input[name=savunmavekonudegisikligi]:checked").val();
	var etikkurulizni=$("input[name=etikkurulizni]:checked").val();
	var verikullanimiizni=$("input[name=verikullanimiizni]:checked").val();
	var tezkonusuveplani=$("input[name=tezkonusuveplani]:checked").val();
	var fikirhaksahipliğibeyani=$("input[name=fikirhaksahipliğibeyani]:checked").val();
	var toplantiyeri=$("input[name=toplantiyeri]").val();
	var toplantitarihi=$("input[name=toplantitarihi]").val();
	var toplantisaati=$("input[name=toplantisaati]").val();
	var retgerekcesi=$("input[name=retgerekcesi]").val();
	var oybirligi=$("input[name=oybirligi]").val();
	var oybirligicheck=$("input[name=oybirligicheck]").val();
	var degistirilentezbasligi=$("input[name=degistirilentezbasligi]").val();
	var customCheck2 = $("input[name=retkabul]:checked").val();
	var genel="";
	if(ogrencino==""||ogrencino==null||savunmavekonudegisikligi==""||savunmavekonudegisikligi==null||customCheck2==""||customCheck2==null||oybirligicheck==""||oybirligicheck==null||oybirligi==""||oybirligi==null||retgerekcesi==""||retgerekcesi==null||degistirilentezbasligi==""||degistirilentezbasligi==null)
	{
		if(ogrencino==""||ogrencino==null){
				genel=genel+"Öğrenci Numarasını Giriniz!";
				Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				})
		}
		if(savunmavekonudegisikligi==""||savunmavekonudegisikligi==null){
			genel=genel+"Savunma veya Konu Değişikliği Kısmını Doldurunuz!";
			Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				})
		}
		if (customCheck2==""||customCheck2==null||oybirligicheck==""||oybirligicheck==null||oybirligi==""||oybirligi==null||retgerekcesi==""||retgerekcesi==null||degistirilentezbasligi==""||degistirilentezbasligi==null) {
			genel=genel+"Toplantı Tutanağı Kısmındaki Tüm Alanları Doldurunuz!";
			Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				})
		}
	
		
		
	}

	else{
		var ogrencino=$("input[name=ogrencino]").val();
	var ogrenciadi=$("input[name=ogrenciadi]").val();
	var ogrencisoyadi=$("input[name=ogrencisoyadi]").val();
	var anabilimdali=$("input[name=anabilimdali]").val();
	var kayittarihi=$("input[name=kayittarihi]").val();
	var tezdanismani=$("input[name=tezdanismani]").val();
	var turkcetezbasligi=$("input[name=turkcetezbasligi]").val();
	var anahtarkelime=$("input[name=anahtarkelime]").val();
	var ingilizcetezbasligi=$("input[name=ingilizcetezbasligi]").val();
	var tezyazimdili=$("input[name=tezyazimdili]:checked").val();
	var calismatarzi=$("input[name=calismatarzi]:checked").val();
	var endustrialaniA=$("input[name=endustrialaniA]").val();
	var endustrialaniB=$("input[name=endustrialaniB]").val();
	var savunmavekonudegisikligi=$("input[name=savunmavekonudegisikligi]:checked").val();
	var etikkurulizni=$("input[name=etikkurulizni]:checked").val();
	var verikullanimiizni=$("input[name=verikullanimiizni]:checked").val();
	var tezkonusuveplani=$("input[name=tezkonusuveplani]:checked").val();
	var fikirhaksahipliğibeyani=$("input[name=fikirhaksahipliğibeyani]:checked").val();
	var toplantiyeri=$("input[name=toplantiyeri]").val();
	var toplantitarihi=$("input[name=toplantitarihi]").val();
	var toplantisaati=$("input[name=toplantisaati]").val();
	var retgerekcesi=$("input[name=retgerekcesi]").val();
	var oybirligi=$("input[name=oybirligi]").val();
	var oybirligicheck=$("input[name=oybirligicheck]").val();
	var degistirilentezbasligi=$("input[name=degistirilentezbasligi]").val();
	var customCheck2 = $("input[name=retkabul]:checked").val();
	

$.ajax({
	url:"http://20.67.50.120:8000/",
	type:"POST",
	dataType:"json",
	data:{
		'ogrencino':ogrencino,
		'ogrenciadi':ogrenciadi,
		'ogrencisoyadi':ogrencisoyadi,
		'anabilimdali':anabilimdali,
		'kayittarihi':kayittarihi,
		'tezdanismani':tezdanismani,
		'turkcetezbasligi':turkcetezbasligi,
		'anahtarkelime':anahtarkelime,
		'ingilizcetezbasligi':ingilizcetezbasligi,
		'tezyazimdili':tezyazimdili,
		'calismatarzi':calismatarzi,
		'endustrialaniA':endustrialaniA,
		'endustrialaniB':endustrialaniB,
		'savunmavekonudegisikligi':savunmavekonudegisikligi,
		'etikkurulizni':etikkurulizni,
		'verikullanimiizni':verikullanimiizni,
		'tezkonusuveplani':tezkonusuveplani,
		'fikirhaksahipliğibeyani':fikirhaksahipliğibeyani,
		'toplantiyeri':toplantiyeri,
		'toplantitarihi':toplantitarihi,
		'toplantisaati':toplantisaati,
		'retgerekcesi':retgerekcesi,
		'oybirligi':oybirligi,
		'oybirligicheck':oybirligicheck,
		'degistirilentezbasligi':degistirilentezbasligi,
		'customCheck2':customCheck2,
		'formAdi':formAdi,
		
	},
	success: function(result)
	{
console.log(result);
Swal.fire({
icon: 'success',
title: 'Kayıt İşlemi Gerçekleşti',
showConfirmButton: false,
})
},
})
}});
	});
</script>
</body>
</html>