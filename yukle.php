<?php

if (isset($_POST['tezonerikaydet'])) {

    if (is_uploaded_file($_FILES['etikKurul']['tmp_name'])) {
        $izin = ['application/pdf'];
        $uzanti = $_FILES['etikKurul']['type'];
        $dizin = 'kullanici_resimler/etikKurul/ ';
        $yuklenecek_dosya = $dizin . basename($_FILES['etikKurul']['name']);
        if (in_array($uzanti, $izin)) {

            if (move_uploaded_file($_FILES['etikKurul']['tmp_name'], $yuklenecek_dosya)) {
                echo "Dosya geçerli ve başarıyla yüklendi.\n";
            } else {
                echo "Olası dosya yükleme hatası!\n";
            }
        } else echo "Dosya Tipi hatalı";
    } 
    

    else if (is_uploaded_file($_FILES['veriKullanim']['tmp_name'])) {
        $izin = ['application/pdf'];
        $uzanti = $_FILES['veriKullanim']['type'];
        $dizin = 'kullanici_resimler/veriKullanim/ ';
        $yuklenecek_dosya = $dizin . basename($_FILES['veriKullanim']['name']);
        if (in_array($uzanti, $izin)) {

            if (move_uploaded_file($_FILES['veriKullanim']['tmp_name'], $yuklenecek_dosya)) {
                echo "Dosya geçerli ve başarıyla yüklendi.\n";
            } else {
                echo "Olası dosya yükleme hatası!\n";
            }
        } else echo "Dosya Tipi hatalı";
    } 



    if (is_uploaded_file($_FILES['kurumİzin']['tmp_name'])) {
        $izin = ['application/pdf'];
        $uzanti = $_FILES['kurumİzin']['type'];
        $dizin = 'kullanici_resimler/kurumKurulus/ ';
        $yuklenecek_dosya = $dizin . basename($_FILES['kurumİzin']['name']);
        if (in_array($uzanti, $izin)) {

            if (move_uploaded_file($_FILES['kurumİzin']['tmp_name'], $yuklenecek_dosya)) {
                echo "Dosya geçerli ve başarıyla yüklendi.\n";
            } else {
                echo "Olası dosya yükleme hatası!\n";
            }
        } else echo "Dosya Tipi hatalı";
    } 



    if (is_uploaded_file($_FILES['fikirHak']['tmp_name'])) {
        $izin = ['application/pdf'];
        $uzanti = $_FILES['fikirHak']['type'];
        $dizin = 'kullanici_resimler/fikirHak/ ';
        $yuklenecek_dosya = $dizin . basename($_FILES['fikirHak']['name']);
        if (in_array($uzanti, $izin)) {

            if (move_uploaded_file($_FILES['fikirHak']['tmp_name'], $yuklenecek_dosya)) {
                echo "Dosya geçerli ve başarıyla yüklendi.\n";
            } else {
                echo "Olası dosya yükleme hatası!\n";
            }
        } else echo "Dosya Tipi hatalı";
    }

    header("Location: index.php") ; 
}



?>

