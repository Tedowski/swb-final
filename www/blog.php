<?php


$sData = file_get_contents('data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>