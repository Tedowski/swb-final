<?php

ini_set('display_errors',0);

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/blog.json');
$jData = json_decode($sData);


$sBlogTitle = $_POST['blog-title'];
if(empty($sBlogTitle)){sendResponse(0,__LINE__,'Blog title is missing');}

$sBlogSubtitle = $_POST['blog-subtitle'];
if(empty($sBlogSubtitle)){sendResponse(0,__LINE__,'Blog subtitle is missing');}

$sBlogContent = $_POST['blog-content'];
if(empty($sBlogContent)){sendResponse(0,__LINE__,'Blog content is missing');}

$sBlogId = uniqid();
$iBlogTimestamp = time();

$jBlogpPost->timestamp = $iBlogTimestamp;
$jBlogpPost->title->text = $sBlogTitle;
$jBlogpPost->subtitle->text = $sBlogSubtitle;
$jBlogpPost->content->text = $sBlogContent;
$jBlogpPost->media->type = 'img';
$jBlogpPost->media->src = 'path/to/media';


$jData->posts->$sBlogId = $jBlogpPost;



$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/blog.json', $sData);

sendResponse(1,__LINE__,"Blog post successfully created");




//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
