
<section class="main-section" id="about">
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

<section class="main-section" id="portfolio">
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
            <?=
            $this->Html->image("portfolio/Transporte_de_residuos.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'waste_transportation']
            ]);
            ?>
            <h3>Transporte de Resíduos</h3>
            <p>A QUALITEX atua no mercado com essa atividade oferecendo o serviço completo englobando todos os itens logísticos no modal rodoviário através de...</p>
        </div>
        <div class=" Portfolio-box printdesign">
            <?=
            $this->Html->image("portfolio/gerenciamento.png", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'waste_management']
            ]);
            ?>
            <h3>Gerenciamento de resíduos</h3>
            <p>
                Remoção de resíduos e borras em equipamentos, recolhimento de resíduos...
            </p>
        </div>
        <div class=" Portfolio-box printdesign" >
            <?=
            $this->Html->image("portfolio/eflu.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'wastewater_treatment']
            ]);
            ?>
            <h3>Tratamento de Efluentes</h3>
            <p>A QUALITEX possui uma Estação de tratamento de efluentes sanitários e industriais compatíveis para tratamento pelo sistema biotecnológico instalado...</p>
        </div>


        <div class=" Portfolio-box branding">
            <?=
            $this->Html->image("portfolio/aguaseefluentes.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'water_and_effluent']
            ]);
            ?>
            <h3>Águas e Efluentes</h3>
            <p>Amostragens técnicas e laboratoriais para verificação de conformidade em relação aos requisitos legais...</p>
        </div>

        <div class=" Portfolio-box branding">
            <?=
            $this->Html->image("portfolio/qualidadedoar.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'air_quality_and_gas_emissions']
            ]);
            ?>
            <h3>Qualidade do Ar e Emissões gasosas</h3>
            <p>A QUALITEX está engajada apoiando o Plano Nacional de Qualidade do Ar. O monitoramento da qualidade do ar e das fontes de emissão de...</p>
        </div>

        <div class=" Portfolio-box branding">
            <?=
            $this->Html->image("portfolio/alimentos.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'food_and_swabs']
            ]);
            ?>
            <h3>Alimentos e Swabs</h3>
            <p>O Laboratório Qualitex atua no monitoramento analítico dos alimentos, utensílios e manipuladores em relação a parâmetros de controle biológico e na avaliação...</p>
        </div>

        <div class=" Portfolio-box branding">
            <?=
            $this->Html->image("portfolio/combustivel.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'automotive_fuels']
            ]);
            ?>
            <h3>Combustíveis Automotivos</h3>
            <p>Amostragens técnicas e laboratoriais para verificação de conformidade aos critérios de qualidade regulamentados pela ANP...</p>
        </div>

        <div class=" Portfolio-box branding">
            <?=
            $this->Html->image("portfolio/saude.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'occupational_health']
            ]);
            ?>
            <h3>Saúde Ocupacional</h3>
            <p> Através de medições e monitoramentos analíticos a QUALITEX tem apoiado o Plano Nacional de Segurança e Saúde no Trabalho com os serviços...</p>
        </div>

        <div class=" Portfolio-box branding">
            <?=
            $this->Html->image("portfolio/residuos.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'solid_waste']
            ]);
            ?>
            <h3>Resíduos Sólidos</h3>
            <p>A QUALITEX está engajada apoiando a Política Nacional de Resíduos Sólidos resultante de atividades humanas...</p>
        </div>
        <div class=" Portfolio-box printdesign">
            <?=
            $this->Html->image("portfolio/predial.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'cleaning_predial_green_conservation']
            ]);
            ?>
            <h3>Limpeza e conservação predial e de áreas verdes</h3>
            <p>Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc...</p>
        </div>

        <div class=" Portfolio-box printdesign">
            <?=
            $this->Html->image("portfolio/limpeza.jpg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'areas', 'action' => 'industrial_cleaning']
            ]);
            ?>
            <h3>Limpeza industrial</h3>
            <p>Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc...</p>
        </div>
    </div>
</section><!--main-section-end-->

<section class="main-section" id="contact"><!--main-section alabaster-start-->

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
                        <h3><?php echo $this->Html->link(__('Localização'), array('controller'=> 'Contacts','action' => 'location')); ?></h3>
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

<section class="main-section">
    <div class="container">
        <h2>Alguns Clientes</h2>
    </div>
</section>
<div class="">
    <div class="container">
        <br><br><br>
        <div class="owl-carousel owl-theme">

            <?php for ($i=1; $i<=37; $i++){ ?>
                <div class="item"><?= $this->Html->image('c' . $i . '.png'); ?></div>
            <?php } ?>

        </div>
    </div>
</div>
<br><br><br>


<script type="text/javascript">


url = window.location.href;
ref = url.split("#");

if (ref[1] == "contact") {
    window.location.href = "#contact"
}else if(ref[1] == "about"){
    window.location.href = "#about"
}else if(ref[1] == "portfolio"){
    window.location.href = "#portfolio"
}


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
