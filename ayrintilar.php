<?php include 'header.php';?>
<?php include 'navigator.php';?>
<script>

	var hataKontrol=0;
var language="<?php $language=$_GET['language']*1;if(isset($language)){echo $language;}else{echo '0';}?>";
var dizi=["aciklama0"];
var sayac=1;
 var aciklama=[];
  var baslama=[];
   var bitis=[];
   var formName="Form31";
   var ad="<?php echo $_GET['ad']; ?>";
   var soyad="<?php echo $_GET['soyad']; ?>";
   var ogrenciNo="<?php echo $_GET['ogrenciNo']; ?>";
   var anaBilimdali="<?php echo $_GET['anaBilimdali']; ?>";
   var bilimdali="<?php echo $_GET['bilimdali']; ?>";
   var danismanad="<?php echo $_GET['danismanad']; ?>";
   var danismansoyad="<?php echo $_GET['danismansoyad']; ?>";
   var turkcetezbasligi="<?php echo $_GET['turkcetezbasligi']; ?>";
   var ingilizcetezbasligi="<?php echo $_GET['ingilizcetezbasligi']; ?>";
</script>
<form action="form31.php" target="_blank" method="post">
<div id="ogrenci" class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4"><?php if($language===0)
					{
					?>
					<?php echo"Öğrenci Bilgileri";
					}
					else{
					echo "Student information";
					}?></h4>
				<p id="hataOgrenci" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz! ";
				}
				else{
				echo " Please do not leave the specified fields blank!";
				}?>
				</p>
                </div>

            </div>


            <div class="form-group row">
            	 <label class="col-sm-12 col-md-2 col-form-label">
            	<?php if($language===0)
					{
					?>
					<?php echo"Adınızı Giriniz";
					}
					else{
					echo "Enter Your Name";
					}?>
               </label>

                <div class="col-sm-12 col-md-10">
                    <input value="" id="ogrenciadi" name="ogrenciadi" class="form-control" placeholder="<?php if($language===0)
					{echo"Adınızı Giriniz";
					}
					else{
					echo "Enter Your Name";
					}?>" type="text" name="ad" >
                </div>
                <script>
                	document.getElementById("ogrenciadi").value=ad;
                </script>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"><?php if($language===0)
					{echo"Soyadınızı Giriniz";
					}
					else{
					echo "Enter Your Surname";
					}?></label>
                <div class="col-sm-12 col-md-10">
                    <input value="" id="ogrencisoyad" name="ogrencisoyad" class="form-control" placeholder="<?php if($language===0)
					{echo"Soyadınızı Giriniz";
					}
					else{
					echo "Enter Your Surname";
					}?>" type="text" name="soyad" >
                </div>
                <script>
               document.getElementById("ogrencisoyad").value=soyad;
                </script>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"><?php if($language===0)
					{echo"Öğrenci Numaranızı Giriniz";
					}
					else{
					echo "Enter Your Student Number";
					}?></label>
                <div class="col-sm-12 col-md-10">
                    <input value=""  id="ogrencinumara" name="ogrencinumara" class="form-control" type="number" placeholder="<?php if($language===0)
					{echo"Öğrenci Numaranızı Giriniz";
					}
					else{
					echo "Enter Your Student Number";
					}?>" name="ogrenciNo" >
                </div>
            </div>
            	<script>
            		       document.getElementById("ogrencinumara").value=ogrenciNo;
            	</script>

            			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label"><?php if($language===0)
					{echo"Anabilim Dalı";
					}
					else{
					echo "Master of Science";
					}?></label>
				<div class="col-sm-12 col-md-10">
					<select class="custom-select col-12" id="anabilimdali" name="anabilimdali" required>
						<option value=""><?php if($language===0)
					{echo"Seçiniz";
					}
					else{
					echo "Choose";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Adli Bilişim Mühendisliği";
					}
					else{
					echo "Computer Forensic Engineering";
					}?>">
						<?php if($language===0)
					{echo"Adli Bilişim Mühendisliği";
					}
					else{
					echo "Computer Forensic Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Bilgisayar Mühendisliği";
					}
					else{
					echo "Computer engineering";
					}?>"><?php if($language===0)
					{echo"Bilgisayar Mühendisliği";
					}
					else{
					echo "Computer engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Biyoloji";
					}
					else{
					echo "Biology";
					}?>"><?php if($language===0)
					{echo"Biyoloji";
					}
					else{
					echo "Biology";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Biyomühendislik";
					}
					else{
					echo "Bioengineering";
					}?>"><?php if($language===0)
					{echo"Biyomühendislik";
					}
					else{
					echo "Bioengineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Biyoteknoloji";
					}
					else{
					echo "Biotechnology";
					}?>"><?php if($language===0)
					{echo"Biyoteknoloji";
					}
					else{
					echo "Biotechnology";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Çevre Mühendisliği";
					}
					else{
					echo "Environmental Engineering";
					}?>"><?php if($language===0)
					{echo"Çevre Mühendisliği";
					}
					else{
					echo "Environmental Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Ekobilişim";
					}
					else{
					echo "Ecoinformation";
					}?>"><?php if($language===0)
					{echo"Ekobilişim";
					}
					else{
					echo "Ecoinformation";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Elektrik Eğitimi";
					}
					else{
					echo "Electrical Education";
					}?>"><?php if($language===0)
					{echo"Elektrik Eğitimi";
					}
					else{
					echo "Electrical Education";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Elektronik ve Bilgisayar Eğitimi";
					}
					else{
					echo "Electronics and Computer Educatio";
					}?>"><?php if($language===0)
					{echo"Elektronik ve Bilgisayar Eğitimi";
					}
					else{
					echo "Electronics and Computer Education";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Elektrik Elektronik Mühendisliği";
					}
					else{
					echo "Electrical electronics Engineering";
					}?>"><?php if($language===0)
					{echo"Elektrik Elektronik Mühendisliği";
					}
					else{
					echo "Electrical electronics Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Elektrik Elektronik Mühendisliği Teknolojileri";
					}
					else{
					echo "Electrical Electronics Engineering Technologies";
					}?>"><?php if($language===0)
					{echo"Elektrik Elektronik Mühendisliği Teknolojileri";
					}
					else{
					echo "Electrical Electronics Engineering Technologies";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Enerji Sistemleri Mühendisliği";
					}
					else{
					echo "Energy systems Engineering";
					}?>"><?php if($language===0)
					{echo"Enerji Sistemleri Mühendisliği";
					}
					else{
					echo "Energy systems Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Fizik";
					}
					else{
					echo "Physics";
					}?>"><?php if($language===0)
					{echo"Fizik";
					}
					else{
					echo "Physics";
					}?></option>
						<option value="<?php if($language===0)
					{echo"İnşaat Mühendisliği";
					}
					else{
					echo "Civil engineering";
					}?>"><?php if($language===0)
					{echo"İnşaat Mühendisliği";
					}
					else{
					echo "Civil engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"İnşaat Mühendisliği Teknolojileri";
					}
					else{
					echo "Civil Engineering Technologies";
					}?>"><?php if($language===0)
					{echo"İnşaat Mühendisliği Teknolojileri";
					}
					else{
					echo "Civil Engineering Technologies";
					}?></option>
						<option value="<?php if($language===0)
					{echo"İstatistik";
					}
					else{
					echo "Statistics";
					}?>"><?php if($language===0)
					{echo"İstatistik";
					}
					else{
					echo "Statistics";
					}?></option>
						<option value="<?php if($language===0)
					{echo"İş ve Mühendislik Yönetimi";
					}
					else{
					echo "Business and Engineering Management";
					}?>"><?php if($language===0)
					{echo"İş ve Mühendislik Yönetimi";
					}
					else{
					echo "Business and Engineering Management";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Jeodezi ve Coğrafi Bilgi Teknolojileri";
					}
					else{
					echo "Geodesy and Geographic Information Technologies";
					}?>"><?php if($language===0)
					{echo"Jeodezi ve Coğrafi Bilgi Teknolojileri";
					}
					else{
					echo "Geodesy and Geographic Information Technologies";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Jeoloji Mühendisliği";
					}
					else{
					echo "Geological Engineering";
					}?>"><?php if($language===0)
					{echo"Jeoloji Mühendisliği";
					}
					else{
					echo "Geological Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Kimya";
					}
					else{
					echo "Chemistry";
					}?>"><?php if($language===0)
					{echo"Kimya";
					}
					else{
					echo "Chemistry";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Kimya Mühendisliği";
					}
					else{
					echo "Chemical Engineering";
					}?>"><?php if($language===0)
					{echo"Kimya Mühendisliği";
					}
					else{
					echo "Chemical Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Makine Eğitimi";
					}
					else{
					echo "Machine Training";
					}?>"><?php if($language===0)
					{echo"Makine Eğitimi";
					}
					else{
					echo "Machine Training";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Makine Mühendisliği";
					}
					else{
					echo "Mechanical engineering";
					}?>"><?php if($language===0)
					{echo"Makine Mühendisliği";
					}
					else{
					echo "Mechanical engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Makine Mühendisliği Teknolojileri";
					}
					else{
					echo "Mechanical Engineering Technologies";
					}?>"><?php if($language===0)
					{echo"Makine Mühendisliği Teknolojileri";
					}
					else{
					echo "Mechanical Engineering Technologies";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Matematik";
					}
					else{
					echo "Maths";
					}?>"><?php if($language===0)
					{echo"Matematik";
					}
					else{
					echo "Maths";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Mekatronik Mühendisliği";
					}
					else{
					echo "Mechatronic Engineering";
					}?>"><?php if($language===0)
					{echo"Mekatronik Mühendisliği";
					}
					else{
					echo "Mechatronic Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Metalurji Eğitimi";
					}
					else{
					echo "Metallurgy Education";
					}?>"><?php if($language===0)
					{echo"Metalurji Eğitimi";
					}
					else{
					echo "Metallurgy Education";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Metalurji ve Malzeme Mühendisliği";
					}
					else{
					echo "Metallurgy and Materials Engineering";
					}?>"><?php if($language===0)
					{echo"Metalurji ve Malzeme Mühendisliği";
					}
					else{
					echo "Metallurgy and Materials Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Metalurji ve Malzeme Mühendisliği Teknolojileri";
					}
					else{
					echo "Metallurgy and Materials Engineering Technologies";
					}?>"><?php if($language===0)
					{echo"Metalurji ve Malzeme Mühendisliği Teknolojileri";
					}
					else{
					echo "Metallurgy and Materials Engineering Technologies";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Mimarlık";
					}
					else{
					echo "Architecture";
					}?>"><?php if($language===0)
					{echo"Mimarlık";
					}
					else{
					echo "Architecture";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Otomotiv Mühendisliği";
					}
					else{
					echo "Automotive Engineering";
					}?>"><?php if($language===0)
					{echo"Otomotiv Mühendisliği";
					}
					else{
					echo "Automotive Engineering";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Savunma Teknolojileri";
					}
					else{
					echo "Defense Technologies";
					}?>"><?php if($language===0)
					{echo"Savunma Teknolojileri";
					}
					else{
					echo "Defense Technologies";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Su Ürünleri Avlama ve İşleme Teknoloji";
					}
					else{
					echo "Fisheries Fishing and Processing Technology";
					}?>"><?php if($language===0)
					{echo"Su Ürünleri Avlama ve İşleme Teknoloji";
					}
					else{
					echo "Fisheries Fishing and Processing Technology";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Su Ürünleri Temel Bilimler";
					}
					else{
					echo "Fisheries Basic Sciences";
					}?>"><?php if($language===0)
					{echo"Su Ürünleri Temel Bilimler";
					}
					else{
					echo "Fisheries Basic Sciences";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Su Ürünleri Yetiştiriciliği";
					}
					else{
					echo "Aquaculture";
					}?>"><?php if($language===0)
					{echo"Su Ürünleri Yetiştiriciliği";
					}
					else{
					echo "Aquaculture";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Yapı Eğitimi";
					}
					else{
					echo "Building Education";
					}?>"><?php if($language===0)
					{echo"Yapı Eğitimi";
					}
					else{
					echo "Building Education";
					}?></option>
						<option value="<?php if($language===0)
					{echo"Yazılım Mühendisliği";
					}
					else{
					echo "Software Engineering";
					}?>">
						<?php if($language===0)
					{echo"Yazılım Mühendisliği";
					}
					else{
					echo "Software Engineering";
					}?></option>
					</select>
				</div>
			</div>

            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"><?php if($language===0)
					{echo"Bilim Dalını Giriniz";
					}
					else{
					echo "Enter the Branch of Science";
					}?></label>
                <div class="col-sm-12 col-md-10">
                    <input value="" id="bilimdali" name="bilimdali" class="form-control" type="text" placeholder="<?php if($language===0)
					{echo"Bilim Dalını Giriniz";
					}
					else{
					echo "Enter the Branch of Science";
					}?>" name="bilimdali">
                </div>
            </div>
        <script>
        	document.getElementById("bilimdali").value = bilimdali;
        </script>
              

            <div class="form-group row">

                <label class="col-sm-12 col-md-2 col-form-label"><?php if($language===0)
					{echo"Danışman Adını Giriniz";
					}
					else{
					echo "Enter Consultant Name";
					}?></label>

                <div class="col-sm-12 col-md-10">
                    <input value=""  class="form-control" type="text" placeholder="<?php if($language===0)
					{echo"Danışman Adını Giriniz";
					}
					else{
					echo "Enter Consultant Name";
					}?>" id="danismanad" name="danismanad" >
                </div>
                <script>
                	  	document.getElementById("danismanad").value = danismanad;
                </script>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"><?php if($language===0)
					{echo"Danışman Soyadını Giriniz";
					}
					else{
					echo "Enter Consultant Surname";
					}?></label>

                <div class="col-sm-12 col-md-10">
                    <input value="" class="form-control" type="text" placeholder="<?php if($language===0)
					{echo"Danışman Soyadını Giriniz";
					}
					else{
					echo "Enter Consultant Surname";
					}?>" id="danismansoyad" name="danismansoyad" >
                </div>
                <script>
                		document.getElementById("danismansoyad").value = danismansoyad;
                </script>
            </div>
<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
							<label><?php if($language===0)
					{echo"Programı";
					}
					else{
					echo "Program";
					}?></label></div>
						</div>
				<div class="col-md-2 col-sm-12">
					<div class="col-md-2 col-sm-12">
				<div class="custom-control custom-radio mb-5">
				<input  type="radio" id="Radio33" name="radio16" class="custom-control-input" value="0">
				<label class="custom-control-label" for="Radio33" value="0"><?php if($language===0)
					{echo"Yüksek Lisans";
					}
					else{
					echo "Post Graduate";
					}?></label>
									</div>
							</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
						<input type="radio" id="Radio34" name="radio16" class="custom-control-input" value="1">
						<label class="custom-control-label" for="Radio34"><?php if($language===0)
					{echo"Doktora";
					}
					else{
					echo "Doctoral Examination";
					}?></label>
									</div>
							</div>
							</div>
							<div class="col-md-5 col-sm-12">
								<div class="col-sm-12">
<div class="custom-control custom-radio mb-5">
						<input type="radio" id="Radio35" name="radio16" class="custom-control-input" value="2">
						<label class="custom-control-label" for="Radio35"><?php if($language===0)
					{echo"Bütünleşik Doktora";
					}
					else{
					echo "Integrated Doctor";
					}?></label>
									</div>
							</div>
							</div>
						</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
								<button type="button" id="ileri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>



        </div>
<div id="tezBasligi" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div id="tezBaslikHata" class="pd-20">
				<?php if($language===0)
				{
				?>
				
				<?php echo"<h4 class='text-blue h4'>Tez Başlığı</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Thesis Title</h4>";
				}?>
				<p id="hata1" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz! ";
				}
				else{
				echo " Please do not leave the specified fields blank!";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
							{
							?>
							<?php echo"<label>Türkçe Tez Başlığı</label>";
							}
							else{
							echo "<label>Turkish Thesis Title</label>";
							}?>
							
							<input value="" id="tezTurkce" name="tezTurkce" type="text"
							<?php if($language===0)
							{
								echo "placeholder='Tez Başlığını Giriniz...'";
							}
							else{
								echo "placeholder='Enter Thesis Title...'";
							}
							?>
							class="form-control">
						</div>
						<script>
document.getElementById("tezTurkce").value = turkcetezbasligi;
						</script>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
							{
							?>
							<?php echo"<label>İngilizce Tez Başlığı</label>";
							}
							else{
							echo "<label>English thesis Title</label>";
							}?>
							<input value="" id="tezIngilizce" name="tezIngilizce" type="text"  <?php if($language===0)
							{
							echo "placeholder='Tez Başlığını Giriniz...'";
							}
							else{
							echo "placeholder='Enter Thesis Title...'";
							}
							?> class="form-control">
						</div>
						<script>
							
document.getElementById("tezIngilizce").value = ingilizcetezbasligi;
						</script>
					</div>
				</div>
								<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="tezBasligiGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="tezBasligiButtonIleri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="tezGenelBilgi" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Tez Genel Bilgi</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Thesis General Information</h4>";
				}?>
				<p id="hata2" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo"Lütfen Belirtilen Alanları Boş Geçmeyiniz 710 harfden Fazla Değer Girmeyiniz Türkçe Olarak Yazınız.";
				}
				else{
				echo "
Please Do Not Leave The Specified Fields Blank Do Not Enter Values ​​More Than 710 letters Write in English.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Tezin Amacını Giriniz</label>";
					}
					else{
					echo "<label>Enter the Purpose of the Thesis</label>";
					}?>
					<textarea name="tezAmac" onchange="dilTespitTezAmac(id,name)" id="tezamac" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="problemTanimi" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Tez Genel Bilgi</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Thesis General Information</h4>";
				}?>
				<p id="hata3" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo"Lütfen Belirtilen Alanları Boş Geçmeyiniz 639 harfden Fazla Değer Girmeyiniz
Türkçe Olarak Yazınız.";
				}
				else{
				echo "
Please Do Not Leave The Specified Fields Blank Do Not Enter Values ​​More Than 639 letters 
Write in English.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Problem Tanımını Giriniz</label>";
					}
					else{
					echo "<label>Enter Problem Description</label>";
					}?>
					<textarea name="tezTanim" onchange="dilTespitTezAmac(id,name)" id="teztanim"  class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="hipotez" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Tez Genel Bilgi</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Thesis General Information</h4>";
				}?>
				<p id="hata4" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo"Lütfen Belirtilen Alanları Boş Geçmeyiniz 639 harfden Fazla Değer Girmeyiniz Türkçe Olarak Yazınız.";
				}
				else{
				echo "
Please Do Not Leave The Specified Fields Blank Do Not Enter Values ​​More Than 639 letters Write in English.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Hipotezler Ve Varsayımları Giriniz.</label>";
					}
					else{
					echo "<label>Enter Hypotheses And Assumptions.</label>";
					}?>
					<textarea name="tezHipotez" onchange="dilTespitTezAmac(id,name)" id="tezhipotez"  class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="motivasyon" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Tez Genel Bilgi</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Thesis General Information</h4>";
				}?>
				<p id="hata5" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo"Lütfen Belirtilen Alanları Boş Geçmeyiniz 781 harfden Fazla Değer Girmeyiniz
Türkçe Olarak Yazınız.";
				}
				else{
				echo "
Please Do Not Leave The Specified Fields Blank Do Not Enter Values ​​More Than 781 letters Write in English.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Yapılabilir Motivasyon Giriniz..</label>";
					}
					else{
					echo "<label>Enter Feasible Motivation.</label>";
					}?>
					<textarea name="tezMotivasyon" onchange="dilTespitTezAmac(id,name)" id="tezmotivasyon"  class="form-control"></textarea>
				</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="tezBasligiButtonGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="motivasyonButtonIleri" onmousemove="kontrol(event)" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="konuDetay" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Konu Detay</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Subject Detail</h4>";
				}?>
				<p id="hata6" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz!1065'den fazla harf girmeyiniz.";
				}
				else{
				echo " Please do not leave the specified fields blank!Do not enter more than 1065 letters.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Konu detayını giriniz.</label>";
					}
					else{
					echo "<label>Enter the subject detail.</label>";
					}?>
					<textarea id="konudetay" name="konuDetay" class="form-control"></textarea>
				</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="konuDetayButtonGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="konuDetayButtonIleri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="kaynaklar" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Kaynaklar</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Resources</h4>";
				}?>
				<p id="hata7" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz! ";
				}
				else{
				echo " Please do not leave the specified fields blank!";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[1]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak1" id="kaynak1" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak1Tarih" id="kaynak1Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[2]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak2" id="kaynak2" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak2Tarih" id="kaynak2Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[3]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak3" id="kaynak3" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak3Tarih" id="kaynak3Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[4]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak4" id="kaynak4" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak4Tarih" id="kaynak4Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[5]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak5" id="kaynak5" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak5Tarih" id="kaynak5Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[6]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak6" id="kaynak6" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak6Tarih" id="kaynak6Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[7]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak7" id="kaynak7" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak7Tarih" id="kaynak7Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[8]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak8" id="kaynak8" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak8Tarih" id="kaynak8Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[9]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak9" id="kaynak9" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak9Tarih" id="kaynak9Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[10]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak10" id="kaynak10" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak10Tarih" id="kaynak10Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[11]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak11" id="kaynak11" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak11Tarih" id="kaynak11Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[12]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak12" id="kaynak12" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak12Tarih" id="kaynak12Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[13]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak13" id="kaynak13" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak13Tarih" id="kaynak13Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[14]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak14" id="kaynak14" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak14Tarih" id="kaynak14Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-sm-12">
						<div><h4>[15]</h4></div>
					</div>
					<div class="col-md-1 col-sm-12">
						<div class="form-group">
							<?php if($language===0)
					{
					?>
					<?php echo"<label>Kaynak</label>";
					}
					else{
					echo "<label>Source</label>";
					}?>
							
						</div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="form-group">
							<input name="kaynak15" id="kaynak15" type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-2 col-sm-12">
						<div class="form-group">
							<input name="kaynak15Tarih" id="kaynak15Tarih" type="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="kaynaklarGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="kaynaklarIleri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="literatur" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Literatür</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Literature</h4>";
				}?>
				<p id="hata8" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz!994'den fazla harf girmeyiniz";
				}
				else{
				echo " Please do not leave the specified fields blank!Do not enter more than 994 letters.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Literatür özetini giriniz.</label>";
					}
					else{
					echo "<label>Enter the literature summary</label>";
					}?>
					<textarea name="literatur" id="literaturInput" class="form-control"></textarea>
				</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="literaturGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="literaturIleri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="yontem" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Yöntem bölümü</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Method section</h4>";
				}?>
				<p id="hata9" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz!1222'den fazla harf girmeyiniz.";
				}
				else{
				echo " Please do not leave the specified fields blank!Do not enter more than 1222 letters.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Yöntem bölümünü giriniz.</label>";
					}
					else{
					echo "<label>
					Enter the method section.</label>";
					}?>
					<textarea name="yontem" id="yontemBolum" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="ozgunDeger" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Özgün Değer</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Original Value</h4>";
				}?>
				<p id="hata10" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz!1034'den fazla harf girmeyiniz";
				}
				else{
				echo " Please do not leave the specified fields blank!Do not enter more than 1034 letters.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Özgün değer bölümünü giriniz.</label>";
					}
					else{
					echo "<label>
					Enter the original value section.</label>";
					}?>
					<textarea name="Ozgun" id="ozgun" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="yayginDeger" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Yaygın Değer</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Common Value</h4>";
				}?>
				<p id="hata11" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz!1034'den fazla harf girmeyiniz.";
				}
				else{
				echo " Please do not leave the specified fields blank!Do not enter more than 1034 letters.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Yaygın değer bölümünü giriniz.</label>";
					}
					else{
					echo "<label>
					Enter the common value section.</label>";
					}?>
					<textarea name="Yaygin" id="yaygin" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="kurum" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Kurum Dışı</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Out of Institution</h4>";
				}?>
				<p id="hata12" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz!1034'den fazla harf girmeyiniz.";
				}
				else{
				echo " Please do not leave the specified fields blank!Do not enter more than 1034 letters.";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="form-group">
					<?php if($language===0)
					{
					?>
					<?php echo"<label>Kurum dışına bağımlılık giriniz.</label>";
					}
					else{
					echo "<label>
					Enter dependency outside the institution.</label>";
					}?>
					<textarea name="Kurum" id="Kurum" class="form-control"></textarea>
				</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="kurumGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="kurumButtonIleri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="paket" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>İş Paketleri</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Job Packages</h4>";
				}?>
				<p id="hata13" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz! ";
				}
				else{
				echo " Please do not leave the specified fields blank!";
				}?>
				</p>
			</div>
		</div>
			<div id="div0" class="row">
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Açıklama</label>";
						}
						else{
						echo "<label>Explanation</label>";
						}?>
						
						<input name="aciklama0" id="aciklama0" type="text" class="form-control">
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
								<?php if($language===0)
						{
						?>
						<?php echo"<label>Başlama</label>";
						}
						else{
						echo "<label>Start</label>";
						}?>
						<input name="baslama0" id="0Tarih" type="date" class="form-control">
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
								<?php if($language===0)
						{
						?>
						<?php echo"<label>Bitiş</label>";
						}
						else{
						echo "<label>Finish</label>";
						}?>
						<input name="bitis0" id="bitis0" type="date" class="form-control">
					</div>
				</div>
				<div class="col-md-2 col-sm-12">
					<label>&nbsp;</label>
					<div class="form-group">
						<button id="0" onclick="sil(id)" type="button" class="btn btn-danger" disabled>&nbsp;<?php if($language===0){?><?php echo"Sil";}else{echo "Delete";}?>&nbsp;</button>
					</div>
				</div>
			</div>

			<div id="yeniEkle"></div>
			<div class="pd-20 card-box mb-30">
				<div class="btn-list">
					<div class="row">
						<div align="left" class="col-md-3 col-sm-12">
							<button id="ekle" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Ekle";
							}
							else{
							echo "Add";
							}?>
							&nbsp;</button>
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
							
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="paketGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="button" id="paketIleri" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"İleri";
							}
							else{
							echo "Next";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="istatistik" class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div  class="card-box mb-30">
			<div class="pd-20">
				<?php if($language===0)
				{
				?>
				<?php echo"<h4 class='text-blue h4'>Enstitü İstatistik Amaçlı Soruları</h4>";
				}
				else{
				echo "<h4 class='text-blue h4'>Institute Questions for Statistical Purposes</h4>";
				}?>
				<p id="hata14" style='color: red;'>

				<?php if($language===0)
				{
				?>
				
				<?php echo" Lütfen Belirtilen Alanları Boş Geçmeyiniz! ";
				}
				else{
				echo " Please do not leave the specified fields blank!";
				}?>
				</p>
			</div>
			<div class="pd-20 card-box mb-30">
				<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Öğrenci bir işyerinde Çalışıyor Mu?</label>";
						}
						else{
						echo "<label>Does the student work in a workplace?</label>";
						}?>
									
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio" name="radio" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio">
						<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>

										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio1" name="radio" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio1" value="0">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
										<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Öğrencinin Tez çalışması süresince muhtemel ikamet edeceği il.</label>";
						}
						else{
						echo "<label>The province where the student will likely reside during the thesis study.</label>";
						}?>
									
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio2" name="radio1" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio2" value="1">
						<?php if($language===0)
						{
						?>
						<?php echo"Elazığ";
						}
						else{
						echo "Elazığ";
						}?>

										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio3" name="radio1" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio3" value="0">
					<?php if($language===0)
						{
						?>
						<?php echo"Elazığ dışı";
						}
						else{
						echo "Out of Elazığ";
						}?>
										</label>
									</div>
							</div>
						</div>
<div class="row">
<div class="col-md-7 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Çalışmalar için Laboratuvar imkanı yeterli mi?</label>";
						}
						else{
						echo "<label>Is Laboratory facilities sufficient for the studies?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-1 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="can()" type="radio" id="Radio4" name="radio2" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio4">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<input min="0" max="100" name="calismaLab" id="calismalab" type="number" placeholder="%" class="form-control">
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem()" type="radio" id="Radio6" name="radio2" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio6">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
										<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Çalışmalar için il dışına seyahat düşünülüyor mu?</label>";
						}
						else{
						echo "<label>Is travel outside the province considered for studies?</label>";
						}?>
									
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio7" name="radio4" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio7">
						<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>

										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio8" name="radio4" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio8">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
						<div class="row">
<div class="col-md-7 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Üniversite dışından destek (işbirliği) alınacak mı?</label>";
						}
						else{
						echo "<label>Will there be support (cooperation) from outside the university?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-1 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onClick="can1()" type="radio" id="Radio9" name="radio5" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio9">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<input min="0" max="100" id="destekYuzde" name="destek" type="number" placeholder="%" class="form-control">
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem1()" type="radio" id="Radio10" name="radio5" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio10">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
																<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Proje başvurusu düşünülüyor mu?</label>";
						}
						else{
						echo "<label>Is a project application considered?</label>";
						}?>
									
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio11" name="radio6" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio11">
						<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>

										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio12" name="radio6" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio12">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
																<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Tez başlığı (Türkçe ve İngilizce) internet ortamında tarandı mı?</label>";
						}
						else{
						echo "<label>Has the thesis title (Turkish and English) been scanned on the internet?</label>";
						}?>		
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio13" name="radio7" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio13">
						<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>

										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio14" name="radio7" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio14">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
												<div class="row">
<div class="col-md-7 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Ticari bir ürün çıkması muhtemel mi?</label>";
						}
						else{
						echo "<label>Is it likely to be a commercial product?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-1 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="can2()" type="radio" id="Radio15" name="radio8" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio15">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<input name="ticariUrun" id="ticariurun" min="0" max="100" type="number" placeholder="%" class="form-control">
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem2()" type="radio" id="Radio16" name="radio8" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio16">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
												<div class="row">
<div class="col-md-7 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Patent alınması muhtemel mi?	</label>";
						}
						else{
						echo "<label>Is it possible to get a patent?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-1 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="can3()" type="radio" id="Radio17" name="radio9" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio17">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<input  name="patentAlinmasi" max="100" min="0" id="patentalinmasi" type="number" placeholder="%" class="form-control">
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem3()" type="radio" id="Radio18" name="radio9" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio18">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
																<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Öğrenciye ait girişimcilik (KOSGEB) sertifikası var mı?</label>";
						}
						else{
						echo "<label>Does the student have an entrepreneurship (KOSGEB) certificate?</label>";
						}?>
									
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio19" name="radio10" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio19">
						<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>

										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio20" name="radio10" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio20">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
												<div class="row">
<div class="col-md-8 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Tez konusuna dış paydaş katkısı var mı?</label>";
						}
						else{
						echo "<label>Is there any external stakeholder contribution to the thesis topic?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio21" name="radio11" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio21">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio22" name="radio11" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio22">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
												<div class="row">
<div class="col-md-7 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Tez Çalışması disiplinler arası nitelikte mi?</label>";
						}
						else{
						echo "<label>Is the Thesis Study interdisciplinary?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-1 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="can5()" type="radio" id="Radio23" name="radio12" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio23">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<input name="tezDisiplin" id="tezdisiplin" min="0" max="100" type="number" placeholder="%" class="form-control">
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem7()" type="radio" id="Radio24" name="radio12" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio24">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>
												<div class="row">
<div class="col-md-7 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>İkinci Danışman ataması düşünülüyor mu?</label>";
						}
						else{
						echo "<label>Is second Consultant appointment considered?</label>";
						}?>
									
								</div>
							</div>
								<div class="col-md-1 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="can8()" type="radio" id="Radio25" name="radio13" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio25">
					<?php if($language===0)
						{
						?>
						<?php echo"Evet";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<input name="ikinciDanisman" min="0" max="100" id="ikincidanisman" type="number" placeholder="%" class="form-control">
								</div>
							</div>
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem5()" type="radio" id="Radio26" name="radio13" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio26">
					<?php if($language===0)
						{
						?>
						<?php echo"Hayır";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Öğrencinin Tez çalışması için laboratuvar bilgi düzeyi nedir?</label>";
						}
						else{
						echo "<label>What is the laboratory knowledge level for the student's thesis work?</label>";
						}?></div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio27" name="radio14" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio27" value="0">
					<?php if($language===0)
						{
						?>
						<?php echo"Kötü";
						}
						else{
						echo "Bad";
						}?>
										</label>
									</div>
							</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio28" name="radio14" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio28">
					<?php if($language===0)
						{
						?>
						<?php echo"Orta";
						}
						else{
						echo "Middle";
						}?>
										</label>
									</div>
							</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio29" name="radio14" class="custom-control-input" value="2">
										<label class="custom-control-label" for="Radio29">
					<?php if($language===0)
						{
						?>
						<?php echo"İyi";
						}
						else{
						echo "Good";
						}?>
										</label>
									</div>
							</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="col-md-2 col-sm-12">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio30" name="radio14" class="custom-control-input" value="3">
										<label class="custom-control-label" for="Radio30">
					<?php if($language===0)
						{
						?>
						<?php echo"Gerekmiyor";
						}
						else{
						echo "Unnecessary";
						}?>
										</label>
									</div>
							</div>
							</div>
						</div>

<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Destekleyen Kurum veya kuruluş var mı?</label>";
						}
						else{
						echo "<label>Is there a supporting institution or organization?</label>";
						}?>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
<input name="destekleyenKurum" id="destekleyenkurum" type="text" class="form-control" placeholder="<?php if($language===0){?><?php echo"Lütfen belirtiniz...";}else{echo "Please specify ...";}?>">
								</div>
							</div>
														<div class="col-md-1 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Belge:</label>";
						}
						else{
						echo "<label>Document:</label>";
						}?>
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
<div class="custom-control custom-radio mb-5">
										<input type="radio" id="Radio31" onclick="can4()" name="radio15" class="custom-control-input" value="1">
										<label class="custom-control-label" for="Radio31">
					<?php if($language===0)
						{
						?>
						<?php echo"Var";
						}
						else{
						echo "Yes";
						}?>
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<div class="custom-control custom-radio mb-5">
										<input onclick="gorkem4()" type="radio" id="Radio32" name="radio15" class="custom-control-input" value="0">
										<label class="custom-control-label" for="Radio32">
					<?php if($language===0)
						{
						?>
						<?php echo"Yok";
						}
						else{
						echo "No";
						}?>
										</label>
									</div>
								</div>
							</div>
						</div>
<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
						<?php if($language===0)
						{
						?>
						<?php echo"<label>Çalışma alanı hangi sektörü ilgilendiriyor?</label>";
						}
						else{
						echo "<label>Which sector does the field of study concern?</label>";
						}?>
								</div>
							</div>
							<div class="col-md-8 col-sm-12">
								<div class="form-group">
								<div class="form-group">
<input required name="calismaAlan" id="calismaalan" type="text" class="form-control" placeholder="<?php if($language===0){?><?php echo"Lütfen belirtiniz...";}else{echo "Please specify ...";}?>">
								</div>
								</div>
							</div>
						</div>
				<div class="btn-list">
					<div class="row">
						<div class="col-md-3 col-sm-12">
						</div>
						<div class="col-md-3 col-sm-12">							</div>
						<div class="col-md-3 col-sm-12">
						</div>
						<div align="right" class="col-md-3 col-sm-12">
							<button id="istatistikGeri" type="button" class="btn btn-primary" >&nbsp;
							<?php if($language===0)
							{
							?>
							
							<?php echo"Geri";
							}
							else{
							echo "Back";
							}?>
							&nbsp;</button>
							<button type="submit" id="pdfkaydet31" name="pdfkaydet31"class="btn btn-danger">PDF</button>
							<button type="button" id="kaydet" class="btn btn-primary">&nbsp;
							<?php if($language===0)
							{
							?>
							<?php echo"Kaydet";
							}
							else{
							echo "Save";
							}?>
							&nbsp;</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script>
	var tezAmacDilKontrol;
	var tezTanimKontrol;
	var tezHipotezKontrol;
	var tezMotivasyonKontrol;
	
		function dilTespitTezAmac(id,name)
	   	    {
	   	var dilKontrol = document.getElementById(id).value;
	   	    	$.ajax({
				url:"dilTespit.php",
				type:"POST",
				dataType:"json",
				data:{
					'dilKontrol':dilKontrol,
			},
			success: function(result)
				{
					console.log(result);
					if(name=="tezAmac")
					{
						if(result.dilKontrol=="tr")
						{
					tezAmacDilKontrol=0;
						}
						else if(result.dilKontrol=="en")
						{
					tezAmacDilKontrol=1;
						}
						else
						{
					tezAmacDilKontrol=2;
						}
					}
					else if(name=="tezTanim")
					{
						if(result.dilKontrol=="tr")
						{
					tezTanimKontrol=0;
						}
						else if(result.dilKontrol=="en")
						{
					tezTanimKontrol=1;
						}
						else
						{
					tezTanimKontrol=2;
						}
					}
					else if(name=="tezHipotez")
					{
						if(result.dilKontrol=="tr")
						{
					tezHipotezKontrol=0;
						}
						else if(result.dilKontrol=="en")
						{
					tezHipotezKontrol=1;
						}
						else
						{
					tezHipotezKontrol=2;
						}
					}
					else
					{
						if(result.dilKontrol=="tr")
						{
					tezMotivasyonKontrol=0;
						}
						else if(result.dilKontrol=="en")
						{
					tezMotivasyonKontrol=1;
						}
						else
						{
					tezMotivasyonKontrol=2;
						}
					}

				}
})
	   	    }



	   	    function kontrol(e)
	   	    {
var dilKontrol = document.getElementById("tezmotivasyon").value;
	   	    	$.ajax({
				url:"dilTespit.php",
				type:"POST",
				dataType:"json",
				data:{
					'dilKontrol':dilKontrol,
			},
			success: function(result)
				{
					console.log(result);
						if(result.dilKontrol=="tr")
						{
					tezMotivasyonKontrol=0;
						}
						else if(result.dilKontrol=="en")
						{
					tezMotivasyonKontrol=1;
						}
						else
						{
					tezMotivasyonKontrol=2;
						}
					

				}
})
	   	    }
</script>
<script>
	function can() {
  document.getElementById("calismalab").disabled = false;
}
		function gorkem() {
  document.getElementById("calismalab").disabled = true;
  document.getElementById("calismalab").value = "0";
}
	function can1() {
  document.getElementById("destekYuzde").disabled = false;
}
		function gorkem1() {
  document.getElementById("destekYuzde").disabled = true;
  document.getElementById("destekYuzde").value = "0";
}
	function can2() {
  document.getElementById("ticariurun").disabled = false;
}
		function gorkem2() {
  document.getElementById("ticariurun").disabled = true;
  document.getElementById("ticariurun").value = "0";
}
	function can3() {
  document.getElementById("patentalinmasi").disabled = false;
}
		function gorkem3() {
  document.getElementById("patentalinmasi").disabled = true;
  document.getElementById("patentalinmasi").value = "0";
}
	function can4() {
  document.getElementById("destekleyenkurum").disabled = false;
}
		function gorkem4() {
  document.getElementById("destekleyenkurum").disabled = true;
  document.getElementById("destekleyenkurum").value = "Yok";
}
	function can5() {
  document.getElementById("tezdisiplin").disabled = false;
}
	function can7() {
  document.getElementById("tezdisiplin").disabled = false;
}
	function can8() {
  document.getElementById("ikincidanisman").disabled = false;
}
		function gorkem5() {
  document.getElementById("ikincidanisman").disabled = true;
  document.getElementById("ikincidanisman").value = "0";
}
		function gorkem7() {
  document.getElementById("tezdisiplin").disabled = true;
  document.getElementById("tezdisiplin").value = "0";
}


$(document).ready(function(){
	 document.getElementById("anabilimdali").selectedIndex = anaBilimdali;
	document.getElementById("tezBasligi").style.display = "none";
	document.getElementById("problemTanimi").style.display = "none";
	document.getElementById("istatistik").style.display = "none";
	document.getElementById("paket").style.display = "none";
	document.getElementById("kurum").style.display = "none";
	document.getElementById("yayginDeger").style.display = "none";
	document.getElementById("ozgunDeger").style.display = "none";
	document.getElementById("yontem").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("konuDetay").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
document.getElementById("literatur").style.display = "none";
document.getElementById("hataOgrenci").style.visibility = "hidden";
const moonLanding = new Date(Date.now());

var yil=moonLanding.getFullYear()-5;
var ay=moonLanding.getMonth()+1;
if(ay==0)
{
  ay=1;
}
if(ay>12)
{
  ay=ay-12;
}
var gun=moonLanding.getDate();
var sakla=(yil+"-"+ay+"-"+gun);
var sakla1=((yil+5)+"-"+ay+"-"+gun);
document.getElementById("bitis0").value=sakla;
document.getElementById("0Tarih").value=sakla;
for(var q=1;15>=q;q++)
{
	document.getElementById("kaynak"+q+"Tarih").value=sakla1;
	document.getElementById("kaynak"+q+"Tarih").min = sakla;
	document.getElementById("kaynak"+q+"Tarih").max = sakla1;
}
for(var q=1;14>=q;q++)
{
	document.getElementById("hata"+q).style.visibility = "hidden";
}
$("#ileri").click(function(){

	var ogrenciadi = document.getElementById("ogrenciadi").value;
	var ogrencisoyad = document.getElementById("ogrencisoyad").value;
	var ogrencinumara = document.getElementById("ogrencinumara").value;
		var bilimdali = document.getElementById("bilimdali").value;
		var danismanad = document.getElementById("danismanad").value;
		var danismansoyad = document.getElementById("danismansoyad").value;
		var lisans=document.querySelector('input[name="radio16"]:checked');
		if(ogrenciadi=="" || ogrenciadi==null||
			ogrencisoyad=="" || ogrencisoyad==null||
			ogrencinumara=="" || ogrencinumara==null||
			bilimdali=="" || bilimdali==null||
			danismanad=="" || danismanad==null||
			danismansoyad=="" || danismansoyad==null || lisans==null
			)
		{
			 document.getElementById("hataOgrenci").style.visibility = "visible";
		}
		else{
			document.getElementById("tezBasligi").style.display = "inherit";
document.getElementById("ogrenci").style.display = "none";

	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "inherit";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";	
		}


});
$("#tezBasligiGeri").click(function(){
		document.getElementById("tezBasligi").style.display = "none";
document.getElementById("ogrenci").style.display = "inherit";

	document.getElementById("konuDetay").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
})
$("#tezBasligiButtonIleri").click(function(){

	var tezTurkceKontrol=$("input[name=tezTurkce]").val();

	if(tezTurkceKontrol=="" || tezTurkceKontrol==null)
	{
			 document.getElementById("hata1").style.visibility = "visible";
	}
	else
	{
			document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "inherit";
document.getElementById("problemTanimi").style.display = "inherit";
document.getElementById("hipotez").style.display = "inherit";
document.getElementById("motivasyon").style.display = "inherit";
	}
})
$("#tezBasligiButtonGeri").click(function(){
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "inherit";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
})
$("#motivasyonButtonIleri").click(function(){
		var tezamac = document.getElementById("tezamac").value;
		
		var teztanim = document.getElementById("teztanim").value;
		var tezhipotez = document.getElementById("tezhipotez").value;
	var tezmotivasyon = document.getElementById("tezmotivasyon").value;
var sayackontrol=0;
var bir=0;
var iki=0;
var uc=0;
var dort=0;

	   	var c = document.getElementById("tezamac").value;
	   	    c=c.length;
	   	    if (c >= 710) {
	   	    	bir=1;
	   	        sayackontrol=sayackontrol+1;
	   	    }
	   	var a = document.getElementById("teztanim").value;
	   	    a=a.length;
	   	    if (a > 639) {
	   	    	iki=1;
	   	        sayackontrol=sayackontrol+1;
	   	    }
	   	 var n = document.getElementById("tezmotivasyon").value;
	   	    n=n.length;
	   	    if (n > 781) {
				uc=1;
	   	        sayackontrol=sayackontrol+1;
	   	    }
	   	 var can = document.getElementById("tezhipotez").value;
	   	    can=can.length;
	   	    	   	    if (can > 639) {
				dort=1;
	   	        sayackontrol=sayackontrol+1;
	   	    }

	   	var dilKontrol = document.getElementById("tezmotivasyon").value;
	   	    	$.ajax({
				url:"dilTespit.php",
				type:"POST",
				dataType:"json",
				data:{
					'dilKontrol':dilKontrol,
			},
			success: function(result)
				{
					console.log(result);

						if(result.dilKontrol=="tr")
						{
					tezMotivasyonKontrol=0;
						}
						else if(result.dilKontrol=="en")
						{
					tezMotivasyonKontrol=1;
						}
						else
						{
					tezMotivasyonKontrol=2;
						}
					}})
	   	    



if(tezamac=="" || tezamac==null || teztanim=="" || teztanim==null || tezhipotez=="" || tezhipotez==null || tezmotivasyon=="" || tezmotivasyon==null || sayackontrol>0 || language != tezTanimKontrol || tezAmacDilKontrol !=language || tezHipotezKontrol !=language || tezMotivasyonKontrol !=language)
	{
document.getElementById("hata2").style.visibility = "hidden";
document.getElementById("hata3").style.visibility = "hidden";
document.getElementById("hata4").style.visibility = "hidden";
document.getElementById("hata5").style.visibility = "hidden";
		if(language != tezAmacDilKontrol)
		{
 document.getElementById("hata2").style.visibility = "visible";

		}
		if(language != tezTanimKontrol)
		{
 document.getElementById("hata3").style.visibility = "visible";

		}
				if(language != tezHipotezKontrol)
		{
 document.getElementById("hata4").style.visibility = "visible";

		}
				if(language != tezMotivasyonKontrol)
		{
 document.getElementById("hata5").style.visibility = "visible";

		}


		if (tezamac=="" || tezamac==null || bir==1) {
 document.getElementById("hata2").style.visibility = "visible";

		}

		if(teztanim=="" || teztanim==null || teztanim==1)
		{
 document.getElementById("hata3").style.visibility = "visible";
		}

		if(tezhipotez=="" || tezhipotez==null || dort==1)
		{
 document.getElementById("hata4").style.visibility = "visible";

		}

		if(tezmotivasyon=="" || tezmotivasyon==null || uc==1)
		{
 document.getElementById("hata5").style.visibility = "visible";

		}


			
	}
	else
	{
		document.getElementById("konuDetay").style.display = "inherit";
	document.getElementById("tezBasligi").style.display = "none";
		
		
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
}})
$("#konuDetayButtonGeri").click(function(){
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "inherit";
document.getElementById("problemTanimi").style.display = "inherit";
document.getElementById("hipotez").style.display = "inherit";
document.getElementById("motivasyon").style.display = "inherit";
})
$("#konuDetayButtonIleri").click(function(){
var konudetay = document.getElementById("konudetay").value;
	   	   var konudetaySayac=konudetay.length;
	   	   var konudetaysay=0;
	   	    if (konudetaySayac >= 1065) {
konudetaysay=1;
	   	    }
		if(konudetay=="" || konudetay==null ||konudetaysay==1)
		{
 document.getElementById("hata6").style.visibility = "visible";

		}
		else
		{
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "inherit";
}})
$("#kaynaklarGeri").click(function(){
	document.getElementById("konuDetay").style.display = "inherit";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
})
$("#kaynaklarIleri").click(function(){
	var kaynak1 = document.getElementById("kaynak1").value;
	var kaynak2 = document.getElementById("kaynak2").value;
	var kaynak3 = document.getElementById("kaynak3").value;
	var kaynak4 = document.getElementById("kaynak4").value;
	var kaynak5 = document.getElementById("kaynak5").value;
	var kaynak6 = document.getElementById("kaynak6").value;
	var kaynak7 = document.getElementById("kaynak7").value;
	var kaynak8 = document.getElementById("kaynak8").value;
	var kaynak9 = document.getElementById("kaynak9").value;
	var kaynak10 = document.getElementById("kaynak10").value;
	var kaynak11 = document.getElementById("kaynak11").value;
	var kaynak12 = document.getElementById("kaynak12").value;
	var kaynak13 = document.getElementById("kaynak13").value;
	var kaynak14 = document.getElementById("kaynak14").value;
	var kaynak15 = document.getElementById("kaynak15").value;
		if(kaynak1=="" || kaynak1==null)
		{
Swal.fire({
  icon: 'error',
  title: 'Hata',
  text: 'Lütfen En Az Bir Adet Kaynak Giriniz!',
  showConfirmButton: false,
})
 document.getElementById("hata7").style.visibility = "visible";

		}
		else{
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
document.getElementById("literatur").style.display = "inherit";
}})
$("#literaturGeri").click(function(){
	document.getElementById("kaynaklar").style.display = "inherit";
	document.getElementById("literatur").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
})
$("#literaturIleri").click(function(){
var literatur = document.getElementById("literaturInput").value;
	   	   var literaturSayac=literatur.length;
	   	   var literatursay=0;
	   	    if (literaturSayac >= 994) {
literatursay=1;
	   	    }
		if(literatur=="" || literatur==null || literatursay==1)
		{
 document.getElementById("hata8").style.visibility = "visible";
		}
		else
		{
		document.getElementById("kurum").style.display = "inherit";
	document.getElementById("yayginDeger").style.display = "inherit";
	document.getElementById("ozgunDeger").style.display = "inherit";
	document.getElementById("yontem").style.display = "inherit";
	document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
document.getElementById("literatur").style.display = "none";
}})
$("#kurumGeri").click(function(){
	document.getElementById("literatur").style.display = "inherit";
	document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("kurum").style.display = "none";
	document.getElementById("yayginDeger").style.display = "none";
	document.getElementById("ozgunDeger").style.display = "none";
	document.getElementById("yontem").style.display = "none";
})
$("#kurumButtonIleri").click(function(){
	var yontemBolum = document.getElementById("yontemBolum").value;
		   	   var yontemBolumSayac=yontemBolum.length;
	   	   var yontemBolumsay=0;
	   	    if (yontemBolumSayac >= 994) {
yontemBolumsay=1;
	   	    }
		var ozgun = document.getElementById("ozgun").value;
				   	   var ozgunSayac=ozgun.length;
	   	   var ozgunsay=0;
	   	    if (ozgunSayac >= 1034) {
			ozgunsay=1;
	   	    }
				var yaygin = document.getElementById("yaygin").value;
				var yayginSayac=yaygin.length;
	   	   var yayginsay=0;
	   	    if (yayginSayac >= 1034) {
			yayginsay=1;
	   	    }
				var kurum = document.getElementById("Kurum").value;
			var kurumSayac=kurum.length;
	   	   var kurumsay=0;
	   	    if (kurumSayac >= 1034) {
			kurumsay=1;
	   	    }



	if(yontemBolum=="" || yontemBolum==null ||
		   ozgun=="" || ozgun==null ||
		   kurum=="" || kurum==null ||
		   yaygin=="" || yaygin==null|| 
		   yontemBolumsay==1||ozgunsay==1||
		   yayginsay==1||yayginsay==1||
		   kurumsay==1||kurumsay==1
		   
		   )
	{
		if(yontemBolum=="" || yontemBolum==null ||
		   yontemBolumsay==1)
		{
 document.getElementById("hata9").style.visibility = "visible";

		}
		else {
		 document.getElementById("hata9").style.visibility = "hidden";
	
		}
		if(ozgun=="" || ozgun==null||
			ozgunsay==1)
		{
	 document.getElementById("hata10").style.visibility = "visible";
		}
		else
		{
	 document.getElementById("hata10").style.visibility = "hidden";			
		}
		if(kurum=="" || kurum==null||
			kurumsay==1)
		{
 document.getElementById("hata12").style.visibility = "visible";			
		}
		else
		{
document.getElementById("hata12").style.visibility = "hidden";			
		}
		if(yaygin=="" || yaygin==null || yayginsay==1 )
		{
	 document.getElementById("hata11").style.visibility = "visible";
		}
		else
		{
	 document.getElementById("hata11").style.visibility = "visible";			
		}
	}
	else{
	document.getElementById("paket").style.display = "inherit";
	document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("kurum").style.display = "none";
	document.getElementById("yayginDeger").style.display = "none";
	document.getElementById("ozgunDeger").style.display = "none";
	document.getElementById("yontem").style.display = "none";
}})
$("#paketGeri").click(function(){
		document.getElementById("paket").style.display = "none";
	document.getElementById("kurum").style.display = "inherit";
	document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("yayginDeger").style.display = "inherit";
	document.getElementById("ozgunDeger").style.display = "inherit";
	document.getElementById("yontem").style.display = "inherit";
})
$("#paketIleri").click(function(){
	var say=0;
	var kontrolet;
	for (var i =0; aciklama.length > i; i++) {

			kontrolet = document.getElementById(aciklama[i]).value;
		if(kontrolet=="" || kontrolet===null){
			say=say+1;
			break;
			}
		}
	if(say!=0)
	{
document.getElementById("hata13").style.visibility = "visible";
	}
	else
	{
	document.getElementById("istatistik").style.display = "inherit";
		document.getElementById("paket").style.display = "none";
	document.getElementById("kurum").style.display = "none";
	document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
	document.getElementById("yayginDeger").style.display = "none";
	document.getElementById("ozgunDeger").style.display = "none";
	document.getElementById("yontem").style.display = "none";
}})
$("#istatistikGeri").click(function(){
	document.getElementById("istatistik").style.display = "none";
		document.getElementById("paket").style.display = "inherit";
	document.getElementById("kurum").style.display = "none";
	document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("konuDetay").style.display = "none";
	document.getElementById("tezBasligi").style.display = "none";
document.getElementById("tezGenelBilgi").style.display = "none";
document.getElementById("problemTanimi").style.display = "none";
document.getElementById("hipotez").style.display = "none";
document.getElementById("motivasyon").style.display = "none";
document.getElementById("kaynaklar").style.display = "none";
	document.getElementById("yayginDeger").style.display = "none";
	document.getElementById("ozgunDeger").style.display = "none";
	document.getElementById("yontem").style.display = "none";
})
$("#ekle").click(function(){
	
	$("#yeniEkle").append("<div id='div"+sayac+"'class='row'><div class= 'col-md-4 col-sm-12 '><div class= 'form-group '><?php if($language===0){?><?php echo'<label>Açıklama</label>';}else{echo'<label>Explanation</label> ';}?><input name='aciklama"+sayac+"' type= 'text' id='aciklama"+sayac+"' class= 'form-control '></div></div><div class= 'col-md-3 col-sm-12 '><div class= 'form-group'><?php if($language===0){?><?php echo '<label>Başlama</label>';}else{echo'<label>Start</label>';}?><input name='baslama"+sayac+"' id='"+sayac+"Tarih' type= 'date' class= 'form-control '></div></div><div class= 'col-md-3 col-sm-12 '><div class= 'form-group '><?php if($language===0){?><?php echo '<label>Bitiş</label>';}else{echo'<label>Finish</label>';}?><input id='bitis"+sayac+"' type='date' name='bitis"+sayac+"' class= 'form-control'></div></div><div class= 'col-md-2 col-sm-12'><label>&nbsp;</label><div class= 'form-group '><button id= '"+sayac+"' onclick='sil(id)' type= 'button' class= 'btn btn-danger' >&nbsp;<?php if($language===0){?><?php echo'Sil';}else{echo'Delete';}?>&nbsp;</button></div></div></div>");
	dizi.push("aciklama"+sayac);
	document.getElementById(sayac+"Tarih").value=sakla;
	document.getElementById("bitis"+sayac).value=sakla;
	sayac=sayac+1;
	

})
$('#kaydet').click(function(){
	var tezTurkce=$("input[name=tezTurkce]").val();
	var tezIngilizce=$("input[name=tezIngilizce]").val();
	var tezamac=$("#tezamac").val();
	var tezTanim=$("#teztanim").val();
	var tezHipotez=$("#tezhipotez").val();
	var tezMotivasyon=$("#tezmotivasyon").val();
	var konudetay=$('#konudetay').val();
	var kaynak1=$("input[name=kaynak1]").val();
	var kaynak1Tarih=$("input[name=kaynak1Tarih]").val();
		var kaynak2=$("input[name=kaynak2]").val();
	var kaynak2Tarih=$("input[name=kaynak2Tarih]").val();
		var kaynak3=$("input[name=kaynak3]").val();
	var kaynak3Tarih=$("input[name=kaynak3Tarih]").val();
		var kaynak4=$("input[name=kaynak4]").val();
	var kaynak4Tarih=$("input[name=kaynak4Tarih]").val();
		var kaynak5=$("input[name=kaynak5]").val();
	var kaynak5Tarih=$("input[name=kaynak5Tarih]").val();
		var kaynak6=$("input[name=kaynak6]").val();
	var kaynak6Tarih=$("input[name=kaynak6Tarih]").val();
		var kaynak7=$("input[name=kaynak7]").val();
	var kaynak7Tarih=$("input[name=kaynak7Tarih]").val();
		var kaynak8=$("input[name=kaynak8]").val();
	var kaynak8Tarih=$("input[name=kaynak8Tarih]").val();
		var kaynak9=$("input[name=kaynak9]").val();
	var kaynak9Tarih=$("input[name=kaynak9Tarih]").val();
		var kaynak10=$("input[name=kaynak10]").val();
	var kaynak10Tarih=$("input[name=kaynak10Tarih]").val();
		var kaynak11=$("input[name=kaynak11]").val();
	var kaynak11Tarih=$("input[name=kaynak11Tarih]").val();
		var kaynak12=$("input[name=kaynak12]").val();
	var kaynak12Tarih=$("input[name=kaynak12Tarih]").val();
		var kaynak13=$("input[name=kaynak13]").val();
	var kaynak13Tarih=$("input[name=kaynak13Tarih]").val();
		var kaynak14=$("input[name=kaynak14]").val();
	var kaynak14Tarih=$("input[name=kaynak14Tarih]").val();
		var kaynak15=$("input[name=kaynak15]").val();
	var kaynak15Tarih=$("input[name=kaynak15Tarih]").val();
	var literatur=$("#literaturInput").val();
	var yontemBolum=$("#yontemBolum").val();
	var ozgun=$("#ozgun").val();
	var yaygin=$("#yaygin").val();
	var kurum=$("#Kurum").val();
	var destekleyenKurum=$("input[name=destekleyenKurum]").val();
	var ikinciDanisman=$("input[name=ikinciDanisman]").val();
	var tezDisiplin=$("input[name=tezDisiplin]").val();
	var ticariUrun=$("input[name=ticariUrun]").val();
	var destek=$("input[name=destek]").val();
	var calismaLab=$("input[name=calismaLab]").val();
	var calismaAlan=$("input[name=calismaAlan]").val(); 	 	 
	var radio =$("input[name=radio]:checked").val(); 
	var radio1=$("input[name=radio1]:checked").val(); 
	var radio2=$("input[name=radio2]:checked").val(); 
	var radio4=$("input[name=radio4]:checked").val(); 
	var radio5=$("input[name=radio5]:checked").val(); 
	var radio6=$("input[name=radio6]:checked").val(); 
	var radio7=$("input[name=radio7]:checked").val(); 
	var radio8=$("input[name=radio8]:checked").val(); 
	var radio9=$("input[name=radio9]:checked").val(); 
	var radio10=$("input[name=radio10]:checked").val(); 
	var radio11=$("input[name=radio11]:checked").val(); 
	var radio12=$("input[name=radio12]:checked").val(); 
	var radio13=$("input[name=radio13]:checked").val(); 
	var radio14=$("input[name=radio14]:checked").val(); 
	var radio15=$("input[name=radio15]:checked").val(); 
	var radio16=$("input[name=radio16]:checked").val(); 
	var radioKontrol=document.querySelector('input[name="radio"]:checked');
	var radioKontrol1=document.querySelector('input[name="radio1"]:checked');
	var radioKontrol2=document.querySelector('input[name="radio2"]:checked');
	var radioKontrol4=document.querySelector('input[name="radio4"]:checked');
	var radioKontrol5=document.querySelector('input[name="radio5"]:checked');
	var radioKontrol6=document.querySelector('input[name="radio6"]:checked');
	var radioKontrol7=document.querySelector('input[name="radio7"]:checked');
	var radioKontrol8=document.querySelector('input[name="radio8"]:checked');
	var radioKontrol9=document.querySelector('input[name="radio9"]:checked');
	var radioKontrol10=document.querySelector('input[name="radio10"]:checked');
	var radioKontrol11=document.querySelector('input[name="radio11"]:checked');
	var radioKontrol12=document.querySelector('input[name="radio12"]:checked');
	var radioKontrol13=document.querySelector('input[name="radio13"]:checked');
	var radioKontrol14=document.querySelector('input[name="radio14"]:checked');
	var radioKontrol15=document.querySelector('input[name="radio15"]:checked');
	var radioKontrol16=document.querySelector('input[name="radio16"]:checked');
	var calismalab = document.getElementById("calismalab").value;
	var ticariurun = document.getElementById("ticariurun").value;
	var destekYuzde = document.getElementById("destekYuzde").value;
	var patentalinmasi = document.getElementById("patentalinmasi").value;
	var tezdisiplin = document.getElementById("tezdisiplin").value;
	var ikincidanisman = document.getElementById("ikincidanisman").value;
	var destekleyenkurum = document.getElementById("destekleyenkurum").value;
	var calismaalan = document.getElementById("calismaalan").value;
	var ogrenciadi = document.getElementById("ogrenciadi").value;
	var ogrencisoyad = document.getElementById("ogrencisoyad").value;
	var ogrencinumara = document.getElementById("ogrencinumara").value;
		var bilimdali = document.getElementById("bilimdali").value;
		var danismanad = document.getElementById("danismanad").value;
		var danismansoyad = document.getElementById("danismansoyad").value;
var anabilimdali = document.getElementById("anabilimdali").value;
    if(radioKontrol == null || radioKontrol1 == null || radioKontrol2 == null || radioKontrol4 == null || radioKontrol5 == null || radioKontrol6 == null || radioKontrol7 == null || radioKontrol8 == null ||
       radioKontrol9 == null || radioKontrol10 == null || radioKontrol11 == null || radioKontrol12 == null ||
       radioKontrol13 == null || radioKontrol14 == null ||
       radioKontrol15 == null ||  calismalab >100 || calismalab <0 ||
        ticariurun >100 || ticariurun <0 ||
        destekYuzde >100 || destekYuzde <0 ||
       patentalinmasi >100 || patentalinmasi <0 ||
        tezdisiplin >100 || tezdisiplin <0 ||
       ikincidanisman >100 || ikincidanisman <0 ||
       calismaalan==null || calismaalan=="") { 
       	if(language==0){
       	       	Swal.fire({
       	  icon: 'error',
       	  title: 'Hata',
       	  text: 'Lütfen Belirtilen Alanları Boş Geçmeyiniz!',
       	  showConfirmButton: false,
       	})}
       	       	else
       	       	{
       	       	       	       	Swal.fire({
       	  icon: 'error',
       	  title: 'Error',
       	  text: 'Please do not leave the specified fields blank!',
       	  showConfirmButton: false,
       	})	
       	       	}
              document.getElementById("hata14").style.visibility = "visible";
            } 
else{
	var i;
	for (i = 0; dizi.length > i; i++) {
		if(dizi[i]==null)
		{
		}
		else {
			aciklama.push($("input[name=aciklama"+i+"]").val());
			baslama.push($("input[name=baslama"+i+"]").val());
			bitis.push($("input[name=bitis"+i+"]").val());
		}
}
	$.ajax({
		url: "http://20.67.50.120:8000/",
		type:"POST",
		dataType:"json",
		data:{
			'tezTurkce':tezTurkce,
			'tezIngilizce':tezIngilizce,
			'tezamac':tezamac,
			'tezTanim':tezTanim,
			'tezHipotez':tezHipotez,
			'tezMotivasyon':tezMotivasyon,
			'konudetay':konudetay,
			'kaynak1':kaynak1,
			'kaynak1Tarih':kaynak1Tarih,
			'kaynak2':kaynak2,
			'kaynak2Tarih':kaynak2Tarih,
			'kaynak3':kaynak3,
			'kaynak3Tarih':kaynak3Tarih,
			'kaynak4':kaynak4,
			'kaynak4Tarih':kaynak4Tarih,
			'kaynak5':kaynak5,
			'kaynak5Tarih':kaynak5Tarih,
			'kaynak6':kaynak6,
			'kaynak6Tarih':kaynak6Tarih,
			'kaynak7':kaynak7,
			'kaynak7Tarih':kaynak7Tarih,
			'kaynak8':kaynak8,
			'kaynak8Tarih':kaynak8Tarih,
			'kaynak9':kaynak9,
			'kaynak9Tarih':kaynak9Tarih,
			'kaynak10':kaynak10,
			'kaynak10Tarih':kaynak10Tarih,
			'kaynak11':kaynak11,
			'kaynak11Tarih':kaynak11Tarih,
			'kaynak12':kaynak12,
			'kaynak12Tarih':kaynak12Tarih,
			'kaynak13':kaynak13,
			'kaynak13Tarih':kaynak13Tarih,
			'kaynak14':kaynak14,
			'kaynak14Tarih':kaynak14Tarih,
			'kaynak15':kaynak15,
			'kaynak15Tarih':kaynak15Tarih,
			'literatur':literatur,
			'yontemBolum':yontemBolum,
			'ozgun':ozgun,
			'yaygin':yaygin,
			'kurum':kurum,
			'aciklama':aciklama,
			'baslama':baslama,
			'bitis':bitis,
			'radio':radio,
			'radio1':radio1,
			'radio2':radio2,
			'radio4':radio4,
			'radio5':radio5,
			'radio6':radio6,
			'radio7':radio7,
			'radio8':radio8,
			'radio9':radio9,
			'radio10':radio10,
			'radio11':radio11,
			'radio12':radio12,
			'radio13':radio13,
			'radio14':radio14,
			'radio15':radio15,
			'radio16':radio16,
			'calismaAlan':calismaAlan,
			'destekleyenKurum':destekleyenKurum,
			'ikinciDanisman':ikinciDanisman,
			'tezDisiplin':tezDisiplin,
			'ticariUrun':ticariUrun,
			'calismaLab':calismaLab,
			'patentalinmasi':patentalinmasi,
			'destek':destek,
			'ogrenciadi':ogrenciadi,
			'ogrencisoyad':ogrencisoyad,
			'ogrencinumara':ogrencinumara,
			'bilimdali':bilimdali,
			'danismanad':danismanad,
			'danismansoyad':danismansoyad,
			'anabilimdali':anabilimdali,
			'formAdi':formName,

		}, 
		success: function(result)
		{
			console.log(result);
Swal.fire({
  icon: 'success',
  title: '<?php if($language===0)
					{echo"Kayıt İşlemi Gerçekleşti";
					}
					else{
					echo "Registration Has Been Completed";
					}?>',
  showConfirmButton: false,
})
		}
})
}
})
}
);
function sil(silinecek)
{
	var silgi="#div"+silinecek;
	delete dizi[silinecek];
	$(silgi).remove();

}
</script>
</body>
</html>