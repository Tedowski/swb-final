<?php
require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
?>

<div class="wrapper">
    <section>
        <div class="container grid-body">
            <h1 class="span__4">My App</h1>

            <p class="span__full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad aspernatur, aut beatae cum dolorum ea explicabo harum, id impedit ipsa maiores minima molestias nihil non odio officia sit ut?</p>
        </div>
    </section>
    <section>
        <div class="container grid-body">
            <div class="span__4">ITEM</div>
            <div class="span__4">ITEM</div>
            <div class="span__4">ITEM</div>
        </div>
    </section>
    <section>
        <div class="container grid-body">
            <div class="span__1 offset__1 span__3_m offset__1_m span__3_l offset__2_l box">ITEM</div>
        </div>
    </section>
</div>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>
