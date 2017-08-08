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

            <h4 class="classic-title"><span>Fale com a Ouvidoria</span></h4>

            <h4 align="center">Canal exclusivo para manisfestação de clientes.</h4>

            <div align="justify" class="">

                <p>
                    <b>Currículos profissionais, apresentações de empresas e outros contatos não são tratados aqui.</b>
                </p>
                <br>
                <p>
                    Nossa Ouvidoria busca garantir que os assuntos tratados pelo SAC possam ser reexaminados para que sejam plenamente resolvidos ou esclarecidos.
                </p>
                <br>
                <p>
                    Recepcionamos em nossa Ouvidoria quaisquer manifestações e denúncias relacionadas à integridade, imparcialidade, confidencialidade e previsibilidade em nossos relacionamentos públicos e privados.
                </p>
                <br><br>
                <h8>A QUALITEX prestigia a legislação aplicável ao combate à corrupção (link para o Site do CRQ para a Declaração de adesão) - <a href="http://www.crq17.org.br/joomla/parceria/termos/declaracao_de_adesao_do_crq17_anticorrupcao.pdf" target="_blank">Clique para mais detalhes</a></h8>
                <br><br>
                <p>
                    <i><b>
                        “A corrupção é um mal que afeta a todos. Governos, cidadãos e empresas
                        sofrem diariamente os seus efeitos. Além de desviar recursos que de outra
                        forma estariam disponíveis para melhor execução de políticas públicas, a
                        corrupção é também responsável por distorções que impactam diretamente a
                        atividade empresarial, em razão da concorrência desleal, preços superfaturados
                        ou oportunidades restritas de negócio. Combatê-la, portanto, depende do esforço
                        conjunto e contínuo de todos, inclusive das empresas, que têm um papel extremamente
                        importante nesse contexto.”
                    </b></i>
                </p>

            </div>

        </div>

        <div class="col-md-6">

            <div>

                <?php $x = 0; ?>
                <?= $this->Form->create($x) ?>
                <fieldset>
                    <?php

                        echo $this->Form->input('name', ['class'=>'form-control input-text', 'label' => 'Nome:', 'type' => 'text']);

                        echo $this->Form->input('email', ['class'=>'form-control input-text', 'label'=>'Email:', 'type' => 'text']);
                    ?>
                    <div class="col-md-6">
                        <?php

                            echo $this->Form->input('phone', ['class'=>'form-control input-text', 'label' => 'Telefone:', 'type' => 'text']);
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

            </div>

        </div>
    </div>

    <br><br><br>


</section>

<br>
<hr>

<div class="container">

    <h2>Outras formas de contato</h2>

    <br>

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

        </div>
    </div>
</div>
