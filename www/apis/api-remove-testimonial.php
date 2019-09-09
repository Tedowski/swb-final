<?php

session_start();
$jAdmin = $_SESSION['sUser'];
$sTestimonId = $_GET['testimon-id'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/page_project.json');
$jData = json_decode($sData);


unset($jData->project->sec_testimonials->testimonials->$sTestimonId);



$sData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data/page_project.json', $sData);

sendResponse(1,__LINE__,"Testimonial successfully deleted");




//****************************************************************************************************************** */
function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}
