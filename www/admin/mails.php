<?php

session_start();
$jAdmin = $_SESSION['sUser'];

if( !isset($_SESSION['sUser']) ) {
    header('Location: index');
}

$sData = file_get_contents('../data/subscribers.json');
$jData = json_decode($sData);

$jSubscribers = $jData-> subscribers;

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
    <section class="section">
        <div class="container grid-body">
            <div class="span__full">
                <h1 class="title">Mails management</h1>
            </div>
            <div class="span__full">
                <div class="form-container">
                    <h3>Send newsletter to subscribers: </h3>
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
                    <div>

                        <div class="form-container">
                            <h3>Add new subscriber to newsletter: </h3>
                            <form id="frm-add-subscriber" class="form form_main form_card">
                                <div class="span__2">
                                    <div class="form__input-group">
                                        <label class="label">Subscriber email:</label>
                                        <div class="input-wrapper">
                                            <input class="input" type="text" name="subscriber-email" placeholder="e.g. This is e-mail of news subscriber.">
                                        </div>
                                    </div>
                                </div>
                                <div class="span__1 margin-top-m">
                                    <button class="btn btn-prim btn-block" > Add new subscriber</button>
                                </div>
                            </form>
                            <div>
                                <dov>
                                    <h3>List of subscribers: </h3>

                                    <?php
                                    foreach ($jSubscribers as  $sSubscriberId => $jSubscriber){
                                        $sMail = $jSubscriber->email;
                                        echo "<div class=\"grid-body align-items-center  margin-top-xs btn btn-prim\">
                              <div class=\"span__2  offset__1_l justify-center-s-up\">
                                <p class=''>$sMail</p>
                              </div>
                              <div class=\"span__2 offset__10_l justify-items-center\">
                                <a id='$sSubscriberId' class=\"remove-subscriber\">Remove</a>
                              </div>
                              
                          </div>
                          </dov>
                         ";}
                        ?>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>
