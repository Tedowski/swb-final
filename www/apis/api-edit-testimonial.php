<?php

ini_set('display_errors',0);

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}

//get database

$sData = file_get_contents('../data/page_project.json');
$jData = json_decode($sData);


$sTestimonId = $_POST['testimon-id'];


//handle input

$sTestimonName = $_POST['testimon-name'];

$sTestimonRole = $_POST['testimon-role'];

$sTestimonQuote = $_POST['testimon-quote'];

$sTestimonBio = $_POST['testimon-bio'];

//insert new data
$jTestimonial = $jData->project->sec_testimonials->testimonials->$sTestimonId ;

$jTestimonial->name->text = $sTestimonName;
$jTestimonial->role->text = $sTestimonRole;
$jTestimonial->quote->text = $sTestimonQuote;
$jTestimonial->content->text = $sTestimonBio;



$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/page_project.json', $sData);

sendResponse(1,__LINE__,'Testimonial successfully edited.');


//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
