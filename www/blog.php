<?php

$sData = file_get_contents('data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;


require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>
<div class="wrapper">
    <section class="section gutter-top-xl gutter-top-xl">
        <div class="container">
            <?php

            foreach ($jPosts as $jPostId => $jPost){
                $jPostDate = date('d/m/Y',$jPost->timestamp );
                $jPostTitle = $jPost->title->text;
                $jPostSubtitle = $jPost->subtitle->text;
                echo "<div id=$jPostId class=\"grid-body  margin-top-s\">
                              <div class=\"span__6_l  margin-top-s\">
                                <div>
                                    img
                                </div>
                              </div>
                              <div class=\"span__6_l margin-top-s\">
                                <div>
                                    <h4>$jPostDate</h4>
                                    <h3>$jPostTitle</h3>
                                    <p>$jPostSubtitle</p>
                                    <a id=$jPostId class=\"read-more-blog-post btn btn-prim btn-block\">Read more</a>
                                </div>
                              </div>
                              
                          </div>
                         ";
            }
            ?>

        </div>
    </section>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>