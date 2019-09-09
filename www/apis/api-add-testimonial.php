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

$jTestimonials = $jData->project->sec_testimonials->testimonials;

//handle input

$sTestimonName = $_POST['testimon-name'];
if(empty($sTestimonName)){sendResponse(0,__LINE__,'Name of person in testimonial is missing');}

$sTestimonRole = $_POST['testimon-role'];
if(empty($sTestimonRole)){sendResponse(0,__LINE__,'Role of person in testimonial is missing');}

$sTestimonQuote = $_POST['testimon-quote'];
if(empty($sTestimonQuote)){sendResponse(0,__LINE__,'Quote of person in testimonial is missing');}

$sTestimonBio = $_POST['testimon-bio'];
if(empty($sTestimonBio)){sendResponse(0,__LINE__,'Bio of person in testimonial is missing');}

//insert new data

$sTestimonId = uniqid();

$jTestimonial->name->text = $sTestimonName;
$jTestimonial->role->text = $sTestimonRole;
$jTestimonial->quote->text = $sTestimonQuote;
$jTestimonial->content->text = $sTestimonBio;


$jTestimonials->$sTestimonId = $jTestimonial;



$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/page_project.json', $sData);


sendResponse(1,__LINE__,'Testimonial successfully created.');


//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
