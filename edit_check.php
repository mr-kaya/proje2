<?php
$returnArray = [
    
    'message_pri'=> $_POST['message_pri'],
    'formAdi'=> $_POST['formAdi'],

];
echo json_encode($returnArray);
?>