<?php


$sData = file_get_contents('data/page_index.json');
$jData = json_decode($sData);

$jContent = $jData->index;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/loader.php';
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
                        <img src="./images/Mozambique_map.png" alt="mozambique">
                    </div>
                </div>
            </div>
            <div class="container grid-body align-items-stretch margin-top-xl gutter-top-s">
                <div class="span__4">
                    <div class="item__challenge gutter-bot-l">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_1->headline->text ?></h3>
<!--                        <h4 class="item-subheadline">--><?//= $jContent->sec_challenges->challenges_facts->fact_1->subheadline->text ?><!--</h4>-->
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_challenges->challenges_facts->fact_1->body->text ?></p>
                        <div class="underline-container undrln__right">
                            <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_1->link->src ?>" target="_blank">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge gutter-bot-l">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_2->headline->text ?></h3>
<!--                        <h4 class="item-subheadline">--><?//= $jContent->sec_challenges->challenges_facts->fact_2->subheadline->text ?><!--</h4>-->
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_challenges->challenges_facts->fact_2->body->text ?></p>
                        <div class="underline-container undrln__right">
                            <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_2->link->src ?>" target="_blank">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge gutter-bot-l">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_3->headline->text ?></h3>
<!--                        <h4 class="item-subheadline">--><?//= $jContent->sec_challenges->challenges_facts->fact_3->subheadline->text ?><!--</h4>-->
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_challenges->challenges_facts->fact_3->body->text ?></p>
                        <div class="underline-container undrln__right">
                            <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_3->link->src ?>" target="_blank">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge gutter-bot-m">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_4->headline->text ?></h3>
<!--                        <h4 class="item-subheadline">--><?//= $jContent->sec_challenges->challenges_facts->fact_4->subheadline->text ?><!--</h4>-->
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_challenges->challenges_facts->fact_4->body->text ?></p>
                        <div class="underline-container undrln__right">
                            <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_4->link->src ?>" target="_blank">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge gutter-bot-m">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_5->headline->text ?></h3>
<!--                        <h4 class="item-subheadline">--><?//= $jContent->sec_challenges->challenges_facts->fact_5->subheadline->text ?><!--</h4>-->
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_challenges->challenges_facts->fact_5->body->text ?></p>
                        <div class="underline-container undrln__right">
                            <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_5->link->src ?>" target="_blank">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="span__4">
                    <div class="item__challenge gutter-bot-m">
                        <h3 class="item-headline"><?= $jContent->sec_challenges->challenges_facts->fact_6->headline->text; ?></h3>
<!--                        <h4 class="item-subheadline">--><?//= $jContent->sec_challenges->challenges_facts->fact_6->subheadline->text; ?><!--</h4>-->
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__m"></div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_challenges->challenges_facts->fact_6->body->text; ?></p>
                        <div class="underline-container undrln__right">
                            <a class="btn btn-text" href="<?= $jContent->sec_challenges->challenges_facts->fact_6->link->src; ?>" target="_blank">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l section-dark">
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
                            <div class="gutter-bot-m margin-top-s">
                                <div>
                                    <div class="item-icon">
                                        <svg id="icon-build" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.865 46.865">
                                            <g transform="translate(-0.65)">
                                                <g transform="translate(0.65 0)">
                                                    <path class="a"
                                                          d="M15.167,46.865a.781.781,0,0,1-.5-.181l-3.6-3a.782.782,0,0,1-.1-1.1l1.64-1.97H.782A.782.782,0,0,1,0,39.835V6.247A3.916,3.916,0,0,1,3.905,2.342h.781A3.916,3.916,0,0,1,8.592,6.247H35.63l5.554-6a.781.781,0,0,1,1.1-.043l3.437,3.183a.774.774,0,0,1,.25.543.762.762,0,0,1-.207.561L44.177,6.213l1.146,1.066a.781.781,0,0,1,.044,1.1L42.183,11.82h0V32.648l3.336-3.507a.788.788,0,0,1,.86-.187.778.778,0,0,1,.491.726v16.4a.782.782,0,0,1-.781.781H30.463a.781.781,0,0,1-.566-1.319l4.694-4.93H20.278a2.319,2.319,0,0,1-.512,1.165l-4,4.8A.78.78,0,0,1,15.167,46.865ZM45.3,31.633,32.285,45.3H45.3Zm-30.639,8.95-2,2.4,2.4,2,2-2.4Zm2.1-2.083a.78.78,0,0,0-.6.281l-.5.6,2.4,2,.5-.6a.787.787,0,0,0,.177-.574.777.777,0,0,0-.278-.529l-1.2-1A.784.784,0,0,0,16.765,38.5Zm0-1.562a2.349,2.349,0,0,1,1.5.543l1.2,1a2.313,2.313,0,0,1,.486.573H36.079l4.538-4.765V10.059l-5.988,6.472a.78.78,0,0,1-.235.165.543.543,0,0,1-.061.027.15.15,0,0,0-.025.012.186.186,0,0,1-.032.013L29.9,18.023a.771.771,0,0,1-.218.031.781.781,0,0,1-.766-.94l.933-4.458a.356.356,0,0,1,.013-.041l0-.006c0-.009.007-.018.01-.026.008-.024.015-.045.024-.067a.752.752,0,0,1,.139-.227l4.145-4.48H8.592V39.053H13.9l1.059-1.271A2.339,2.339,0,0,1,16.765,36.938ZM3.905,36.71a2.346,2.346,0,0,0-2.343,2.343H7.03A2.346,2.346,0,0,0,4.686,36.71Zm0-1.562h.781a3.886,3.886,0,0,1,2.343.8V6.247A2.346,2.346,0,0,0,4.686,3.9H3.905A2.346,2.346,0,0,0,1.562,6.247v29.7A3.889,3.889,0,0,1,3.905,35.148ZM31.1,14.329l-.384,1.832,1.8-.524L31.1,14.329h0ZM39.675,4.176l-7.957,8.6L34.011,14.9l6.606-7.14V7.748h.009L41.969,6.3Zm3.442,3.18-.938,1.015V9.521l1.51-1.633-.572-.531ZM41.8,1.883,40.736,3.03l2.293,2.123L44.09,4Z"
                                                          transform="translate(0)" />
                                                    <path class="a"
                                                          d="M6.249,7.029H.782A.78.78,0,0,1,.229,5.7L5.7.229A.781.781,0,0,1,7.03.781V6.249A.782.782,0,0,1,6.249,7.029ZM5.468,2.666l-2.8,2.8h2.8Z"
                                                          transform="translate(36.711 36.71)" />
                                                </g>
                                                <g transform="translate(12.376 19.18)">
                                                    <path class="a"
                                                          d="M25,12.4H0V0H14.792V.732A10.214,10.214,0,0,0,25,10.935V12.4ZM4.911,1.465a10.234,10.234,0,0,0,10.176,9.47h4.237a11.736,11.736,0,0,1-2.579-1.952,11.646,11.646,0,0,1-2.394-3.455,11.569,11.569,0,0,1-1-4.063Zm-3.446,0v9.47H9.417A11.714,11.714,0,0,1,6.838,8.982,11.643,11.643,0,0,1,4.444,5.527a11.582,11.582,0,0,1-1-4.062Z"
                                                          transform="translate(0 0)" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_solutions->solutions->solution_1->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_1->content->text ?></p>
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m margin-top-s">
                                <div>
                                    <div class="item-icon">
                                        <svg id="icon-teach" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.882 42.882">
                                            <g transform="translate(-0.902 -0.384)">
                                                <g transform="translate(0.902 0.384)">
                                                    <path class="a"
                                                          d="M16.438,37.889H.715A.715.715,0,0,1,0,37.175V30.742a.715.715,0,0,1,.715-.715H3.573V20.737H1.429a.716.716,0,0,1-.715-.715V12.385a5.235,5.235,0,0,1,4.7-5.2,4.288,4.288,0,1,1,6.35-.027H22.156a.716.716,0,0,1,.714.715v2.859a.715.715,0,0,1-.715.715H13.579V30.027h2.859a.715.715,0,0,1,.714.715v6.432A.715.715,0,0,1,16.438,37.889ZM1.429,31.457v5H15.723v-5Zm6.432-12.15h1.43v10.72H12.15V10.73a.715.715,0,0,1,.715-.715h8.577V8.587H5.942a3.808,3.808,0,0,0-3.8,3.8v6.922H3.573V11.445H5V30.027H7.861V19.308ZM8.577,1.44A2.859,2.859,0,1,0,11.435,4.3,2.866,2.866,0,0,0,8.577,1.44Z"
                                                          transform="translate(0 4.993)" />
                                                    <path class="a"
                                                          d="M15.725,10.72H3.574a.715.715,0,0,1-.715-.715V6.99L.542,6.411A.715.715,0,0,1,.287,5.146l2.572-1.93V.715A.715.715,0,0,1,3.574,0h12.15a.714.714,0,0,1,.715.715v9.291A.715.715,0,0,1,15.725,10.72ZM4.289,1.429V3.573A.718.718,0,0,1,4,4.145L2.345,5.389l1.4.35a.715.715,0,0,1,.542.693V9.291h10.72V1.429Z"
                                                          transform="translate(13.579 0)" />
                                                    <path class="a"
                                                          d="M5.718,0,2.649,3.068,1.011,1.429,0,2.44,2.144,4.584a.714.714,0,0,0,1.011,0L6.728,1.011Z"
                                                          transform="translate(20.221 3.068)" />
                                                    <path class="a"
                                                          d="M6.433,12.87H.715A.715.715,0,0,1,0,12.156V7.868A3.569,3.569,0,0,1,1.577,4.905l-.05-.05A2.859,2.859,0,0,1,3.573,0,2.857,2.857,0,0,1,6.431,2.894,2.839,2.839,0,0,1,5.57,4.905,3.568,3.568,0,0,1,7.147,7.868v4.288A.715.715,0,0,1,6.433,12.87ZM3.573,5.723A2.147,2.147,0,0,0,1.429,7.868v3.573H5.718V7.868A2.147,2.147,0,0,0,3.573,5.723Zm0-4.288A1.429,1.429,0,1,0,5,2.864,1.433,1.433,0,0,0,3.573,1.435Z"
                                                          transform="translate(27.159 30.012)" />
                                                    <path class="a"
                                                          d="M6.433,12.87H.715A.715.715,0,0,1,0,12.156V7.868A3.569,3.569,0,0,1,1.577,4.905l-.05-.05A2.859,2.859,0,0,1,3.573,0,2.857,2.857,0,0,1,6.431,2.894,2.839,2.839,0,0,1,5.57,4.905,3.568,3.568,0,0,1,7.147,7.868v4.288A.715.715,0,0,1,6.433,12.87ZM3.573,5.723A2.147,2.147,0,0,0,1.429,7.868v3.573H5.718V7.868A2.147,2.147,0,0,0,3.573,5.723Zm0-4.288A1.429,1.429,0,1,0,5,2.864,1.433,1.433,0,0,0,3.573,1.435Z"
                                                          transform="translate(35.735 30.012)" />
                                                    <path class="a"
                                                          d="M6.433,12.87H.715A.715.715,0,0,1,0,12.156V7.868A3.569,3.569,0,0,1,1.577,4.905l-.05-.05A2.859,2.859,0,0,1,3.573,0,2.857,2.857,0,0,1,6.431,2.894,2.839,2.839,0,0,1,5.57,4.905,3.568,3.568,0,0,1,7.147,7.868v4.288A.715.715,0,0,1,6.433,12.87ZM3.573,5.723A2.147,2.147,0,0,0,1.429,7.868v3.573H5.718V7.868A2.147,2.147,0,0,0,3.573,5.723Zm0-4.288A1.429,1.429,0,1,0,5,2.864,1.433,1.433,0,0,0,3.573,1.435Z"
                                                          transform="translate(18.582 30.012)" />
                                                </g>
                                                <g transform="translate(22.399 11.542)">
                                                    <path class="a"
                                                          d="M4.447,17.806A4.379,4.379,0,0,1,1.33,16.517l-.04-.04a4.414,4.414,0,0,1,0-6.235l8.953-8.953a4.415,4.415,0,0,1,6.235,0l.04.04a4.414,4.414,0,0,1,0,6.235L7.564,16.517A4.379,4.379,0,0,1,4.447,17.806ZM13.34,1.059a3.343,3.343,0,0,0-2.378.989L2.049,10.962a3.353,3.353,0,0,0,0,4.756l.04.04a3.353,3.353,0,0,0,4.756,0l8.913-8.913a3.353,3.353,0,0,0,0-4.756l-.04-.04A3.344,3.344,0,0,0,13.34,1.059Z"
                                                          transform="translate(0 0)" />
                                                    <path class="a"
                                                          d="M4.916,3.038a.435.435,0,0,0-.6,0l-.24.24-.719-.719.2-.2L3.2,2,3,2.2l-.719-.719.24-.24a.435.435,0,0,0,0-.6L2,.12a.435.435,0,0,0-.6,0L.12,1.4a.435.435,0,0,0,0,.6l.52.52a.435.435,0,0,0,.6,0l.28-.28.719.719-.2.2.36.36.2-.2.719.719-.24.24a.435.435,0,0,0,0,.6l.52.52a.435.435,0,0,0,.6,0L5.476,4.117a.435.435,0,0,0,0-.6Z"
                                                          transform="translate(9.443 2.848)" />
                                                    <path class="a"
                                                          d="M4.916,3.078a.435.435,0,0,0-.6,0l-.28.28L3.317,2.6l.2-.2-.36-.36-.2.2-.719-.719.28-.28a.435.435,0,0,0,0-.6L2,.12a.435.435,0,0,0-.6,0L.12,1.4a.435.435,0,0,0,0,.6l.52.52a.435.435,0,0,0,.6,0l.24-.24L2.2,3,2,3.2l.36.36.2-.2.719.719-.24.24a.435.435,0,0,0,0,.6l.52.52a.435.435,0,0,0,.6,0L5.436,4.157a.435.435,0,0,0,0-.6Z"
                                                          transform="translate(2.808 9.443)" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_solutions->solutions->solution_2->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_2->content->text ?></p>
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <div class="item-icon">
                                        <svg id="icon-skate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73.994 74">
                                            <g transform="translate(-0.207 -0.592)">
                                                <path class="a"
                                                      d="M58.707,74a14.276,14.276,0,0,1-10.161-4.209l-3.694-3.7-.924.923a1.305,1.305,0,0,1-1.847,0l-7.39-7.388a1.309,1.309,0,0,1,0-1.847l.924-.924L18.065,39.309l-.923.923a1.3,1.3,0,0,1-1.847,0L7.9,32.844A1.305,1.305,0,0,1,7.9,31l.923-.925L4.209,25.455a14.37,14.37,0,0,1,0-20.322l.924-.924a14.37,14.37,0,0,1,20.322,0l4.617,4.62a1.305,1.305,0,0,1,1.847,0l7.39,7.388a1.307,1.307,0,0,1,0,1.847L56.86,35.615a1.305,1.305,0,0,1,1.847,0L66.1,43a1.309,1.309,0,0,1,0,1.847l3.7,3.694a14.385,14.385,0,0,1,0,20.322l-.923.923A14.279,14.279,0,0,1,58.707,74Zm-.921-24.531h0l-9.239,9.239.924.923a1.308,1.308,0,0,1,0,1.847L46.7,64.249l3.695,3.695a11.768,11.768,0,0,0,16.626,0l.925-.923a11.718,11.718,0,0,0,1.634-14.565L62.4,59.631l-1.848-1.847,7.39-7.39L64.25,46.7l-3.695,3.695a1.306,1.306,0,0,1-1.847,0l-.923-.924ZM41.157,55.012h0l-3.7,3.7L43,64.249,46.7,60.554l-5.541-5.542Zm6.261-2.567h0l-2.566,2.567L46.7,56.86l9.238-9.239-1.848-1.847L51.52,48.343c0,.059.006.132.006.235a3.9,3.9,0,0,1-3.9,3.886h-.01l-.035,0H47.57l-.016,0-.014,0-.011,0-.012,0-.012,0-.011,0-.013,0-.017,0h-.015l-.031,0ZM23.606,30.072h0L21.759,31.92l.924.924a1.3,1.3,0,0,1,0,1.847l-2.772,2.771,17.55,17.551,2.772-2.772a1.342,1.342,0,0,1,1.847,0l.924.925,1.847-1.848a3.923,3.923,0,0,1,0-5.541,4.013,4.013,0,0,1,5.542,0l1.847-1.847L51.317,43a1.305,1.305,0,0,1,0-1.847l3.7-3.695L37.462,19.912l-3.7,3.7a1.3,1.3,0,0,1-1.847,0L31,22.683,29.149,24.53a3.919,3.919,0,1,1-5.543,5.542ZM47.623,47.241a1.306,1.306,0,0,0-.922,2.229,1.332,1.332,0,0,0,1.846,0,1.3,1.3,0,0,0-.923-2.229Zm10.161-8.855h0l-3.7,3.694,5.543,5.542,3.694-3.694-5.541-5.542ZM14.368,28.225h0l-3.694,3.7,5.543,5.541,3.693-3.694-5.542-5.543ZM27.3,18.988h0l-9.237,9.236,1.847,1.847L22.478,27.5c0-.025,0-.049-.007-.072l0-.018,0-.013,0-.013v-.009a.59.59,0,0,1-.006-.078,3.914,3.914,0,0,1,1.148-2.771,3.866,3.866,0,0,1,2.746-1.135c.064,0,.136,0,.228.007l2.567-2.568L27.3,18.988ZM26.379,26h0a1.308,1.308,0,0,0-.923,2.229A1.306,1.306,0,1,0,26.38,26Zm-13.857-10.7h0l1.846,1.847L6.978,24.53l3.7,3.695,2.772-2.77a1.342,1.342,0,0,1,1.847,0l.924.923,9.238-9.238-.924-.924a1.307,1.307,0,0,1,0-1.847l3.694-3.695L23.608,6.056a11.771,11.771,0,0,0-16.626,0l-.923.924a11.762,11.762,0,0,0-.871,15.649l7.333-7.337ZM31,11.6h0l-3.695,3.7,5.541,5.542,3.7-3.695L31,11.6Z"
                                                      transform="translate(0.207 0.592)" />
                                                <path class="a" d="M0,1.345,1.345,0,2.689,1.345,1.345,2.689Z"
                                                      transform="translate(52.33 42.701)" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_solutions->solutions->solution_3->headline->text ?></h4>
                                    <div class="underline-container">
                                        <div class="undrln__prim underline-inline undrln__s undrln__left"></div>
                                    </div>
                                </div>
                                <p class="margin-top-m"><?= $jContent->sec_solutions->solutions->solution_3->content->text ?></p>
                            </div>
                        </div>
                        <div class="span__4">
                            <div class="gutter-bot-m">
                                <div>
                                    <div class="item-icon">
                                        <svg id="icon-culture" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 48.353 47.627">
                                            <g transform="translate(-0.639 -0.878)">
                                                <path class="a"
                                                      d="M2.422,0H.807A.763.763,0,0,0,0,.807a.763.763,0,0,0,.807.807H2.422A.763.763,0,0,0,3.229.807.763.763,0,0,0,2.422,0Z"
                                                      transform="translate(14.281 41.24)" />
                                                <path class="a"
                                                      d="M2.422,0H.807A.763.763,0,0,0,0,.807a.809.809,0,0,0,.807.807H2.422A.763.763,0,0,0,3.229.807.763.763,0,0,0,2.422,0Z"
                                                      transform="translate(2.172 41.24)" />
                                                <path class="a"
                                                      d="M.807,0A.809.809,0,0,0,0,.807V11.3a.763.763,0,0,0,.807.807.763.763,0,0,0,.807-.807V.807A.763.763,0,0,0,.807,0Z"
                                                      transform="translate(4.594 19.444)" />
                                                <path class="a"
                                                      d="M.807,0A.868.868,0,0,0,0,.807V12.916a.763.763,0,0,0,.807.807.763.763,0,0,0,.807-.807V.807A.763.763,0,0,0,.807,0Z"
                                                      transform="translate(8.63 17.023)" />
                                                <path class="a"
                                                      d="M.807,0A.868.868,0,0,0,0,.807V13.723a.763.763,0,0,0,.807.807.763.763,0,0,0,.807-.807V.807A.763.763,0,0,0,.807,0Z"
                                                      transform="translate(12.586 16.215)" />
                                                <path class="a"
                                                      d="M14.369,35.518H4.359A2.834,2.834,0,0,1,2.422,34.9a2.283,2.283,0,0,1-.727-1.645,3.352,3.352,0,0,1-.08-.968V29.3C.419,27.709.324,27.535.162,26.639a1.623,1.623,0,0,0-.075-.255C0,26.156,0,26.156,0,21.634V7.265a3.524,3.524,0,0,1,.807-2.22A2.624,2.624,0,0,1,2.825,4.036a2.29,2.29,0,0,1,1.211.323,3.6,3.6,0,0,1,.958-1.917,2.621,2.621,0,0,1,1.867-.827A1.824,1.824,0,0,1,8.153,2.1,2.907,2.907,0,0,1,10.817,0a2.6,2.6,0,0,1,2.341,1.453A2.6,2.6,0,0,1,14.853.807a2.631,2.631,0,0,1,2.018.979,3.525,3.525,0,0,1,.807,2.25V13.8a6.375,6.375,0,0,1,1.13-1.615,3.018,3.018,0,0,1,2.106-.792,3.064,3.064,0,0,1,1.365.308A2.17,2.17,0,0,1,23.5,13.131a2.92,2.92,0,0,1-.653,2.368,16.14,16.14,0,0,0-1.938,7.346,7.344,7.344,0,0,1-2.26,5.57,6.871,6.871,0,0,1-1.777,1.21v2.664C16.871,34.553,16.122,35.518,14.369,35.518ZM2.744,5.65c-.588,0-1.21.83-1.21,1.615V21.634c0,4.294,0,4.294.092,4.543a1.829,1.829,0,0,1,.069.22c.149.521.223.621,1.125,1.844l.247.335a1.156,1.156,0,0,1,.162.485v3.955c.084.672.359.888,1.13.888h10.01c.7,0,.888-.347.888-1.615V29.061c0-.326.24-.646.485-.646a.445.445,0,0,1,.161-.083,1.427,1.427,0,0,0,.323-.159,5.769,5.769,0,0,0,2.987-5.328c0-2.514.908-6.455,2.26-8.314.317-.454.442-.772.393-1a.586.586,0,0,0-.312-.371,1.542,1.542,0,0,0-.675-.141,1.38,1.38,0,0,0-.94.3,10.81,10.81,0,0,0-2.26,5.812.743.743,0,0,1-.789.74.827.827,0,0,1-.825-.659V18.97c0-.08-.08-14.786-.081-14.934,0-.875-.555-1.615-1.211-1.615s-1.21.739-1.21,1.615a.808.808,0,0,1-1.615,0V3.229c0-.815-.56-1.615-1.13-1.615-.588,0-1.21.83-1.21,1.615V4.844H7.992a1.982,1.982,0,0,0-.355-1.108,1.022,1.022,0,0,0-.775-.507A1.583,1.583,0,0,0,5.57,4.844V7.265H3.955a1.9,1.9,0,0,0-.372-1.119A1.1,1.1,0,0,0,2.744,5.65Z"
                                                      transform="translate(0.639 12.987)" />
                                                <path class="a"
                                                      d="M2.422,0H.807A.763.763,0,0,0,0,.807a.809.809,0,0,0,.807.807H2.422A.763.763,0,0,0,3.229.807.763.763,0,0,0,2.422,0Z"
                                                      transform="translate(32.04 41.24)" />
                                                <path class="a"
                                                      d="M2.422,0H.807A.763.763,0,0,0,0,.807a.763.763,0,0,0,.807.807H2.422A.763.763,0,0,0,3.229.807.763.763,0,0,0,2.422,0Z"
                                                      transform="translate(44.149 41.24)" />
                                                <path class="a"
                                                      d="M.807,0A.809.809,0,0,0,0,.807V11.3a.763.763,0,0,0,.807.807.763.763,0,0,0,.807-.807V.807A.763.763,0,0,0,.807,0Z"
                                                      transform="translate(43.341 19.444)" />
                                                <path class="a"
                                                      d="M.807,0A.809.809,0,0,0,0,.807V12.916a.763.763,0,0,0,.807.807.763.763,0,0,0,.807-.807V.807A.763.763,0,0,0,.807,0Z"
                                                      transform="translate(39.305 17.023)" />
                                                <path class="a"
                                                      d="M.807,0A.809.809,0,0,0,0,.807V13.723a.763.763,0,0,0,.807.807.763.763,0,0,0,.807-.807V.807A.763.763,0,0,0,.807,0Z"
                                                      transform="translate(35.269 16.215)" />
                                                <path class="a"
                                                      d="M19.171,35.518H9.16a2.239,2.239,0,0,1-2.421-2.26,3.614,3.614,0,0,1-.081-.968V29.625a6.863,6.863,0,0,1-1.776-1.21,7.425,7.425,0,0,1-2.26-5.57A15.609,15.609,0,0,0,.685,15.5,3,3,0,0,1,.07,13.05a2.066,2.066,0,0,1,1.18-1.345A3.064,3.064,0,0,1,2.615,11.4a3.018,3.018,0,0,1,2.106.792,7.508,7.508,0,0,1,1.13,1.534V4.036a3.524,3.524,0,0,1,.807-2.25A2.632,2.632,0,0,1,8.677.807a2.6,2.6,0,0,1,1.695.646A2.961,2.961,0,0,1,12.713,0a3.124,3.124,0,0,1,2.663,2.1,2.208,2.208,0,0,1,1.373-.484,2.621,2.621,0,0,1,1.867.827,3.6,3.6,0,0,1,.958,1.917,2.688,2.688,0,0,1,1.211-.323A2.624,2.624,0,0,1,22.8,5.045a3.522,3.522,0,0,1,.807,2.22V21.715c0,4.444,0,4.444-.085,4.711a2.358,2.358,0,0,0-.076.294c-.163.9-.258,1.07-1.453,2.664V32.37a3.6,3.6,0,0,1-.048.557,2.289,2.289,0,0,0-.033.33A2.452,2.452,0,0,1,19.171,35.518ZM2.651,12.936a1.546,1.546,0,0,0-.675.141.586.586,0,0,0-.312.371c-.049.23.076.548.393,1,1.352,1.943,2.26,5.868,2.26,8.314A5.771,5.771,0,0,0,7.3,28.089l.005,0a1.258,1.258,0,0,0,.484.242.777.777,0,0,1,.565.727v3.955c.075.6.215.888.807.888h10.09c.771,0,1.046-.216,1.13-.888V29.061a1.174,1.174,0,0,1,.1-.388c.02-.056.041-.113.063-.178L20.7,28.3c1.055-1.335,1.142-1.444,1.218-1.985.014-.1.025-.145.034-.186a40.606,40.606,0,0,0,.046-4.5V7.265c0-.83-.588-1.614-1.21-1.614s-1.211.784-1.211,1.614a.807.807,0,0,1-1.614,0V4.844a1.607,1.607,0,0,0-1.292-1.615c-.483,0-1.13.8-1.13,1.615a.807.807,0,0,1-1.614,0V3.229c0-.83-.589-1.614-1.211-1.614S11.5,2.4,11.5,3.229v.807a.807.807,0,0,1-1.614,0c0-.875-.555-1.615-1.211-1.615s-1.211.739-1.211,1.615V19.212a.81.81,0,0,1-.8.651.836.836,0,0,1-.557-.209.789.789,0,0,1-.252-.6,10.81,10.81,0,0,0-2.26-5.812A1.379,1.379,0,0,0,2.651,12.936Z"
                                                      transform="translate(25.382 12.987)" />
                                                <path class="a"
                                                      d="M8.836,16.145a.8.8,0,0,1-.565-.242c0-.081,0-.081-.242-.323a2.93,2.93,0,0,1-.485-.467c-.079-.088-.161-.179-.242-.26l-2.26-2.26-.081-.08c-.585-.585-1.092-1.1-1.54-1.562-.714-.73-1.228-1.257-1.528-1.506A5.542,5.542,0,0,1,0,5.522,4.929,4.929,0,0,1,1.329,1.938,5.521,5.521,0,0,1,5.365,0,4.73,4.73,0,0,1,8.917,1.615,4.4,4.4,0,0,1,12.469,0,5.521,5.521,0,0,1,16.5,1.938,5.045,5.045,0,0,1,17.766,5.6,5.645,5.645,0,0,1,15.94,9.445c-.484.4-1.6,1.521-3.148,3.067l-.081.081-2.26,2.26-.727.727L9.4,15.9A.8.8,0,0,1,8.836,16.145ZM5.365,1.614A3.934,3.934,0,0,0,2.54,2.987a3.378,3.378,0,0,0-.852,2.449,3.979,3.979,0,0,0,1.337,2.8c.126.126.292.287.5.491.6.583,1.51,1.462,2.645,2.657l.081.08.024.024,2.236,2.236a1.7,1.7,0,0,1,.323.484l.239-.239,0,0,.01-.01.232-.232,2.26-2.26.081-.08C13.2,9.759,14.321,8.641,14.81,8.234a3.758,3.758,0,0,0,.485-5.247,3.808,3.808,0,0,0-2.825-1.373A2.8,2.8,0,0,0,9.724,3.552a.882.882,0,0,1-.8.484.758.758,0,0,1-.736-.484A3.053,3.053,0,0,0,5.365,1.614Z"
                                                      transform="translate(15.858 0.878)" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_solutions->solutions->solution_4->headline->text ?></h4>
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
        <section id="get-involved" class="section gutter-top-l gutter-bot-l">
            <div class="container grid-body">
                <div class="span__4 span__6_m offset__1_m span__8_l offset__2_l iframe-container">
                    <iframe class='gfm-media-widget' image='1' coinfo='1' width='100%' height='100%' frameborder='0' id='skatepark-in-maputo-mozambique'></iframe>
                </div>
            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-xl section-dark">
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
                <div class="span__4 span__6_l justify-center-s justify-end-m-up">
                    <div class="img">
                        <img src="./images/partnerships-cover.JPG" alt="partnerships">
                    </div>
                </div>
            </div>
            <div class="container grid-body justify-items-center margin-top-xl gutter-top-s">
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.instagram.com/yakokarlik/" class="sponsor img" target="_blank">
                        <img src="./images/logo_switch.png" alt="switch">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.skate-aid.org/" class="sponsor img" target="_blank">
                        <img src="./images/logo_skate_aid.png" alt="skate-aid">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.facebook.com/MOZAMBIQUESKATEBOARDING/" class="sponsor img" target="_blank">
                        <img src="./images/logo_asm.jpg" alt="asm">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.instagram.com/jazz_skateco/" class="sponsor img" target="_blank">
                        <img src="./images/logo_jazz.png" alt="jazz">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.facebook.com/UnicornUnicron4/" class="sponsor img" target="_blank">
                        <img src="./images/logo_uu.png" alt="unicornUnicorn">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.ambassadors.eu/" class="sponsor img" target="_blank">
                        <img src="./images/logo_amb.png" alt="ambassadors">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.facebook.com/maputoskateboarding/?ref=br_rs" class="sponsor img" target="_blank">
                        <img src="./images/logo_mask.png" alt="maputo_skate">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="http://www.oneloveskatemag.com/" class="sponsor img" target="_blank">
                        <img src="./images/logo_one_love.png" alt="one_love">
                    </a>
                </div>
                <div class="span__4 gutter-bot-m">
                    <a href="https://www.instagram.com/wondersaroundtheworldorg/" class="sponsor img" target="_blank">
                        <img src="./images/logo_wonders.png" alt="wonders">
                    </a>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
