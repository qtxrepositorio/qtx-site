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

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>

        <div class="preloader_hide">

            <!-- PAGE -->
            <div id="page">

                <!-- HEADER -->
                <header>

                    <!-- MENU BLOCK -->
                    <div class="menu_block">

                        <!-- CONTAINER -->
                        <div class="container clearfix">

                            <br>
                            <img src="http://qualitex.com.br/images/logo.png">

                            <!-- MENU -->
                            <div class="pull-right">
                                <nav class="navmenu center">
                                    <ul><!-- first active  -->
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
                                        <li class="scroll_btn"">
                                            <?php echo $this->Html->link(__('Solicitar proposta'), array('controller'=> 'Proposals','action' =>'requestProposal'));?>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- //MENU -->
                        </div><!-- //MENU BLOCK -->
                    </div><!-- //CONTAINER -->
                </header>
            </div>
        </div>


        <?= $this->Flash->render() ?>
        <div>
            <?= $this->fetch('content') ?>
        </div>

    </body>
</html>
