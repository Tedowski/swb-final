<?php

require_once __DIR__.'/../modules/header.php';
require_once __DIR__.'/../modules/popup.php';
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

<div class="wrapper">
    <section class="section gutter-top-l gutter-bot-l">
        <div class="container grid-body">
            <div class="span__4 span__6_m offset__1_m span__6_l offset__3_l">

                <form id="adminLoginForm" class="form form_main form_card">
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label" for="sUsername">Username</label>
                            <div class="input-wrapper">
                                <input id="sUsername" name="sUsername" class="input" type="text" placeholder="Administrator">
                            </div>
                        </div>
                    </div>
                    <div class="span__2">
                        <div class="form__input-group">
                            <label class="label" for="sPassword">Password</label>
                            <div class="input-wrapper">
                                <input id="sPassword" name="sPassword" class="input" type="password" placeholder="1234">
                            </div>
                        </div>
                    </div>
                    <div class="span__2 margin-top-s">
                        <button class="btn btn-prim btn-block">Log in</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__.'/../modules/footer.php';
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./../scripts/app.min.js"></script>
</body>
</html>
