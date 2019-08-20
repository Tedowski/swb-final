<?php


$sData = file_get_contents('data/page_project.json');
$jData = json_decode($sData);

$jContent = $jData->project;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage section">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">Project</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__4 span__6_l justify-start-s">
                    <div class="">
                        <div>
                            <h5 class="subtitle">Challanges</h5>
                            <h2 class="title"><?= $jContent->sec_overview->title->text ?></h2>
                        </div>
                        <p><?= $jContent->sec_overview->subtitle->text ?></p>
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-xl gutter-top-m">
                <div class="span__full">
                    <div class="text-centered">
                        <h3 class="title">Skateboarding, events and education</h3>
                        <div class="underline-full undrln__prim"></div>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img"></div>
                        <h4 class="item-headline"><?= $jContent->sec_overview->content->item_1->heading->text ?></h4>
                        <p><?= $jContent->sec_overview->content->item_1->body->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img"></div>
                        <h4 class="item-headline"><?= $jContent->sec_overview->content->item_2->heading->text ?></h4>
                        <p><?= $jContent->sec_overview->content->item_2->body->text ?></p>
                    </div>
                </div>
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div class="img"></div>
                        <h4 class="item-headline"><?= $jContent->sec_overview->content->item_3->heading->text ?></h4>
                        <p><?= $jContent->sec_overview->content->item_3->body->text ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Research</h5>
                        <h2 class="title"><?= $jContent->sec_research->title->text ?></h2>
                    </div>
                    <p><?= $jContent->sec_research->subtitle->text ?></p>
                </div>
                <div class="span__4 span__6_l justify-end-m-up">
                    <div class="img">IMG</div>
                </div>
            </div>
            <div class="container grid-body margin-top-xl">
                <div class="span__4">
                    <div>
                        <div class="img">MEMBER IMG</div>
                        <h4 class="item-headline margin-top-m"><?= $jContent->sec_research->research_team->memeber_1->name->text ?></h4>
                        <p><?= $jContent->sec_research->research_team->memeber_1->research->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img">MEMBER IMG</div>
                        <h4 class="item-headline margin-top-m"><?= $jContent->sec_research->research_team->memeber_2->name->text ?></h4>
                        <p><?= $jContent->sec_research->research_team->memeber_2->research->text ?></p>
                    </div>
                </div>
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div class="img">MEMBER IMG</div>
                        <h4 class="item-headline margin-top-m"><?= $jContent->sec_research->research_team->memeber_3->name->text ?></h4>
                        <p><?= $jContent->sec_research->research_team->memeber_3->research->text ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__full">
                    <div class="text-centered">
                        <h2 class="title">The design</h2>
                        <div class="underline-full undrln__prim"></div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_design->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-xl">
                <div class="span__full justify-center-s-up">
                    Images
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__full">
                    <div class="text-centered">
                        <h3 class="title">Testimonials</h3>
                        <div class="underline-full undrln__prim"></div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_testimonials->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>