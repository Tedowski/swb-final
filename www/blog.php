<?php

$sData = file_get_contents('data/blog.json');
$jData = json_decode($sData,true);



$jPosts = $jData['posts'];

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/loader.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>


    <div class="wrapper">
        <section class="hero hero__subpage blog">
            <div class="container grid-body">
                <div class="span__full text-centered">
                    <h1 class="heading">Blog</h1>
                </div>
            </div>
        </section>
        <section class="section section-blog">
            <div class="container grid-body">
                <?php
                foreach (array_reverse($jPosts) as $iPostId => $jPost) {
                    if(isset($jPost['title']['text']) && $jPost['title']['text'] != ''){
                        $sPostTitle = $jPost['title']['text'];
                        $sPostSubtitle = $jPost['subtitle']['text'];
                        $sPostDate = date('d M Y',$jPost['timestamp'] );
                        $sImgPath = $jPost['media']['src'];

                        echo "<div class=\"span__4 span__6_l gutter-bot-m\">
                                  <article id=$iPostId class=\"article-blog\">
                                      <div id=$iPostId class=\"read-more-blog-post article-img img\">
                                        <img src=\"images/$sImgPath\" alt=''>
                                      </div>
                                      <div class=\"article-body\">
                                        <div class='margin-bot-m'>
                                            <h4 class='article__date'>$sPostDate</h4>
                                            <h3 class='article__headline'>$sPostTitle</h3>
                                            <div class=\"underline-container undrln__left\">
                                                <div class=\"undrln__prim underline-inline undrln__m\"></div>
                                            </div>
                                            <p class='article__subtitle margin-top-s'>$sPostSubtitle</p>
                                        </div>
                                        <div class=\"underline-container undrln__right\">
                                            <a id=$iPostId class=\"read-more-blog-post btn btn-sec btn-inline btn-inline__medium\">Read more</a>
                                        </div>
                                      </div>
                                  </article>
                              </div>
                         ";

                    }
                }

                ?>

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