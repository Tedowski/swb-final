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

<div class="wrapper admin-wrapper">
    <section class="section gutter-top-xl gutter-bot-xl">
        <div class="container">
            <div class="form-container">
                <h3>Add new testimonial: </h3>
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
                                <input class="input" type="text" name="testimon-quote" placeholder="e.g. This is quote of person's testimonial">
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
                <div>
                <div>
                    <h3>List of actual testimonials:</h3>
                    <?php
                    foreach ($jTestimonials as $jTestimonId => $jTestimonial){
                        $sTestimonName = $jTestimonial->name->text;
                        echo "<div id=$jTestimonId class=\"grid-body align-items-center  margin-top-xs btn btn-prim\">
                              <div class=\"span__2 offset__1_l justify-center-s-up\">
                                <p>$sTestimonName</p>
                              </div>
                              <div class=\"span__2 offset__9_l justify-items-center\">
                                <a id=$jTestimonId class=\"edit-testimon\">Edit</a>
                                <a id=$jTestimonId class=\"remove-testimon offset__1_l\">Remove</a>
                              </div>
                              
                          </div>
                         ";
                    }
                    ?>

                </div>
        </div>
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>