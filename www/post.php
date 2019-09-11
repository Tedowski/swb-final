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
        <section id="get-involved" class="section">
            <div class="container grid-body">
                <div class="span__4 span__6_m offset__1_m span__8_l offset__2_l">
                    <iframe class='gfm-media-widget' image='1' coinfo='1' width='100%' height='100%' frameborder='0' id='skatepark-in-maputo-mozambique'></iframe><script src='//funds.gofundme.com/js/5.0/media-widget.js'></script>
                </div>
            </div>
        </section>
    </div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>