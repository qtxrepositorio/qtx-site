<?php ?>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('flexslider.css') ?>
        <?= $this->Html->css('prettyPhoto.css') ?>
        <?= $this->Html->css('animate.css') ?>
        <?= $this->Html->css('owl.carousel.css') ?>
        <?= $this->Html->css('style.css') ?>

        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('jquery.prettyPhoto.js') ?>
        <?= $this->Html->script('jquery.nicescroll.min.js') ?>
        <?= $this->Html->script('superfish.min.js') ?>
        <?= $this->Html->script('jquery.flexslider-min.js') ?>
        <?= $this->Html->script('owl.carousel.js') ?>
        <?= $this->Html->script('animate.js') ?>
        <?= $this->Html->script('jquery.BlackAndWhite.js') ?>
        <?= $this->Html->script('myscript.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        
    </head>
    <body>

        <section class="content">

            <!-- TOP SLIDER -->
            <div class="flexslider top_slider">
                <ul class="slides">
                    <li class="slide1">
                        <div class="flex_caption1">
                            <p class="title1 captionDelay2 FromTop">Creative</p>
                            <p class="title2 captionDelay4 FromTop">White</p>
                            <p class="title3 captionDelay6 FromTop">Templates</p>
                            <p class="title4 captionDelay7 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
                        </div>
                        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
                    <li class="slide2">
                        <div class="flex_caption1">
                            <p class="title1 captionDelay6 FromLeft">Responsive</p>
                            <p class="title2 captionDelay4 FromLeft">Design</p>
                            <p class="title3 captionDelay2 FromLeft">Theme</p>
                            <p class="title4 captionDelay7 FromLeft">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
                        </div>
                        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
                    </li>
                    <li class="slide3">
                        <div class="flex_caption1">
                            <p class="title1 captionDelay1 FromBottom">Amazing</p>
                            <p class="title2 captionDelay2 FromBottom">Video</p>
                            <p class="title3 captionDelay3 FromBottom">Background</p>
                            <p class="title4 captionDelay5 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
                        </div>
                        <a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
                        
                        <!-- VIDEO BACKGROUND -->
                        <a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
                        <!-- //VIDEO BACKGROUND -->
                    </li>
                </ul>
            </div>
            <div id="carousel">
                <ul class="slides">
                    <li> <img src="images/slider/slide1_bg.jpg" alt="" /></li>
                    <li><img src="images/slider/slide2_bg.jpg" alt="" /></li>
                    <li><img src="images/slider/slide3_bg.jpg" alt="" /></li>
                </ul>
            </div><!-- //TOP SLIDER -->

        </section>

    </body>

</html>

