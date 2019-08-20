<?php


$sData = file_get_contents('data/page_volunteers.json');
$jData = json_decode($sData);

$jContent = $jData->volunteers;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>