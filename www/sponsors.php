<?php


$sData = file_get_contents('data/page_sponsor.json');
$jData = json_decode($sData);

$jContent = $jData->sponsor;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/loader.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">Sponsors</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Initiative</h5>
                        <h2 class="title"><?= $jContent->sec_initiative->title->text ?></h2>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__l"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <p><?= $jContent->sec_initiative->column_1->text ?></p>
                </div>
                <div class="span__4 span__6_l">
                    <p><?= $jContent->sec_initiative->column_2->text ?></p>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Your part</h5>
                        <h2 class="title"><?= $jContent->sec_you->title->text ?></h2>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__l"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
                <?php

                    $aYou = $jContent->sec_you->content;

                    foreach ($aYou as $jExpectation) {
                        echo '<div class="span__4">
                                   <div>
                                       <p>'.$jExpectation->text.'</p>
                                   </div>
                              </div>';
                    }

                ?>

            </div>
        </section>
        <section class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Our part</h5>
                        <h2 class="title"><?= $jContent->sec_us->title->text ?></h2>
                        <div class="underline-container undrln__left">
                            <div class="undrln__prim underline-inline undrln__l"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
                <?php

                $aUs = $jContent->sec_us->content;

                foreach ($aUs as $jOffer): ?>
                    <div class="span__4">
                        <div>
                            <p><?= $jOffer->text ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
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
