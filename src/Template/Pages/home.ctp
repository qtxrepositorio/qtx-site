<section class="content">

    <section class="main-section" id="service">
        <div class="container">
            <h2>Quem somos</h2>
            <h6>We offer exceptional service with complimentary hugs.</h6>
            <div class="row">
                <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
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
                <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s">
                    <br><br><br>
                	<?= $this->Html->image('macbook-pro.png'); ?>
                </figure>

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

    <section class="main-section alabaster" id="contact"><!--main-section alabaster-start-->
    	<div class="container">
        	<div class="row">
    			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                    <?= $this->Html->image('iphone.png'); ?>
                </figure>
            	<div class="col-lg-7 col-sm-8 featured-work">
                	<h2>Entre em contato</h2>
                    <br>
                	<!-- <P class="padding-b">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</P> -->
                	<div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-02s">
                        	<i class="fa-phone-square"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-02s">
                            <h3><?php echo $this->Html->link(__('Contatos telefônicos'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>Lista de telefones por setor.</p>
                        </div>
                    </div>
                    <div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-04s">
                        	<i class="fa-map-marker"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-04s">
                            <h3><?php echo $this->Html->link(__('Localização'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>Dados de localização da Qualitex matriz e suas filiais.</p>
                        </div>
                    </div>
                    <div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-06s">
                        	<i class="fa-suitcase"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-06s">
                            <h3><?php echo $this->Html->link(__('Trabalhe conosco'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>Quer trabalhar conosco? Envie seu currículo!</p>
                        </div>
                    </div>
                    <div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-02s">
                        	<i class="fa-list"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-02s">
                            <h3><a target="_blank" href="http://goo.gl/forms/kXNpJ7Mkb8">Pesquisa de satisfação</a></h3>
                            <p>Seu feedback é importante para o nosso aprimoramento contínuo!</p>
                        </div>
                    </div>
                    <div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-04s">
                        	<i class="fa-magic"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-04s">
                            <h3><?php echo $this->Html->link(__('Serviço de atendimento ao consumidor - SAC'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>Visando uma melhor relação com o cliente, disponibilizamos mais um canal de comunicação.</p>
                        </div>
                    </div>
                    <div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-06s">
                        	<i class="fa-envelope"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-06s">
                            <h3><?php echo $this->Html->link(__('Ouvidoria'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>Nossa Ouvidoria busca garantir que os assuntos tratados pelo SAC possam ser reexaminados para que sejam plenamente resolvidos ou esclarecidos.</p>
                        </div>
                    </div>

                </div>
            </div>
    	</div>
    </section><!--main-section alabaster-end-->

    <section class="main-section client-part" id="client"><!--main-section client-part-start-->
    	<div class="container">
    		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
        	<div class="row">
            	<div class="col-lg-12">
                	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure
                        we were well fed and drunk all the time!</p>
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

    <section class="business-talking"><!--business-talking-start-->
        <div class="container">
            <h2>Seja um parceiro da Qualitex! </h2>
        </div>
    </section><!--business-talking-end-->

    <br><br><br><br><br><br><br>

</section>
