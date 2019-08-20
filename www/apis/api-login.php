<?php

// validate input

$sUsername = $_POST['sUsername'];
if( empty($sUsername) ) {sendResponse(0, __LINE__, 'Missing Username');}

$sPassword = $_POST['sPassword'];
if( empty($sPassword) ) {sendResponse(0, __LINE__, 'Missing Password');}
if( strlen($sPassword) < 6 ) {sendResponse(0, __LINE__, 'Password must be at least 7 characters long');}
if( strlen($sPassword) > 20 ) {sendResponse(0, __LINE__, 'Password must be bellow 20 characters');}

// Get data

$sData = file_get_contents('../data/admin.json');
$jData = json_decode($sData);
if($jData == null) {sendResponse(0, __LINE__, 'Cannot procces your request at the moment, please try again later');}
$jAdmin = $jData->admin;

// Match login to data

if($sUsername != $jAdmin->username) {
    {sendResponse(0, __LINE__, 'Incorrect username');}
}

if(!password_verify($sPassword, $jAdmin->password)) {
    {sendResponse(0, __LINE__, 'Incorrect password');}
}

//SUCCESS -> start session

session_start();
$_SESSION['sUser'] = $sUsername;
{sendResponse(1, __LINE__, 'success');}

// ****************************************************************************************************

function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}