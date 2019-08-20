<?php


$sData = file_get_contents('data/page_sponsor.json');
$jData = json_decode($sData);

$jContent = $jData->sponsor;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage section">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">Sponsors</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Initiative</h5>
                        <h2 class="title"><?= $jContent->sec_initiative->title->text ?></h2>
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
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">You</h5>
                        <h2 class="title"><?= $jContent->sec_you->title->text ?></h2>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
                <?php

                    $aYou = $jContent->sec_you->content;

                    foreach ($aYou as $jExpectation) {
                        echo '<div class="span__4">
                                   <p>'.$jExpectation->text.'</p>
                              </div>';
                    }

                ?>

            </div>
        </section>
        <section class="section gutter-top-xl gutter-bot-l">
            <div class="container grid-body gutter-bot-m">
                <div class="span__4 span__6_l">
                    <div>
                        <h5 class="subtitle">Us</h5>
                        <h2 class="title"><?= $jContent->sec_us->title->text ?></h2>
                    </div>
                </div>
            </div>
            <div class="container grid-body">
                <?php

                $aUs = $jContent->sec_us->content;

                foreach ($aUs as $jOffer) {
                    echo '<div class="span__4">
                               <p>'.$jOffer->text.'</p>
                          </div>';
                }

                ?>

            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
