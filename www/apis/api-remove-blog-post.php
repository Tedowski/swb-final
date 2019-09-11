<?php

session_start();
$jAdmin = $_SESSION['sUser'];
$sBlogId = $_GET['blog-id'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/blog.json');
$jData = json_decode($sData);

unset($jData->posts->$sBlogId);

$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/blog.json', $sData);

sendResponse(1,__LINE__,"Blog post successfully deleted");




//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
