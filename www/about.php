<?php


$sData = file_get_contents('data/page_about.json');
$jData = json_decode($sData);

$jContent = $jData->about;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/loader.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage about">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">About us</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section id="overview" class="section section-dark">
            <div class="container grid-body gutter-bot-s">
                <div class="span__full text-centered">
                    <h2 class="punchline heading__italic"><?= $jContent->title->text ?></h2>
                </div>
                <div class="span__4 span__6_m offset__1_m span__8_l offset__2_l gutter-bot-m iframe-container">
                    <iframe class="iframe-respo" src="<?= $jContent->video->url ?>"  allow="encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="container grid-body">
                <div class="span__4">
                    <div class="gutter-bot-s">
                        <div>
                            <div class="img flex-col-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="118.6" height="122.022" viewBox="0 0 118.6 122.022">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <circle id="Ellipse_44" data-name="Ellipse 44" cx="59.3" cy="59.3" r="59.3"/>
                                        </clipPath>
                                        <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#fff"/>
                                            <stop offset="1"/>
                                        </linearGradient>
                                        <linearGradient id="linear-gradient-2" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#linear-gradient"/>
                                        <linearGradient id="linear-gradient-3" x1="0" y1="0.5" x2="1" y2="0.5" xlink:href="#linear-gradient"/>
                                    </defs>
                                    <g id="Mission" transform="translate(-665.5 -195.4)">
                                        <circle id="XMLID_484_" cx="59.3" cy="59.3" r="59.3" transform="translate(665.5 198.822)" fill="#b5d9e2"/>
                                        <rect id="XMLID_483_" width="1.509" height="38.895" transform="translate(723.402 195.4)" fill="#583c1c"/>
                                        <path id="XMLID_482_" d="M988,202.655s13.946-1.417,12.99,1.288,8.887,2.962,13.542,1.656c0,0-1.03,4.14-2.079,9.843-1.03,5.7-16.817,2.337-15.529,0s-8.868-1.288-8.868-1.288Z" transform="translate(-263.163 -5.618)" fill="#3e9cbb"/>
                                        <g id="XMLID_473_" transform="translate(665.5 198.822)">
                                            <g id="Group_100" data-name="Group 100" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="Path_1" data-name="Path 1" d="M1001.809,540.7,967.9,608.04h67.819Z" transform="translate(-912.261 -480.59)" fill="#fba100"/>
                                            </g>
                                            <g id="Group_101" data-name="Group 101" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="XMLID_480_" d="M1186.109,608.04,1152.2,540.7v67.34Z" transform="translate(-1062.652 -480.59)" opacity="0.14" fill="url(#linear-gradient)"/>
                                            </g>
                                            <g id="Group_102" data-name="Group 102" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="XMLID_479_" d="M985,364.4v97.331h41.2Z" transform="translate(-926.215 -336.728)" fill="#fba100"/>
                                            </g>
                                            <g id="Group_103" data-name="Group 103" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="Path_2" data-name="Path 2" d="M653.028,509.3,619.1,576.64h67.837Z" transform="translate(-627.637 -454.968)" fill="#fba100"/>
                                            </g>
                                            <g id="Group_104" data-name="Group 104" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="XMLID_477_" d="M837.409,576.64,803.5,509.3v67.34Z" transform="translate(-778.109 -454.968)" opacity="0.14" fill="url(#linear-gradient-2)"/>
                                            </g>
                                            <g id="Group_105" data-name="Group 105" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="XMLID_476_" d="M801.124,363,759.8,460.588h41.435V363.258Z" transform="translate(-742.45 -335.585)" fill="#fba100"/>
                                            </g>
                                            <g id="Group_106" data-name="Group 106" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                <path id="XMLID_475_" d="M984.2,366.1v97.331h41.2Z" transform="translate(-925.562 -338.115)" opacity="0.14" fill="url(#linear-gradient-3)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="underline-container undrln__center margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_holy_trio->mission->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-s">
                        <div>
                            <div class="img flex-col-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="142.674" height="121.672" viewBox="0 0 142.674 121.672">
                                    <g id="Object" transform="translate(0 0)">
                                        <g id="Group_107" data-name="Group 107">
                                            <path id="Path_15" data-name="Path 15" d="M370.294,332.249a54.261,54.261,0,0,1,46.086,24.257l2.7-1.635a58.3,58.3,0,1,0,2.75,4.658l-2.725,1.635a54.259,54.259,0,1,1-48.811-28.915Z" transform="translate(-310.301 -325.7)" fill="none"/>
                                            <path id="Path_16" data-name="Path 16" d="M359.989,318.845a57.508,57.508,0,0,1,48.861,25.818l2.9-1.759a60.894,60.894,0,1,0,2.775,4.658l-2.9,1.759a57.439,57.439,0,1,1-51.636-30.476Z" transform="translate(-300.07 -315.468)" fill="#3e9cbb"/>
                                            <path id="Path_17" data-name="Path 17" d="M380.27,355.458a40.693,40.693,0,0,1,34.242,17.716l11.645-7.037a54.386,54.386,0,1,0,2.75,4.633l-11.67,7.062a40.7,40.7,0,1,1-77.032,18.955A40.737,40.737,0,0,1,380.27,355.458Z" transform="translate(-320.079 -335.331)" fill="#3e9cbb"/>
                                            <path id="Path_18" data-name="Path 18" d="M421.573,410.262a27.12,27.12,0,0,1,22.374,11.174l11.645-7.037a41.885,41.885,0,1,0,2.725,4.683l-11.645,7.037a27.147,27.147,0,1,1-51.834,11.72A27.185,27.185,0,0,1,421.573,410.262Z" transform="translate(-361.159 -376.557)" fill="#fff"/>
                                            <path id="Path_19" data-name="Path 19" d="M463.023,465.042a13.486,13.486,0,0,1,10.456,4.683l11.695-7.061a26.961,26.961,0,1,0,2.75,4.683l-11.769,7.111a13.028,13.028,0,0,1,.644,3.964,13.567,13.567,0,1,1-13.776-13.38Z" transform="translate(-402.386 -417.784)" fill="#3e9cbb"/>
                                            <path id="Path_20" data-name="Path 20" d="M506.256,515.984l8.449-5.1a13.559,13.559,0,1,0,3.32,8.672,13.97,13.97,0,0,0-.644-3.964l-8.647,5.228a2.358,2.358,0,0,1-3.221-.743l-.124-.2A2.766,2.766,0,0,1,506.256,515.984Z" transform="translate(-443.612 -458.939)" fill="#fff"/>
                                            <path id="Path_21" data-name="Path 21" d="M624.932,360.537a1.689,1.689,0,0,0,1.71-.05l1.784-1.09a.913.913,0,0,0,.421-.768.86.86,0,0,0-.471-.743l-8.276-4.361.941-.57a.882.882,0,0,0,.4-.545.9.9,0,0,0-.1-.669l-1.164-1.858a.906.906,0,0,0-1.189-.3l-.966.57-.2-9.242a.866.866,0,0,0-.446-.743.838.838,0,0,0-.867.025l-1.784,1.065a1.735,1.735,0,0,0-.843,1.536l.223,9.762-.471.3-.2-9.242a.858.858,0,0,0-1.313-.719l-1.784,1.065a1.736,1.736,0,0,0-.842,1.536l.223,9.762-.471.3-.2-9.242a.858.858,0,0,0-1.313-.719l-1.784,1.065a1.735,1.735,0,0,0-.842,1.536l.2,8.3a.882.882,0,0,1-.421.768l-6.962,4.212-2.9,1.759-2.7,1.635L580.68,371.91l-11.645,7.037-11.769,6.962-8.449,5.1a2.8,2.8,0,0,0-.892,3.915l.124.2a2.41,2.41,0,0,0,3.221.743l8.647-5.228,11.769-7.111,11.645-7.037L595,369.432l2.726-1.635,2.9-1.734,6.962-4.212a.85.85,0,0,1,.843-.025l7.681,4.039a1.75,1.75,0,0,0,1.71-.049l1.784-1.09a.912.912,0,0,0,.421-.768.859.859,0,0,0-.471-.743l-8.276-4.361.446-.273,8.771,4.609a1.689,1.689,0,0,0,1.71-.05l1.784-1.09a.913.913,0,0,0,.421-.768.859.859,0,0,0-.471-.743l-8.276-4.361.446-.273Z" transform="translate(-486.172 -333.968)" fill="#fba100"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="underline-container undrln__center margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_holy_trio->vision->text ?></p>
                    </div>
                </div>
                <div class="span__4">
                    <div class="gutter-bot-s">
                        <div>
                            <div class="img flex-col-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="125.823" height="122.322" viewBox="0 0 125.823 122.322">
                                    <g id="Values" transform="translate(-6.5 -11)">
                                        <path id="Path_3" data-name="Path 3" d="M105.23,120.3H33.593L6.5,147.8H132.323Z" transform="translate(0 -81.573)" fill="#b5d9e2"/>
                                        <path id="Path_4" data-name="Path 4" d="M69.412,228.7H6.5l62.912,67.1,62.912-67.1Z" transform="translate(0 -162.475)" fill="#b5d9e2"/>
                                        <path id="Path_5" data-name="Path 5" d="M317.412,228.7,254.5,295.8l50.405-67.1Z" transform="translate(-185.088 -162.475)" fill="#479eb2"/>
                                        <path id="Path_6" data-name="Path 6" d="M6.5,147.8l27.093-27.5,17.072,27.5Z" transform="translate(0 -81.573)" fill="#3e9cbb"/>
                                        <path id="Path_7" data-name="Path 7" d="M113.3,120.3l17.072,27.5,18.747-27.5Z" transform="translate(-79.707 -81.573)" fill="#80cfe5"/>
                                        <path id="Path_8" data-name="Path 8" d="M372.565,147.8l-27.092-27.5L328.4,147.8Z" transform="translate(-240.242 -81.573)" fill="#3e9cbb"/>
                                        <path id="Path_9" data-name="Path 9" d="M408.314,147.873h-12.76L376.3,128.34l4.947-7.94Z" transform="translate(-275.991 -81.648)" fill="#196a7f"/>
                                        <path id="Path_10" data-name="Path 10" d="M290.319,120.3l-17.072,27.5L254.5,120.3Z" transform="translate(-185.089 -81.573)" fill="#80cfe5"/>
                                        <path id="Path_11" data-name="Path 11" d="M180.6,228.7l18.747,67.072L218.093,228.7Z" transform="translate(-129.935 -162.475)" fill="#80cfe5"/>
                                        <path id="Path_12" data-name="Path 12" d="M248.9,22.086a1.916,1.916,0,0,0,1.9-1.9V12.9a1.9,1.9,0,1,0-3.805,0v7.28A1.916,1.916,0,0,0,248.9,22.086Z" transform="translate(-179.491 0)" fill="#3e9cbb"/>
                                        <path id="Path_13" data-name="Path 13" d="M155.826,38.015a1.9,1.9,0,0,0,2.689,0,1.914,1.914,0,0,0,0-2.689l-5.15-5.15a1.9,1.9,0,0,0-2.689,2.689Z" transform="translate(-107.191 -13.9)" fill="#3e9cbb"/>
                                        <path id="Path_14" data-name="Path 14" d="M325.521,38.473a1.882,1.882,0,0,0,1.344-.558l5.15-5.15a1.9,1.9,0,0,0-2.689-2.689l-5.15,5.15a1.914,1.914,0,0,0,0,2.689A1.84,1.84,0,0,0,325.521,38.473Z" transform="translate(-236.678 -13.826)" fill="#3e9cbb"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="underline-container undrln__center margin-top-m">
                                <div class="undrln__prim underline-inline undrln__l"></div>
                            </div>
                        </div>
                        <p class="margin-top-s"><?= $jContent->sec_holy_trio->values->text ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
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
                                    <div class="item-icon-l img">
                                        <img src="./images/logo_asm.jpg" alt="asm">
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_partnership_triangle->partners->partner_1->heading->text ?></h4>
                                    <div class="underline-container undrln__left">
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
                                    <div class="item-icon-l img">
                                        <img src="./images/logo_skate_aid.png" alt="skate-aid">
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_partnership_triangle->partners->partner_2->heading->text ?></h4>
                                    <div class="underline-container undrln__left">
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
                                    <div class="item-icon-l img">
                                        <img src="./images/logo_swb.png" alt="swb">
                                    </div>
                                    <h4 class="item-headline margin-top-s"><?= $jContent->sec_partnership_triangle->partners->partner_3->heading->text ?></h4>
                                    <div class="underline-container undrln__left">
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
        <section id="team" class="section section-dark">
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
            <div class="container grid-body">
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
        <section class="section">
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
            <div class="container grid-body justify-items-center">
                <?php

                $aPeople = $jContent->sec_people_behind->people;

                foreach ($aPeople as $jPerson) {
                    echo '<div class="span__4 span__3_l">
                            <div class="flex-col-center gutter-bot-m person_behind">
                               <div class="img img-circ circ-l">
                                   <img src="./images/'.$jPerson->img->url.'" alt="">
                               </div>
                               
                               <p class="margin-top-s">'.$jPerson->role->text.'</p>
                               <h4>'.$jPerson->name->text.'</h4>
                            </div>
                          </div>';
                }

                ?>
            </div>
        </section>
        <section id="achievements" class="section section-dark">
            <div class="container">
                <?php require __DIR__.'/modules/achievements.php'; ?>
            </div>
        </section>
        <section id="get-involved" class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_m offset__1_m span__8_l offset__2_l">
                    <iframe class='gfm-media-widget' image='1' coinfo='1' width='100%' height='100%' frameborder='0' id='skatepark-in-maputo-mozambique'></iframe><script src='//funds.gofundme.com/js/5.0/media-widget.js'></script>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
