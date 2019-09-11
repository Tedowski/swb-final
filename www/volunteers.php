<?php


$sData = file_get_contents('data/page_volunteers.json');
$jData = json_decode($sData);

$jContent = $jData->volunteers;

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/loader.php';
require_once __DIR__.'/modules/popup.php';
?>

<div class="wrapper">
    <section class="hero hero__subpage">
        <div class="container grid-body">
            <div class="span__full text-centered">
                <h1 class="heading">Volunteers</h1>
            </div>
        </div>
    </section>
    <main class="main">
        <section class="section">
            <div class="container grid-body">
                <div class="span__full">
                    <h2>Volunteering</h2>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
