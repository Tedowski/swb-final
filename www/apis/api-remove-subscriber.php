<?php

session_start();
$jAdmin = $_SESSION['sUser'];
$sSubscriberId = $_GET['subscriber-id'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/subscribers.json');
$jData = json_decode($sData);

unset($jData->subscribers->$sSubscriberId);

$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/subscribers.json', $sData);

sendResponse(1,__LINE__,"Subscriber successfully deleted from list");




//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
