<?php
$returnArray = [
"ogrencino" => $_POST['ogrencino'],
"ogrenciadi" => $_POST['ogrenciadi'],
"ogrencisoyadi" => $_POST['ogrenciadi'],
"anabilimdali" => $_POST['anabilimdali'],
"kayittarihi" => $_POST['kayittarihi'],
"tezdanismani" => $_POST['tezdanismani'],
"turkcetezbasligi" => $_POST['turkcetezbasligi'],
"anahtarkelime" => $_POST['anabilimdali'],
"ingilizcetezbasligi" => $_POST['ingilizcetezbasligi'],
"tezyazimdili" => $_POST['tezyazimdili'],
"calismatarzi" => $_POST['calismatarzi'],
"endustrialaniA" => $_POST['endustrialaniA'],
"endustrialaniB" => $_POST['endustrialaniB'],
"savunmavekonudegisikligi" => $_POST['savunmavekonudegisikligi'],
"etikkurulizni" => $_POST['etikkurulizni'],
"verikullanimiizni" => $_POST['verikullanimiizni'],
"tezkonusuveplani" => $_POST['tezkonusuveplani'],
"fikirhaksahipligibeyani" => $_POST['fikirhaksahipligibeyani'],
"toplantiyeri" => $_POST['toplantiyeri'],
"toplantitarihi" => $_POST['toplantitarihi'],
"toplantisaati" => $_POST['toplantisaati'],

"retgerekcesi" => $_POST['retgerekcesi'],
"customCheck2" => $_POST['customCheck2'],

"oybirligi" => $_POST['oybirligi'],
"oybirligicheck" => $_POST['oybirligicheck'],
"degistirilentezbasligi" => $_POST['degistirilentezbasligi'],
"formAdi" => $_POST['formAdi'],
];
echo json_encode($returnArray);
?>