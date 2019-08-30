<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;


$sBlogPostId = $_GET['id'];

$jPost = $jPosts->$sBlogPostId;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1c4f9624b2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <link rel="stylesheet" href="./../styles/index.css">
    <title>Document</title>
</head>
<body class="body">


<?php

require_once __DIR__.'/../modules/header-admin.php';
require_once __DIR__.'/../modules/popup.php';
?>

<div class="wrapper">
    <section class="section gutter-top-xl gutter-top-xl">
        <div class="container">
            <div class="grid-body">
                <div class="span__2_l">
                    <a href="blog.php" class="btn btn-prim btn-block">Go back to posts</a>
                </div>
            </div>

            <div class="form-container margin-top-s">
                <form id="frm-edit-blog" class="form form_main form_card">
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label">Blog post id:</label>
                            <div class="input-wrapper">
                                <input class="input" type="text" name="blog-id" placeholder="e.g. Blog post id" value="<?= $sBlogPostId ?>" >

                            </div>
                        </div>
                    </div>
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label">Blog post title:</label>
                            <div class="input-wrapper">
                                <input class="input" type="text" name="blog-title" placeholder="e.g. This is title for blog post" value="<?= $jPost->title->text ?>">

                            </div>
                        </div>
                    </div>
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label">Blog post subtitle:</label>
                            <div class="input-wrapper">
                                <textarea placeholder="e.g. This is subtitle for blog post" class="input" name="blog-subtitle">
                                    <?= $jPost->subtitle->text ?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label">Blog post content:</label>
                            <div class="input-wrapper">
                                <textarea placeholder="e.g. This is content for blog post" class="input" name="blog-content">
                                    <?= $jPost->content->text ?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="span__1 margin-top-m">
                        <button class="btn btn-prim btn-block">Edit blog post</button>
                    </div>
                </form>
            </div>


        </div>
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>
