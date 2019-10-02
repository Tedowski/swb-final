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
    <section class="section">
        <div class="container grid-body">
            <div class="span__full">
                <h1 class="title">Pages content management</h1>
            </div>
            <div class="span__4">
                <a href="form_index" class="btn btn-block btn-prim text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-file-alt icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Landing page</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="form_project" class="btn btn-block btn-prim text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-file-alt icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Project page</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="form_about" class="btn btn-block btn-prim text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-file-alt icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">About page</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="form_sponsors" class="btn btn-block btn-prim text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-file-alt icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Sponsors page</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="form_volunteers" class="btn btn-block btn-prim text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-file-alt icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Volunteers page</h3>
                </a>
            </div>
        </div>
    </section>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>