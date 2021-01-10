<?php include 'header.php'; ?>
<?php include 'navigator.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>


        
     <form action="savunmabaglan.php" id="AjaxBaglan" method="POST" enctype="multipart/form-data">

            
                
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
                                <input name="ogrencino" type="text" placeholder="Lütfen Öğrenci Numarasını Giriniz" class="form-control" required>
                            </div>
                        </div>
                    
                         <div class="col-md-2 col-sm-12" align="Center">
                            <div class="form-group">
                                <button type="button" class="btn btn-danger">Kontrol Et</button> 
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Öğrenci Adı</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Lütfen Öğrenci Adını Giriniz" type="text" name="ogrenciadi" required disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Öğrenci Soyadı</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Lütfen Öğrenci Soyadını Giriniz" type="text" name="ogrencisoyadi" required disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Anabilim Dalı</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Lütfen Anabilim Dalını Giriniz" type="text" name="anabilimdali" required disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kayıt Tarihi</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="date" class="form-control" placeholder="Lütfen Kayıt Tarihini Seçiniz" name="kayittarihi" required disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tez Danışmanı</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Lütfen Tez Danışmanını Giriniz" type="text" name="tezdanismani" required disabled>
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
                    <!-- ANABİLİM DALI BAŞKANININ ADI,SOYADI VE ÜNVANI-->
                    
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Türkçe Tez Başlığı</label>
                                    <input type="text" class="form-control" placeholder="Tez Başlığını Giriniz" required disabled>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Anahtar Kelimeler</label>
                                    <input type="text" class="form-control" placeholder="Anahtar Kelimeleri Giriniz" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>İngilizce Tez Başlığı</label>
                                    <input type="text" class="form-control" placeholder="Tez Başlığını Giriniz" required disabled>
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
                                    <input type="radio"  name="tezyazimdili" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Evet</label>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio"  name="tezyazimdili" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Hayır</label>
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
                                    <input type="radio"name="calismatarzi" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Deneysel</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio"name="calismatarzi" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Teorik</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio"name="calismatarzi" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Simülasyon</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio"name="calismatarzi" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Sistem/Araç/Yazılım Geliştirme</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio"name="calismatarzi" class="custom-control-input" required disabled>
                                    <label class="custom-control-label">Saha Analizi</label>
                                </div>
                            </div>
                        </div>


                    









                </div>
                
                <!-- ÖĞRENCİ BİLGİLERİ-->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Öğrenci Bilgileri</h4><p id="hata3" style='color: red;'>Lütfen Belirtilen Alanı Boş Geçmeyiniz</p>
                        </div>
                    </div>
                    <!-- ÖĞRENCİ ADI,SOYADI,NUMARASI,KAYIT TARİHİ,PROGRAMI-->
                    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Adınız ve Soyadınız</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Lütfen Adınızı ve Soyadınızı Giriniz" type="text" name="ogrenciadivesoyadi" required>
                        </div>
                    </div>
                    
                
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Numaranız</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="Lütfen Öğrenci Numaranızı Giriniz" type="number" name="ogrencino" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kayıt Tarihiniz</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="date" class="form-control" placeholder="Lütfen Kayıt Tarihini Seçiniz" name="ogrencikayittarihi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Programınız</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="ogrenciprogrami" id="ogrenciprogrami" required>
                                <option value="Seciniz">Seçiniz</option>
                                <option value="Doktora">Doktora</option>
                                <option value="Bütünleşik Doktora">Bütünleşik Doktora</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                
                
                <!--TEZ İZLEME KOMİTESİ ÜYELERİ-->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Tez İzleme Komitesi Üyeleri</h4><p id="hata4" style='color: red;'>Lütfen Belirtilen Alanı Boş Geçmeyiniz</p>
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
                                    <option value="Seciniz">Danışmanınızın Anabilim Dalını Seçiniz</option>
                                    <option value="Adli Bilişim Mühendisliği">Adli Bilişim Mühendisliği</option>
                                    <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                                    <option value="Biyoloji">Biyoloji</option>
                                    <option value="Biyomühendislik">Biyomühendislik</option>
                                    <option value="Biyoteknoloji">Biyoteknoloji</option>
                                    <option value="Çevre Mühendisliği">Çevre Mühendisliği</option>
                                    <option value="Ekobilişim">Ekobilişim</option>
                                    <option value="Elektrik Elektronik Mühendisliği">Elektrik Elektronik Mühendisliği</option>
                                    <option value="Elektrik Elektronik Mühendisliği Teknolojileri">Elektrik Elektronik Mühendisliği Teknolojileri</option>
                                    <option value="Enerji Sistemleri Mühendisliği">Enerji Sistemleri Mühendisliği</option>
                                    <option value="Fizik">Fizik</option>
                                    <option value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                                    <option value="İnşaat Mühendisliği Teknolojileri">İnşaat Mühendisliği Teknolojileri</option>
                                    <option value="İstatistik">İstatistik</option>
                                    <option value="İş ve Mühendislik Yönetimi">İş ve Mühendislik Yönetimi</option>
                                    <option value="Jeodezi ve Coğrafi Bilgi Teknolojileri">Jeodezi ve Coğrafi Bilgi Teknolojileri</option>
                                    <option value="Jeoloji Mühendisliği">Jeoloji Mühendisliği</option>
                                    <option value="Kimya">Kimya</option>
                                    <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
                                    <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                                    <option value="Makine Mühendisliği Teknolojileri">Makine Mühendisliği Teknolojileri</option>
                                    <option value="Matematik">Matematik</option>
                                    <option value="Mekatronik Mühendisliği">Mekatronik Mühendisliği</option>
                                    <option value="Metalurji ve Malzeme Mühendisliği">Metalurji ve Malzeme Mühendisliği</option>
                                    <option value="Metalurji ve Malzeme Mühendisliği Teknolojileri">Metalurji ve Malzeme Mühendisliği Teknolojileri</option>
                                    <option value="Mimarlık">Mimarlık</option>
                                    <option value="Otomotiv Mühendisliği">Otomotiv Mühendisliği</option>
                                    <option value="Savunma Teknolojileri">Savunma Teknolojileri</option>
                                    <option value="Su Ürünleri Avlanma ve İşleme Teknolojisi">Su Ürünleri Avlanma ve İşleme Teknolojisi</option>
                                    <option value="Su Ürünleri Temel Bilimler">Su Ürünleri Temel Bilimler</option>
                                    <option value="Su Ürünleri Yetiştiriciliği">Su Ürünleri Yetiştiriciliği</option>
                                    <option value="Yazılım Mühendisliği">Yazılım Mühendisliği</option>
                                    <option value="Elektrik Eğitimi">Elektrik Eğitimi</option>
                                    <option value="Elektronik ve Bilgisayar Eğitimi">Elektronik ve Bilgisayar Eğitimi</option>
                                    <option value="Makine Eğitimi">Makine Eğitimi</option>
                                    <option value="Metalurji Eğitimi">Metalurji Eğitimi</option>
                                    <option value="Yapı Eğitimi">Yapı Eğitimi</option>
                                    </select><label>&nbsp;</label>
                                
                            
                                    
                                    <select class="custom-select col-12" name="ikinciogretimuyesininkurumu" id="ikinciogretimuyesininkurumu" required>
                                    <option value="Seciniz">Anabilim Dalı Öğretim Üyesinin Anabilim Dalını Seçiniz</option>
                                    <option value="Adli Bilişim Mühendisliği">Adli Bilişim Mühendisliği</option>
                                    <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                                    <option value="Biyoloji">Biyoloji</option>
                                    <option value="Biyomühendislik">Biyomühendislik</option>
                                    <option value="Biyoteknoloji">Biyoteknoloji</option>
                                    <option value="Çevre Mühendisliği">Çevre Mühendisliği</option>
                                    <option value="Ekobilişim">Ekobilişim</option>
                                    <option value="Elektrik Elektronik Mühendisliği">Elektrik Elektronik Mühendisliği</option>
                                    <option value="Elektrik Elektronik Mühendisliği Teknolojileri">Elektrik Elektronik Mühendisliği Teknolojileri</option>
                                    <option value="Enerji Sistemleri Mühendisliği">Enerji Sistemleri Mühendisliği</option>
                                    <option value="Fizik">Fizik</option>
                                    <option value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                                    <option value="İnşaat Mühendisliği Teknolojileri">İnşaat Mühendisliği Teknolojileri</option>
                                    <option value="İstatistik">İstatistik</option>
                                    <option value="İş ve Mühendislik Yönetimi">İş ve Mühendislik Yönetimi</option>
                                    <option value="Jeodezi ve Coğrafi Bilgi Teknolojileri">Jeodezi ve Coğrafi Bilgi Teknolojileri</option>
                                    <option value="Jeoloji Mühendisliği">Jeoloji Mühendisliği</option>
                                    <option value="Kimya">Kimya</option>
                                    <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
                                    <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                                    <option value="Makine Mühendisliği Teknolojileri">Makine Mühendisliği Teknolojileri</option>
                                    <option value="Matematik">Matematik</option>
                                    <option value="Mekatronik Mühendisliği">Mekatronik Mühendisliği</option>
                                    <option value="Metalurji ve Malzeme Mühendisliği">Metalurji ve Malzeme Mühendisliği</option>
                                    <option value="Metalurji ve Malzeme Mühendisliği Teknolojileri">Metalurji ve Malzeme Mühendisliği Teknolojileri</option>
                                    <option value="Mimarlık">Mimarlık</option>
                                    <option value="Otomotiv Mühendisliği">Otomotiv Mühendisliği</option>
                                    <option value="Savunma Teknolojileri">Savunma Teknolojileri</option>
                                    <option value="Su Ürünleri Avlanma ve İşleme Teknolojisi">Su Ürünleri Avlanma ve İşleme Teknolojisi</option>
                                    <option value="Su Ürünleri Temel Bilimler">Su Ürünleri Temel Bilimler</option>
                                    <option value="Su Ürünleri Yetiştiriciliği">Su Ürünleri Yetiştiriciliği</option>
                                    <option value="Yazılım Mühendisliği">Yazılım Mühendisliği</option>
                                    <option value="Elektrik Eğitimi">Elektrik Eğitimi</option>
                                    <option value="Elektronik ve Bilgisayar Eğitimi">Elektronik ve Bilgisayar Eğitimi</option>
                                    <option value="Makine Eğitimi">Makine Eğitimi</option>
                                    <option value="Metalurji Eğitimi">Metalurji Eğitimi</option>
                                    <option value="Yapı Eğitimi">Yapı Eğitimi</option>
                                    </select><label>&nbsp;</label>
                                    

                                    
                                    <select class="custom-select col-12" style="font-size:13.4px" name="ucuncuogretimuyesininkurumu" id="ucuncuogretimuyesininkurumu" required>
                                    
                                    <option value="Seciniz">Başka Bir Anabilim Dalı Öğretim Üyesinin AnaBilim Dalını Seçiniz</option>
                                    <option value="Adli Bilişim Mühendisliği">Adli Bilişim Mühendisliği</option>
                                    <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                                    <option value="Biyoloji">Biyoloji</option>
                                    <option value="Biyomühendislik">Biyomühendislik</option>
                                    <option value="Biyoteknoloji">Biyoteknoloji</option>
                                    <option value="Çevre Mühendisliği">Çevre Mühendisliği</option>
                                    <option value="Ekobilişim">Ekobilişim</option>
                                    <option value="Elektrik Elektronik Mühendisliği">Elektrik Elektronik Mühendisliği</option>
                                    <option value="Elektrik Elektronik Mühendisliği Teknolojileri">Elektrik Elektronik Mühendisliği Teknolojileri</option>
                                    <option value="Enerji Sistemleri Mühendisliği">Enerji Sistemleri Mühendisliği</option>
                                    <option value="Fizik">Fizik</option>
                                    <option value="İnşaat Mühendisliği">İnşaat Mühendisliği</option>
                                    <option value="İnşaat Mühendisliği Teknolojileri">İnşaat Mühendisliği Teknolojileri</option>
                                    <option value="İstatistik">İstatistik</option>
                                    <option value="İş ve Mühendislik Yönetimi">İş ve Mühendislik Yönetimi</option>
                                    <option value="Jeodezi ve Coğrafi Bilgi Teknolojileri">Jeodezi ve Coğrafi Bilgi Teknolojileri</option>
                                    <option value="Jeoloji Mühendisliği">Jeoloji Mühendisliği</option>
                                    <option value="Kimya">Kimya</option>
                                    <option value="Kimya Mühendisliği">Kimya Mühendisliği</option>
                                    <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                                    <option value="Makine Mühendisliği Teknolojileri">Makine Mühendisliği Teknolojileri</option>
                                    <option value="Matematik">Matematik</option>
                                    <option value="Mekatronik Mühendisliği">Mekatronik Mühendisliği</option>
                                    <option value="Metalurji ve Malzeme Mühendisliği">Metalurji ve Malzeme Mühendisliği</option>
                                    <option value="Metalurji ve Malzeme Mühendisliği Teknolojileri">Metalurji ve Malzeme Mühendisliği Teknolojileri</option>
                                    <option value="Mimarlık">Mimarlık</option>
                                    <option value="Otomotiv Mühendisliği">Otomotiv Mühendisliği</option>
                                    <option value="Savunma Teknolojileri">Savunma Teknolojileri</option>
                                    <option value="Su Ürünleri Avlanma ve İşleme Teknolojisi">Su Ürünleri Avlanma ve İşleme Teknolojisi</option>
                                    <option value="Su Ürünleri Temel Bilimler">Su Ürünleri Temel Bilimler</option>
                                    <option value="Su Ürünleri Yetiştiriciliği">Su Ürünleri Yetiştiriciliği</option>
                                    <option value="Yazılım Mühendisliği">Yazılım Mühendisliği</option>
                                    <option value="Elektrik Eğitimi">Elektrik Eğitimi</option>
                                    <option value="Elektronik ve Bilgisayar Eğitimi">Elektronik ve Bilgisayar Eğitimi</option>
                                    <option value="Makine Eğitimi">Makine Eğitimi</option>
                                    <option value="Metalurji Eğitimi">Metalurji Eğitimi</option>
                                    <option value="Yapı Eğitimi">Yapı Eğitimi</option>
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
                                <option value="Seciniz">Danışmanınızın Ünvanını Seçiniz</option>
                                <option value="Profesör">Profesör</option>
                                <option value="Doçent">Doçent</option>
                                <option value="Yardımcı Doçent">Yardımcı Doçent</option>
                                <option value="Öğretim Görevlisi">Öğretim Görevlisi</option>
                                <option value="Araştırma Görevlisi">Araştırma Görevlisi</option>
                                <option value="Okutman">Okutman</option>
                                <option value="Uzman">Uzman</option>
                                </select><label>&nbsp;</label>

                                <select class="custom-select col-12" name="ikinciogretimuyesininunvani" id="ikinciogretimuyesininunvani" required>
                                <option value="Seciniz">Anabilim Dalı Öğretim Üyesinin Ünvanını Seçiniz</option>
                                <option value="Profesör">Profesör</option>
                                <option value="Doçent">Doçent</option>
                                <option value="Yardımcı Doçent">Yardımcı Doçent</option>
                                <option value="Öğretim Görevlisi">Öğretim Görevlisi</option>
                                <option value="Araştırma Görevlisi">Araştırma Görevlisi</option>
                                <option value="Okutman">Okutman</option>
                                <option value="Uzman">Uzman</option>
                                </select><label>&nbsp;</label>

                                <select class="custom-select col-12" style="font-size:14.3px" name="ucuncuogretimuyesininunvani" id="ucuncuogretimuyesininunvani" required>
                                <option value="Seciniz">Başka Bir Anabilim Dalı Öğretim Üyesinin Ünvanını Seçiniz</option>
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
                                <input class="form-control" placeholder="Lütfen Tarih Giriniz" type="date" name="tikuyeleritarih1" required>
                                <label>&nbsp;</label>
                                <input class="form-control" placeholder="Lütfen Tarih Giriniz" type="date" name="tikuyeleritarih2" required>
                                <label>&nbsp;</label>
                                <input class="form-control" placeholder="Lütfen Tarih Giriniz" type="date" name="tikuyeleritarih3" required>
                                <label>&nbsp;</label>
                            </div>
                        </div>
                    </div>
                </div>


                <!--TEZ BİLGİLERİ-->
                
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">&nbsp;</h4>
                        </div>
                    </div>
                    
                    
                    <div style="margin-left: 10px" class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" >
                                <label><h6 style="color:#0000fe;">Form 30&nbsp;&nbsp;</h6></label>
                                <button onclick="window.location.href='form30.php';" type="button" id="form30" class="btn btn-lg  btn-primary">PDF-İndir</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" >
                                <label><h6 style="color:#0000fe;">Form 31&nbsp;&nbsp;</h6></label>
                                <button onclick="window.location.href='form31.php';" type="button" class="btn btn-lg  btn-primary" id="form31">PDF-İndir</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" >
                                <label><h6 style="color:#0000fe;">Form 33&nbsp;&nbsp;</h6></label>
                                <button  type="button" id="form33" class="btn btn-lg  btn-primary">PDF-İndir</button>       
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group" >
                                <label><h6 style="color:#0000fe;">Form 34&nbsp;&nbsp;</h6></label>
                                <button onclick="window.location.href='form34.php';" type="button" id="form34" class="btn btn-lg  btn-primary">PDF-İndir</button>
                            </div>
                        </div>
                    </div>
                </div>

                                


                <!-- GÖNDER BUTONU-->

                    
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group" >
                                <button type="submit" id="tikgonder" class="btn btn-primary">&nbsp;
                                Gönder
                                &nbsp;</button>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                    </div>
                    
                    
                </form>
                

                <!--FOOTER-->

                <div class="footer-wrap pd-20 mb-20 card-box" style="background-color:white;">
                    
                    <a href="http://fbe.firat.edu.tr/" style=" text-decoration:none; color:black;"  >Fırat Üniversitesi - Fen Bilimleri Enstitüsü</a>
                </div>
                

                <!--SCRİPT-->



               
                
            
            <script>
            $(document).ready(function()


            {


            document.getElementById("hata1").style.visibility = "hidden";
            document.getElementById("hata2").style.visibility = "hidden";
            document.getElementById("hata3").style.visibility = "hidden";
            document.getElementById("hata4").style.visibility = "hidden";
            


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
            

            $("#form33").click(function(){



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
            


            var toplantisaati = $("input[name=toplantisaati]").val();
            var abdbaskaniadivesoyadi = $("input[name=abdbaskaniadivesoyadi]").val();
            var abdbaskaniUnvani = $("input[name=abdbaskaniUnvani]").val();
            var ogrenciadivesoyadi = $("input[name=ogrenciadivesoyadi]").val();
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


            
                
            

            if (tikuyeleritarih1=="NaN/NaN/NaN"||tikuyeleritarih2=="NaN/NaN/NaN"||tikuyeleritarih3=="NaN/NaN/NaN"||toplantiyeri==""||toplantiyeri==null||
                toplantitarihi==""||toplantitarihi==null||
                toplantisaati==""||toplantisaati==null||
                abdbaskaniadivesoyadi==""||abdbaskaniadivesoyadi==null||
                selectedEquipmentDropdown1=="Seciniz"||
                ogrenciadivesoyadi==""||ogrenciadivesoyadi==null||
                ogrencino==""||ogrencino==null||
                ogrencikayittarihi==""||ogrencikayittarihi==null||
                selectedEquipmentDropdown=="Seciniz"||
                birinciogretimuyesininadi==""||birinciogretimuyesininadi==null||
                birinciogretimuyesininsoyadi==""||birinciogretimuyesininsoyadi==null||
                selectedEquipmentDropdown2=="Seciniz"||
                birinciogretimuyesininepostasi==""||birinciogretimuyesininepostasi==null||
                selectedEquipmentDropdown5=="Seciniz"||
                ikinciogretimuyesininadi==""||ikinciogretimuyesininadi==null||
                ikinciogretimuyesininsoyadi==""||ikinciogretimuyesininsoyadi==null||
                selectedEquipmentDropdown3=="Seciniz"||
                ikinciogretimuyesininepostasi==""||ikinciogretimuyesininepostasi==null||
                selectedEquipmentDropdown6=="Seciniz"||
                ucuncuogretimuyesininadi==""||ucuncuogretimuyesininadi==null||
                ucuncuogretimuyesininsoyadi==""||ucuncuogretimuyesininsoyadi==null||
                selectedEquipmentDropdown4=="Seciniz"||
                ucuncuogretimuyesininepostasi==""||ucuncuogretimuyesininepostasi==null||
                selectedEquipmentDropdown7=="Seciniz")
                 {

            document.getElementById("hata1").style.visibility = "hidden";
            document.getElementById("hata2").style.visibility = "hidden";
            document.getElementById("hata3").style.visibility = "hidden";
            document.getElementById("hata4").style.visibility = "hidden";
            


                    if (toplantiyeri==""||toplantiyeri==null||toplantitarihi==""||toplantitarihi==null||toplantisaati==""||toplantisaati==null) {

                        document.getElementById("hata1").style.visibility = "visible";}
                            
                        

                    if (ogrenciadivesoyadi==""||ogrenciadivesoyadi==null
                        ||ogrencino==""||ogrencino==null||ogrencikayittarihi==""||ogrencikayittarihi==null||selectedEquipmentDropdown=="Seciniz") {
                        
                        document.getElementById("hata3").style.visibility = "visible";
                 }

                            


                    if (selectedEquipmentDropdown1=="Seciniz" ||abdbaskaniadivesoyadi=="" || abdbaskaniadivesoyadi==null) {

                        document.getElementById("hata2").style.visibility = "visible";

                    }


                    if (birinciogretimuyesininadi==""||birinciogretimuyesininadi==null||birinciogretimuyesininsoyadi==""||birinciogretimuyesininsoyadi==null||selectedEquipmentDropdown2=="Seciniz"||birinciogretimuyesininepostasi==""||birinciogretimuyesininepostasi==null||selectedEquipmentDropdown5=="Seciniz"||tikuyeleritarih1=="NaN/NaN/NaN"||ikinciogretimuyesininadi==""||ikinciogretimuyesininadi==null||ikinciogretimuyesininsoyadi==""||ikinciogretimuyesininsoyadi==null||selectedEquipmentDropdown3=="Seciniz"||ikinciogretimuyesininepostasi==""||ikinciogretimuyesininepostasi==null||selectedEquipmentDropdown6=="Seciniz"||tikuyeleritarih2=="NaN/NaN/NaN"||ucuncuogretimuyesininadi==""||ucuncuogretimuyesininadi==null||ucuncuogretimuyesininsoyadi==""||ucuncuogretimuyesininsoyadi==null||selectedEquipmentDropdown4=="Seciniz"||ucuncuogretimuyesininepostasi==""||ucuncuogretimuyesininepostasi==null||selectedEquipmentDropdown7=="Seciniz"||tikuyeleritarih3=="NaN/NaN/NaN") {

                        document.getElementById("hata4").style.visibility = "visible";}
                            
            }
            else{window.location.href = "form33.php?toplantiyeri="+toplantiyeri+"&toplantitarihi="+toplantitarihi+"&toplantisaati="+toplantisaati+"&abdbaskaniadivesoyadi="+abdbaskaniadivesoyadi+"&ogrenciadivesoyadi="+ogrenciadivesoyadi+"&ogrencino="+ogrencino+"&ogrencikayittarihi="+ogrencikayittarihi+"&abdbaskaniUnvani="+deneme1+"&ogrenciprogrami="+deneme2+"&birinciogretimuyesininadi="+birinciogretimuyesininadi+"&birinciogretimuyesininsoyadi="+birinciogretimuyesininsoyadi+"&birinciogretimuyesininunvani="+deneme3+"&ikinciogretimuyesininadi="+ikinciogretimuyesininadi+"&ikinciogretimuyesininsoyadi="+ikinciogretimuyesininsoyadi+"&ikinciogretimuyesininunvani="+deneme4+"&ucuncuogretimuyesininadi="+ucuncuogretimuyesininadi
            +"&ucuncuogretimuyesininsoyadi="+ucuncuogretimuyesininsoyadi
            +"&ucuncuogretimuyesininunvani="+deneme5
            +"&birinciogretimuyesininkurumu="+deneme6
            +"&birinciogretimuyesininepostasi="+birinciogretimuyesininepostasi
            +"&tikuyeleritarih1="+tikuyeleritarih1
            +"&ikinciogretimuyesininkurumu="+deneme7
            +"&ikinciogretimuyesininepostasi="+ikinciogretimuyesininepostasi
            +"&tikuyeleritarih2="+tikuyeleritarih2
            +"&ucuncuogretimuyesininkurumu="+deneme8
            +"&ucuncuogretimuyesininepostasi="+ucuncuogretimuyesininepostasi
            +"&tikuyeleritarih3="+tikuyeleritarih3;}




        
            });











            $("#tikgonder").click(function(){
            var toplantiyeri = $("input[name=toplantiyeri]").val();
            var toplantitarihi = $("input[name=toplantitarihi]").val();

            var toplantisaati = $("input[name=toplantisaati]").val();
            var abdbaskaniadivesoyadi = $("input[name=abdbaskaniadivesoyadi]").val();
            var abdbaskaniUnvani = $("input[name=abdbaskaniUnvani]").val();
            var ogrenciadivesoyadi = $("input[name=ogrenciadivesoyadi]").val();
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
            url:"gorkembaglan.php",
            type:"POST",
            data:{
            'toplantiyeri':toplantiyeri,
            'toplantitarihi':toplantitarihi,
            'toplantisaati':toplantisaati,
            'abdbaskaniadivesoyadi':abdbaskaniadivesoyadi,
            'abdbaskaniUnvani':abdbaskaniUnvani,
            'ogrenciadivesoyadi':ogrenciadivesoyadi,
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
            },
            success:function(result)
            {
            
            }});
            });
            });
            
            </script>
        </body>
    </html>