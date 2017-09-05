<?= $this->Html->css('css-old/animate.css') ?>
<?= $this->Html->css('css-old/bootstrap.css') ?>
<?= $this->Html->css('css-old/estilo.css') ?>
<?= $this->Html->css('css-old/style.css') ?>
<?= $this->Html->css('css-old/responsive.css') ?>
<?= $this->Html->css('grid.css') ?>

<section class="content">

    <br><br>

    <div class="container">

        <div class="col-md-6">

            <div class="tab-pane fade in active" id="tab-4">
                <h4 class="classic-title"><span>Tratamento de efluentes</span></h4>
                <p>Para melhor atender seus Clientes, a QUALITEX possui uma Estação de tratamento de efluentes sanitários e industriais compatíveis para tratamento pelo sistema biotecnológico instalado. O serviço abrange o recolhimento do efluente no local da sua geração por caminhões tipo vácuo (Sugadores) da frota própria. O tratamento adequado de efluentes é uma atividade muito importante de gestão ambiental da QUALITEX, pois além da finalidade de suportar empresas no atendimento de exigências legais, também ajuda a prevenir a contaminação de águas superficiais e subterrâneas. Com a sua Bioestação de tratamento de efluentes com tecnologia 100% nacional e consumo zero de energia elétrica, a QUALITEX atua colaborativamente para que os objetivos da Política Nacional de Resíduos sejam alcançados.</p>

                <br>
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
                        <i class="fa fa-truck icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Transpote de resíduos'), array('action' => 'waste-transportation')); ?>
                        </h4>
                        <p>
                            O transporte de cargas perigosas e não perigosas é uma atividade que requer muita atenção por parte dos gestores ...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'waste-transportation')); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-shield icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Limpeza e preservação predial e de áreas verdes'), array('action' => 'cleaning_predial_green_conservation')); ?>
                        </h4>
                        <p>
                            Limpeza e conservação de prédios industriais, administrativos, cinturão verde, jardins, etc...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'cleaning_predial_green_conservation')); ?>
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

            </div>
        </div>


    </div>

</section>


<style media="screen">

.wrapper .column:nth-child(1) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/12.jpg');
}
.wrapper .column:nth-child(2) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/1.jpg');
}
.wrapper .column:nth-child(3) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/10.jpg');
}
.wrapper .column:nth-child(4) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/6.jpg');
}
.wrapper .column:nth-child(5) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/8.png');
}
.wrapper .column:nth-child(6) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/9.jpg');
}
.wrapper .column:nth-child(7) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/3.jpg');
}
.wrapper .column:nth-child(8) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/11.jpg');
}
.wrapper .column:nth-child(9) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/7.jpg');
}
.wrapper .column:nth-child(10) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/5.jpg');
}
.wrapper .column:nth-child(11) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/2.jpg');
}
.wrapper .column:nth-child(12) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/4.jpg');
}
.wrapper .column:nth-child(13) .inner {
    background-image: url('..//webroot/img/grids/wastewater-treatment/4.jpg');
}
</style>
