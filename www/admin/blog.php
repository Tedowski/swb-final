<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/blog.json');
$jData = json_decode($sData);

$jPosts = $jData->posts;


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
    <section class="section section-blog">
        <div class="container grid-body">
            <div class="span__full margin-bot-m">
                <h1 class="title">Blog management</h1>
                <a href="dashboard" class="btn btn-text">« Back to dashboard</a>
            </div>
            <div class="span__full">
                <button id="add-blog-post" class="btn btn-prim btn-block">Add new blog post</button>
                <div class="hide-l-up form-container gutter-top-s">
                    <form id="frm-add-blog" class="form form_card">
                        <div class="">
                            <div class="form__input-group">
                                <label class="label">Blog post title:</label>
                                <div class="input-wrapper">
                                    <input class="input" type="text" name="blog-title" placeholder="e.g. This is title for blog post">
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-s">
                            <div class="form__input-group">
                                <label class="label">Blog post subtitle:</label>
                                <div class="input-wrapper">
                                    <textarea placeholder="e.g. This is subtitle for blog post" class="textarea input" name="blog-subtitle"></textarea>
                                    <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-s">
                            <div class="form__input-group">
                                <label class="label">Blog post content:</label>
                                <div class="input-wrapper">
                                    <textarea placeholder="e.g. This is content for blog post" class="textarea input" name="blog-content"></textarea>
                                    <div class="btn btn-prim btn-block add-link-btn">&lt;a&gt;</div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-top-s">
                            <div class="form__input-group">
                                <label class="label">Blog image:</label>
                                <div class="input-wrapper">
                                    <input class="input" type="file" name="fileToUpload" id="fileToUpload">
                                </div>
                            </div>
                        </div>
                        <div class="span__2">
                            <div class="form__input-group">
                                <img id="preview" src="#" alt="Your image to upload" />
                            </div>
                        </div>
                        <div class="span__1 margin-top-m">
                            <input class="btn btn-prim btn-block" type="submit" name="submit" value="Create new blog post">
                        </div>
                    </form>
                </div>
            </div>
            <div class="span__full">
                <table class="table">
                    <tr class="table_row row-head">
                        <th class="row_head-col col_grow-1 row_align-left">
                            <p>Date</p>
                        </th>
                        <th class="row_head-col col_grow-3 row_align-left">
                            <p>Title</p>
                        </th>
                        <th class="row_head-col col_grow-2 row_align-center">
                            <p>Action</p>
                        </th>
                    </tr>
                <?php
                foreach ($jPosts as $jPostId => $jPost){
                    $jPostDate = date('d/m/Y',$jPost->timestamp );
                    $jPostTitle = $jPost->title->text;
                    echo "<tr id=$jPostId class=\"table_row row-item\">
                                <td class=\"row_item-col col_grow-1 row_align-left\">
                                    <p class=\"col_impact\">$jPostDate</p>
                                </td>
                                <td class=\"row_item-col col_grow-3 row_align-left\">
                                    <p>$jPostTitle</p>
                                </td>
                                <td class=\"row_item-col col_grow-2 row_align-center\">
                                    <div id=$jPostId class=\"btn btn-text edit-blog-post\">Edit</div>
                                    <div id=$jPostId class=\"btn btn-text remove-blog-post\">Remove</div>
                                </td>
                            </tr>
                         ";
                }
                ?>
                </table>
            </div>
        </div>
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>
