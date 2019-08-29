<?php


$sData = file_get_contents('data/page_index.json');
$jData = json_decode($sData);

$jContent = $jData->index;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__landing section">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <p class="subtitle">Help us to</p>
                <h1 class="heading heading__italic">Skate world better</h1>
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
                            <h2 class="title"><?= $jContent->sec_challenges->title->text ?></h2>
                            <div class="underline-container undrln__left">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-m"><?= $jContent->sec_challenges->subtitle->text ?></p>
<!--                        <p>Skate World Better is a non-profit based in Copenhagen, Denmark. Our goal is to build the first public skatepark in Maputo, Mozambique by fall 2019 in order to support Maputo’s skateboarding community. To reach our goal we’ve teamed up with Skate-aid and ASM</p>-->
<!--                        <p>Mozambique is a country located in southeast Africa experiencing a ‘youth bulge’ in its population. We believe skateboarding can be used as a tool to keep kids away from the dangers of drug use and crime, which are unfortunately prevalent in Mozambique’s capital city.</p>-->
<!--                        <p>This project will also provide the city of Maputo with a hip and resurgent place of recreation and assembly.</p>-->
                    </div>
                </div>
                <div class="span__4 span__6_l s-first justify-center-s justify-end-m-up">
                    <div class="img">
                        <img src="./images/<?= $jContent->sec_challenges->img->src ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="container grid-body justify-items-center align-items-stretch margin-top-xl gutter-top-s">
                <div class="span__4">
                    <div class="item__challenge text-centered gutter-bot-l">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_1->headline->text ?></h3>
                        <h4 class="item-subheadline"><?= $jContent->sec_challenges->challenges_facts->fact_1->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_1->body->text ?></p>
                        <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_1->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge text-centered gutter-bot-l">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_2->headline->text ?></h3>
                        <h4 class="item-subheadline"><?= $jContent->sec_challenges->challenges_facts->fact_2->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_2->body->text ?></p>
                        <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_2->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge text-centered gutter-bot-l">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_3->headline->text ?></h3>
                        <h4 class="item-subheadline"><?= $jContent->sec_challenges->challenges_facts->fact_3->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_3->body->text ?></p>
                        <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_3->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge text-centered gutter-bot-m">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_4->headline->text ?></h3>
                        <h4 class="item-subheadline"><?= $jContent->sec_challenges->challenges_facts->fact_4->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_4->body->text ?></p>
                        <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_4->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge text-centered gutter-bot-m">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_5->headline->text ?></h3>
                        <h4 class="item-subheadline"><?= $jContent->sec_challenges->challenges_facts->fact_5->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_5->body->text ?></p>
                        <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_5->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge text-centered gutter-bot-m">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_6->headline->text; ?></h3>
                        <h4 class="item-subheadline"><?= $jContent->sec_challenges->challenges_facts->fact_6->subheadline->text; ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_6->body->text; ?></p>
                        <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_6->link->src; ?>" target="_blank">Read more</a>
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
                            <h2 class="title"><?= $jContent->sec_solutions->title->text ?></h2>
                            <div class="underline-container undrln__left">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-m"><?= $jContent->sec_solutions->subtitle->text ?></p>
                        <a class="btn btn-text" href="project.php#overview">Read more</a>
                    </div>
                </div>
                <div class="span__4 span__8_m">
                    <div class="subgrid-2-col">
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_1->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_1->content->text ?></p>
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_2->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_2->content->text ?></p>
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_3->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_3->content->text ?></p>
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_4->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_4->content->text ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container">
                <?php require __DIR__.'/modules/achievements.php'; ?>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-xl">
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Partnerships</h5>
                        <h2 class="title"><?= $jContent->sec_partnerships->title->text ?></h2>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__l"></div>
                        </div>
                    </div>
                    <p class="margin-top-m"><?= $jContent->sec_partnerships->subtitle->text ?></p>
                </div>
                <div class="span__4 span__6_l justify-end-m-up">
                    <div class="img">IMG</div>
                </div>
            </div>
            <div class="container grid-body justify-items-center margin-top-xl gutter-top-s">
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
                <div class="span__4">
                    <div>SPONSOR LOGO</div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
