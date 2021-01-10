<?php include 'header.php'; ?>
<?php include 'navigator.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js">
</script>
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<form action="form32.php" target="_blank" method="post">
<div id="tezoneriformu">
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div align="Center">
				<p><h5>FEN BİLİMLERİ ENSTİTÜSÜ MÜDÜRLÜĞÜNE</h5></p>
				<label align="left"><p> <b> GEREKÇE: </b><br>
				</label>
				<p> 5846 sayılı Fikir ve Sanat Eserleri Kanunu’nun 1/B Maddesinde ‘Eser’ tanımı yapılmış olup, her nevi
					fikir ve sanat mahsullerini kapsamaktadır. Anılan kanunun 2. Maddesinin 3. Fıkrasında ve 50. Maddesinde
					de eserlerin vücuda getirilmeden önceki tasarım aşamasının da ‘eser’ niteliğinde olduğu yapılacak
					sözleşmelerin muteber olduğu belirtilir.<br>
					Anılan Kanunun 9., 10. ve 50. Maddeleri uyarınca birden fazla kimsenin iştiraki ile vücuda getirilen
					eser, ayrılmaz bir bütün teşkil ediyorsa bir sözleşme ile hak sahipliği oranları beyan edilmelidir. Buna göre,
					Tez Önerisi Formunu imzalayan tarafların (Tez Danışmanı ve Öğrenci) Tez Konusu Önerisi içinde yazılı
					fikirler üzerinde Ortak Hak Sahipliği, Paylı Hak Sahipliği veya Hak Sahipliği Feragat beyanında bulunmaları
				gereklidir.<br></p>
				<ul style="list-style-type:disc" >
					<li>Tez Önerisi bölümleri fikri haklar açısından paylara ayrılamadığı hallerde <b>ortak</b> (eşit dereceli
					haklar), ayrılabiliyor ise <b>paylı</b> fikri hak sahipliği tercih edilmelidir.</li>
					<li> Paylı Hak Sahipliği seçilmesi halinde bu Forma ek olarak payları (oranları) tanımlayacak
						şekilde ‘Paylı Hak Sahipliği Beyanı’ hazırlanmalı ve imzalanmalıdır.
					</li>
				</ul>
			</div>
		</div>
		
		<div class="form-group row" style="margin: 10px";>
			<label ><p> <b><ins>BEYAN:</ins></b><br></p></label>
		</div>
		<div class="form-group" style="margin: 10px";>
			<div class="col-md-12 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="1" required>
					<label class="custom-control-label" for="customRadio1">Tez Konusu Önerisinde <b>ORTAK HAK SAHİPLİĞİ vardır.</b></label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="2" required>
					<label class="custom-control-label" for="customRadio2">Tez Konusu Önerisinde <b>PAYLI HAK SAHİPLİĞİ vardır. (Paylı Hak Sahipliği Beyanı ektedir.)</b></label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="3" required>
					<label class="custom-control-label" for="customRadio3"><b>Danışman</b> olarak Tez Konusu Önerisi üzerinde hiçbir <b><i>Hak Sahipliğim yoktur.</i></b></label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="4" required>
					<label class="custom-control-label" for="customRadio4"><b>Öğrenci </b>olarak Tez Konusu Önerisi üzerinde hiçbir <b><i>Hak Sahipliğim yoktur.</i></b></label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input" value="5" required>
					<label class="custom-control-label" for="customRadio5"><b>İkinci (Eş) Danışman</b> olarak Tez Konusu Önerisi üzerinde hiçbir <b><i>Hak Sahipliğim yoktur. </i></b></label>
				</div>
			</div>
		</div>
		<div class="form-group row" style="margin: 10px";>
			<label ><p>Aşağıda imzaları olan bizler, 5846 sayılı Fikir ve Sanat Eserleri Kanunu’nun ilgili maddelerini okuduğumuzu
				ve yukarıdaki seçimlik maddeleri Tez Danışmanı ile anlaşmak suretiyle doldurduğumuzu<br>
			BEYAN EDERİZ.</p>
		</label>
	</div>
	<div class="form-group" align="right">
	<button type="submit" id="pdfkaydet32" name="pdfkaydet32"class="btn btn-danger">PDF</button>

<button  type="button" id="verigonder" name="verigonder" class="btn btn-primary">Kaydet</button>
</div>
</div>

</div>


</form>


<script >
$(document).ready(function() {
document.getElementById("customRadio1").checked = true;
var formAdi="form32";
$("#verigonder").click(function(){
var message_pri=$("input[name=customRadio]:checked").val();

$.ajax({
url: 'http://20.67.50.120:8000/',
type: 'POST',
data:{
'message_pri':message_pri,
'formAdi':formAdi,
},
success: function(result){
console.log(result);
	Swal.fire({
				icon: 'success',
				title: 'Kayıt İşlemi Başarıyla Gerçekleşti',
				showConfirmButton: false,
				})}
})
});

});
</script>
</body>
</html>