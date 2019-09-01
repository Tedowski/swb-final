<?php

//get database

$sData = file_get_contents('../data/subscribers.json');
$jData = json_decode($sData);


//handle input

$sSubscriberMail = $_POST['subscriber-email'];
if(empty($sSubscriberMail)){sendResponse(0,__LINE__,'Email is missing');}
if(!filter_var($sSubscriberMail,FILTER_VALIDATE_EMAIL)){sendResponse(0,__LINE__,'Not valid email');}

$jSubscriber = new stdClass();
$jSubscriber->email = $sSubscriberMail;

array_push($jData->subscribers,$jSubscriber);


//write back to database

$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/subscribers.json', $sData);
sendResponse(1,__LINE__,'You have successfully subscribed to our newsletter.');

// **************************************************************************************************

function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}