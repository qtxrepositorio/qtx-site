<section class="content">

    <section class="main-section" id="service">
        <div class="container">
            <h2>Quem somos</h2>
            <h6>We offer exceptional service with complimentary hugs.</h6>
            <div class="row">
                <div class="col-lg-12 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-thumbs-up"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3 style="color:#7cc576"><?php echo $this->Html->link(__('A Qualitex'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>
                                A empresa iniciou suas atividades em 1992 no Pólo Cloroquímico de Alagoas,
                                atendendo clientes locais para ensaios de laboratório industrial, estendendo
                                suas atividades em operações de áreas industriais e meio ambiente.
                            </p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-flag"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3><?php echo $this->Html->link(__('Diretrizes de condulta'), array('controller'=> 'Who','action' => 'guidelines_and_conduct')); ?></h3>
                            <p>
                                Em todos os seus relacionamentos com pessoas ou entidades públicas/privadas
                                a Qualitex exercita o seu programa de integridade e anticorrupção
                            </p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-tree"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3><?php echo $this->Html->link(__('Qualidade e meio ambiente'), array('controller'=> 'Who','action' => 'quality_and_environment')); ?></h3>
                            <p>
                                Além de se preocupar com os seus aspectos e impactos ambientais, a
                                Qualitex vem exercendo atividades de Co-processamento de Resíduos,Tratamento
                                de Efluentes, Análises Ambientais, Manuseio, Transporte e Incineração de
                                Organo-clorados, entre outros serviços voltados à conservação ambiental e
                                à sadia qualidade de vida da população.
                            </p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-file"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3><?php echo $this->Html->link(__('Documentos Institucionais'), array('controller'=> 'Who','action' => 'documents')); ?></h3>
                            <p>
                                Para maior agilidade, disponibilizamos alguns documentos aos nossos clientes.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="main-section paddind" id="Portfolio">
        <div class="container">
            <h2>Áreas de atuação</h2>
            <h6>Fresh portfolio of designs that will keep you wanting more.</h6>
            <div class="portfolioFilter">
                <ul class="Portfolio-nav wow fadeIn delay-02s">
                    <li><a href="#" data-filter="*" class="current">Todas</a></li>
                    <li><a href="#" data-filter=".branding" >Análises ambientais</a></li>
                    <li><a href="#" data-filter=".webdesign" >Transpote de resíduos</a></li>
                    <li><a href="#" data-filter=".printdesign" >Servições operacionais</a></li>
                    <li><a href="#" data-filter=".photography" >Tratamento de efluentes</a></li>
                </ul>
            </div>
        </div>

        <div class="portfolioContainer wow fadeInUp delay-04s">

            <div class=" Portfolio-box printdesign">
                <a href="#"><?= $this->Html->image('portfolio/gerenciamento.png'); ?></a>
                <h3>Gerenciamento de resíduos</h3>
                <p>
                    Remoção de resíduos e borras em equipamentos, recolhimento de resíduos...
                </p>
            </div>

            <div class=" Portfolio-box printdesign">
                <a href="#"><?= $this->Html->image('portfolio/predial.jpg'); ?></a>
                <h3>Limpeza e conservação predial e de áreas verdes</h3>
                <p>Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc.</p>
            </div>

            <div class=" Portfolio-box printdesign">
                <a href="#"><?= $this->Html->image('portfolio/limpeza.jpg'); ?></a>
                <h3>Limpeza industrial</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box webdesign" >
                <a href="#"><?= $this->Html->image('portfolio/CAMINHOES VÁCUO.png'); ?></a>
                <h3>Caminhão Vácuo</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box webdesign" >
                <a href="#"><?= $this->Html->image('portfolio/CAMINHÃO MUNCK.png'); ?></a>
                <h3>Caminhão Munk</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box webdesign" >
                <a href="#"><?= $this->Html->image('portfolio/CAMINHÃO POLIGUINDASTE.png'); ?></a>
                <h3>Caminhão Poliguindaste</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box webdesign" >
                <a href="#"><?= $this->Html->image('portfolio/Semi-reboque Caçamba.png'); ?></a>
                <h3>Semi-reboque Caçamba</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box webdesign" >
                <a href="#"><?= $this->Html->image('portfolio/Semi-reboque Inox Tanque.png'); ?></a>
                <h3>Semi-reboque Tanque Inox</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box webdesign" >
                <a href="#"><?= $this->Html->image('portfolio/CARRETA GRANELEIRO.png'); ?></a>
                <h3>Semi-reboque Carga seca</h3>
                <p></p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="#"><?= $this->Html->image('portfolio/aguaseefluentes.jpg'); ?></a>
                <h3>Águas e Efluentes</h3>
                <p>Amostragens técnicas e laboratoriais para verificação de conformidade em relação aos requisitos legais...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="#"><?= $this->Html->image('portfolio/qualidadedoar.jpg'); ?></a>
                <h3>Qualidade do Ar e Emissões gasosas</h3>
                <p>A QUALITEX está engajada apoiando o Plano Nacional de Qualidade do Ar. O monitoramento da qualidade do ar e das fontes de emissão de ...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="#"><?= $this->Html->image('portfolio/alimentos.jpg'); ?></a>
                <h3>Alimentos e Swabs</h3>
                <p>Estamos engajados apoiando a Política Nacional de Alimentação e Nutrição...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="#"><?= $this->Html->image('portfolio/combustivel.jpg'); ?></a>
                <h3>Combustíveis Automotivos</h3>
                <p>Amostragens técnicas e laboratoriais para verificação de conformidade aos critérios de qualidade regulamentados pela ANP...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="#"><?= $this->Html->image('portfolio/saude.jpg'); ?></a>
                <h3>Saúde Ocupacional</h3>
                <p> Através de medições e monitoramentos analíticos a QUALITEX tem apoiado o Plano Nacional de Segurança e Saúde no Trabalho com seus préstimos de serviços na verificação de conformidade em relação aos parâmetros regulamentados legalmente através das NRs do Ministério do Trabalho e Emprego...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="#"><?= $this->Html->image('portfolio/residuos.jpg'); ?></a>
                <h3>Resíduos Sólidos</h3>
                <p>A QUALITEX está engajada apoiando a Política Nacional de Resíduos Sólidos resultante de atividades humanas...</p>
            </div>

            <div class=" Portfolio-box photography" >
                <a href="#"><?= $this->Html->image('portfolio/eflu.jpg'); ?></a>
                <h3>Tratamento de Efluentes</h3>
                <p></p>
            </div>

        </div>

    </section><!--main-section-end-->

    <section class="main-section client-part" id="client">
        <div class="container">
            <b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
            <div class="row">
                <div class="col-lg-12">
                    <p class="client-part-haead wow fadeInDown delay-05">
                        It was a pleasure to work with the guys at Knight Studio. They made sure
                        we were well fed and drunk all the time!
                    </p>
                </div>
            </div>
            <ul class="client wow fadeIn delay-05s">
                <li><a href="#">
                    <img src="img/client-pic1.jpg" alt="">
                    <h3>James Bond</h3>
                    <span>License To Drink Inc.</span>
                </a></li>
            </ul>
        </div>
    </section><!--main-section client-part-end-->

    <div class="c-logo-part"><!--c-logo-part-start-->
        <div class="container">
            <ul>
                <li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
                <li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
                <li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
                <li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
                <li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
            </ul>
        </div>
    </div><!--c-logo-part-end-->

    <section class="main-section team" id="team"><!--main-section team-start-->
        <div class="container">
            <h2>team</h2>
            <h6>Take a closer look into our amazing team. We won’t bite.</h6>
            <div class="team-leader-block clearfix">
                <div class="team-leader-box">
                    <div class="team-leader wow fadeInDown delay-03s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic1.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-pinterest"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                    <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                    <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
                <div class="team-leader-box">
                    <div class="team-leader  wow fadeInDown delay-06s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic2.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-pinterest"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                    <span class="wow fadeInDown delay-06s">Product Manager</span>
                    <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
                <div class="team-leader-box">
                    <div class="team-leader wow fadeInDown delay-09s">
                        <div class="team-leader-shadow"><a href="#"></a></div>
                        <img src="img/team-leader-pic3.jpg" alt="">
                        <ul>
                            <li><a href="#" class="fa-twitter"></a></li>
                            <li><a href="#" class="fa-facebook"></a></li>
                            <li><a href="#" class="fa-pinterest"></a></li>
                            <li><a href="#" class="fa-google-plus"></a></li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                    <span class="wow fadeInDown delay-09s">Accountant</span>
                    <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
                </div>
            </div>
        </div>
    </section><!--main-section team-end-->

    <section class="business-talking"><!--business-talking-start-->
        <div class="container">
            <h2>Let’s Talk Business.</h2>
        </div>
    </section><!--business-talking-end-->

    <div class="container">
        <section class="main-section contact" id="contact">

            <div class="row">
                <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3><i class=" icon-map-marker"></i>Address:</h3>
                        <span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-phone"></i>Phone:</h3>
                        <span>1-800-BOO-YAHH</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa-pencil"></i>email:</h3>
                        <span>hello@knightstudios.com</span>
                    </div>
                    <div class="contact-info-box hours clearfix">
                        <h3><i class="fa-clock-o"></i>Hours:</h3>
                        <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                    <div class="form">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</section>
