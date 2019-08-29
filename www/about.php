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
                    <h1 class="title"><?= $jContent->title->text ?></h1>
                </div>
                <div class="span__4 span__6_m offset__1_m span__8_l offset__2_l iframe-container">
                    <iframe class="iframe-respo" src="<?= $jContent->video->url ?>"  allow="encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="container grid-body margin-top-xl">
                <div class="span__4">
                    <div>
                        <div class="img">
                            Mission IMG
                        </div>
                        <div class="underline-full undrln__prim"></div>
                        <p><?= $jContent->sec_holy_trio->mission->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img">
                            Vision IMG
                        </div>
                        <div class="underline-full undrln__prim"></div>
                        <p><?= $jContent->sec_holy_trio->vision->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <div class="img">
                            Values IMG
                        </div>
                        <div class="underline-full undrln__prim"></div>
                        <p><?= $jContent->sec_holy_trio->values->text ?></p>
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
                        </div>
                        <p><?= $jContent->sec_partnership_triangle->subtitle->text ?></p>
                        <!--                        <p>We came up with an interconnected project, that not only joints multiple activities, but also people of all origins with different interests.</p>-->
                        <!--                        <p>Altogether, we will create a youth center that will serve all kinds of purposes within the city of Maputo.</p>-->
                    </div>
                </div>
                <div class="span__4 span__8_m">
                    <div class="subgrid-2-col">
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_partnership_triangle->partners->partner_1->heading->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_partnership_triangle->partners->partner_1->bio->text ?></p>
                                <!--                                <p>SWB, Skate-Aid and AMS will build the first public skatepark in Mozambique along with a youth center on the property. It will be right on the coast, in the suburban area of the capital city Maputo.</p>-->
                                <!--                                <p>It is going to be concrete, for both, skilled skaters and beginners. The park will feature a technical and playful section, implementing urban elements, but also a real bowl.</p>-->
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_partnership_triangle->partners->partner_2->heading->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_partnership_triangle->partners->partner_2->bio->text ?></p>
                                <!--                                <p>Once the skatepark is built educational seminars, workshops, concerts and exhibitions will take place on Costa do Sol in the first month. After the opening ceremony ASM together with Skate-Aid will facilitate regular skateboarding lessons.</p>-->
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_partnership_triangle->partners->partner_3->heading->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_partnership_triangle->partners->partner_3->bio->text ?></p>
                                <!--                                <p>Through skateboarding we want to offer a playful and creative way to learn and make new friendships. In skating, competitiveness is replaced by joint effort and enthusiasm for progress.</p>-->
                                <!--                                <p>To bolster local skate culture we are also bringing skateboards, skate gear and experience with us, to give away in Maputo.</p>-->
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
                        <div class="underline-full undrln__prim"></div>
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
                                        <h4><?= $jContent->sec_team->member_1->role->text ?></h4>
                                        <h3><?= $jContent->sec_team->member_1->name->text ?></h3>
                                        <p><?= $jContent->sec_team->member_1->quote->text ?></p>
                                    </div>
                                    <div>
                                        <h5>Bio</h5>
                                        <p><?= $jContent->sec_team->member_1->bio->text ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__profile">
                                    <div class="text-centered">
                                        <h4><?= $jContent->sec_team->member_2->role->text ?></h4>
                                        <h3><?= $jContent->sec_team->member_2->name->text ?></h3>
                                        <p><?= $jContent->sec_team->member_2->quote->text ?></p>
                                    </div>
                                    <div>
                                        <h5>Bio</h5>
                                        <p><?= $jContent->sec_team->member_2->bio->text ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-slide">
                                <div class="slide__profile">
                                    <div class="text-centered">
                                        <h4><?= $jContent->sec_team->member_3->role->text ?></h4>
                                        <h3><?= $jContent->sec_team->member_3->name->text ?></h3>
                                        <p><?= $jContent->sec_team->member_3->quote->text ?></p>
                                    </div>
                                    <div>
                                        <h5>Bio</h5>
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
                        <div class="underline-full undrln__prim"></div>
                        <h5 class="subtitle margin-top-s"><?= $jContent->sec_people_behind->subtitle->text ?></h5>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
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
