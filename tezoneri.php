<?php include 'header.php'; ?>
<?php include 'navigator.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<div id="tezoneriformu">
	<form action="form30.php" target="_blank" method="post">
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				
				<div align="Center">
					<p><h5>FEN BİLİMLERİ ENSTİTÜSÜ MÜDÜRLÜĞÜNE</h5></p>
					<p>Anabilim Dalımız yüksek lisans öğrencisinin danışmanı ile birlikte önerdiği tez konusu aşağıda verilmiş olup tez çalışmalarının Anabilim Dalımız bünyesinde yürütülmesinin uygun olduğuna ve konunun Enstitüye arzına;</p>
				</div>
				<div>
					<div class="custom-control custom-checkbox mb-5" align="Center">
						<input onclick="kontrol(value)" value="0"; type="checkbox" class="custom-control-input" id="customCheck5" name="oybirligi">
						<label class="custom-control-label" for="customCheck5"><b>oybirliği/oyçokluğu(</b><input type="text" id="oybirligi1"   name="oybirligi1" size="1" ><b>/</b><input type="text" id="oybirligi2"   name="oybirligi2" size="1" ><b>)</b><label></label> ile karar verilmiştir.</label>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							
							<div class="custom-control custom-radio mb-5">
								<input type="radio" onclick="kabulet1(value)" id="kabul1" class="custom-control-input" name="kabul" value="0" checked>
								<label class="custom-control-label" for="kabul1" >Önerildiği şekliyle kabul edilmiştir</label>
							</div>
							<div class="custom-control custom-radio mb-5">
								<input type="radio" onclick="kabulet2(value)" id="kabul2" class="custom-control-input" name="kabul" value="1" required>
								<label class="custom-control-label" for="kabul2">Düzeltme yapıldıktan sonra kabul edilmiştir</label>
							</div>
							
							
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Anabilim Dalı Bilgileri</h4>
				</div>
			</div>
			<?php $language=0;?>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Anabilim Dalını Seçiniz</label>
				<div class="col-sm-12 col-md-10">
					<select class="custom-select col-12" id="anaBilimdali" name="anaBilimdali" required>
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
		</div>
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Öğrenci Bilgileri</h4>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Adınızı Giriniz</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" placeholder="Lütfen Adınızı Giriniz" type="text" name="ad" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Soyadınızı Giriniz</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" placeholder="Lütfen Soyadınızı Giriniz" type="text" name="soyad" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Öğrenci Numaranızı Giriniz</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="number" placeholder="Lütfen Öğrenci Numaranızı Giriniz" name="ogrenciNo" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Bilim Dalı</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Lütfen Bilim Dalını Giriniz" name="bilimdali">
				</div>
			</div>
			
			
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Danışman Adı</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Lütfen Danışmanınızın Adını Giriniz" id="danismanAd" name="danismanad" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Danışman Soyadı</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Lütfen Danışmanınızın Soyadını Giriniz" id="danismanSoyad" name="danismansoyad" required>
				</div>
			</div>
		</div>
		
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Tez Konusu Bilgileri</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						
					</div>
				</div>
				
				
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input onclick="disableTxt()" type="radio"  id="ilkteklif1" name="ilkteklifdegisiklik" class="custom-control-input" value="0" required>
						<label class="custom-control-label" for="ilkteklif1">İlk Teklif</label>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input  onclick="undisableTxt()" type="radio" id="degisiklik1" name="ilkteklifdegisiklik" class="custom-control-input" value="1" required>
						
						<label class="custom-control-label" for="degisiklik1" >Değişiklik</label>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<input class="form-control" id="gerekce" type="text" name="gerekce" placeholder="Gerekçenizi Giriniz" disabled>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<label>Türkçe Tez Başlığı</label>
						<input type="text" class="form-control" name="turkcetezbasligi" placeholder="Tez Başlığını Giriniz" required>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<label>Anahtar Kelimeler</label>
						<input type="text" class="form-control" name="anahtarkelimeler" placeholder="Anahtar Kelimeleri Giriniz" required>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="form-group">
						<label>İngilizce Tez Başlığı</label>
						<input type="text" class="form-control" name="ingilizcetezbasligi" placeholder="Tez Başlığını Giriniz" required>
					</div>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Tez Dili</label>
				<div class="col-sm-12 col-md-10">
					<select class="custom-select col-12" name="dilSecim" id="language" required>
						<option value="">Seçiniz</option>
						<option value="tr">TR</option>
						<option value="eng">ENG</option>
					</select>
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
						<input type="radio" onclick="calismatar0(value)" value="0" id="calismatarzi1" name="calismatarzi" class="custom-control-input">
						<label class="custom-control-label"  for="calismatarzi1">Deneysel</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio"  onclick="calismatar1(value)" id="calismatarzi2" name="calismatarzi" value="1" class="custom-control-input">
						<label class="custom-control-label" for="calismatarzi2">Teorik</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" onclick="calismatar2(value)"  id="calismatarzi3" name="calismatarzi" value="2" class="custom-control-input" checked>
						<label class="custom-control-label" for="calismatarzi3">Simülasyon</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" onclick="calismatar3(value)" value="3" id="calismatarzi4" name="calismatarzi" class="custom-control-input">
						<label class="custom-control-label" for="calismatarzi4">Sistem/Araç/Yazılım Geliştirme</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" onclick="calismatar4(value)" value="4" id="calismatarzi5" name="calismatarzi" class="custom-control-input" required>
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
						
						<input type="text" class="form-control" name="endustrialaniA" placeholder="A..." required>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="form-group">
						
						<input type="text" class="form-control" name="endustrialaniB" placeholder="B..." required>
					</div>
				</div>
			</div>
		</div>
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Ekler</h4>
					<p class="mb-30" style="color: red;">
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label>Etik Kurul İzni</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input value="0" type="radio" id="etikkurulizni1" onclick="etikkurulbelgeyok()" name="etikkurulizni" class="custom-control-input" required>
						<label class="custom-control-label" for="etikkurulizni1" checked>Gerekmiyor</label>
					</div>
					
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input value="1" type="radio" id="etikkurulizni2" onclick="etikkurulbelgevar()" name="etikkurulizni" class="custom-control-input" required>
						<label class="custom-control-label" for="etikkurulizni2">Belge var</label>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						
						<input  name="etikKurul" id="etikKurul" type="file" class="form-control-file form-control height-auto">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label>Veri Kullanım İzni</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" onclick="verikullanimiiznibelgeyok()" value="0" id="verikullanimiizni1" name="verikullanimiizni" class="custom-control-input">
						<label class="custom-control-label" for="verikullanimiizni1">Gerekmiyor</label>
						
					</div>
					
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input value="1" onclick="verikullanimiiznibelgevar()" type="radio" value="1" id="verikullanimiizni2" name="verikullanimiizni" class="custom-control-input" required>
						<label class="custom-control-label" for="verikullanimiizni2">Belge var</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						
						<input  name="veriKullanim" id="veriKullanim" type="file" accept="application/pdf" class="form-control-file form-control height-auto">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label>Kurum/Kuruluş İzni</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" onclick="kurumkurulusiznibelgeyok()" value="0" id="kurumkurulusizni1" name="kurumkurulusizni" class="custom-control-input" required>
						<label class="custom-control-label" for="kurumkurulusizni1">Gerekmiyor</label>
						
					</div>
					
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio"onclick="kurumkurulusiznibelgevar()"  value="1" id="kurumkurulusizni2" name="kurumkurulusizni" class="custom-control-input" required>
						<label class="custom-control-label" for="kurumkurulusizni2">Belge var</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						
						<input  name="kurumizin" id="kurumizin" type="file" accept="application/pdf" class="form-control-file form-control height-auto">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label>Fikir Hak Sahipliği Beyanı</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" value="0" id="fikirhaksahipliğibeyani1" name="fikirhaksahipliğibeyani" class="custom-control-input" onclick="fikirhaksahipliğibeyaniyok()" >
						<label class="custom-control-label" for="fikirhaksahipliğibeyani1">Gerekmiyor</label>
						
					</div>
					
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="custom-control custom-radio mb-5">
						<input type="radio" value="1" id="fikirhaksahipliğibeyani2" name="fikirhaksahipliğibeyani" onclick="fikirhaksahipliğibeyanivar()" class="custom-control-input" required>
						<label class="custom-control-label" for="fikirhaksahipliğibeyani2">Belge var</label>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						
						<input  name="fikirHak" id="fikirHak" type="file" accept="application/pdf" class="form-control-file form-control height-auto">
					</div>
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
		</div>
		
		
	</div>
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">ENSTİTÜ YÖNETİM KURULU KARARI</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label>Öğrenci Derslerini</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" value="0" id="ogrenciderstamamlama1" onclick="ilkteklifevet(value)" name="ogrenciderstamamlama" class="custom-control-input" checked>
					<label class="custom-control-label" for="ogrenciderstamamlama1">Tamamlamıştır</label>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-12">
				<div class="custom-control custom-radio mb-5">
					<input type="radio" onclick="ilkteklifhayır(value)" value="1" id="ogrenciderstamamlama2" name="ogrenciderstamamlama" class="custom-control-input" required>
					<label class="custom-control-label" for="ogrenciderstamamlama2">Tamamlamamıştır</label>
				</div>
			</div>
		</div>
		<div class="form-group" align="right">
			<button type="submit" id="pdfindir" name="pdfkaydet"class="btn btn-danger">PDF</button>
			<button type="button" id="tezonerikaydet" name="tezonerikaydet" class="btn btn-primary">Kaydet</button>
		</div>
		
	</div>
	<!--FOOTER-->
	<div class="footer-wrap pd-20 mb-20 card-box" style="background-color:white;">
		<a href="http://fbe.firat.edu.tr/" style=" text-decoration:none; color:black;"  >Fırat Üniversitesi - Fen Bilimleri Enstitüsü</a>
	</div>
</form>
<script>
var ogrenciderstamamlama;
		function ilkteklifevet(value)
	{
ogrenciderstamamlama=value;
	}
	function ilkteklifhayır(value)
	{
ogrenciderstamamlama=value;
	}
	document.getElementById("ilkteklif1").checked = true;
	function disableTxt() {
document.getElementById("gerekce").disabled = true;
document.getElementById("gerekce").value = "Yok";
}
function undisableTxt() {
document.getElementById("gerekce").disabled = false;
}
function kontrol(value)
{
if(value==0)
{
value=1;
document.getElementById("customCheck5").value=value;
document.getElementById("oybirligi1").disabled = true;
document.getElementById("oybirligi2").disabled = true;
document.getElementById("oybirligi1").value = "0";
document.getElementById("oybirligi2").value = "0";
}
else
{
value=0;
document.getElementById("customCheck5").value=value;
document.getElementById("oybirligi1").disabled = false;
document.getElementById("oybirligi2").disabled = false;
document.getElementById("oybirligi1").value = "";
document.getElementById("oybirligi2").value = "";
}
	}
</script>
</div>
<script>
		document.getElementById("etikKurul").style.display = "none";
		document.getElementById("veriKullanim").style.display = "none";
		document.getElementById("kurumizin").style.display = "none";
		document.getElementById("fikirHak").style.display = "none";
	document.getElementById("etikkurulizni1").checked = true;
	document.getElementById("verikullanimiizni1").checked = true;
	document.getElementById("kurumkurulusizni1").checked = true;
	document.getElementById("fikirhaksahipliğibeyani1").checked = true;
	var formName="Form30";
	var tarz=2;
	function calismatar0(value)
	{
		tarz=value;
	}
	function calismatar1(value)
	{
		tarz=value;
	}
	function calismatar2(value)
	{
		tarz=value;
	}
	function calismatar3(value)
	{
		tarz=value;
	}
	function calismatar4(value)
	{
		tarz=value;
	}
	function etikkurulbelgeyok()
	{
		document.getElementById("etikKurul").style.display = "none";
	}
		function etikkurulbelgevar()
	{
		document.getElementById("etikKurul").style.display = "inherit";
	}
		function verikullanimiiznibelgeyok()
	{
		document.getElementById("veriKullanim").style.display = "none";
	}
		function verikullanimiiznibelgevar()
	{
		document.getElementById("veriKullanim").style.display = "inherit";
	}
			function kurumkurulusiznibelgeyok()
	{
		document.getElementById("kurumizin").style.display = "none";
	}
		function kurumkurulusiznibelgevar()
	{
		document.getElementById("kurumizin").style.display = "inherit";
	}
				function fikirhaksahipliğibeyaniyok()
	{
		document.getElementById("fikirHak").style.display = "none";
	}
		function fikirhaksahipliğibeyanivar()
	{
		document.getElementById("fikirHak").style.display = "inherit";
	}
	var kabul=0;
					function kabulet1(value)
	{
		kabul=value;;
	}
		function kabulet2(value)
	{
		kabul=value;
	}
	function myFunction() {
document.getElementById("degisiklik1").disabled = true;
}
$(document).ready(function() {
$("#tezonerikaydet").click(function() {
var ad = $("input[name=ad]").val();
var soyad = $("input[name=soyad]").val();
var ogrenciNo = $("input[name=ogrenciNo]").val();
var bilimdali = $("input[name=bilimdali]").val();
var oybirligi = $("input[name=oybirligi]").val();
var oybirligi1 = $("input[name=oybirligi1]").val();
var oybirligi2 = $("input[name=oybirligi2]").val();
//sonsuz döngüye giriyor
var ilkteklifdegisiklik = 0;
//-------------------------------
var gerekce = $("input[name=gerekce]").val();
var turkcetezbasligi = $("input[name=turkcetezbasligi]").val();
var calismatarzi = document.querySelector('input[name="calismatarzi"]:checked');
var anahtarkelimeler = $("input[name=anahtarkelimeler]").val();
var ingilizcetezbasligi = $("input[name=ingilizcetezbasligi]").val();
var endustrialaniA = $("input[name=endustrialaniA]").val();
var endustrialaniB = $("input[name=endustrialaniB]").val();
var danismanad = document.getElementById("danismanAd").value;
var danismansoyad = document.getElementById("danismanSoyad").value;
var dilSecim = document.getElementById("language").value;
var etikKurul = document.getElementById("etikKurul");
var anaBilimdali = document.getElementById("anaBilimdali").value;
var dilSecim = document.getElementById("language").value;
var index=document.getElementById("anaBilimdali").selectedIndex
var fikirhaksay;
var veriKullanimsay;
var etikKurulsay;
var kurumizinsay="";
var rasgele=0;
var anahtarkelimetutucu=anahtarkelimeler;
anahtarkelimetutucu=anahtarkelimetutucu.replace(","," ");
anahtarkelimetutucu=anahtarkelimetutucu.replace("."," ");
var anahtarsay=anahtarkelimetutucu.split(' ').length;
var anahrtarkelime_dogruluk=0;
var hatalar="";
if(anahtarsay>5)
{
	anahrtarkelime_dogruluk=1;
	hatalar=hatalar+"En fazla 5 tane anahtar kelime girilebilir!\n";
}
else
{
	anahrtarkelime_doğruluk=0;
}
if(oybirligi1=="" || oybirligi1==null ||
	oybirligi2=="" || oybirligi2==null ||
	ad=="" || ad==null ||
	soyad=="" || soyad==null ||
	ogrenciNo=="" || ogrenciNo==null ||
	bilimdali=="" || bilimdali==null ||
	danismanad=="" || danismanad==null ||
	danismansoyad=="" || danismansoyad==null ||
	turkcetezbasligi=="" || turkcetezbasligi==null ||
	ingilizcetezbasligi=="" || ingilizcetezbasligi==null ||
	anahtarkelimeler=="" || anahtarkelimeler==null ||
	endustrialaniA=="" || endustrialaniA==null ||
	endustrialaniB=="" || endustrialaniB==null ||
	anahrtarkelime_dogruluk==1||
	dilSecim==""||dilSecim==null||
	anaBilimdali==""||anaBilimdali==null)
{
	if(anaBilimdali==""||anaBilimdali==null)
	{
		hatalar=hatalar+"Anabilim Dalı Bilgilerini Doldurunuz!\n";
	}
	if(oybirligi1=="" || oybirligi1==null ||
	oybirligi2=="" || oybirligi2==null)
	{
		hatalar=hatalar+"Oy Alanı Kısmı Boş Geçilemez!\n";
		}
		if(ad=="" || ad==null ||
	soyad=="" || soyad==null ||
	ogrenciNo=="" || ogrenciNo==null ||
	bilimdali=="" || bilimdali==null ||
	danismanad=="" || danismanad==null ||
	danismansoyad=="" || danismansoyad==null)
		{
			hatalar=hatalar+"Öğrenci Bilgilerini Doldurunuz!\n";
		}
		if(	turkcetezbasligi=="" || turkcetezbasligi==null ||
	ingilizcetezbasligi=="" || ingilizcetezbasligi==null ||
	anahtarkelimeler=="" || anahtarkelimeler==null ||
	endustrialaniA=="" || endustrialaniA==null ||
	endustrialaniB=="" || endustrialaniB==null ||
	dilSecim==""||dilSecim==null)
		{
			hatalar=hatalar+"Tez Konusu Bilgilerini Doldurunuz!\n";
		}
			Swal.fire({
						icon: 'error',
						title: 'HATA',
						text: hatalar,
						
						})
	}
else{
	var fikirHak = document.getElementById("fikirHak");
	if (fikirHak.files && fikirHak.files[0]){ //dosya var ve resim türünde ise
		var reader = new FileReader(); //FileReader class kur
		reader.onload = function() { //veriyi yükle
			var fikirHak = reader.result; //dosya verisi
			$.ajax({ //dosya data sını ajax.php ye postala
				url: "fikirHakyukle.php",
				type: "POST",
				data: {
					"fikirHak":fikirHak,
					"ad":ad,
					"soyad":soyad,
					"ogrenciNo":ogrenciNo
			},
				dataType: "json",
				success: function(data) {
				
					fikirhaksay=data.fikirHak;
				
				}
			});
		}
		reader.readAsDataURL(fikirHak.files[0]); //oku
	}
function verikullanimsaniye(){
	var veriKullanim = document.getElementById("veriKullanim");
	if (veriKullanim.files && veriKullanim.files[0]){ //dosya var ve resim türünde ise
		var reader = new FileReader(); //FileReader class kur
		reader.onload = function() { //veriyi yükle
			var veriKullanim = reader.result; //dosya verisi
			$.ajax({ //dosya data sını ajax.php ye postala
				url: "verikullanimyukle.php",
				type: "POST",
				data: {
					"veriKullanim":veriKullanim,
					"ad":ad,
					"soyad":soyad,
					"ogrenciNo":ogrenciNo
			},
				dataType: "json",
				success: function(data) {
		veriKullanimsay=data.veriKullanim;
			
				}
			});
		}
		reader.readAsDataURL(veriKullanim.files[0]); //oku
	}
}
verikullanimsaniye()
	function etikKurulsaniye(){
	var etikKurul = document.getElementById("etikKurul");
	if (etikKurul.files && etikKurul.files[0]){ //dosya var ve resim türünde ise
		var reader = new FileReader(); //FileReader class kur
		reader.onload = function() { //veriyi yükle
			var etikKurul = reader.result; //dosya verisi
			$.ajax({ //dosya data sını ajax.php ye postala
				url: "etikkurulyukle.php",
				type: "POST",
				data: {
					"etikKurul":etikKurul,
					"ad":ad,
					"soyad":soyad,
					"ogrenciNo":ogrenciNo
			},
				dataType: "json",
				success: function(data) {
					
								etikKurulsay=data.etikKurul;
				}
			});
		}
		reader.readAsDataURL(etikKurul.files[0]); //oku
	}
}
etikKurulsaniye()
	function kurumizinsaniye(){
	

// 1 ve 100 arasında sayı
	var kurumizin = document.getElementById("kurumizin");
	if (kurumizin.files && kurumizin.files[0]){ //dosya var ve resim türünde ise
		var reader = new FileReader(); //FileReader class kur
		reader.onload = function() { //veriyi yükle
			var kurumizin = reader.result; //dosya verisi
			$.ajax({ //dosya data sını ajax.php ye postala
				url: "kurumizinyukle.php",
				type: "POST",
				data: {
					"kurumizin":kurumizin,
					"ad":ad,
					"soyad":soyad,
					"rasgele":rasgele,
					"ogrenciNo":ogrenciNo
			},
				dataType: "json",
				success: function(data) {
					kurumizinsay=data.kurumizin;
console.log(kurumizinsay);
				}
			});
		}
		reader.readAsDataURL(kurumizin.files[0]); //oku
	}
}
kurumizinsaniye()


function izinkurum(yonlendir){
$.ajax({
	//url:"my.php",
	url:"http://20.67.50.120:8000/",
	type:"POST",
	dataType:"json",
	data:{
		'ad':ad,
		'soyad':soyad,
		'ogrenciNo':ogrenciNo,
		'danismanad':danismanad,
		'danismansoyad':danismansoyad,
		'anaBilimdali':anaBilimdali,
		'bilimdali':bilimdali,
		'dilSecim':dilSecim,
		'oybirligi':oybirligi,
		'oybirligi1':oybirligi1,
		'oybirligi2':oybirligi2,
		'kabul':kabul,
		'calismatarzi':tarz,
		'ilkteklifdegisiklik':ilkteklifdegisiklik,
		'gerekce':gerekce,
		'turkcetezbasligi':turkcetezbasligi,
		'anahtarkelimeler':anahtarkelimeler,
		'ingilizcetezbasligi':ingilizcetezbasligi,
		'endustrialaniA':endustrialaniA,
		'endustrialaniB':endustrialaniB,
		'ogrenciderstamamlama':ogrenciderstamamlama,
		'fikirhaksay':fikirhaksay,
		'veriKullanimsay':veriKullanimsay,
		'etikKurulsay':etikKurulsay,
		'kurumizinsay':kurumizinsay,
		'formAdi':formName,
	},
	success: function(result)
	{
			console.log(result);
		if(yonlendir==0)
		{
		
			
			var language;
			if(result.dilSecim=="tr")
			{
			language=0;
			}
			else
			{
				language=1;
			}
			
			window.location.href="ayrintilar.php?language="+language+"&ad="+ad+"&soyad="+soyad+"&ogrenciNo="+ogrenciNo+"&anaBilimdali="+index+"&bilimdali="+bilimdali+"&danismanad="+danismanad+"&danismansoyad="+danismansoyad+"&turkcetezbasligi="+turkcetezbasligi+"&ingilizcetezbasligi="+ingilizcetezbasligi;}
	}
})}
Swal.fire({
title: "Form 31'i doldurmak ister misiniz?",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
cancelButtonText: 'Hayır',
confirmButtonText: 'Evet'
}).then((result) => {
if (result.isConfirmed) {
	izinkurum(0)
Swal.fire({
icon: 'success',
title: 'Form 31 yükleniyor...',
showConfirmButton: false,
})
}
else{
	izinkurum()
}
})
}
})});
</script>
</body>
</html>