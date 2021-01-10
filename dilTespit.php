<?php require_once("lib/detectlanguage.php");
use \DetectLanguage\DetectLanguage;
DetectLanguage::setApiKey("456b0dab955b0344e8393a18f8b8b9d5");
$dilKontrol = DetectLanguage::simpleDetect($_POST['dilKontrol']);
$returnArray = [
    "dilKontrol" => $dilKontrol,
];
echo json_encode($returnArray);


?>




