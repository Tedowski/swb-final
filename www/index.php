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
                <h1 class="heading">My App</h1>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi consectetur dolores hic magni, quis reiciendis sint ut.</p>
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
                        </div>
                        <p><?= $jContent->sec_challenges->subtitle->text ?></p>
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
                    <div>
                        <h3><?= $jContent->sec_challenges->challenges_facts->fact_1->headline->text ?></h3>
                        <h4><?= $jContent->sec_challenges->challenges_facts->fact_1->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_1->body->text ?></p>
                        <a href="<?= $jContent->sec_challenges->challenges_facts->fact_1->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <h3><?= $jContent->sec_challenges->challenges_facts->fact_2->headline->text ?></h3>
                        <h4><?= $jContent->sec_challenges->challenges_facts->fact_2->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_2->body->text ?></p>
                        <a href="<?= $jContent->sec_challenges->challenges_facts->fact_2->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <h3><?= $jContent->sec_challenges->challenges_facts->fact_3->headline->text ?></h3>
                        <h4><?= $jContent->sec_challenges->challenges_facts->fact_3->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_3->body->text ?></p>
                        <a href="<?= $jContent->sec_challenges->challenges_facts->fact_3->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <h3><?= $jContent->sec_challenges->challenges_facts->fact_4->headline->text ?></h3>
                        <h4><?= $jContent->sec_challenges->challenges_facts->fact_4->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_4->body->text ?></p>
                        <a href="<?= $jContent->sec_challenges->challenges_facts->fact_4->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <h3><?= $jContent->sec_challenges->challenges_facts->fact_5->headline->text ?></h3>
                        <h4><?= $jContent->sec_challenges->challenges_facts->fact_5->subheadline->text ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_5->body->text ?></p>
                        <a href="<?= $jContent->sec_challenges->challenges_facts->fact_5->link->src ?>" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="span__4">
                    <div>
                        <h3><?= $jContent->sec_challenges->challenges_facts->fact_6->headline->text; ?></h3>
                        <h4><?= $jContent->sec_challenges->challenges_facts->fact_6->subheadline->text; ?></h4>
                        <p><?= $jContent->sec_challenges->challenges_facts->fact_6->body->text; ?></p>
                        <a href="<?= $jContent->sec_challenges->challenges_facts->fact_6->link->src; ?>" target="_blank">Read more</a>
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
                        </div>
                        <p><?= $jContent->sec_solutions->subtitle->text ?></p>
<!--                        <p>We came up with an interconnected project, that not only joints multiple activities, but also people of all origins with different interests.</p>-->
<!--                        <p>Altogether, we will create a youth center that will serve all kinds of purposes within the city of Maputo.</p>-->
                    </div>
                </div>
                <div class="span__4 span__8_m">
                    <div class="subgrid-2-col">
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_1->headline->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_solutions->solutions->solution_1->content->text ?></p>
<!--                                <p>SWB, Skate-Aid and AMS will build the first public skatepark in Mozambique along with a youth center on the property. It will be right on the coast, in the suburban area of the capital city Maputo.</p>-->
<!--                                <p>It is going to be concrete, for both, skilled skaters and beginners. The park will feature a technical and playful section, implementing urban elements, but also a real bowl.</p>-->
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_2->headline->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_solutions->solutions->solution_2->content->text ?></p>
<!--                                <p>Once the skatepark is built educational seminars, workshops, concerts and exhibitions will take place on Costa do Sol in the first month. After the opening ceremony ASM together with Skate-Aid will facilitate regular skateboarding lessons.</p>-->
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_3->headline->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_solutions->solutions->solution_3->content->text ?></p>
<!--                                <p>Through skateboarding we want to offer a playful and creative way to learn and make new friendships. In skating, competitiveness is replaced by joint effort and enthusiasm for progress.</p>-->
<!--                                <p>To bolster local skate culture we are also bringing skateboards, skate gear and experience with us, to give away in Maputo.</p>-->
                            </div>
                        </div>
                        <div class="span__4">
                            <div>
                                <div>
                                    <h4 class="item-headline"><?= $jContent->sec_solutions->solutions->solution_4->headline->text ?></h4>
                                </div>
                                <p><?= $jContent->sec_solutions->solutions->solution_4->content->text ?></p>
<!--                                <p>A massive wall surrounding the property will serve as free canvas for local artists and art enthusiasts.</p>-->
<!--                                <p>Furthermore, the youth center will regularly host art exhibitions, video premieres, craft workshops, lectures, readings and much more.</p>-->
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
                    </div>
                    <p><?= $jContent->sec_partnerships->subtitle->text ?></p>
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
        <section class="section gutter-top-xl gutter-bot-xl">
            <div class="container grid-body">
                <div class="span__4 span__8_l offset__2_l">
                    <form class="form form_main form_card">
                        <div class="span__2 span__1_m">
                            <div class="form__input-group">
                                <label class="label">label</label>
                                <div class="input-wrapper">
                                    <input class="input" type="text" placeholder="e.g. Jon">
                                </div>
                            </div>
                        </div>
                        <div class="span__2 span__1_m">
                            <div class="form__input-group">
                                <label class="label">label</label>
                                <div class="input-wrapper">
                                    <input class="input" type="text" placeholder="e.g. Doe">
                                </div>
                            </div>
                        </div>
                        <div class="span__2">
                            <div class="form__input-group">
                                <label class="label">label</label>
                                <div class="input-wrapper">
                                    <input class="input" type="number" placeholder="Telephone">
                                </div>
                            </div>
                        </div>
                        <div class="span__2">
                            <div class="form__input-group">
                                <label class="label">label</label>
                                <div class="input-wrapper">
                                    <input class="input" type="password" id="password" placeholder="Something secure.." data-min="8" data-max="24">
                                </div>
                            </div>
                        </div>
                        <div class="span__1 margin-top-m">
                            <button class="btn btn-sec btn-block">Secondary</button>
                        </div>
                        <div class="span__1 margin-top-m">
                            <button class="btn btn-prim btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container grid-body margin-top-l">
                <div class="span__4 span__8_l offset__2_l">
                    <form class="form form_card">
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Your E-mail">
                            <button class="btn btn-prim btn-block input-append">Sign me up</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body">
                <div class="span__4 span__6_l justify-center-s-up">
                    <button id="openTop" class="btn btn-prim btn-block">Top error</button>
                </div>
                <div class="span__4 span__6_l justify-center-s-up">
                    <button id="openBot" class="btn btn-prim btn-block">Bottom warning</button>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
