<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}

//get database
$sData = file_get_contents('../data/subscribers.json');
$jData = json_decode($sData);

//handle input

$sSubject = $_POST['newsletter-subject'];
if(empty($sSubject)){sendResponse(0,__LINE__,'Newsletter subject is missing');}

$sContent = $_POST['newsletter-content'];
if(empty($sContent)){sendResponse(0,__LINE__,'Newsletter content is missing');}


foreach ($jData->subscribers as $sSubscriberId => $jSubscriber){

    $to = $jSubscriber->email;
    $headers = "From: newsletter@swb.dk";

    if( mail($to,$sSubject,$sContent,$headers)) {
        sendResponse(1, __LINE__, 'Mail successfully sent to all subscribers.');
    } else {
        sendResponse(0, __LINE__, 'We have spotted some problem with your request. Try again. ');
    }


}

// **************************************************************************************************

function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}