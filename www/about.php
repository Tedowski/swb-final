<?php


$sData = file_get_contents('data/page_about.json');
$jData = json_decode($sData);

$jContent = $jData->about;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage section">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">About</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section id="overview" class="section gutter-top-xl gutter-bot-xl">
            <div class="container grid-body gutter-bot-s">
                <div class="span__full text-centered gutter-bot-m">
                    <h2 class="title heading__italic"><?= $jContent->title->text ?></h2>
                </div>
                <div class="span__4 span__6_m offset__1_m span__8_l offset__2_l iframe-container">
                    <iframe class="iframe-respo" src="<?= $jContent->video->url ?>"  allow="encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="container grid-body margin-top-xl">
                <div class="span__4">
                    <div>
                        <div>
                            <div class="img">
                                Mission IMG
                            </div>
                            <div class="underline-container undrln__left margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_holy_trio->mission->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div>
                            <div class="img">
                                Vision IMG
                            </div>
                            <div class="underline-container undrln__left margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_holy_trio->vision->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div>
                            <div class="img">
                                Values IMG
                            </div>
                            <div class="underline-container undrln__left margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_holy_trio->values->text ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__4 span__8_m span__4_l">
                    <div>
                        <div>
                            <h2 class="title"><?= $jContent->sec_partnership_triangle->title->text ?></h2>
                            <div class="underline-container undrln__left margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-m"><?= $jContent->sec_partnership_triangle->subtitle->text ?></p>
                    </div>
                </div>
                <div class="span__4 span__8_m">
                    <div class="subgrid-2-col">
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_partnership_triangle->partners->partner_1->heading->text ?></h4>
                                    <div class="underline-container undrln__left margin-top-m">
                                        <div class="undrln__prim underline-inline undrln__s"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_partnership_triangle->partners->partner_1->bio->text ?></p>
                                <a class="btn btn-text" href="<?= $jContent->sec_partnership_triangle->partners->partner_1->link->url; ?>" target="_blank">Read more</a>
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_partnership_triangle->partners->partner_2->heading->text ?></h4>
                                    <div class="underline-container undrln__left margin-top-m">
                                        <div class="undrln__prim underline-inline undrln__s"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_partnership_triangle->partners->partner_2->bio->text ?></p>
                                <a class="btn btn-text" href="<?= $jContent->sec_partnership_triangle->partners->partner_2->link->url; ?>" target="_blank">Read more</a>
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_partnership_triangle->partners->partner_3->heading->text ?></h4>
                                    <div class="underline-container undrln__left margin-top-m">
                                        <div class="undrln__prim underline-inline undrln__s"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_partnership_triangle->partners->partner_3->bio->text ?></p>
                                <a class="btn btn-text" href="<?= $jContent->sec_partnership_triangle->partners->partner_3->link->url; ?>" target="_blank">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__full">
                    <div class="text-centered">
                        <h2 class="title">Our team</h2>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__xl"></div>
                        </div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_team->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-m">
                <div class="span__full">
                    <div class="carousel-container">
                        <div class="carousel-slider">
                            <div class="carousel-slide">
                                <div class="slide__profile">
                                    <div class="text-centered">
                                        <h4 class="item-subheadline"><?= $jContent->sec_team->member_1->role->text ?></h4>
                                        <h3 class="item-headline"><?= $jContent->sec_team->member_1->name->text ?></h3>
                                        <p><?= $jContent->sec_team->member_1->quote->text ?></p>
                                    </div>
                                    <div>
                                        <h5 class="item-subheadline">Bio</h5>
                                        <p><?= $jContent->sec_team->member_1->bio->text ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__profile">
                                    <div class="text-centered">
                                        <h4 class="item-subheadline"><?= $jContent->sec_team->member_2->role->text ?></h4>
                                        <h3 class="item-headline"><?= $jContent->sec_team->member_2->name->text ?></h3>
                                        <p><?= $jContent->sec_team->member_2->quote->text ?></p>
                                    </div>
                                    <div>
                                        <h5 class="item-subheadline">Bio</h5>
                                        <p><?= $jContent->sec_team->member_2->bio->text ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__profile">
                                    <div class="text-centered">
                                        <h4 class="item-subheadline"><?= $jContent->sec_team->member_3->role->text ?></h4>
                                        <h3 class="item-headline"><?= $jContent->sec_team->member_3->name->text ?></h3>
                                        <p><?= $jContent->sec_team->member_3->quote->text ?></p>
                                    </div>
                                    <div>
                                        <h5 class="item-subheadline">Bio</h5>
                                        <p><?= $jContent->sec_team->member_3->bio->text ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__full">
                    <div class="text-centered">
                        <h2 class="title">People behind</h2>
                        <div class="underline-container undrln__center">
                            <div class="undrln__prim underline-inline undrln__xl"></div>
                        </div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_people_behind->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
            <div class="container grid-body margin-top-m">
                <?php

                $aPeople = $jContent->sec_people_behind->people;

                foreach ($aPeople as $jPerson) {
                    echo '<div class="span__4 span__3_l">
                            <div class="">
                               <div class="img">
                                   <img src="./images/'.$jPerson->img->url.'" alt="">
                               </div>
                               <p>'.$jPerson->role->text.'</p>
                               <h4>'.$jPerson->name->text.'</h4>
                            </div>
                          </div>';
                }

                ?>
            </div>
        </section>
        <section id="achievements" class="section gutter-top-xl gutter-bot-l">
            <div class="container">
                <?php require __DIR__.'/modules/achievements.php'; ?>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
