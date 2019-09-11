<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;


$sBlogPostId = $_POST['blog-id'];


$sBlogTitle = $_POST['blog-title'];
if(empty($sBlogTitle)){sendResponse(0,__LINE__,'Blog title is missing');}

$sBlogSubtitle = $_POST['blog-subtitle'];
if(empty($sBlogSubtitle)){sendResponse(0,__LINE__,'Blog subtitle is missing');}

$sBlogContent = $_POST['blog-content'];
if(empty($sBlogContent)){sendResponse(0,__LINE__,'Blog content is missing');}

$jPost = $jPosts->$sBlogPostId;

$jPost->title->text = $sBlogTitle;
$jPost->subtitle->text = $sBlogSubtitle;
$jPost->content->text = $sBlogContent;



$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/blog.json', $sData);

sendResponse(1,__LINE__,"Blog post successfully edited");




//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
