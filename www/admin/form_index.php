<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}

$sData = file_get_contents('../data/page_index.json');
$jData = json_decode($sData);

$jContent = $jData->index;
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

<div class="wrapper">
    <form class="form" id="formIndex">
        <section class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_l justify-start-s">
                    <div class="">
                        <div>
                            <h5 class="subtitle">Challenges</h5>
                            <div class="form__input-group gutter-bot-m">
                                <div class="input-wrapper">
                                    <textarea class="textarea title" name="challengesTitle" id="challengesTitle" required><?= $jContent->sec_challenges->title->text ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-m">
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="challengesSubtitle" id="challengesSubtitle" required><?= $jContent->sec_challenges->subtitle->text ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4 span__6_l s-first justify-center-s justify-end-m-up"></div>
            </div>
            <div class="container grid-body margin-top-xl gutter-top-s">
                <div class="span__4">
                    <div class="gutter-bot-l">
                        <h4>Challenge 1</h4>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact1Headline" id="fact1Headline" value="<?= $jContent->sec_challenges->challenges_facts->fact_1->headline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Subheadline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact1SubHeadline" id="fact1SubHeadline" value="<?= $jContent->sec_challenges->challenges_facts->fact_1->subheadline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Body</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact1Body" id="fact1Body" required><?= $jContent->sec_challenges->challenges_facts->fact_1->body->text ?></textarea>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Link</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact1Link" id="fact1Link" required><?= $jContent->sec_challenges->challenges_facts->fact_1->link->src ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-l">
                        <h4>Challenge 2</h4>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact2Headline" id="fact2Headline" value="<?= $jContent->sec_challenges->challenges_facts->fact_2->headline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Subheadline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact2SubHeadline" id="fact2SubHeadline" value="<?= $jContent->sec_challenges->challenges_facts->fact_2->subheadline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Body</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact2Body" id="fact2Body" required><?= $jContent->sec_challenges->challenges_facts->fact_2->body->text ?></textarea>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Link</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact2Link" id="fact2Link" required><?= $jContent->sec_challenges->challenges_facts->fact_2->link->src ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-l">
                        <h4>Challenge 3</h4>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact3Headline" id="fact3Headline" value="<?= $jContent->sec_challenges->challenges_facts->fact_3->headline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Subheadline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact3SubHeadline" id="fact3SubHeadline" value="<?= $jContent->sec_challenges->challenges_facts->fact_3->subheadline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Body</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact3Body" id="fact3Body" required><?= $jContent->sec_challenges->challenges_facts->fact_3->body->text ?></textarea>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Link</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact3Link" id="fact3Link" required><?= $jContent->sec_challenges->challenges_facts->fact_3->link->src ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-m">
                        <h4>Challenge 4</h4>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact4Headline" id="fact4Headline" value="<?= $jContent->sec_challenges->challenges_facts->fact_4->headline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Subheadline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact4SubHeadline" id="fact4SubHeadline" value="<?= $jContent->sec_challenges->challenges_facts->fact_4->subheadline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Body</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact4Body" id="fact4Body" required><?= $jContent->sec_challenges->challenges_facts->fact_4->body->text ?></textarea>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Link</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact4Link" id="fact4Link" required><?= $jContent->sec_challenges->challenges_facts->fact_4->link->src ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-m">
                        <h4>Challenge 5</h4>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact5Headline" id="fact5Headline" value="<?= $jContent->sec_challenges->challenges_facts->fact_5->headline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Subheadline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact5SubHeadline" id="fact5SubHeadline" value="<?= $jContent->sec_challenges->challenges_facts->fact_5->subheadline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Body</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact5Body" id="fact5Body" required><?= $jContent->sec_challenges->challenges_facts->fact_5->body->text ?></textarea>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Link</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact5Link" id="fact5Link" required><?= $jContent->sec_challenges->challenges_facts->fact_5->link->src ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-m">
                        <h4>Challenge 6</h4>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Headline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact6Headline" id="fact6Headline" value="<?= $jContent->sec_challenges->challenges_facts->fact_6->headline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Subheadline</label>
                            <div class="input-wrapper">
                                <input class="input" name="fact6SubHeadline" id="fact6SubHeadline" value="<?= $jContent->sec_challenges->challenges_facts->fact_6->subheadline->text ?>" required>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Body</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact6Body" id="fact6Body" required><?= $jContent->sec_challenges->challenges_facts->fact_6->body->text ?></textarea>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-xs">
                            <label class="label" for="">Link</label>
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="fact6Link" id="fact6Link" required><?= $jContent->sec_challenges->challenges_facts->fact_6->link->src ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div>
                            <h5 class="subtitle">Solutions</h5>
                            <div class="form__input-group gutter-bot-m">
                                <div class="input-wrapper">
                                    <textarea class="textarea title" name="solutionsTitle" id="solutionsTitle" required><?= $jContent->sec_solutions->title->text ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form__input-group gutter-bot-m">
                            <div class="input-wrapper">
                                <textarea class="textarea bodytext" name="solutionsSubtitle" id="solutionsSubtitle" required><?= $jContent->sec_solutions->subtitle->text ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span__4 span__8_m">
                    <div class="subgrid-2-col">
                        <div class="span__4">
                            <div>
                                <div class="margin-top-s">
                                    <h4>Solution 1</h4>
                                    <div class="form__input-group gutter-bot-m">
                                        <div class="input-wrapper">
                                            <input class="textarea item-headline" name="solution1Title" id="solution1Title" value="<?= $jContent->sec_solutions->solutions->solution_1->headline->text ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__input-group gutter-bot-m">
                                    <div class="input-wrapper">
                                        <textarea class="textarea bodytext" name="solution1Content" id="solution1Content" required><?= $jContent->sec_solutions->solutions->solution_1->content->text ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div class="margin-top-s">
                                    <h4>Solution 2</h4>
                                    <div class="form__input-group gutter-bot-m">
                                        <div class="input-wrapper">
                                            <input class="textarea item-headline" name="solution2Title" id="solution2Title" value="<?= $jContent->sec_solutions->solutions->solution_2->headline->text ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__input-group gutter-bot-m">
                                    <div class="input-wrapper">
                                        <textarea class="textarea bodytext" name="solution2Content" id="solution2Content" required><?= $jContent->sec_solutions->solutions->solution_2->content->text ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div class="margin-top-s">
                                    <h4>Solution 3</h4>
                                    <div class="form__input-group gutter-bot-m">
                                        <div class="input-wrapper">
                                            <input class="textarea item-headline" name="solution3Title" id="solution3Title" value="<?= $jContent->sec_solutions->solutions->solution_3->headline->text ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__input-group gutter-bot-m">
                                    <div class="input-wrapper">
                                        <textarea class="textarea bodytext" name="solution3Content" id="solution3Content" required><?= $jContent->sec_solutions->solutions->solution_3->content->text ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div class="margin-top-s">
                                    <h4>Solution 4</h4>
                                    <div class="form__input-group gutter-bot-m">
                                        <div class="input-wrapper">
                                            <input class="textarea item-headline" name="solution4Title" id="solution4Title" value="<?= $jContent->sec_solutions->solutions->solution_4->headline->text ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__input-group gutter-bot-m">
                                    <div class="input-wrapper">
                                        <textarea class="textarea bodytext" name="solution4Content" id="solution4Content" required><?= $jContent->sec_solutions->solutions->solution_4->content->text ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-xl">
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Partnerships</h5>
                        <div class="form__input-group gutter-bot-m">
                            <div class="input-wrapper">
                                <textarea class="textarea title" name="partnershipsTitle" id="partnershipsTitle" required><?= $jContent->sec_partnerships->title->text ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form__input-group gutter-bot-m">
                        <div class="input-wrapper">
                            <textarea class="textarea bodytext" name="partnershipsSubtitle" id="partnershipsSubtitle" required><?= $jContent->sec_partnerships->subtitle->text ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="span__4 span__6_l justify-end-m-up">
                    <div class="img">IMG</div>
                </div>
            </div>
        </section>
        <section class="section gutter-bot-xl gutter-top-l">
            <div class="container grid-body">
                <a href="edit_pages" class="btn btn-block btn-sec span__4 span__6_l">Cancel</a>
                <button id="indexFormSubmit" class="btn btn-block btn-prim span__4 span__6_l">Save</button>
            </div>
        </section>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>
