<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = 'Qualitex Engenharia e Serviços';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <?= $this->Html->css('animate.css') ?>

    <?= $this->Html->script('jquery.1.8.3.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('jquery-scrolltofixed.js') ?>
    <?= $this->Html->script('jquery.easing.1.3.js') ?>
    <?= $this->Html->script('jquery.isotope.js') ?>
    <?= $this->Html->script('wow.js') ?>
    <?= $this->Html->script('classie.js') ?>
</head>

<body>

    <?php if ($this->request->params['controller'] == 'Pages' && $this->request->params['action'] == 'display'): ?>
        <header class="header" id="header">
            <div class="container">
                <figure class="logo animated fadeInDown delay-07s">
                    <?= $this->Html->image('logo.png'); ?>
                </figure>
                <h1 class="animated fadeInDown delay-07s">Bem-vindo(a) ao nosso site!</h1>
                <ul class="we-create animated fadeInUp delay-1s">
                    <li>Somos uma empresa que ama o meio ambiente e nossos serviços buscam a melhor relação ele e o ser humano.</li>
                </ul>
                <a class="link animated fadeInUp delay-1s servicelink" href="#service">Entrar</a>
            </div>
        </header>
    <?php endif; ?>

    <?php if ($this->request->params['controller'] == 'Pages' && $this->request->params['action'] == 'display'){ ?>
        <nav class="main-nav-outer" id="test">
        	<div class="container">
                <ul class="main-nav">
                	<li>
                        <a href="#service">Quem somos</a>
                    </li>
                    <li><a href="#Portfolio">Áreas de atução</a></li>
                    <li class="small-logo"><a href="#header"><?= $this->Html->image('logo3.png'); ?></a></li>
                    <li><a href="#contact">Contato</a></li>
                    <li>
                        <?php echo $this->Html->link(__('Solicitar propsota'), array('controller'=> 'proposals','action' => 'request_proposal')); ?>
                    </li>


                </ul>
                <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
            </div>
        </nav>
    <?php }else{ ?>
        <nav class="main-nav-outer" id="test">
            <div class="container">
                <ul class="main-nav">
                    <li>
                        <?php echo $this->Html->link(__('Quem somos'), array('controller'=> 'Pages','action' => 'home#service')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Áreas de atução'), array('controller'=> 'Pages','action' => 'home#service')); ?>
                    </li>
                    <li class="small-logo">
                        <?php
                            echo $this->Html->image("logo3.png",
                                array('url' =>
                                    array('controller' => 'Pages', 'action' => 'home')
                                    )
                                );
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Contato'), array('controller'=> 'Pages','action' => 'home#contact')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Solicitar propsota'), array('controller'=> 'proposals','action' => 'request_proposal')); ?>
                    </li>


                </ul>
                <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
            </div>
        </nav>
    <?php } ?>

    <?= $this->Flash->render() ?>
    <div>
        <?= $this->fetch('content') ?>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo"><a href="#"><?= $this->Html->image('logo.png'); ?></a></div>
            <span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
            <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <script type="text/javascript">

    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
    </script>

    <script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100
        }
    );
    wow.init();
    </script>


    <script type="text/javascript">
    $(window).load(function(){

        $('.main-nav li a, .servicelink').bind('click',function(event){
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500,'easeInOutExpo');
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        if ($(window).width() < 768 ) {
            $('.main-nav').hide();
        }
        event.preventDefault();
    });
})
</script>

<script type="text/javascript">

$(window).load(function(){


    var $container = $('.portfolioContainer'),
    $body = $('body'),
    colW = 375,
    columns = null;


    $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
            columnWidth: colW
        }
    });

    $(window).smartresize(function(){
        // check if columns has changed
        var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
        if ( currentColumns !== columns ) {
            // set new column count
            columns = currentColumns;
            // apply width to container manually, then trigger relayout
            $container.width( columns * colW )
            .isotope('reLayout');
        }

    }).smartresize(); // trigger resize to set container width
    $('.portfolioFilter a').click(function(){

        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
        });
        return false;

    });

});

</script>


</body>

</html>
