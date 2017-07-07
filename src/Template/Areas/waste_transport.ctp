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

        </section>

    </body>

</html>

 