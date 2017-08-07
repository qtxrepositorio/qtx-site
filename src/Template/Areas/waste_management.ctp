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
                <h4 class="classic-title"><span>Gerenciamento de resíduos</span></h4>
                <p>
                    <li>
                        Remoção de resíduos e borras em equipamentos, tais como: SAO, torres, vasos, tanques, permutadores, canaletas, sistemas de resfriamento, etc.
                        Recolhimento de resíduos com caminhão vácuo (sugador) e caminhão super-vácuo (para borras viscosas)
                    </li>
                    <li>
                        Remoção de solo contaminado e acondicionamento para transporte;
                    </li>
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
