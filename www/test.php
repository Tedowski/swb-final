<?php

require_once __DIR__.'/modules/top.php';
require_once __DIR__.'/modules/header.php';
require_once __DIR__.'/modules/popup.php';
?>

<section class="section gutter-top-xl gutter-bot-xl">
    <div class="container grid-body">
        <div class="span__4 span__8_l offset__2_l">
            <form class="form form_main form_card">
                <div class="span__2 span__1_m">
                    <div class="form__input-group">
                        <label class="label">label</label>
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="e.g. Jon">
                        </div>
                    </div>
                </div>
                <div class="span__2 span__1_m">
                    <div class="form__input-group">
                        <label class="label">label</label>
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="e.g. Doe">
                        </div>
                    </div>
                </div>
                <div class="span__2">
                    <div class="form__input-group">
                        <label class="label">label</label>
                        <div class="input-wrapper">
                            <input class="input" type="number" placeholder="Telephone">
                        </div>
                    </div>
                </div>
                <div class="span__2">
                    <div class="form__input-group">
                        <label class="label">label</label>
                        <div class="input-wrapper">
                            <input class="input" type="password" id="password" placeholder="Something secure.." data-min="8" data-max="24">
                        </div>
                    </div>
                </div>
                <div class="span__1 margin-top-m">
                    <button class="btn btn-sec btn-block">Secondary</button>
                </div>
                <div class="span__1 margin-top-m">
                    <button class="btn btn-prim btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container grid-body margin-top-l">
        <div class="span__4 span__8_l offset__2_l">
            <form class="form form_card">
                <div class="input-wrapper">
                    <input class="input" type="text" placeholder="Your E-mail">
                    <button class="btn btn-prim btn-block input-append">Sign me up</button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="section gutter-top-xl gutter-bot-l">
    <div class="container grid-body">
        <div class="span__4 span__6_l justify-center-s-up">
            <button id="openTop" class="btn btn-prim btn-block">Top error</button>
        </div>
        <div class="span__4 span__6_l justify-center-s-up">
            <button id="openBot" class="btn btn-prim btn-block">Bottom warning</button>
        </div>
    </div>
</section>
<section class="section gutter-top-xl gutter-bot-l section-dark">
    <div class="container grid-body">
        <div class="span__full">
            <table class="table">
                <tr class="table_row row-head">
                    <th class="row_head-col col_grow-1 row_align-left">
                        <p>#</p>
                    </th>
                    <th class="row_head-col col_grow-3 row_align-left">
                        <p>Content</p>
                    </th>
                    <th class="row_head-col col_grow-2 row_align-center">
                        <p>Action</p>
                    </th>
                </tr>
                <tr class="table_row row-item">
                    <td class="row_item-col col_grow-1 row_align-left">
                        <p class="col_impact">1</p>
                    </td>
                    <td class="row_item-col col_grow-3 row_align-left">
                        <p>Content</p>
                    </td>
                    <td class="row_item-col col_grow-2 row_align-center">
                        <div class="btn btn-text">Edit</div>
                        <div class="btn btn-text">Remove</div>
                    </td>
                </tr>
                <tr class="table_row row-item">
                    <td class="row_item-col col_grow-1 row_align-left col_impact">
                        <p class="col_impact">2</p>
                    </td>
                    <td class="row_item-col col_grow-3 row_align-left">
                        <p>Content</p>
                    </td>
                    <td class="row_item-col col_grow-2 row_align-center">
                        <div class="btn btn-text">Edit</div>
                        <div class="btn btn-text">Remove</div>
                    </td>
                </tr>
                <tr class="table_row row-item">
                    <td class="row_item-col col_grow-1 row_align-left col_impact">
                        <p class="col_impact">3</p>
                    </td>
                    <td class="row_item-col col_grow-3 row_align-left">
                        <p>Content</p>
                    </td>
                    <td class="row_item-col col_grow-2 row_align-center">
                        <div class="btn btn-text">Edit</div>
                        <div class="btn btn-text">Remove</div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>

<?php
require_once __DIR__.'/modules/footer.php';
require_once __DIR__.'/modules/bottom.php';
?>