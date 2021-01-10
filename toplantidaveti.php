<?php include 'header.php'; ?>
<?php include 'navigator.php'; ?>
<?php $language=0; ?>
<form action="form33.php" target="_blank" method="POST" >
	<!-- ÖĞRENCİ BİLGİLERİ-->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Öğrenci Bilgileri</h4>
			</div>
		</div>
		<!-- ÖĞRENCİ ADI,SOYADI,NUMARASI,KAYIT TARİHİ,PROGRAMI-->
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
			<label class="col-sm-12 col-md-2 col-form-label">Adınız</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Adınızı Giriniz" type="text" name="ogrenciadi"  required disabled>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Soyadınız</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Soyadınızı Giriniz" type="text" name="ogrencisoyadi" required disabled>
			</div>
		</div>
		
		
		
		
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Kayıt Tarihiniz</label>
			<div class="col-sm-12 col-md-10">
				<input type="date" class="form-control" id="ogrencikayittarihi"  placeholder="Lütfen Kayıt Tarihini Seçiniz" name="ogrencikayittarihi" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Programınız</label>
			<div class="col-sm-12 col-md-10">
				<select class="custom-select col-12" name="ogrenciprogrami" id="ogrenciprogrami" required>
					<option value="">Seçiniz</option>
					<option value="Doktora">Doktora</option>
					<option value="Bütünleşik Doktora">Bütünleşik Doktora</option>
				</select>
			</div>
		</div>
	</div>
	
	
	
	<!-- TOPLANTI BİLGİLERİ-->
	
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Toplantı Bilgileri</h4>
			</div>
		</div>
		
		<!-- TOPLANTI YERİ,TARİHİ VE SAATİ-->
		
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Toplantı Yeri</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Toplantı Yerini Giriniz" type="text" name="toplantiyeri" maxlength="93" required>
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Toplantı Tarihi</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Toplantı Tarihini Seçiniz" id="toplantitarihi" name="toplantitarihi" type="date" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Toplantı Saati</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Toplantı Saatini Seçiniz" name="toplantisaati" type="time" required>
			</div>
		</div>
		
		
		
	</div>
	
	<!-- ANABİLİM DALI BAŞKANI BİLGİLERİ-->
	
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Anabilim Dalı Başkanı Bilgileri</h4>
			</div>
		</div>
		<!-- ANABİLİM DALI BAŞKANININ ADI,SOYADI VE ÜNVANI-->
		
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Adı</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Anabilim Dalı Başkanının Adını Giriniz" type="text" name="abdbaskaniadi" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Soyadı</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" placeholder="Lütfen Anabilim Dalı Başkanının Soyadını Giriniz" type="text" name="abdbaskanisoyadi" required>
			</div>
		</div>
		
		
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Ünvanı</label>
			<div class="col-sm-12 col-md-10">
				<select class="custom-select col-12" name="abdbaskaniUnvani" id="abdbaskaniUnvani" required>
					<option value="">Seçiniz</option>
					<option value="Profesör">Profesör</option>
					<option value="Doçent">Doçent</option>
					<option value="Yardımcı Doçent">Yardımcı Doçent</option>
					<option value="Öğretim Görevlisi">Öğretim Görevlisi</option>
					<option value="Araştırma Görevlisi">Araştırma Görevlisi</option>
					<option value="Okutman">Okutman</option>
					<option value="Uzman">Uzman</option>
					
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
		<!-- ÖĞRENCİ ADI,SOYADI,NUMARASI,KAYIT TARİHİ,PROGRAMI-->
		<div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label">Tez Dili</label>
				<div class="col-sm-12 col-md-10">
					<input placeholder="Tez Yazım Dili" class="form-control" name="dilSecim" id="language" disabled>
						
				</div>
			</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Türkçe Tez Başlığı</label>
			<div class="col-sm-12 col-md-10">
				<input type="text" name="turkcetezbasligi" id="turkcetezbasligi" class="form-control" placeholder="Tez Başlığını Giriniz" required disabled="">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">İngilizce Tez Başlığı</label>
			<div class="col-sm-12 col-md-10">
				<input type="text" name="ingilizcetezbasligi" id="ingilizcetezbasligi" class="form-control" placeholder="Tez Başlığını Giriniz" required disabled="">
			</div>
		</div>
		
	</div>
































	
	
	<!--TEZ İZLEME KOMİTESİ ÜYELERİ-->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<div class="pull-left">
				<h4 class="text-blue h4">Tez İzleme Komitesi Üyeleri Bilgileri</h4>
			</div>
		</div>
		<!--TEZ İZLEME KOMİTESİ ÜYELERİNİN ADLARI,SOYADLARI,ÜNVANLARI,KURUMLARI,E-POSTALARI,TARİH-->
		
		
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="form-group">
					<label class="text-blue">Öğretim Üyelerinin Adları</label>
					<input class="form-control" placeholder="Danışmanınızın Adını Giriniz" type="text" name="birinciogretimuyesininadi" required>
					<label>&nbsp;</label>
					<input class="form-control" placeholder="Anabilim Dalı Öğretim Üyesinin Adını Giriniz" type="text" name="ikinciogretimuyesininadi" required>
					<label>&nbsp;</label>
					<input class="form-control" placeholder="Başka Bir Anabilim Dalı Öğretim Üyesinin Adını Giriniz" type="text" name="ucuncuogretimuyesininadi" required>
				</div>
				
				<div class="form-group">
					<label class="text-blue">Öğretim Üyelerinin Anabilim Dalları</label>
					<select class="custom-select col-12" name="birinciogretimuyesininkurumu" id="birinciogretimuyesininkurumu" required>
						<option value="">Danışmanınızın Anabilim Dalını Seçiniz<?php if($language===0)
												{echo"";
												}
												else{
												echo "";
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
						</select><label>&nbsp;</label>
						
						
						
						<select class="custom-select col-12" name="ikinciogretimuyesininkurumu" id="ikinciogretimuyesininkurumu" required>
							<option value="">Anabilim Dalı Öğretim Üyesinin Anabilim Dalını Seçiniz<?php if($language===0)
													{echo"";
													}
													else{
													echo "";
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
							</select><label>&nbsp;</label>
							
							
							<select class="custom-select col-12" style="font-size:13.4px" name="ucuncuogretimuyesininkurumu" id="ucuncuogretimuyesininkurumu" required>
								<option value="">Başka Bir Anabilim Dalı Öğretim Üyesinin Anabilim Dalını Seçiniz<?php if($language===0)
														{echo"";
														}
														else{
														echo "";
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
					
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label class="text-blue" >Öğretim Üyelerinin Soyadları</label>
							<input class="form-control" placeholder="Danışmanınızın Soyadını Giriniz" type="text" name="birinciogretimuyesininsoyadi" required>
							<label>&nbsp;</label>
							<input class="form-control" placeholder="Anabilim Dalı Öğretim Üyesinin Soyadını Giriniz" type="text" name="ikinciogretimuyesininsoyadi" required>
							<label>&nbsp;</label>
							<input class="form-control" style="font-size:14.8px"placeholder="Başka Bir Anabilim Dalı Öğretim Üyesinin Soyadını Giriniz" type="text" name="ucuncuogretimuyesininsoyadi" required>
						</div>
						
						<div class="form-group">
							<label class="text-blue" >Öğretim Üyelerinin E-postaları</label>
							<input class="form-control" placeholder="Danışmanınızın E-postasını Giriniz" type="email" name="birinciogretimuyesininepostasi" required>
							<label>&nbsp;</label>
							<input class="form-control" placeholder="Anabilim Dalı Öğretim Üyesinin E-postasını Giriniz" type="email" name="ikinciogretimuyesininepostasi" required>
							<label>&nbsp;</label>
							<input class="form-control" style="font-size:14.8px"placeholder="Başka Bir Anabilim Dalı Öğretim Üyesinin E-postasını Giriniz" type="email" name="ucuncuogretimuyesininepostasi" required>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-12">
						<div class="form-group">
							<label class="text-blue" >Öğretim Üyelerinin Ünvanları</label>
							<select class="custom-select col-12" name="birinciogretimuyesininunvani" id="birinciogretimuyesininunvani" required>
								<option value="">Danışmanınızın Ünvanını Seçiniz</option>
								<option value="Profesör">Profesör</option>
								<option value="Doçent">Doçent</option>
								<option value="Yardımcı Doçent">Yardımcı Doçent</option>
								<option value="Öğretim Görevlisi">Öğretim Görevlisi</option>
								<option value="Araştırma Görevlisi">Araştırma Görevlisi</option>
								<option value="Okutman">Okutman</option>
								<option value="Uzman">Uzman</option>
								</select><label>&nbsp;</label>
								<select class="custom-select col-12" name="ikinciogretimuyesininunvani" id="ikinciogretimuyesininunvani" required>
									<option value="">Anabilim Dalı Öğretim Üyesinin Ünvanını Seçiniz</option>
									<option value="Profesör">Profesör</option>
									<option value="Doçent">Doçent</option>
									<option value="Yardımcı Doçent">Yardımcı Doçent</option>
									<option value="Öğretim Görevlisi">Öğretim Görevlisi</option>
									<option value="Araştırma Görevlisi">Araştırma Görevlisi</option>
									<option value="Okutman">Okutman</option>
									<option value="Uzman">Uzman</option>
									</select><label>&nbsp;</label>
									<select class="custom-select col-12" style="font-size:14.3px" name="ucuncuogretimuyesininunvani" id="ucuncuogretimuyesininunvani" required>
										<option value="">Başka Bir Anabilim Dalı Öğretim Üyesinin Ünvanını Seçiniz</option>
										<option value="Profesör">Profesör</option>
										<option value="Doçent">Doçent</option>
										<option value="Yardımcı Doçent">Yardımcı Doçent</option>
										<option value="Öğretim Görevlisi">Öğretim Görevlisi</option>
										<option value="Araştırma Görevlisi">Araştırma Görevlisi</option>
										<option value="Okutman">Okutman</option>
										<option value="Uzman">Uzman</option>
									</select>
								</div>
								
								<div class="form-group">
									<label class="text-blue" >Tarih</label>
									<input class="form-control" id="tikuyeleritarih1" placeholder="Lütfen Tarih Giriniz" type="date" name="tikuyeleritarih1" required>
									<label>&nbsp;</label>
									<input class="form-control" id="tikuyeleritarih2" placeholder="Lütfen Tarih Giriniz" type="date" name="tikuyeleritarih2" required>
									<label>&nbsp;</label>
									<input class="form-control"  id="tikuyeleritarih3" placeholder="Lütfen Tarih Giriniz" type="date" name="tikuyeleritarih3" required>
									<label>&nbsp;</label>
								</div>
							</div>
						</div>
						<div class="form-group" align="right">
							<button type="submit" id="pdfkaydet33" name="pdfkaydet33"class="btn btn-danger">PDF</button>
							<button type="button" id="tikgonder" name="tikgonder" class="btn btn-primary">Kaydet</button>
						</div>
					</div>
					
					
					
					
					
					
				</form>
				
				<!--FOOTER-->
				<div class="footer-wrap pd-20 mb-20 card-box" style="background-color:white;">
					
					<a href="http://fbe.firat.edu.tr/" style=" text-decoration:none; color:black;"  >Fırat Üniversitesi - Fen Bilimleri Enstitüsü</a>
				</div>
				
				<!--SCRİPT-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
				<script src="vendors/scripts/core.js"></script>
				<script src="vendors/scripts/script.min.js"></script>
				<script src="vendors/scripts/process.js"></script>
				<script src="vendors/scripts/layout-settings.js"></script>
				
				
				<script>
					function kontrolet(){
						var kontrol=document.getElementById("ogrencino").value;
					$.getJSON("http://20.67.50.120:8000/ogrbilgi?ogrencino="+kontrol,
	function(veri){

if(typeof(veri[0]) != "undefined"){
console.log(veri[0]);

		
	$("input[name=ogrenciadi").val("");
		$("input[name=ogrencisoyadi]").val("");
		

		
			var ogrenciadi=veri["1"];
			var ogrencisoyadi=veri["2"];
		

				$("input[name=ogrenciadi]").val(ogrenciadi);
	$("input[name=ogrencisoyadi]").val(ogrencisoyadi);

}

else{Swal.fire({
  icon: 'error',
  title: 'Hata',
  text: 'Öğrenci Bulunamadı',
  showConfirmButton: false,
})}



})
		$.getJSON("http://20.67.50.120:8000/form34?ogrencino="+kontrol,
	function(veri){
			console.log(veri["8"]);

$("input[name=turkcetezbasligi").val("");
		$("input[name=ingilizcetezbasligi]").val("");
		$("input[name=dilSecim").val("");
		
		
		
var dilSecim=veri["11"];
if(dilSecim=="tr"){
	dilSecim="Türkçe";
}
else{
	dilSecim="İngilizce";
}
		var turkcetezbasligi=veri["8"];
		var ingilizcetezbasligi=veri["10"];
		$("input[name=turkcetezbasligi]").val(turkcetezbasligi);
		$("input[name=ingilizcetezbasligi]").val(ingilizcetezbasligi);
		$("input[name=dilSecim]").val(dilSecim);




})


				}


			
				$(document).ready(function()


				{
				
				var formAdi="form33";
				
				const moonLanding = new Date(Date.now());
				var yil=moonLanding.getFullYear();
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
				document.getElementById("toplantitarihi").value=sakla;
				document.getElementById("toplantitarihi").min =sakla;
				const moonLanding5 = new Date(Date.now());
				var yil5=moonLanding5.getFullYear();
				var ay5=moonLanding5.getMonth()+1;
				if(ay5==0)
				{
				ay5=1;
				}
				if(ay5>12)
				{
				ay5=ay5-12;
				}
				var gun5=moonLanding5.getDate();
				var sakla5=(yil5+"-"+ay5+"-"+gun5);
				document.getElementById("tikuyeleritarih1").value=sakla5;
				
				const moonLanding6 = new Date(Date.now());
				var yil6=moonLanding6.getFullYear();
				var ay6=moonLanding6.getMonth()+1;
				if(ay6==0)
				{
				ay6=1;
				}
				if(ay6>12)
				{
				ay6=ay6-12;
				}
				var gun6=moonLanding6.getDate();
				var sakla6=(yil6+"-"+ay6+"-"+gun6);
				document.getElementById("tikuyeleritarih2").value=sakla6;
				const moonLanding7 = new Date(Date.now());
				var yil7=moonLanding7.getFullYear();
				var ay7=moonLanding7.getMonth()+1;
				if(ay7==0)
				{
				ay7=1;
				}
				if(ay7>12)
				{
				ay7=ay7-12;
				}
				var gun7=moonLanding7.getDate();
				var sakla7=(yil7+"-"+ay7+"-"+gun7);
				document.getElementById("tikuyeleritarih3").value=sakla7;
				const moonLanding8 = new Date(Date.now());
				var yil8=moonLanding8.getFullYear();
				var ay8=moonLanding8.getMonth()+1;
				if(ay8==0)
				{
				ay8=1;
				}
				if(ay8>12)
				{
				ay8=ay8-12;
				}
				var gun8=moonLanding8.getDate();
				var sakla8=(yil8+"-"+ay8+"-"+gun8);
				document.getElementById("ogrencikayittarihi").value=sakla8;
				document.getElementById("ogrencikayittarihi").max=sakla8;
				
				
				
				$("#tikgonder").click(function(){
				var deneme1=document.getElementById("abdbaskaniUnvani").value;
				var deneme2=document.getElementById("ogrenciprogrami").value;
				var deneme3=document.getElementById("birinciogretimuyesininunvani").value;
				var deneme4=document.getElementById("ikinciogretimuyesininunvani").value;
				var deneme5=document.getElementById("ucuncuogretimuyesininunvani").value;
				var deneme6=document.getElementById("birinciogretimuyesininkurumu").value;
				var deneme7=document.getElementById("ikinciogretimuyesininkurumu").value;
				var deneme8=document.getElementById("ucuncuogretimuyesininkurumu").value;
				var toplantiyeri = $("input[name=toplantiyeri]").val();
				var toplantitarihi = $("input[name=toplantitarihi]").val();
				
				//DÜZENLENMİŞ TARİH
				
				const moonLanding = new Date(toplantitarihi);
				var yil=moonLanding.getFullYear();
				var ay=moonLanding.getMonth();
				var gun=moonLanding.getDate();
				ay=ay+1;
				if(ay==0)
					{
				ay=1;
					}
				if(ay>12)
				{
				ay=ay-12;
				}
				
				toplantitarihi=gun+"/"+ay+"/"+yil;
				



var turkcetezbasligi = $("input[name=turkcetezbasligi]").val();
				var ingilizcetezbasligi= $("input[name=ingilizcetezbasligi]").val();
				var dilSecim = $("input[name=dilSecim]").val();


				var toplantisaati = $("input[name=toplantisaati]").val();
				var abdbaskaniadi = $("input[name=abdbaskaniadi]").val();
				var abdbaskanisoyadi = $("input[name=abdbaskanisoyadi]").val();
				var abdbaskaniUnvani = $("input[name=abdbaskaniUnvani]").val();
				var ogrenciadi = $("input[name=ogrenciadi]").val();
				var ogrencisoyadi = $("input[name=ogrencisoyadi]").val();
				var ogrencino = $("input[name=ogrencino]").val();
				var ogrencikayittarihi = $("input[name=ogrencikayittarihi]").val();
				const moonLanding1 = new Date(ogrencikayittarihi);
				var yil1=moonLanding1.getFullYear();
				var ay1=moonLanding1.getMonth();
				var gun1=moonLanding1.getDate();
				ay1=ay1+1;
				if(ay1==0)
					{
				ay1=1;
					}
				if(ay1>12)
				{
				ay1=ay1-12;
				}
				
				ogrencikayittarihi=gun1+"/"+ay1+"/"+yil1;
				var ogrenciprogrami = $("input[name=ogrenciprogrami]").val();
				var birinciogretimuyesininadi = $("input[name=birinciogretimuyesininadi]").val();
				var birinciogretimuyesininsoyadi = $("input[name=birinciogretimuyesininsoyadi]").val();
				var birinciogretimuyesininunvani = $("input[name=birinciogretimuyesininunvani]").val();
				var ikinciogretimuyesininadi = $("input[name=ikinciogretimuyesininadi]").val();
				var ikinciogretimuyesininsoyadi = $("input[name=ikinciogretimuyesininsoyadi]").val();
				var ikinciogretimuyesininunvani = $("input[name=ikinciogretimuyesininunvani]").val();
				var ucuncuogretimuyesininadi = $("input[name=ucuncuogretimuyesininadi]").val();
				var ucuncuogretimuyesininsoyadi = $("input[name=ucuncuogretimuyesininsoyadi]").val();
				var ucuncuogretimuyesininunvani = $("input[name=ucuncuogretimuyesininunvani]").val();
				var birinciogretimuyesininkurumu = $("input[name=birinciogretimuyesininkurumu]").val();
				var birinciogretimuyesininepostasi = $("input[name=birinciogretimuyesininepostasi]").val();
				var tikuyeleritarih1 = $("input[name=tikuyeleritarih1]").val();
				const moonLanding2 = new Date(tikuyeleritarih1);
				var yil2=moonLanding2.getFullYear();
				var ay2=moonLanding2.getMonth();
				var gun2=moonLanding2.getDate();
				ay2=ay2+1;
				if(ay2==0)
					{
				ay2=1;
					}
				if(ay2>12)
				{
				ay2=ay2-12;
				}
				
				tikuyeleritarih1=gun2+"/"+ay2+"/"+yil2;
				var ikinciogretimuyesininkurumu = $("input[name=ikinciogretimuyesininkurumu]").val();
				var ikinciogretimuyesininepostasi = $("input[name=ikinciogretimuyesininepostasi]").val();
				var tikuyeleritarih2 = $("input[name=tikuyeleritarih2]").val();
				const moonLanding3 = new Date(tikuyeleritarih2);
				var yil3=moonLanding3.getFullYear();
				var ay3=moonLanding3.getMonth();
				var gun3=moonLanding3.getDate();
				ay3=ay3+1;
				if(ay3==0)
					{
				ay3=1;
					}
				if(ay3>12)
				{
				ay3=ay3-12;
				}
				
				tikuyeleritarih2=gun3+"/"+ay3+"/"+yil3;
				var ucuncuogretimuyesininkurumu = $("input[name=ucuncuogretimuyesininkurumu]").val();
				var ucuncuogretimuyesininepostasi = $("input[name=ucuncuogretimuyesininepostasi]").val();
				var tikuyeleritarih3 = $("input[name=tikuyeleritarih3]").val();
				const moonLanding4 = new Date(tikuyeleritarih3);
				var yil4=moonLanding4.getFullYear();
				var ay4=moonLanding4.getMonth();
				var gun4=moonLanding4.getDate();
				ay4=ay4+1;
				if(ay4==0)
					{
				ay4=1;
					}
				if(ay4>12)
				{
				ay4=ay4-12;
				}
				
				tikuyeleritarih3=gun4+"/"+ay4+"/"+yil4;
				var e = document.getElementById("ogrenciprogrami");
				var selectedEquipmentDropdown = e.options[e.selectedIndex].value;
				var e1 = document.getElementById("abdbaskaniUnvani");
				var selectedEquipmentDropdown1 = e1.options[e1.selectedIndex].value;
				var e2 = document.getElementById("birinciogretimuyesininunvani");
				var selectedEquipmentDropdown2 = e2.options[e2.selectedIndex].value;
				var e3 = document.getElementById("ikinciogretimuyesininunvani");
				var selectedEquipmentDropdown3 = e3.options[e3.selectedIndex].value;
				var e4 = document.getElementById("ucuncuogretimuyesininunvani");
				var selectedEquipmentDropdown4 = e4.options[e4.selectedIndex].value;
				var e5 = document.getElementById("birinciogretimuyesininkurumu");
				var selectedEquipmentDropdown5 = e5.options[e5.selectedIndex].value;
				var e6 = document.getElementById("ikinciogretimuyesininkurumu");
				var selectedEquipmentDropdown6 = e6.options[e6.selectedIndex].value;
				var e7 = document.getElementById("ucuncuogretimuyesininkurumu");
				var selectedEquipmentDropdown7 = e7.options[e7.selectedIndex].value;
				var genel="";
				if (tikuyeleritarih1=="NaN/NaN/NaN"||tikuyeleritarih2=="NaN/NaN/NaN"||tikuyeleritarih3=="NaN/NaN/NaN"||toplantiyeri==""||toplantiyeri==null||
				toplantitarihi==""||toplantitarihi==null||
				toplantisaati==""||toplantisaati==null||
				abdbaskaniadi==""||abdbaskaniadi==null||
				abdbaskanisoyadi==""||abdbaskanisoyadi==null||
				selectedEquipmentDropdown1==""||selectedEquipmentDropdown1==null||
				
				ogrencino==""||ogrencino==null||
				ogrencikayittarihi==""||ogrencikayittarihi==null||
				selectedEquipmentDropdown==""||selectedEquipmentDropdown==null||
				birinciogretimuyesininadi==""||birinciogretimuyesininadi==null||
				birinciogretimuyesininsoyadi==""||birinciogretimuyesininsoyadi==null||
				selectedEquipmentDropdown2==""||selectedEquipmentDropdown2==null||
				birinciogretimuyesininepostasi==""||birinciogretimuyesininepostasi==null||
				selectedEquipmentDropdown5==""||selectedEquipmentDropdown5==null||
				ikinciogretimuyesininadi==""||ikinciogretimuyesininadi==null||
				ikinciogretimuyesininsoyadi==""||ikinciogretimuyesininsoyadi==null||
				selectedEquipmentDropdown3==""||selectedEquipmentDropdown3==null||
				ikinciogretimuyesininepostasi==""||ikinciogretimuyesininepostasi==null||
				selectedEquipmentDropdown6==""||selectedEquipmentDropdown6==null||
				ucuncuogretimuyesininadi==""||ucuncuogretimuyesininadi==null||
				ucuncuogretimuyesininsoyadi==""||ucuncuogretimuyesininsoyadi==null||
				selectedEquipmentDropdown4==""||selectedEquipmentDropdown4==null||
				ucuncuogretimuyesininepostasi==""||ucuncuogretimuyesininepostasi==null||
				selectedEquipmentDropdown7==""||selectedEquipmentDropdown7==null)
				{
				
					if (toplantiyeri==""||toplantiyeri==null||toplantitarihi==""||toplantitarihi==null||toplantisaati==""||toplantisaati==null) {
						genel=genel+"Toplantı Bilgilerini Doldurunuz!\n";
						Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				
				})}
							
						
					if (ogrenciadi==""||ogrenciadi==null||ogrencisoyadi==""||ogrencisoyadi==null
						||ogrencino==""||ogrencino==null||ogrencikayittarihi==""||ogrencikayittarihi==null||selectedEquipmentDropdown==""||selectedEquipmentDropdown==null) {
						genel=genel+"Öğrenci Bilgilerini Doldurunuz!\n";
						Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				
				})
				}
							
					if (selectedEquipmentDropdown1==""||selectedEquipmentDropdown1==null ||abdbaskaniadi=="" || abdbaskaniadi==null||abdbaskanisoyadi=="" || abdbaskanisoyadi==null) {
						genel=genel+"Anabilim Dalı Başkanı Bilgilerini Doldurunuz!\n";
						Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				})
					}
					if (birinciogretimuyesininadi==""||birinciogretimuyesininadi==null||birinciogretimuyesininsoyadi==""||birinciogretimuyesininsoyadi==null||selectedEquipmentDropdown2==""||selectedEquipmentDropdown2==null||birinciogretimuyesininepostasi==""||birinciogretimuyesininepostasi==null||selectedEquipmentDropdown5==""||selectedEquipmentDropdown5==null||tikuyeleritarih1=="NaN/NaN/NaN"||ikinciogretimuyesininadi==""||ikinciogretimuyesininadi==null||ikinciogretimuyesininsoyadi==""||ikinciogretimuyesininsoyadi==null||selectedEquipmentDropdown3==""||selectedEquipmentDropdown3==null||ikinciogretimuyesininepostasi==""||ikinciogretimuyesininepostasi==null||selectedEquipmentDropdown6==""||selectedEquipmentDropdown6==null||tikuyeleritarih2=="NaN/NaN/NaN"||ucuncuogretimuyesininadi==""||ucuncuogretimuyesininadi==null||ucuncuogretimuyesininsoyadi==""||ucuncuogretimuyesininsoyadi==null||selectedEquipmentDropdown4==""||selectedEquipmentDropdown4==null||ucuncuogretimuyesininepostasi==""||ucuncuogretimuyesininepostasi==null||selectedEquipmentDropdown7==""||selectedEquipmentDropdown7==null||tikuyeleritarih3=="NaN/NaN/NaN") {
						genel=genel+"Tez İzleme Komitesi Üyeleri Bilgilerini Doldurunuz!\n";
						Swal.fire({
				icon: 'error',
				title: 'HATA',
				text: genel,
				
				})}
							
				}
							
				
				
				
					
				
				
				
				
						
							
						
		else{
					
						
								
				
				
var turkcetezbasligi = $("input[name=turkcetezbasligi]").val();
				var ingilizcetezbasligi= $("input[name=ingilizcetezbasligi]").val();
				var dilSecim = $("input[name=dilSecim]").val();

				
				
				
				var toplantiyeri = $("input[name=toplantiyeri]").val();
				var toplantitarihi = $("input[name=toplantitarihi]").val();
				var toplantisaati = $("input[name=toplantisaati]").val();
				var abdbaskaniadi = $("input[name=abdbaskaniadi]").val();
				var abdbaskanisoyadi = $("input[name=abdbaskanisoyadi]").val();
				var abdbaskaniUnvani = $("input[name=abdbaskaniUnvani]").val();
				var ogrenciadi = $("input[name=ogrenciadi]").val();
				var ogrencisoyadi = $("input[name=ogrencisoyadi]").val();
				var ogrencino = $("input[name=ogrencino]").val();
				var ogrencikayittarihi = $("input[name=ogrencikayittarihi]").val();
				var ogrenciprogrami = $("input[name=ogrenciprogrami]").val();
				var birinciogretimuyesininadi = $("input[name=birinciogretimuyesininadi]").val();
				var birinciogretimuyesininsoyadi = $("input[name=birinciogretimuyesininsoyadi]").val();
				var birinciogretimuyesininunvani = $("input[name=birinciogretimuyesininunvani]").val();
				var ikinciogretimuyesininadi = $("input[name=ikinciogretimuyesininadi]").val();
				var ikinciogretimuyesininsoyadi = $("input[name=ikinciogretimuyesininsoyadi]").val();
				var ikinciogretimuyesininunvani = $("input[name=ikinciogretimuyesininunvani]").val();
				var ucuncuogretimuyesininadi = $("input[name=ucuncuogretimuyesininadi]").val();
				var ucuncuogretimuyesininsoyadi = $("input[name=ucuncuogretimuyesininsoyadi]").val();
				var ucuncuogretimuyesininunvani = $("input[name=ucuncuogretimuyesininunvani]").val();
				var birinciogretimuyesininkurumu = $("input[name=birinciogretimuyesininkurumu]").val();
				var birinciogretimuyesininepostasi = $("input[name=birinciogretimuyesininepostasi]").val();
				var tikuyeleritarih1 = $("input[name=tikuyeleritarih1]").val();
				var ikinciogretimuyesininkurumu = $("input[name=ikinciogretimuyesininkurumu]").val();
				var ikinciogretimuyesininepostasi = $("input[name=ikinciogretimuyesininepostasi]").val();
				var tikuyeleritarih2 = $("input[name=tikuyeleritarih2]").val();
				var ucuncuogretimuyesininkurumu = $("input[name=ucuncuogretimuyesininkurumu]").val();
				var ucuncuogretimuyesininepostasi = $("input[name=ucuncuogretimuyesininepostasi]").val();
				var tikuyeleritarih3 = $("input[name=tikuyeleritarih3]").val();
				$.ajax({
				url:"http://20.67.50.120:8000/",
				type:"POST",
				data:{
				'toplantiyeri':toplantiyeri,
				'toplantitarihi':toplantitarihi,
				'toplantisaati':toplantisaati,
				'abdbaskaniadi':abdbaskaniadi,
				'abdbaskanisoyadi':abdbaskanisoyadi,
				'abdbaskaniUnvani':abdbaskaniUnvani,
				'ogrenciadi':ogrenciadi,
				'ogrencisoyadi':ogrencisoyadi,
				'ogrencino':ogrencino,
				'ogrencikayittarihi':ogrencikayittarihi,
				'ogrenciprogrami':ogrenciprogrami,
				'birinciogretimuyesininadi':birinciogretimuyesininadi,
				'birinciogretimuyesininsoyadi':birinciogretimuyesininsoyadi,
				'birinciogretimuyesininunvani':birinciogretimuyesininunvani,
				'ikinciogretimuyesininadi':ikinciogretimuyesininadi,
				'ikinciogretimuyesininsoyadi':ikinciogretimuyesininsoyadi,
				'ikinciogretimuyesininunvani':ikinciogretimuyesininunvani,
				'ucuncuogretimuyesininadi':ucuncuogretimuyesininadi,
				'ucuncuogretimuyesininsoyadi':ucuncuogretimuyesininsoyadi,
				'ucuncuogretimuyesininunvani':ucuncuogretimuyesininunvani,
				'birinciogretimuyesininkurumu':birinciogretimuyesininkurumu,
				'birinciogretimuyesininepostasi':birinciogretimuyesininepostasi,
				'tikuyeleritarih1':tikuyeleritarih1,
				'ikinciogretimuyesininkurumu':ikinciogretimuyesininkurumu,
				'ikinciogretimuyesininepostasi':ikinciogretimuyesininepostasi,
				'tikuyeleritarih2':tikuyeleritarih2,
				'ucuncuogretimuyesininkurumu':ucuncuogretimuyesininkurumu,
				'ucuncuogretimuyesininepostasi':ucuncuogretimuyesininepostasi,
				'tikuyeleritarih3':tikuyeleritarih3,
				'formAdi':formAdi,
				
				
				},
				success:function(result)
				{
					
					console.log(result);
					Swal.fire({
				icon: 'success',
				title: 'Kayıt İşlemi Başarıyla Gerçekleşti',
				showConfirmButton: false,
				})
				
				}});
				}});
				});
				
				</script>
			</body>
		</html>