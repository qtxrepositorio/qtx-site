<?= $this->Html->css('grid.css') ?>

<style media="screen">
.gallery
{
    display: inline-block;
    margin-top: 20px;
}
.blur {
    -webkit-filter: blur(4px)

}
</style>

<section class="content">

    <br>

    <div class="container">

        <div class="col-md-6">

            <div class="tab-pane fade in active" id="tab-4">
                <h4 class="classic-title"><span>Transporte de Resíduos</span></h4>
                <p>
                    O transporte de cargas perigosas e não perigosas é uma atividade que requer
                    muita atenção por parte dos gestores ambientais das empresas, pois possui
                    grande quantidade de requisitos legais aplicáveis ao conjunto de recursos
                    abrangendo o veículo do transporte, o condutor do veículo, a carga,
                    a rota e o destino dos materiais. A QUALITEX atua no mercado com essa
                    atividade oferecendo o serviço completo englobando todos os itens
                    logísticos no modal rodoviário através de frota própria para cargas
                    líquidas ou sólidas e equipe especializada. O serviço é suportado pelo
                    sistema de gestão da qualidade e ambiental certificados em conformidade
                    com as normas ISSO 9001:2008 e ISO14001:2004 .
                </p>
            </div>

        </div>

        <div class="col-md-6">

            <div class="wrapper">
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>

            </div>

        </div>

    </div>

    <hr>
    <br>

    <div class="container">
        <h2>Áreas de transporte</h2>
        <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter="*" class="current">Todos transportes</a></li>
                <li><a href="#" data-filter=".munck" >Caminhão Munck</a></li>
                <li><a href="#" data-filter=".vacuo" >Caminhão Vácuo e Super vácuo</a></li>
                <li><a href="#" data-filter=".poliguindaste" >Caminhão Poliguindaste</a></li>
                <li><a href="#" data-filter=".semi" >Caminhão Semi-reboque</a></li>

            </ul>
        </div>
    </div>

    <div class="portfolioContainer wow fadeInUp delay-04s">

        <div class=" Portfolio-box-caminhao munck" >
            <?= $this->Html->image("CAMINHÃO MUNCK.png"); ?>
            <h3>Transporte de cargas com sistema de elevação tipo Munck</h3>
            <p>Utilizado em coleta de resíduos de difícil acesso e além do transporte oferecemos o carregamento e descarregamento dos resíduos.</p>
        </div>

        <div class=" Portfolio-box-caminhao vacuo" >
            <?= $this->Html->image("CAMINHOES VÁCUO.png"); ?>
            <h3>Transporte de rejeitos industriais bombeáveis (Caminhão Vácuo)</h3>
            <p>Utilizado em serviços de succionamento e transporte de efluentes através de caminhões sugadores de médio porte de 7m³ e 15m³.</p>
        </div>

        <div class=" Portfolio-box-caminhao vacuo" >
            <?= $this->Html->image("CAMINHOES VÁCUOS2.png"); ?>
            <h3>Transporte de borras industriais viscosas (Caminhão Super vácuo)</h3>
            <p>Utilizado em serviços de succionamento e transporte de efluentes através de caminhões sugadores de alto ideal para borras muito pastosas 7m³ e 15m³.</p>
        </div>

        <div class=" Portfolio-box-caminhao poliguindaste" >
            <?= $this->Html->image("poliguindaste.png"); ?>
            <h3>Transporte de resíduos acondicionados em containers (Caminhão Poliguindaste)</h3>
            <p>Os containers ficam estacionados o mais próximo possível onde está sendo gerado o resíduo, tornando seu carregamento mais rápido e racional, evitando que o lixo seja jogado no chão.</p>
        </div>

        <div class=" Portfolio-box-caminhao semi" >
            <?= $this->Html->image("Semi-reboque Caçamba.png"); ?>
            <h3>Transporte de resíduos a granel (Semi-reboque Caçamba 30m³)</h3>
            <p>Transporte através de caçamba de 30m³ ideal para quantidade grande de resíduos a granel.</p>
        </div>

        <div class=" Portfolio-box-caminhao semi" >
            <?= $this->Html->image("Semi-reboque Inox Tanque.png"); ?>
            <h3>Transporte de efluentes (Semi-reboque Inox Tanque 30m³)</h3>
            <p>Ideal para efluentes com poucos partículas sólidas.</p>
        </div>

        <div class=" Portfolio-box-caminhao semi" >
            <?= $this->Html->image("CARRETA GRANELEIRO.png"); ?>
            <h3>Transporte de resíduos entamborados/big bags (Caminhão/ Carretas - carga seca)</h3>
            <p>Resíduos sólidos acondicionados em big bags e/ou tambores com caminhão graneleiro capacidade 40, 60 e 80 tambores 08, 14 e 22 big bags ideal para grandes volumes.</p>
        </div>





    </div>


</div>


<hr><br>

<div class="container">

    <div class="col-md-12">

        <h4 class="classic-title"><span>Outras Serviços Industriais</span></h4>

        <div class="row">

            <div class="col-md-6 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="fa fa-bars icon-medium"></i>
                </div>
                <div class="service-content">
                    <h4>
                        <?php echo $this->Html->link(__('Limpezas industriais'), array('action' => 'industrial-cleaning')); ?>
                    </h4>
                    <p>
                        Limpezas de equipamentos industriais: SAO, torres, vasos, tanques, permutadores, canaletas, sistemas de resfriamento, etc...
                        <?php echo $this->Html->link(__('Leia mais'), array('action' => 'industrial-cleaning')); ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="fa fa-eye icon-medium"></i>
                </div>
                <div class="service-content">
                    <h4>
                        <?php echo $this->Html->link(__('Gerenciamento de resíduos'), array('action' => 'waste-management')); ?>
                    </h4>
                    <p>
                        A QUALITEX tem atuando expressivamente no segmento de gerencimaneto de resíduos...
                        <?php echo $this->Html->link(__('Leia mais'), array('action' => 'waste-management')); ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="fa fa-shield icon-medium"></i>
                </div>
                <div class="service-content">
                    <h4>
                        <?php echo $this->Html->link(__('Limpeza e preservação predial e de áreas verdes'), array('action' => 'cleaning-and-predial-and-green-area-conservation')); ?>
                    </h4>
                    <p>
                        Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc...
                        <?php echo $this->Html->link(__('Leia mais'), array('action' => 'cleaning-and-predial-and-green-area-conservation')); ?>
                    </p>
                </div>
            </div>

            <div class="col-md-6 service-box service-icon-left-more">
                <div class="service-icon">
                    <i class="fa fa-asterisk icon-medium"></i>
                </div>
                <div class="service-content">
                    <h4>
                        <?php echo $this->Html->link(__('Tratamento de efluentes'), array('action' => 'wastewater-treatment')); ?>
                    </h4>
                    <p>
                        A QUALITEX possui uma Estação de tratamento de efluentes sanitários e industriais compatíveis para tratamento pelo sistema biotecnológico instalado...
                        <?php echo $this->Html->link(__('Leia mais'), array('action' => 'wastewater-treatment')); ?>
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>

</section>


<style media="screen">

.wrapper .column:nth-child(1) .inner {
    background-image: url('..//webroot/img/1.png');
}
.wrapper .column:nth-child(2) .inner {
    background-image: url('..//webroot/img/1.png');
}
.wrapper .column:nth-child(3) .inner {
    background-image: url('https://igcdn-photos-g-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11008257_1569363026647030_933015336_n.jpg');
}
.wrapper .column:nth-child(4) .inner {
    background-image: url('https://igcdn-photos-e-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11056045_436886419818172_768672462_n.jpg');
}
.wrapper .column:nth-child(5) .inner {
    background-image: url('https://igcdn-photos-g-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11049260_1374759412847590_258656935_n.jpg');
}
.wrapper .column:nth-child(6) .inner {
    background-image: url('https://igcdn-photos-d-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11005276_1414641038838035_1026684390_n.jpg');
}
.wrapper .column:nth-child(7) .inner {
    background-image: url('https://igcdn-photos-a-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11032879_730451393737672_1900382729_n.jpg');
}
.wrapper .column:nth-child(8) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11008309_1069768239717639_19410808_n.jpg');
}
.wrapper .column:nth-child(9) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/10919595_795737697170495_727510522_n.jpg');
}
.wrapper .column:nth-child(10) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11005073_763217610443223_1974563188_n.jpg');
}
.wrapper .column:nth-child(11) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/10903752_533893980082103_132962602_n.jpg');
}
.wrapper .column:nth-child(12) .inner {
    background-image: url('https://igcdn-photos-f-a.akamaihd.net/hphotos-ak-xap1/t51.2885-15/10483464_355418301328333_1012884493_n.jpg');
}
.wrapper .column:nth-child(13) .inner {
    background-image: url('https://igcdn-photos-d-a.akamaihd.net/hphotos-ak-xap1/t51.2885-15/10483455_592335754230795_537719826_n.jpg');
}
</style>
