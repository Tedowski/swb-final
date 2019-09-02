<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}
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
                <form id="frm-send-newsletter" class="form form_main form_card">
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label">Newsletter subject:</label>
                            <div class="input-wrapper">
                                <input class="input" type="text" name="newsletter-subject" placeholder="e.g. This is subject of newsletter e-mail">
                            </div>
                        </div>
                    </div>
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label">Newsletter content:</label>
                            <div class="input-wrapper">
                                <textarea class="textarea input" name="newsletter-content" placeholder="e.g. This is content for newsletter e-mail"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="span__1 margin-top-m">
                        <button class="btn btn-prim btn-block" > Send newsletter</button>
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
