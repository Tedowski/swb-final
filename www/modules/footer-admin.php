<?php

$sData = file_get_contents('./../data/contact.json');
$jData = json_decode($sData);

$jContent = $jData->contact;

?>

<footer id="footer" class="footer gutter-bot-m gutter-top-l">
    <div class="container grid-body">
        <div class="span__4 span__3_l">
            <div class="footer__item">
                <h5>Skate world better</h5>
                <div class="underline-container undrln__left">
                    <div class="undrln__sec underline-inline undrln__s"></div>
                </div>
                <p class="margin-top-s">Skate world better raises money for Mozambique and it's citizens. It is a young, innovative and charitable organization</p>
                <a href="https://www.facebook.com/skateworldbetter/" class="icon-circ">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/skateworldbetter/" class="icon-circ">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="span__4 span__3_l">
            <div class="footer__item">
                <h5>Sitemap</h5>
                <div class="underline-container undrln__left">
                    <div class="undrln__sec underline-inline undrln__s"></div>
                </div>
                <div class="subnav margin-top-s">
                    <a href="./index.php" class="subnav-link">Home</a>
                    <a href="./project.php" class="subnav-link">Project</a>
                    <a href="./about.php" class="subnav-link">About us</a>
                    <a href="./blog.php" class="subnav-link">Blog</a>
                    <a href="./contact.php" class="subnav-link">Contact</a>
                </div>
            </div>
        </div>
        <div class="span__4 span__3_l">
            <div class="footer__item">
                <h5>Contact</h5>
                <div class="underline-container undrln__left">
                    <div class="undrln__sec underline-inline undrln__s"></div>
                </div>
                <div class="footer__contact margin-top-s">
                    <div class="contact-item"><i class="fas fa-globe-europe"></i><span><?= $jContent->address->city.', '.$jContent->address->country ?></span></div>
                    <div class="contact-item"><i class="fas fa-phone-square"></i><span>+<?= $jContent->phone->code.' '.$jContent->phone->number ?></span></div>
                    <div class="contact-item"><i class="fas fa-envelope-square"></i><span><a href="mailto:<?= $jContent->mail->address.'?subject='.$jContent->mail->subject ?>"><?= $jContent->mail->address ?></a></span></div>
                </div>
            </div>
        </div>
        <div class="span__4 span__3_l">
            <div class="footer__item">
                <h5>Get updates about the cause</h5>
                <form id="frm-newsletter" class="form">
                    <div class="input-wrapper">
                        <input id="frm-newsletter-input" class="input" type="text" name="subscriber-email" placeholder="Your E-mail">
                        <button class="btn btn-prim btn-block input-append">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="span__full">
            <hr>
            <p class="margin-top-m">Copyright 2019 Tripleton reserved</p>
        </div>
    </div>
</footer>