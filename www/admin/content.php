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


<div class="wrapper">
    <section class="section">
        <div class="container grid-body">
            <div class="span__full margin-bot-m">
                <h1 class="title">Content management</h1>
                <a href="dashboard" class="btn btn-text">« Back to dashboard</a>
            </div>
            <div class="span__4">
                <a href="edit_pages" class="btn btn-prim btn-block text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-file-alt icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Edit content</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="edit_achievements" class="btn btn-prim btn-block text-centered">
                    <div class="margin-top-xs">
                        <i class="fas fa-trophy icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Edit achievements</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="edit_sponsors" class="btn btn-prim btn-block text-centered">
                    <div class="margin-top-xs">
                        <i class="fas fa-users icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Edit sponsors</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="edit_testimon" class="btn btn-prim btn-block text-centered">
                    <div class="margin-top-xs">
                        <i class="far fa-address-card icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Edit testimonials</h3>
                </a>
            </div>
            <div class="span__4">
                <a href="edit_team" class="btn btn-prim btn-block text-centered">
                    <div class="margin-top-xs">
                        <i class="fas fa-users-cog icon-xxl"></i>
                    </div>
                    <h3 class="margin-top-s">Edit team bio</h3>
                </a>
            </div>
        </div>
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./../scripts/app.min.js"></script>
</body>
</html>
