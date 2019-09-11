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
        <section class="section section-blog">
            <div class="container grid-body">
                <div class="span__full">
                    <a href="blog" class="btn btn-text"> « Go back to blog posts</a>
                    <article class="post margin-top-s margin-bot-m">
                        <div class="post__head">
                            <div class="post__img img">
                                <img src="images/<?= $jPost->media->src ?>" alt="post_img">
                            </div>
                        </div>
                        <div class="post__body">
                            <h4 class="post__date"><?= date('d/m/Y',$jPost->timestamp ) ?></h4>
                            <h2 class="title margin-top-s"><?= $jPost->title->text ?></h2>
                            <div class="underline-container undrln__left">
                                <div class="undrln__prim underline-inline undrln__xl"></div>
                            </div>
                            <p class="margin-top-m"><?= $jPost->subtitle->text ?></p>
                            <p><?= $jPost->content->text ?></p>
                        </div>
                    </article>
                    <a href="blog" class="btn btn-text"> « Go back to blog posts</a>
                </div>
            </div>
        </section>
    </div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>