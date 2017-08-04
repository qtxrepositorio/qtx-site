<section class="content">

    <section class="main-section" id="service">
        <div class="container">
            <h2>Quem somos</h2>
            <div class="row">
                <div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-thumbs-up"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3><?php echo $this->Html->link(__('A Qualitex'), array('controller'=> 'Who','action' => 'about')); ?></h3>
                            <p>
                                A empresa iniciou suas atividades em 1992 no Pólo Cloroquímico de Alagoas,
                                atendendo clientes locais para ensaios de laboratório industrial, estendendo
                                suas atividades em operações de áreas industriais e meio ambiente... <?php echo $this->Html->link(__('Ler mais'), array('controller'=> 'Who','action' => 'about')); ?>
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
                                a Qualitex exercita o seu programa de integridade e anticorrupção... <?php echo $this->Html->link(__('Ler mais'), array('controller'=> 'Who','action' => 'guidelines_and_conduct')); ?>
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
                                à sadia qualidade de vida da população... <?php echo $this->Html->link(__('Ler mais'), array('controller'=> 'Who','action' => 'quality_and_environment')); ?>
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
                                Para maior agilidade, disponibilizamos alguns documentos aos nossos clientes. <?php echo $this->Html->link(__('Conferir'), array('controller'=> 'Who','action' => 'documents')); ?>
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
            <div class="portfolioFilter">
                <ul class="Portfolio-nav wow fadeIn delay-02s">
                    <li><a href="#" data-filter="*" class="current">Todos Serviços</a></li>
                    <li><a href="#" data-filter=".branding" >Análises Industriais e Ambientais</a></li>
                    <li><a href="#" data-filter=".printdesign" >Operações Industriais e Ambientais</a></li>

                </ul>
            </div>
        </div>

        <div class="portfolioContainer wow fadeInUp delay-04s">

            <div class=" Portfolio-box printdesign" >
                <a href="../Areas/waste_transportation"><?= $this->Html->image('portfolio/Transporte_de_residuos.jpg'); ?></a>
                <h3>Transporte de Resíduos</h3>
                <p>A QUALITEX atua no mercado com essa atividade oferecendo o serviço completo englobando todos os itens logísticos no modal rodoviário através de...</p>
            </div>
            <div class=" Portfolio-box printdesign">
                <a href="../Areas/waste_management"><?= $this->Html->image('portfolio/gerenciamento.png'); ?></a>
                <h3>Gerenciamento de resíduos</h3>
                <p>
                    Remoção de resíduos e borras em equipamentos, recolhimento de resíduos...
                </p>
            </div>
            <div class=" Portfolio-box printdesign" >
                <a href="../Areas/wastewater_treatment"><?= $this->Html->image('portfolio/eflu.jpg'); ?></a>
                <h3>Tratamento de Efluentes</h3>
                <p>A QUALITEX possui uma Estação de tratamento de efluentes sanitários e industriais compatíveis para tratamento pelo sistema biotecnológico instalado...</p>
            </div>


            <div class=" Portfolio-box branding">
                <a href="../Areas/water_and_effluent"><?= $this->Html->image('portfolio/aguaseefluentes.jpg'); ?></a>
                <h3>Águas e Efluentes</h3>
                <p>Amostragens técnicas e laboratoriais para verificação de conformidade em relação aos requisitos legais...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="../Areas/air_quality_and_gas_emissions"><?= $this->Html->image('portfolio/qualidadedoar.jpg'); ?></a>
                <h3>Qualidade do Ar e Emissões gasosas</h3>
                <p>A QUALITEX está engajada apoiando o Plano Nacional de Qualidade do Ar. O monitoramento da qualidade do ar e das fontes de emissão de...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="../Areas/food_and_swabs"><?= $this->Html->image('portfolio/alimentos.jpg'); ?></a>
                <h3>Alimentos e Swabs</h3>
                <p>O Laboratório Qualitex atua no monitoramento analítico dos alimentos, utensílios e manipuladores em relação a parâmetros de controle biológico e na avaliação...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="../Areas/automotive_fuels"><?= $this->Html->image('portfolio/combustivel.jpg'); ?></a>
                <h3>Combustíveis Automotivos</h3>
                <p>Amostragens técnicas e laboratoriais para verificação de conformidade aos critérios de qualidade regulamentados pela ANP...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="../Areas/occupational_health"><?= $this->Html->image('portfolio/saude.jpg'); ?></a>
                <h3>Saúde Ocupacional</h3>
                <p> Através de medições e monitoramentos analíticos a QUALITEX tem apoiado o Plano Nacional de Segurança e Saúde no Trabalho com os serviços...</p>
            </div>

            <div class=" Portfolio-box branding">
                <a href="../Areas/solid_waste"><?= $this->Html->image('portfolio/residuos.jpg'); ?></a>
                <h3>Resíduos Sólidos</h3>
                <p>A QUALITEX está engajada apoiando a Política Nacional de Resíduos Sólidos resultante de atividades humanas...</p>
            </div>
            <div class=" Portfolio-box printdesign">
                <a href="../Areas/cleaning_and_predial_and_green_area_conservation"><?= $this->Html->image('portfolio/predial.jpg'); ?></a>
                <h3>Limpeza e conservação predial e de áreas verdes</h3>
                <p>Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc...</p>
            </div>

            <div class=" Portfolio-box printdesign">
                <a href="../Areas/industrial_cleaning"><?= $this->Html->image('portfolio/limpeza.jpg'); ?></a>
                <h3>Limpeza industrial</h3>
                <p>Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc...</p>
            </div>
        </div>
    </section><!--main-section-end-->

    <section class="main-section contact" id="contact"><!--main-section alabaster-start-->

        <div class="container">

            <h2>Entre em contato</h2><br><br>

        	<div class="row">

                <div class="col-lg-6 col-sm-6 featured-work">

                	<div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-02s">
                        	<i class="fa-phone-square"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-02s">
                            <h3><?php echo $this->Html->link(__('Contatos telefônicos'), array('controller'=> 'Contacts','action' => 'PhoneContacts')); ?></h3>
                            <p>Lista de telefones por setor e horário de funcionamento.</p>
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
                            <h3><?php echo $this->Html->link(__('Trabalhe conosco'), array('controller'=> 'Contacts','action' => 'WorkHere')); ?></h3>
                            <p>Quer trabalhar conosco? Envie seu currículo!</p>
                        </div>
                    </div>
                </div>
    			<div class="col-lg-6 col-sm-6 featured-work">

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
                            <h3><?php echo $this->Html->link(__('Serviço de atendimento ao consumidor - SAC'), array('controller'=> 'Contacts','action' => 'sac')); ?></h3>
                            <p>Visando uma melhor relação com o cliente, disponibilizamos mais um canal de comunicação.</p>
                        </div>
                    </div>
                    <div class="featured-box">
                    	<div class="featured-box-col1 wow fadeInRight delay-06s">
                        	<i class="fa-envelope"></i>
                        </div>
                    	<div class="featured-box-col2 wow fadeInRight delay-06s">
                            <h3><?php echo $this->Html->link(__('Ouvidoria'), array('controller'=> 'Contacts','action' => 'ombudsman')); ?></h3>
                            <p>Nossa Ouvidoria busca garantir que os assuntos tratados pelo SAC possam ser reexaminados para que sejam plenamente resolvidos ou esclarecidos.</p>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </section>

    <section class="business-talking"><!--business-talking-start-->
        <div class="container">
            <h2>Alguns Clientes</h2>
        </div>
    </section><!--business-talking-end-->
    <div class=""><!--c-logo-part-start-->
        <div class="container">
            <br><br><br>
            <div class="owl-carousel owl-theme">
                <div class="item"><?= $this->Html->image('c1.png'); ?></div>
                <div class="item"><?= $this->Html->image('c2.png'); ?></div>
                <div class="item"><?= $this->Html->image('c3.png'); ?></div>
                <div class="item"><?= $this->Html->image('c4.png'); ?></div>
                <div class="item"><?= $this->Html->image('c5.png'); ?></div>
                <div class="item"><?= $this->Html->image('c6.png'); ?></div>
                <div class="item"><?= $this->Html->image('c7.png'); ?></div>
                <div class="item"><?= $this->Html->image('c8.png'); ?></div>
                <div class="item"><?= $this->Html->image('c9.png'); ?></div>
                <div class="item"><?= $this->Html->image('c10.png'); ?></div>
                <div class="item"><?= $this->Html->image('c11.png'); ?></div>
                <div class="item"><?= $this->Html->image('c12.png'); ?></div>
                <div class="item"><?= $this->Html->image('c13.png'); ?></div>
                <div class="item"><?= $this->Html->image('c14.png'); ?></div>
                <div class="item"><?= $this->Html->image('c15.png'); ?></div>
                <div class="item"><?= $this->Html->image('c16.png'); ?></div>
                <div class="item"><?= $this->Html->image('c17.png'); ?></div>
                <div class="item"><?= $this->Html->image('c18.png'); ?></div>
                <div class="item"><?= $this->Html->image('c19.png'); ?></div>
                <div class="item"><?= $this->Html->image('c20.png'); ?></div>
                <div class="item"><?= $this->Html->image('c21.png'); ?></div>
                <div class="item"><?= $this->Html->image('c22.png'); ?></div>
                <div class="item"><?= $this->Html->image('c23.png'); ?></div>
                <div class="item"><?= $this->Html->image('c24.png'); ?></div>
                <div class="item"><?= $this->Html->image('c25.png'); ?></div>
                <div class="item"><?= $this->Html->image('c26.png'); ?></div>
                <div class="item"><?= $this->Html->image('c27.png'); ?></div>
                <div class="item"><?= $this->Html->image('c28.png'); ?></div>
                <div class="item"><?= $this->Html->image('c29.png'); ?></div>
                <div class="item"><?= $this->Html->image('c30.png'); ?></div>
                <div class="item"><?= $this->Html->image('c31.png'); ?></div>
                <div class="item"><?= $this->Html->image('c32.png'); ?></div>
                <div class="item"><?= $this->Html->image('c33.png'); ?></div>
                <div class="item"><?= $this->Html->image('c34.png'); ?></div>
                <div class="item"><?= $this->Html->image('c35.png'); ?></div>
                <div class="item"><?= $this->Html->image('c36.png'); ?></div>
                <div class="item"><?= $this->Html->image('c37.png'); ?></div>
            </div>
        </div><!--c-logo-part-end-->
    </div>
        <br><br><br>
</section>

<script type="text/javascript">

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:8,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

</script>
