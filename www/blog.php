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
        <section class="section">
            <div class="container">
                <?php
                foreach (array_reverse($jPosts) as $iPostId => $jPost){
                    if(isset($jPost['title']['text']) && $jPost['title']['text'] != ''){
                        $sPostTitle = $jPost['title']['text'];
                        $sPostSubtitle = $jPost['subtitle']['text'];
                        $sPostDate = date('d/m/Y',$jPost['timestamp'] );
                        $sImgPath = $jPost['media']['src'];

                        echo "<div id=$iPostId class=\"grid-body gutter-bot-m\">
                              <div class=\"span__6_l  margin-top-s\">
                                <div>
                                   <img src=$sImgPath alt=''>
                                </div>
                              </div>
                              <div class=\"span__6_l margin-top-s\">
                                <div>
                                    <h4 class='item-subheadline'>$sPostDate</h4>
                                    <h3 class='item-headline'>$sPostTitle</h3>
                                    <p>$sPostSubtitle</p>
                                    <a id=$iPostId class=\"read-more-blog-post btn btn-prim btn-inline btn-inline__medium\">Read more</a>
                                </div>
                              </div>
                              
                          </div>
                         ";

                    }
                }

                ?>

            </div>
        </section>
    </div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>