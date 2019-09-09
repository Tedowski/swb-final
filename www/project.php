<?php


$sData = file_get_contents('data/page_project.json');
$jData = json_decode($sData);

$jContent = $jData->project;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/loader.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage section project">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">Project</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section id="overview" class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__4 span__6_l justify-start-s">
                    <div class="">
                        <div>
                            <h5 class="subtitle">Overview</h5>
                            <h2 class="title"><?= $jContent->sec_overview->title->text ?></h2>
                            <div class="underline-container undrln__left">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-m"><?= $jContent->sec_overview->subtitle->text ?></p>
                    </div>
                </div>
                <div class="span__4 span__6_l s-first justify-center-s justify-end-m-up">
                    <div class="img">
                        <img src="./images/Mozambique_map.png" alt="mozambique">
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-xl gutter-top-m">
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
                        <div class="img">
                            <img src="./images/project_skateboarding.jpg" alt="skateboarding_tool">
                        </div>
                        <h4 class="item-headline margin-top-s"><?= $jContent->sec_overview->content->item_1->heading->text ?></h4>
                        <p><?= $jContent->sec_overview->content->item_1->body->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img">
                            <img src="./images/project_events.jpg" alt="events">
                        </div>
                        <h4 class="item-headline margin-top-s"><?= $jContent->sec_overview->content->item_2->heading->text ?></h4>
                        <p><?= $jContent->sec_overview->content->item_2->body->text ?></p>
                    </div>
                </div>
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div class="img">
                            <img src="./images/learning_through_play.png" alt="learning_play">
                        </div>
                        <h4 class="item-headline margin-top-s"><?= $jContent->sec_overview->content->item_3->heading->text ?></h4>
                        <p><?= $jContent->sec_overview->content->item_3->body->text ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="research" class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Research</h5>
                        <h2 class="title"><?= $jContent->sec_research->title->text ?></h2>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__l"></div>
                        </div>
                    </div>
                    <p class="margin-top-m"><?= $jContent->sec_research->subtitle->text ?></p>
                </div>
                <div class="span__4 span__6_l justify-end-m-up">
                    <div class="img">
                        <img src="./images/index_sponsors.JPG" alt="research">
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-xl">
                <div class="span__4">
                    <div>
                        <div class="img img-circ circ-l">
                            <img src="./images/our_team_tomas.jpg" alt="tomas">
                        </div>
                        <h4 class="item-headline margin-top-s"><?= $jContent->sec_research->research_team->memeber_1->name->text ?></h4>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__s"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_research->research_team->memeber_1->research->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img img-circ circ-l">
                            <img src="./images/martin-project.jpg" alt="martin">
                        </div>
                        <h4 class="item-headline margin-top-s"><?= $jContent->sec_research->research_team->memeber_2->name->text ?></h4>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__s"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_research->research_team->memeber_2->research->text ?></p>
                    </div>
                </div>
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div class="img img-circ circ-l">
                            <img src="./images/our_team_brendan_test.png" alt="brendan">
                        </div>
                        <h4 class="item-headline margin-top-s"><?= $jContent->sec_research->research_team->memeber_3->name->text ?></h4>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__s"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_research->research_team->memeber_3->research->text ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="design" class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__full">
                    <div class="text-centered">
                        <h2 class="title">The design</h2>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__xl"></div>
                        </div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_design->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-xl">
                <div class="span__full">
                    <div class="carousel-container">
                        <div class="carousel-slider">
                            <div class="carousel-slide">
                                <div class="slide__image img">
                                    <img src="./images/axo.png" alt="axo">
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__image img">
                                    <img src="./images/east.png" alt="east">
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__image img">
                                    <img src="./images/orto.png" alt="orto">
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__image img">
                                    <img src="./images/south.png" alt="south">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials" class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__full">
                    <div class="text-centered">
                        <h3 class="title">Testimonials</h3>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__xl"></div>
                        </div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_testimonials->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-l">
                <div class="span__full">
                    <div class="carousel-container">
                        <div class="carousel-slider">
                            <?php

                            $aTestimonials = $jContent->sec_testimonials->testimonials;

                            foreach ($aTestimonials as $jTestimonial) {
                                echo '<div class="carousel-slide">
                                        <div class="slide__profile">
                                            <div class="text-centered">
                                                <h4 class="item-subheadline">'.$jTestimonial->role->text.'</h4>
                                                <h3 class="item-headline">'.$jTestimonial->name->text.'</h3>
                                                <p>'.$jTestimonial->quote->text.'</p>
                                            </div>
                                            <div>
                                                <h5 class="item-subheadline">Bio</h5>
                                                <p>'.$jTestimonial->content->text.'</p>
                                            </div>
                                        </div>
                                      </div>';
                            }

                            ?>
                        </div>
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