<?php

$sDataAchievements = file_get_contents('data/achievements.json');
$jDataAchievements = json_decode($sDataAchievements);

$jAchievements = $jDataAchievements->achievements;

?>

<div class="card-main">
    <div class="grid-body">
        <div class="span__full">
            <div class="text-centered">
                <h2 class="title">Achievements</h2>
                <p class="subtitle"><?= $jAchievements->subtitle->text ?></p>
                <div class="underline-container undrln__center">
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
                <h4 class="item-headline"><?= $jAchievements->achievements->achievement_1->heading->text ?></h4>
                <p><?= $jAchievements->achievements->achievement_1->content->text ?></p>
            </div>
        </div>
        <div class="span__4">
            <div>
                <div class="img"></div>
                <h4 class="item-headline"><?= $jAchievements->achievements->achievement_2->heading->text ?></h4>
                <p><?= $jAchievements->achievements->achievement_2->content->text ?></p>
            </div>
        </div>
        <div class="span__4 span__8_m span__4_l">
            <div>
                <div class="img"></div>
                <h4 class="item-headline"><?= $jAchievements->achievements->achievement_3->heading->text ?></h4>
                <p><?= $jAchievements->achievements->achievement_3->content->text ?></p>
            </div>
        </div>
        <div class="span__full">
            <div class="text-centered">
                <h2 class="title">Other accomplishments</h2>
                <p class="subtitle"><?= $jAchievements->accomplishments->subtitle->text ?></p>
            </div>
        </div>
        <div class="span__full justify-center-s-up">
            <div>
                TO BE DECIDED
            </div>
        </div>
    </div>
</div>