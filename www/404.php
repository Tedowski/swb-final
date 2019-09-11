<?php

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
?>


<div class="wrapper">
    <section class="section section-error gutter-top-xl margin-top-xl">
        <div class="container grid-body">
            <div class="span__full">
                <div class="text-centered">
                    <h1 class="error_code">404</h1>
                    <h3 class="error_title">Ooops! Something went wrong</h3>
                    <p class="error_expl">Seems like the page you are looking for does not exist</p>
                    <a class="btn btn-inline btn-inline__medium btn-prim margin-top-s" onclick="history.go(-1)">Go back</a>
                    <a class="btn btn-inline btn-inline__medium btn-sec margin-top-s" href="./index.php">Go home</a>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
