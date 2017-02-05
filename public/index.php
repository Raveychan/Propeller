<!DOCTYPE html>
<html>
<?php
include_once "inc/_header.php";
?>
<body class="page">

<div class="page__wrapper">
    <?php
    include_once "inc/_navigation.php";
    ?>
    <section class="intro__wrapper">
        <h1 class="intro__text">Welcome to pbt,<br>propeller!</h1>
        <p class="intro__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo
            consequat.
        </p>
    </section>
    <section class="cta clearfix">
        <div class="cta__wrappers">
            <div class="cta__overlay">
                <div class="cta__overlayText">
                    <p class="uppercase">book a table</p>
                    <img src="assets/images/arrows.png">
                    <p class="cta__link"><a href="#">click here</a></p>
                </div>
            </div>
            <img src="assets/images/tables.png" class="cta__images">
        </div>
        <div class="cta__wrappers">
            <div class="cta__overlay">
                <div class="cta__overlayText">
                    <p class="uppercase">book a table</p>
                    <img src="assets/images/arrows.png">
                    <p class="cta__link"><a href="#">click here</a></p>
                </div>
            </div>
            <img src="assets/images/hotdog.png" class="cta__images">
        </div>
        <div class="cta__wrappers">
            <div class="cta__overlay">
                <div class="cta__overlayText">
                    <p class="uppercase">book a table</p>
                    <img src="assets/images/arrows.png">
                    <p class="cta__link"><a href="#">click here</a></p>
                </div>
            </div>
            <img src="assets/images/vine.png" class="cta__images">
        </div>
        <div class="cta__wrappers">
            <div class="cta__overlay">
                <div class="cta__overlayText">
                    <p class="uppercase">book a table</p>
                    <img src="assets/images/arrows.png">
                    <p class="cta__link"><a href="#">click here</a></p>
                </div>
            </div>
            <img src="assets/images/coffee.png" class="cta__images">
        </div>
    </section>
    <div class="main-carousel">
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
        <div class="carousel-cell"><img src="assets/images/carousel/crouselGallery.png"></div>
    </div>
    <section class="social clearfix">
        <div class="social__sections social__twitter">
            <h2 class="social__titles">twitter</h2>
            <p class="social__subtitles">@PBT_propeller</p>
            <div class="button button__social"><a href="#" class="button__text">follow</a></div>
            <p class="social__subtitles social__twitterFeed">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p class="social__twitterTimer">an hour ago</p>
        </div>
        <div class="social__sections social__instagram">
            <h2 class="social__titles">instagram</h2>
            <p class="social__subtitles">PBT_propeller</p>
            <div class="button button__social"><a href="#" class="button__text">follow</a></div>
            <div class="instagram__wrap">
                <img class="instagram__images" src="assets/images/insta_feed_1.png">
                <img class="instagram__images" src="assets/images/insta_feed_2.png">
            </div>
        </div>
        <div class="social__sections social__signup">
            <h2 class="social__titles">sign up</h2>
            <p class="social__subtitles">Subscribe to our newsletter and never miss out on our exclusive offers!</p>
            <form class="social__form">
                <div class="inputs__wrap">
                    <p class="inputs__inner inputs__name">name</p>
                    <input class="inputs inputs__inner" type="text">
                </div>
                <div class="inputs__wrap">
                    <p class="inputs__title inputs__inner">email</p>
                    <input class="inputs inputs__inner" type="email">
                </div>
                <div class="inputs__wrap">
                    <p class="inputs__birthday">birthday</p>
                    <select class="inputs inputs__inner select">
                        <option>dd</option>
                        <?php
                        for ($x = 1; $x <= 31; $x++) {
                            echo "<option>$x</option>";
                        }
                        ?>
                    </select>
                    <select class="inputs inputs__inner select">
                        <option>mm</option>
                        <?php
                        for ($x = 1; $x <= 12; $x++) {
                            echo "<option>$x</option>";
                        }
                        ?>
                    </select>
                </div>
            </form>
            <div class="button button__social button__subscribe"><a href="#" class="button__text">sign up</a></div>
        </div>
    </section>
    <?php
    include_once "inc/_footer.php";
    ?>
</div>
<script type="text/javascript" src="assets/scripts/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/scripts/vendor/flickity.js"></script>
<script type="text/javascript" src="assets/scripts/own/hello.js"></script>

</body>

</html>