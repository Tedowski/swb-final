<?php


$sData = file_get_contents('data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;

$sBlogPostId = $_GET['id'];

$jPost = $jPosts->$sBlogPostId;



require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/loader.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>
    <div class="wrapper">
        <section class="section gutter-top-xl gutter-bot-xl">
            <div class="container">
                <div class="grid-body">
                    <div class="span__12_l">
                        <a href="blog" class="btn btn-text"> « Go back to blog posts</a>
                        <h2 class="title margin-top-m"><?= $jPost->title->text ?></h2>
                        <p>img</p>
                        <p><?= date('d/m/Y',$jPost->timestamp ) ?></p>
                        <p><?= $jPost->subtitle->text ?></p>
                        <p><?= $jPost->content->text ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>