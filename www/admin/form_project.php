<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}

$sData = file_get_contents('../data/page_project.json');
$jData = json_decode($sData);

$jContent = $jData->project;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1c4f9624b2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <link rel="stylesheet" href="./../styles/index.css">
    <title>Document</title>
</head>
<body class="body">

<?php

require_once __DIR__.'/../modules/header-admin.php';
require_once __DIR__.'/../modules/popup.php';
?>

<!--<div class="form__input-group">-->
<!--    <label class="label">label</label>-->
<!--    <div class="input-wrapper">-->
<!--        <input class="input" type="number" placeholder="Telephone">-->
<!--    </div>-->
<!--</div>-->

<div class="wrapper">
    <form class="form" id="formProject">
        <section id="overview" class="section section-dark">
            <div class="container grid-body">
                <div class="span__4 span__6_l justify-start-s">
                    <div class="">
                        <div>
                            <h5 class="subtitle">Overview</h5>
                            <div class="form__input-group gutter-bot-m">
                                <div class="input-wrapper">
                                    <textarea class="textarea title" name="overviewTitle" id="overviewTitle" required><?= $jContent->sec_overview->title->text ?></textarea>
                                </div>
                            </div>
                            <div class="underline-container undrln__left">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-m">
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="overviewSubtitle" id="overviewSubtitle" required><?= $jContent->sec_overview->subtitle->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
                <div class="span__full gutter-bot-m">
                    <div class="text-centered">
                        <h3 class="title">Skateboarding, events and education</h3>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__xl"></div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input item-headline" name="overviewItem1Headline" id="overviewItem1Headline" value="<?= $jContent->sec_overview->content->item_1->heading->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Content</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="overviewItem1Content" id="overviewItem1Content" required><?= $jContent->sec_overview->content->item_1->body->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input item-headline" name="overviewItem2Headline" id="overviewItem2Headline" value="<?= $jContent->sec_overview->content->item_2->heading->text ?>">
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Content</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="overviewItem2Content" id="overviewItem2Content" required><?= $jContent->sec_overview->content->item_2->body->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input item-headline" name="overviewItem3Headline" id="overviewItem3Headline" value="<?= $jContent->sec_overview->content->item_3->heading->text ?>">
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Content</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="overviewItem3Content" id="overviewItem3Content" required><?= $jContent->sec_overview->content->item_3->body->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="research" class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Research</h5>
                        <div class="form__input-group gutter-bot-m">
                            <div class="input-wrapper">
                                <textarea class="textarea title" name="researchTitle" id="researchTitle" required><?= $jContent->sec_research->title->text ?></textarea>
                            </div>
                        </div>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__l"></div>
                        </div>
                    </div>
                    <div class="form__input-group gutter-bot-m">
                        <div class="input-wrapper">
                            <textarea class="textarea bodytext" name="researchSubtitle" id="researchSubtitle" required><?= $jContent->sec_research->subtitle->text ?></textarea>
                            <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                        </div>
                    </div>
                </div>
                <div class="span__4 span__6_l justify-end-m-up">
                </div>
            </div>
            <div class="container grid-body">
                <div class="span__4">
                    <div class="gutter-bot-s">
                        <div>
                            <div class="form__input-group gutter-bot-xs">
                                <label class="label" for="">Name</label>
                                <div class="input-wrapper">
                                    <input class="input item-headline" name="memberName1" id="memberName1" value="<?= $jContent->sec_research->research_team->memeber_1->name->text ?>">
                                </div>
                            </div>
                        </div>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Research</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="memberContent1" id="memberContent1" required><?= $jContent->sec_research->research_team->memeber_1->research->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-s">
                        <div>
                            <div class="form__input-group gutter-bot-xs">
                                <label class="label" for="">Name</label>
                                <div class="input-wrapper">
                                    <input class="input item-headline" name="memberName2" id="memberName2" value="<?= $jContent->sec_research->research_team->memeber_2->name->text ?>">
                                </div>
                            </div>
                        </div>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Research</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="memberContent2" id="memberContent2" required><?= $jContent->sec_research->research_team->memeber_2->research->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4 span__8_m span__4_l">
                    <div class="gutter-bot-s">
                        <div>
                            <div class="form__input-group gutter-bot-xs">
                                <label class="label" for="">Name</label>
                                <div class="input-wrapper">
                                    <input class="input item-headline" name="memberName3" id="memberName3" value="<?= $jContent->sec_research->research_team->memeber_3->name->text ?>">
                                </div>
                            </div>
                        </div>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Research</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="memberContent3" id="memberContent3" required><?= $jContent->sec_research->research_team->memeber_3->research->text ?></textarea>
                                <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-bot-xl gutter-top-l">
            <div class="container grid-body">
                <a href="edit_pages" class="btn btn-block btn-sec span__4 span__6_l">Cancel</a>
                <button id="projectFormSubmit" class="btn btn-block btn-prim span__4 span__6_l">Save</button>
            </div>
        </section>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>
