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

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">   

        <script>

            //PrettyPhoto
            jQuery(document).ready(function () {
                $("a[rel^='prettyPhoto']").prettyPhoto();
            });

            //BlackAndWhite
            $(window).load(function () {
                $('.client_img').BlackAndWhite({
                    hoverEffect: true, // default true
                    // set the path to BnWWorker.js for a superfast implementation
                    webworkerPath: false,
                    // for the images with a fluid width and height 
                    responsive: true,
                    // to invert the hover effect
                    invertHoverEffect: false,
                    // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                    intensity: 1,
                    speed: {//this property could also be just speed: value for both fadeIn and fadeOut
                        fadeIn: 300, // 200ms for fadeIn animations
                        fadeOut: 300 // 800ms for fadeOut animations
                    },
                    onImageReady: function (img) {
                        // this callback gets executed anytime an image is converted
                    }
                });
            });

        </script>

        <style type="text/css">

            .color {
                background-color: #151515;
            }

            .font{
                color: #FFFAFA;   
            }

        </style>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>

        <?php 
        echo $this->Html->image("preloader.gif", 
        ["id" => "preloader"]
        );
        ?>

        <div class="preloader_hide">

            <div id="page">

                <header>

                    <div class="menu_block">

                        <div class="container clearfix">

                            <br>
                            <?php echo $this->Html->image("logo.png", [
                            "alt" => "Brownies",
                            'url' => ['controller' => 'Pages', 'action' => 'index']
                            ]);?>

                            <div class="pull-right">
                                <nav class="navmenu center">
                                    <ul>
                                        <li class="scroll_btn">
                                            <?php echo $this->Html->link(__('Início'), array('controller'=> 'Pages','action' => '')); ?>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="javascript:void(0);" >Quem somos</a>
                                            <ul>
                                                <li>
                                                    <?php echo $this->Html->link(__('Sobre a Qualitex'), array('controller'=> 'Who','action' => 'about'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Diretrizes de Condulta'), array('controller'=> 'Who','action' => 'guidelinesAndConduct'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Qualidade e Meio Ambiente'), array('controller'=> 'Who','action' => 'qualityAndEnvironment'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Documentos'), array('controller'=> 'Who','action' => 'documents'));?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="javascript:void(0);" >Aréas de atuações</a>
                                            <ul>
                                                <li>
                                                    <?php echo $this->Html->link(__('Análises Ambientais'), array('controller'=> 'Areas','action' => 'environmentalAnalyzes'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Transporte de resíduos'), array('controller'=> 'Areas','action' => 'wasteTransport'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Serviços Operacionais'), array('controller'=> 'Areas','action' => 'operationalServices'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Tratamento de Efluentes'), array('controller'=> 'Areas','action' => 'wastewaterTreatment'));?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu">
                                            <a href="javascript:void(0);" >Contatos</a>
                                            <ul>
                                                <li>
                                                    <?php echo $this->Html->link(__('Localização'), array('controller'=> 'Contacts','action' => 'location'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Trabalhe Conosco'), array('controller'=> 'Contacts','action' => 'workHere'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Contatos Telefônicos'), array('controller'=> 'Contacts','action' => 'phoneContacts'));?>
                                                </li>
                                                <li><a href="http://goo.gl/forms/kXNpJ7Mkb8" target="_blank">Pesquisa de Satisfação</a>
                                                <li>
                                                    <?php echo $this->Html->link(__('SAC'), array('controller'=> 'Contacts','action' => 'sac'));?>
                                                </li>
                                                <li>
                                                    <?php echo $this->Html->link(__('Ouvidoria'), array('controller'=> 'Contacts','action' => 'ombudsman'));?>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="scroll_btn">
                                            <?php echo $this->Html->link(__('Solicitar proposta'), array('controller'=> 'Proposals','action' =>'requestProposal'));?>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>

                <?= $this->Flash->render() ?>
                <div>
                    <?= $this->fetch('content') ?>
                </div>

            </div>

        </div>

        <section id="contacts">
        </section>

        <section class="color">

            <br>

            <!-- CONTAINER -->
        <div class="container">
            
            <!-- ROW -->
            <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
                
                <div class="col-lg-4 col-md-4 col-sm-6 padbot30">
                    <h4 class="font">Mais sobre a <b> Qualitex <b></h4>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_content_small">
                            <?php echo $this->Html->link(__('Um pouco sobre a qualitex'), array('controller'=> 'Who','action' => 'about')); ?>
                        </div>
                    </div>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_content_small">
                            <?php echo $this->Html->link(__('Nossos telefones'), array('controller'=> 'Contacts','action' => 'phone-contacts')); ?>
                        </div>
                    </div>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_content_small">
                            <?php echo $this->Html->link(__('Alguns documentos'), array('controller'=> 'Who','action' => 'documents')); ?>
                        </div>
                    </div>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_content_small">
                            <?php echo $this->Html->link(__('Diretrizes de conduta'), array('controller'=> 'Who','action' => 'guidelinesAndConduct')); ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
                    <h4 class="font"><b>Qualitex</b> nas redes</h4>
                    <p>Com o intuito de ficar cada vez mais perto de você, a Qualitex também está nas redes sociais.</p>
                    <ul class="social">
                        <li><a href="http://www.instagram.com/qualitex_qtx" ><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/QUALITEX/" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/101749383972960088051/about" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.google.com.br/maps/place/Qualitex/@-9.672027,-35.8324737,17z/data=!3m1!4b1!4m5!3m4!1s0x70152bfffffffff:0xb0cd13cfbaac4b48!8m2!3d-9.672027!4d-35.830285" ><i class="map_show fa fa-map-marker"></i></a></li>
                    </ul>
                </div>
                
                <div class="respond_clear"></div>
                
                <div class="col-lg-4 col-md-4 padbot30">
                    <h4 class="font">Solicite uma <b>Proposta</b> comercial:</h4>

                    <p>Para maior agilidade, disponibilizamos a possibilidade do nosso cliente solicitar propostas comercias através do nosso site.</p>
                    
                    <!-- CONTACT FORM -->
                    <div class="span9 contact_form">
                        <div id="note"></div>
                        <div id="fields">
                            <?php $x=0; ?>
                            <?= $this->Form->create($x, ['url' => ['controller' => 'Proposals', 'action' => 'requestProposal']]) ?>
                                <div align="center">
                                    <?= $this->Form->button(__('Solicitar'), ['class' => 'contact_btn']) ?>
                                </div>
                            <?= $this->Form->end() ?>
                            
                        </div>
                    </div><!-- //CONTACT FORM -->
                </div>
            </div><!-- //ROW -->
            <div class="row copyright">
                <div class="col-lg-12 text-center">
                
                 <p>Feito com <i class="fa fa-heart"></i>, <a href="javascript:void(0);" >Setor TI Qualitex.</a></p>
                </div>
            
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->

        </section>

    </body>    

</html>
