<?php

$sDataAchievements = file_get_contents('data/achievements.json');
$jDataAchievements = json_decode($sDataAchievements);

$jAchievements = $jDataAchievements->achievements;

?>

<div class="card-main">
    <div class="grid-body">
        <div class="span__full gutter-bot-m">
            <div class="text-centered">
                <h2 class="title">Achievements</h2>
                <p class="subtitle"><?= $jAchievements->subtitle->text ?></p>
                <div class="underline-container undrln__center margin-top-m">
                    <div class="undrln__prim underline-inline undrln__xl undrln__center"></div>
                </div>
                <div class="underline-container margin-top-s undrln__center">
                    <div class="undrln__prim underline-inline undrln__m"></div>
                </div>
            </div>
        </div>
        <div class="span__4">
            <div>
                <div class="img"></div>
                <h4 class="item-subheadline"><?= $jAchievements->achievements->achievement_1->heading->text ?></h4>
                <p><?= $jAchievements->achievements->achievement_1->content->text ?></p>
            </div>
        </div>
        <div class="span__4">
            <div>
                <div class="img"></div>
                <h4 class="item-subheadline"><?= $jAchievements->achievements->achievement_2->heading->text ?></h4>
                <p><?= $jAchievements->achievements->achievement_2->content->text ?></p>
            </div>
        </div>
        <div class="span__4 span__8_m span__4_l">
            <div>
                <div class="img"></div>
                <h4 class="item-subheadline"><?= $jAchievements->achievements->achievement_3->heading->text ?></h4>
                <p><?= $jAchievements->achievements->achievement_3->content->text ?></p>
            </div>
        </div>
        <div class="span__full margin-top-m">
            <div class="text-centered">
                <h3 class="item-headline">Other accomplishments</h3>
                <p class="subtitle"><?= $jAchievements->accomplishments->subtitle->text ?></p>
                <div class="underline-container undrln__center margin-top-m">
                    <div class="undrln__prim underline-inline undrln__xl undrln__center"></div>
                </div>
            </div>
        </div>
        <div class="span__full margin-top-m">
            <div class="accomp-wrapper">
                <div class="accomp-item">
                    <h4 class="item-subheadline"><?= $jAchievements->accomplishments->accomplishment_1->heading->text ?></h4>
                    <p><?= $jAchievements->accomplishments->accomplishment_1->content->text ?></p>
                </div>
                <div class="accomp-item">
                    <h4 class="item-subheadline"><?= $jAchievements->accomplishments->accomplishment_2->heading->text ?></h4>
                    <p><?= $jAchievements->accomplishments->accomplishment_2->content->text ?></p>
                </div>
                <div class="accomp-item">
                    <h4 class="item-subheadline"><?= $jAchievements->accomplishments->accomplishment_3->heading->text ?></h4>
                    <p><?= $jAchievements->accomplishments->accomplishment_3->content->text ?></p>
                </div>
                <div class="accomp-item">
                    <h4 class="item-subheadline"><?= $jAchievements->accomplishments->accomplishment_4->heading->text ?></h4>
                    <p><?= $jAchievements->accomplishments->accomplishment_4->content->text ?></p>
                </div>
            </div>
        </div>
    </div>
</div>