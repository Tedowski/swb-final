<?php

//sendResponse(1, __LINE__, "API connected");

// handle input
// ****************************************************************************************************

// Title and Video URL

$aboutTitle = $_POST['aboutTitle'];
$videoLink = $_POST['videoLink'];


// Mission, Vision and Values

$mission = $_POST['mission'];

$vision = $_POST['vision'];

$values = $_POST['values'];


// Partnership triangle

$partnershipsTitle = $_POST['partnershipsTitle'];

$partnershipsSubtitle = $_POST['partnershipsSubtitle'];


// partners

$partnerName1 = $_POST['partnerName1'];
$partnerBio1 = $_POST['partnerBio1'];
$partnerLink1 = $_POST['partnerLink1'];


$partnerName2 = $_POST['partnerName2'];
$partnerBio2 = $_POST['partnerBio2'];
$partnerLink2 = $_POST['partnerLink2'];


$partnerName3 = $_POST['partnerName3'];
$partnerBio3 = $_POST['partnerBio3'];
$partnerLink3 = $_POST['partnerLink3'];



// get database
// ****************************************************************************************************

$sData = file_get_contents('../data/page_about.json');
$jData = json_decode($sData);

if($jData == null) {sendResponse(0, __LINE__, 'Cannot process your request at the moment, please try again later');}

$jContent = $jData->about;

// insert new data
// ****************************************************************************************************

// insert about title and video url

$jContent->title->text = $aboutTitle;

$jContent->video->url = $videoLink;

// insert mission, vision and values

$jContent->sec_holy_trio->mission->text = $mission;

$jContent->sec_holy_trio->vision->text = $vision;

$jContent->sec_holy_trio->values->text = $values;



// insert partnerships title and subtitle

$jContent->sec_partnership_triangle->title->text = $partnershipsTitle;

$jContent->sec_partnership_triangle->subtitle->text = $partnershipsSubtitle;


// partner 1

$jContent->sec_partnership_triangle->partners->partner_1->heading->text = $partnerName1;
$jContent->sec_partnership_triangle->partners->partner_1->bio->text = $partnerBio1;
$jContent->sec_partnership_triangle->partners->partner_1->link->url = $partnerLink1;

// partner 2

$jContent->sec_partnership_triangle->partners->partner_2->heading->text = $partnerName2;
$jContent->sec_partnership_triangle->partners->partner_2->bio->text = $partnerBio2;
$jContent->sec_partnership_triangle->partners->partner_2->link->url = $partnerLink2;

// partner 3

$jContent->sec_partnership_triangle->partners->partner_3->heading->text = $partnerName3;
$jContent->sec_partnership_triangle->partners->partner_3->bio->text = $partnerBio3;
$jContent->sec_partnership_triangle->partners->partner_3->link->url = $partnerLink3;


// write back to the database
// ****************************************************************************************************


//sendTargetObject($jData); # test correct data handle

$sData = json_encode($jData, JSON_PRETTY_PRINT);

file_put_contents('../data/page_about.json', $sData);

sendResponse(1, __LINE__, 'About page updated successfully');

// ****************************************************************************************************

function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}

function sendTargetObject($jTargetData) {
    $jFinalObject = new stdClass();
    $jFinalObject->status = 1;
    $jFinalObject->data = $jTargetData;
    echo json_encode($jFinalObject);
    exit;
}