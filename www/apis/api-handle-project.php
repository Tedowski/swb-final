<?php

//sendResponse(1, __LINE__, "API connected");

// handle input
// ****************************************************************************************************

// overview

$overviewTitle = $_POST['overviewTitle'];
$overviewSubtitle = $_POST['overviewSubtitle'];


// skateboarding, events and education

$overviewItem1Headline = $_POST['overviewItem1Headline'];
$overviewItem1Content = $_POST['overviewItem1Content'];

$overviewItem2Headline = $_POST['overviewItem2Headline'];
$overviewItem2Content = $_POST['overviewItem2Content'];

$overviewItem3Headline = $_POST['overviewItem3Headline'];
$overviewItem3Content = $_POST['overviewItem3Content'];


// research

$researchTitle = $_POST['researchTitle'];

$researchSubtitle = $_POST['researchSubtitle'];


// research items

$memberName1 = $_POST['memberName1'];
$memberContent1 = $_POST['memberContent1'];


$memberName2 = $_POST['memberName2'];
$memberContent2 = $_POST['memberContent1'];


$memberName3 = $_POST['memberName3'];
$memberContent3 = $_POST['memberContent1'];



// get database
// ****************************************************************************************************

$sData = file_get_contents('../data/page_project.json');
$jData = json_decode($sData);

if($jData == null) {sendResponse(0, __LINE__, 'Cannot procces your request at the moment, please try again later');}

$jContent = $jData->project;

// insert new data
// ****************************************************************************************************

// insert overview title and subtitle

$jContent->sec_overview->title->text = $overviewTitle;

$jContent->sec_overview->subtitle->text = $overviewSubtitle;

// insert skateboarding, events and education content

// fact 1

$jContent->sec_overview->content->item_1->heading->text = $overviewItem1Headline;
$jContent->sec_overview->content->item_1->body->text = $overviewItem1Content;

// fact 2

$jContent->sec_overview->content->item_2->heading->text = $overviewItem2Headline;
$jContent->sec_overview->content->item_2->body->text = $overviewItem2Content;

// fact 3

$jContent->sec_overview->content->item_3->heading->text = $overviewItem3Headline;
$jContent->sec_overview->content->item_3->body->text = $overviewItem3Content;




// insert research title and subtitle

$jContent->sec_research->title->text = $researchTitle;

$jContent->sec_research->subtitle->text = $researchSubtitle;


// insert research items

// research 1

$jContent->sec_research->research_team->memeber_1->name->text = $memberName1;
$jContent->sec_research->research_team->memeber_1->research->text = $memberContent1;

// research 2

$jContent->sec_research->research_team->memeber_2->name->text = $memberName2;
$jContent->sec_research->research_team->memeber_2->research->text = $memberContent2;

// research 3

$jContent->sec_research->research_team->memeber_3->name->text = $memberName3;
$jContent->sec_research->research_team->memeber_3->research->text = $memberContent3;


// write back to the database
// ****************************************************************************************************


$sData = json_encode($jData, JSON_PRETTY_PRINT);

file_put_contents('../data/page_project.json', $sData);

sendResponse(1, __LINE__, 'Project page updated successfully');

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