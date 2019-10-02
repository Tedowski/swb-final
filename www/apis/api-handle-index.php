<?php

// handle input
// ****************************************************************************************************

// challenges

$challengesTitle = $_POST['challengesTitle'];
$challengesSubtitle = $_POST['challengesSubtitle'];


$fact1Headline = $_POST['fact1Headline'];
$fact1SubHeadline = $_POST['fact1SubHeadline'];
$fact1Body = $_POST['fact1Body'];
$fact1Link = $_POST['fact1Link'];

$fact2Headline = $_POST['fact2Headline'];
$fact2SubHeadline = $_POST['fact2SubHeadline'];
$fact2Body = $_POST['fact2Body'];
$fact2Link = $_POST['fact2Link'];

$fact3Headline = $_POST['fact3Headline'];
$fact3SubHeadline = $_POST['fact3SubHeadline'];
$fact3Body = $_POST['fact3Body'];
$fact3Link = $_POST['fact3Link'];

$fact4Headline = $_POST['fact4Headline'];
$fact4SubHeadline = $_POST['fact4SubHeadline'];
$fact4Body = $_POST['fact4Body'];
$fact4Link = $_POST['fact4Link'];

$fact5Headline = $_POST['fact5Headline'];
$fact5SubHeadline = $_POST['fact5SubHeadline'];
$fact5Body = $_POST['fact5Body'];
$fact5Link = $_POST['fact5Link'];

$fact6Headline = $_POST['fact6Headline'];
$fact6SubHeadline = $_POST['fact6SubHeadline'];
$fact6Body = $_POST['fact6Body'];
$fact6Link = $_POST['fact6Link'];


// solutions

$solutionsTitle = $_POST['solutionsTitle'];

$solutionsSubtitle = $_POST['solutionsSubtitle'];


$solution1Title = $_POST['solution1Title'];
$solution1Content = $_POST['solution1Content'];


$solution2Title = $_POST['solution2Title'];
$solution2Content = $_POST['solution2Content'];


$solution3Title = $_POST['solution3Title'];
$solution3Content = $_POST['solution3Content'];


$solution4Title = $_POST['solution4Title'];
$solution4Content = $_POST['solution4Content'];


// partnerships

$partnershipsTitle = $_POST['partnershipsTitle'];

$partnershipsSubtitle = $_POST['partnershipsSubtitle'];

// get database
// ****************************************************************************************************

$sData = file_get_contents('../data/page_index.json');
$jData = json_decode($sData);

if($jData == null) {sendResponse(0, __LINE__, 'Cannot procces your request at the moment, please try again later');}

$jContent = $jData->index;

// insert new data
// ****************************************************************************************************

// insert challenges title and subtitle

$jContent->sec_challenges->title->text = $challengesTitle;

$jContent->sec_challenges->subtitle->text = $challengesSubtitle;

// insert challenges facts

// fact 1

$jContent->sec_challenges->challenges_facts->fact_1->headline->text = $fact1Headline;
$jContent->sec_challenges->challenges_facts->fact_1->subheadline->text = $fact1SubHeadline;
$jContent->sec_challenges->challenges_facts->fact_1->body->text = $fact1Body;
$jContent->sec_challenges->challenges_facts->fact_1->link->src = $fact1Link;

// fact 2

$jContent->sec_challenges->challenges_facts->fact_2->headline->text = $fact2Headline;
$jContent->sec_challenges->challenges_facts->fact_2->subheadline->text = $fact2SubHeadline;
$jContent->sec_challenges->challenges_facts->fact_2->body->text = $fact2Body;
$jContent->sec_challenges->challenges_facts->fact_2->link->src = $fact2Link;

// fact 3

$jContent->sec_challenges->challenges_facts->fact_3->headline->text = $fact3Headline;
$jContent->sec_challenges->challenges_facts->fact_3->subheadline->text = $fact3SubHeadline;
$jContent->sec_challenges->challenges_facts->fact_3->body->text = $fact3Body;
$jContent->sec_challenges->challenges_facts->fact_3->link->src = $fact3Link;

// fact 4

$jContent->sec_challenges->challenges_facts->fact_4->headline->text = $fact4Headline;
$jContent->sec_challenges->challenges_facts->fact_4->subheadline->text = $fact4SubHeadline;
$jContent->sec_challenges->challenges_facts->fact_4->body->text = $fact4Body;
$jContent->sec_challenges->challenges_facts->fact_4->link->src = $fact4Link;

// fact 5

$jContent->sec_challenges->challenges_facts->fact_5->headline->text = $fact5Headline;
$jContent->sec_challenges->challenges_facts->fact_5->subheadline->text = $fact5SubHeadline;
$jContent->sec_challenges->challenges_facts->fact_5->body->text = $fact5Body;
$jContent->sec_challenges->challenges_facts->fact_5->link->src = $fact5Link;

// fact 6

$jContent->sec_challenges->challenges_facts->fact_6->headline->text = $fact6Headline;
$jContent->sec_challenges->challenges_facts->fact_6->subheadline->text = $fact6SubHeadline;
$jContent->sec_challenges->challenges_facts->fact_6->body->text = $fact6Body;
$jContent->sec_challenges->challenges_facts->fact_6->link->src = $fact6Link;

// insert solutions

$jContent->sec_solutions->title->text = $solutionsTitle;

$jContent->sec_solutions->subtitle->text = $solutionsSubtitle;


// solution 1

$jContent->sec_solutions->solutions->solution_1->headline->text = $solution1Title;
$jContent->sec_solutions->solutions->solution_1->content->text = $solution1Content;

// solution 2

$jContent->sec_solutions->solutions->solution_2->headline->text = $solution2Title;
$jContent->sec_solutions->solutions->solution_2->content->text = $solution2Content;

// solution 3

$jContent->sec_solutions->solutions->solution_3->headline->text = $solution3Title;
$jContent->sec_solutions->solutions->solution_3->content->text = $solution3Content;

// solution 4

$jContent->sec_solutions->solutions->solution_4->headline->text = $solution4Title;
$jContent->sec_solutions->solutions->solution_4->content->text = $solution4Content;

// insert partnerships

$jContent->sec_partnerships->title->text = $partnershipsTitle;

$jContent->sec_partnerships->subtitle->text = $solutionsSubtitle;


// write back to the database
// ****************************************************************************************************

$sData = json_encode($jData, JSON_PRETTY_PRINT);

file_put_contents('../data/page_index.json', $sData);

sendResponse(1, __LINE__, 'Index updated successfully');

// ****************************************************************************************************

function sendResponse($iStatus, $iLineNumber, $sMessage) {
    echo '{"status":'.$iStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit;
}