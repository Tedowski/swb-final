<?php

ini_set('display_errors',0);

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}

//get database

$sData = file_get_contents('../data/blog.json');
$jData = json_decode($sData);

//handle input

$sBlogTitle = $_POST['blog-title'];
if(empty($sBlogTitle)){sendResponse(0,__LINE__,'Blog title is missing');}

$sBlogSubtitle = $_POST['blog-subtitle'];
if(empty($sBlogSubtitle)){sendResponse(0,__LINE__,'Blog subtitle is missing');}

$sBlogContent = $_POST['blog-content'];
if(empty($sBlogContent)){sendResponse(0,__LINE__,'Blog content is missing');}

//insert new data

$sBlogId = uniqid();
$iBlogTimestamp = time();

$jBlogpPost->timestamp = $iBlogTimestamp;
$jBlogpPost->title->text = $sBlogTitle;
$jBlogpPost->subtitle->text = $sBlogSubtitle;
$jBlogpPost->content->text = $sBlogContent;

//upload image to blog post

$sUniqImageName = uniqid();
$target_dir = "../images/";
$target_file = $target_dir .$sUniqImageName; //basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        sendResponse(0, __LINE__, 'File is not image');
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    sendResponse(0, __LINE__, 'File already exist');
    $uploadOk = 0;
}
//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    sendResponse(0, __LINE__, 'File is too large');
//    $uploadOk = 0;
//}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    sendResponse(0, __LINE__, 'File was not uploaded');
// if everything is ok, try to upload file
} else {
    if ( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $jBlogpPost->media->type = 'img';
        $jBlogpPost->media->src = "images/{$sUniqImageName}";
        $jData->posts->$sBlogId = $jBlogpPost;
        $sData = json_encode($jData, JSON_PRETTY_PRINT);
        file_put_contents('../data/blog.json', $sData);

        //header("Location : profile");
        sendResponse(1, __LINE__, 'Blog post successfully created');

    } else {
        sendResponse(0, __LINE__, 'Problem with uploading your file');
    }
}











//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
