<?= $this->Html->css('css-old/animate.css') ?>
<?= $this->Html->css('css-old/bootstrap.css') ?>
<?= $this->Html->css('css-old/estilo.css') ?>
<?= $this->Html->css('css-old/style.css') ?>
<?= $this->Html->css('css-old/responsive.css') ?>
<?= $this->Html->css('grid.css') ?>

<section class="content">

    <div class="container">

        <br><br>

        <div class="col-md-6">

            <h4 class="classic-title"><span>SAC - Sistema de Atendimento ao Consumidor</span></h4>
                <br>
                <h4 align="center">
                    Canal exclusivo para manisfestação de clientes.
                </h4>
                <br>
                <p align="justify">
                    <b>Currículos profissionais, apresentações de empresas e outros contatos não são tratados aqui.</b>
                </p>
                <br>
                <p align="justify">
                    Agradecemos por quaisquer registros de sugestões, elogios, consultas ou reclamações, a fim de buscarmos atendê-los em suas necessidades e expectativas.
                </p>
                <p align="justify">
                    Ressaltamos que além do respeito ao <a href="https://www.planalto.gov.br/ccivil_03/Leis/L8078.htm" target="_blank">
                    <u>Código de defesa do consumidor</u></a>, a QUALITEX
                    dedica-se a atender os seus Clientes buscando satisfazer todas as suas necessidades e
                    expectativas, para tal, norteada pelos sistema integrado de gestão da qualidade e ambiental
                    certificados em conformidade com as normas internacionais
                    <a download href="../documentos_institucionais/Certificações da Qualidade/Certificado -ISO-9001-2008.pdf"></i><u>ISO 9001</u></a>
                    e <a download href="../documentos_institucionais/Certificações da Qualidade/Certificado-ISO-14001-2004.pdf"><u>ISO 14001</u>.</a>
                </p>
        </div>

        <div class="col-md-6">

            <div>

                <?php $x = 0; ?>
                <?= $this->Form->create($x) ?>
                <fieldset>
                    <?php

                        echo $this->Form->input('name', ['class'=>'form-control input-text', 'required', 'label' => 'Nome: *', 'type' => 'text']);

                        echo $this->Form->input('email', ['class'=>'form-control input-text', 'required', 'label'=>'Email: *', 'type' => 'text']);
                    ?>
                    <div class="col-md-6">
                        <?php

                            echo $this->Form->input('phone', ['class'=>'form-control input-text', 'required', 'label' => 'Telefone: *', 'type' => 'text']);
                        ?>
                    </div>
                    <?php
                        echo $this->Form->input('considerations', ['class'=>'form-control input-text', 'required', 'label' => 'Sinta-se á vontade, informe-nos suas considerações: *', 'type' => 'textarea']);

                    ?>
                </fieldset>

                <div class="" align="center">
                    <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success']) ?>
                </div>

                <?= $this->Form->end() ?>

                <br><br><br>

            </div>

        </div>

</section>

<hr>

<div class="container">

    <h2>Outras formas de contato</h2><br>

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
