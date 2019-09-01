<?php


$sData = file_get_contents('data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;

$sBlogPostId = $_GET['id'];

$jPost = $jPosts->$sBlogPostId;



require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>
    <div class="wrapper">
        <section class="section gutter-top-xl gutter-top-xl">
            <div class="container">
                <div class="grid-body">
                    <div class="span__12_l">
                        <h2><?= $jPost->title->text ?></h2>
                        <p>img</p>
                        <p><?= date('d/m/Y',$jPost->timestamp ) ?></p>
                        <p><?= $jPost->subtitle->text ?></p>
                        <p><?= $jPost->content->text ?></p>
                        <a href="blog"> « Go back to blog posts</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>