<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
$sData = file_get_contents('../data/page_project.json');
$jData = json_decode($sData);
$jTestimonials = $jData->project->sec_testimonials->testimonials;
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
                <h1 class="title">Testimonials</h1>
                <a href="content" class="btn btn-text">« Back to content management</a>
            </div>
            <div class="span__full gutter-bot-l">
                <div class="form-container">
                    <h3 class="item-subheadline">Add new testimonial</h3>
                    <form id="frm-add-testimon" class="form form_main form_card">
                        <div class="span__2">
                            <div class="form__input-group">
                                <label class="label">Name:</label>
                                <div class="input-wrapper">
                                    <input class="input" type="text" name="testimon-name" placeholder="e.g. This is name of person's testimonial">
                                </div>
                            </div>
                        </div>
                        <div class="span__2">
                            <div class="form__input-group">
                                <label class="label">Role:</label>
                                <div class="input-wrapper">
                                    <input class="input" type="text" name="testimon-role" placeholder="e.g. This is role of person's testimonial">
                                </div>
                            </div>
                        </div>
                        <div class="span__2">
                            <div class="form__input-group">
                                <label class="label">Quote:</label>
                                <div class="input-wrapper">
                                    <input class="input" type="text" name="testimon-quote" placeholder="e.g. This is quote of person's testimonial (optional)">
                                </div>
                            </div>
                        </div>
                        <div class="span__2">
                            <div class="form__input-group">
                                <label class="label">Bio:</label>
                                <div class="input-wrapper">
                                    <textarea class="textarea input" name="testimon-bio" placeholder="e.g. This is bio of person's testimonial"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="span__1 margin-top-m">
                            <button class="btn btn-prim btn-block" > Add new testimonial</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="span__full">
                <h3 class="item-headline">List of existing testimonials</h3>
                <table class="table">
                    <tr class="table_row row-head">
                        <th class="row_head-col col_grow-1 row_align-left">
                            <p>No.</p>
                        </th>
                        <th class="row_head-col col_grow-3 row_align-left">
                            <p>Name</p>
                        </th>
                        <th class="row_head-col col_grow-2 row_align-center">
                            <p>Action</p>
                        </th>
                    </tr>
                    <?php
                    $iIndex = 1;
                    foreach ($jTestimonials as $jTestimonId => $jTestimonial){
                        $sTestimonName = $jTestimonial->name->text;
                        echo "<tr id=$jTestimonId class=\"table_row row-item\">
                                <td class=\"row_item-col col_grow-1 row_align-left\">
                                    <p class=\"col_impact\">$iIndex</p>
                                </td>
                                <td class=\"row_item-col col_grow-3 row_align-left\">
                                    <p>$sTestimonName</p>
                                </td>
                                <td class=\"row_item-col col_grow-2 row_align-center\">
                                    <div id=$jTestimonId class=\"btn btn-text edit-testimon\">Edit</div>
                                    <div id=$jTestimonId class=\"btn btn-text remove-testimon\">Remove</div>
                                </td>
                                </tr>
                             ";
                        $iIndex++;
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