<?php
$returnArray = [
"ad"=> $_POST['ad'],
"soyad"=> $_POST['soyad'],
"ogrenciNo"=> $_POST['ogrenciNo'],
"danismanad"=> $_POST['danismanad'],
"danismansoyad"=> $_POST['danismansoyad'],
"anaBilimdali"=> $_POST['anaBilimdali'],
"bilimdali"=> $_POST['bilimdali'],
"dilSecim" => $_POST['dilSecim'],
"oybirligi"=> $_POST['oybirligi'],
"oybirligi1"=> $_POST['oybirligi1'],
"oybirligi2"=> $_POST['oybirligi2'],
"calismatarzi"=> $_POST['calismatarzi'],
"endustrialaniA" => $_POST['endustrialaniA'],
"endustrialaniB"=> $_POST['endustrialaniB'],
"ogrenciderstamamlama"=> $_POST['ogrenciderstamamlama'],
"turkcetezbasligi"=> $_POST['turkcetezbasligi'],
"anahtarkelimeler"=> $_POST['anahtarkelimeler'],
"ingilizcetezbasligi"=> $_POST['ingilizcetezbasligi'],
"kabul"=> $_POST['kabul'],
"gerekce"=> $_POST['gerekce'],
"ilkteklifdegisiklik"=> $_POST['ilkteklifdegisiklik'],
"fikirhaksay"=>$_POST['fikirhaksay'],
"veriKullanimsay"=>$_POST['veriKullanimsay'],
"etikKurulsay"=>$_POST['etikKurulsay'],
"kurumizinsay"=>$_POST['kurumizinsay'],
"formAdi"=> $_POST['formAdi'],

];
echo json_encode($returnArray);
?>