<?php ?>

<?= $this->Html->script('bootstrap-filestyle.js') ?>
<?= $this->Html->script('bootstrap-filestyle.min.js') ?>

<section class="content">

    <div class="container">

        <br><br><br>

        <div class="alert alert-danger" role="alert">
            <strong>Atenção! Formulário melhor utilizado</strong><a href="https://www.google.com.br/chrome/browser/desktop" class="alert-link"> no navegador Google Chrome</a>
        </div>

        <div class="col-md-6">
            <div class="jumbotron">
                <p align="justify">
                    A Nossa Cultura é trabalhar sempre em cooperação com a Nossa Gente. Acreditamos que investir nos nossos colaboradores é trazer ainda mais qualidade aos nosso negócios e aos nossos produtos. Por isso, estamos sempre em busca de novos talentos dispostos a dividir esse sonho grande com a gente.
                </p>
            </div>
        </div>

        <div class="col-md-6">

            <div>

                <?php $x = 0; ?>
                <?= $this->Form->create($x, ['type'=>'file','multiple'=>'multiple']) ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('name', ['class'=>'form-control input-text', 'required', 'label' => 'Nome: *', 'type' => 'text']);
                    echo $this->Form->input('email', ['class'=>'form-control input-text', 'required', 'label'=>'Email: *', 'type' => 'text']);
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('city', ['class'=>'form-control input-text', 'required', 'label'=>'Cidade: *', 'type' => 'text']);
                            ?>
                        </div>
                        <div class="col-md-6">

                            <?php
                            echo $this->Form->input('state', ['class'=>'form-control input-text','label'=>'Estado: *','options' => ['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá'
                            ,'AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará'
                            ,'DF'=>'Destrito Federal','ES'=>'Espirito Santo','GO'=>'Goiás'
                            ,'MA'=>'Maranhão','MT'=>'Mato Grosso','MS'=>'Mato Grosso do sul'
                            ,'MG'=>'Minas Gerais','PA'=>'Pará','PB'=>'Paraíba'
                            ,'PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí'
                            ,'RJ'=>'Rio de Janeiro','RN'=>'Rio Grande do Norte','RS'=>'Rio Grando do Sul'
                            ,'RO'=>'Rondônia','RR'=>'Roraima','SC'=>'Santa Catarina'
                            ,'SP'=>'São Paulo','SE'=>'Sergipe','TO'=>'Tocantins']]);
                            ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            echo $this->Form->input('phone', ['class'=>'form-control input-text', 'required', 'label' => 'Telefone: *', 'type' => 'text']);
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('area', ['id'=>'area','class'=>'form-control input-text','required', 'label' => 'Area de atuação: *', 'options' =>
                            [
                                'Administrativo'=>'Administrativo',
                                'Operacional'=>'Operacional',
                                'Laboratório'=>'Laboratório'
                            ]
                        ]);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('vacancy', ['id'=>'vacancy','class'=>'form-control input-text','required', 'label' => 'Vagas da area de atuação: *', 'options' =>
                        [
                            'Comercial'=>'Comercial',
                            'Financeiro'=>'Financeiro',
                            'Recursos Humanos'=>'Recursos Humanos',
                            'Tecnologia da informação'=>'Tecnologia da informação'
                        ]
                    ]);
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php
                    echo $this->Form->input('pcd', ['class'=>'form-control input-text','required', 'label' => 'PCD? *', 'options' =>
                    [
                        'Não'=>'Não',
                        'Sim'=>'Sim'
                    ]
                ]);
                ?>
            </div>
            <div class="col-md-6">
                <br>

                <?php
                echo $this->Form->input('file', ['required', 'label' => 'Currículo: *', 'type' => 'file']);
                ?>

            </div>
        </div>

    </fieldset>

    <div class="" align="center">
        <br><br>
        <?= $this->Form->button(__('Concluir cadastro'), ['class' => 'btn btn-success']) ?>
    </div>

    <?= $this->Form->end() ?>

    <br><br><br>

</div>

</div>

</section>

<?= $this->Html->css('css-old/animate.css') ?>
<?= $this->Html->css('css-old/bootstrap.css') ?>
<?= $this->Html->css('css-old/estilo.css') ?>
<?= $this->Html->css('css-old/style.css') ?>
<?= $this->Html->css('css-old/responsive.css') ?>
<?= $this->Html->css('grid.css') ?>

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


<script type="text/javascript">
var select = document.getElementById('area');
select.addEventListener('change', function () {
    var select2 = document.getElementById("vacancy");
    if (select.value == "Administrativo") {
        document.getElementById("vacancy").innerHTML =
        '<option value="Comercial">Comercial</option>'
        + '<option value="Financeiro">Financeiro</option>'
        + '<option value="Recursos Humanos">Recursos Humanos</option>'
        + '<option value="Tecnologia da informação">Tecnologia da informação</option>'
    } else if (select.value == "Operacional") {
        document.getElementById("vacancy").innerHTML =
        +'<option value="Aux Mecanico">Aux Mecanico</option>'
        + '<option value="Aux. Operacional">Aux. Operacional</option>'
        + '<option value="Aux. Segurança do Trabalho">Aux. Segurança do Trabalho</option>'
        + '<option value="Aux. Serviços Gerais">Aux. Serviços Gerais</option>'
        + '<option value="Eletricista">Eletricista</option>'
        + '<option value="Empilhador">Empilhador</option>'
        + '<option value="Gerente Operacional">Gerente Operacional</option>'
        + '<option value="Mec De Manutenção">Mec De Manutenção</option>'
        + '<option value="Mecânico">Mecânico</option>'
        + '<option value="Motorista Carreteiro">Motorista Carreteiro</option>'
        + '<option value="Motorista de Caminhão">Motorista de Caminhão</option>'
        + '<option value="Ope. Pá Carregadeira">Ope. Pá Carregadeira</option>'
        + '<option value="Operador Ambiental">Operador Ambiental</option>'
        + '<option value="Operador de Empilhadeira">Operador de Empilhadeira</option>'
        + '<option value="Operador de Máquinas">Operador de Máquinas</option>'
        + '<option value="Operador Industrial">Operador Industrial</option>'
        + '<option value="Pedreiro">Pedreiro</option>'
        + '<option value="Supervisor">Supervisor</option>'
        + '<option value="Tec De Manutenção">Tec De Manutenção</option>'
        + '<option value="Tec Meio Ambiente">Tec Meio Ambiente</option>'
        + '<option value="Tec. Segurança do Trabalho">Tec. Segurança do Trabalho</option>'
    } else if (select.value == "Laboratório") {
        document.getElementById("vacancy").innerHTML =
        '<option value="Técnico em Química">Técnico em Química</option>'
        + '<option value="Químico">Químico</option>'
        + '<option value="Aux. de Laboratório">Aux. de Laboratório</option>'
    }
});
</script>

<style type="text/css">
.div-select {
    width:100%;
    margin:0 0 10px;
    padding: 10px 8px;
    text-transform:none;
    font-family: 'Roboto', sans-serif;
    font-weight:400;
    line-height:20px;
    font-size: 12px;
    color: #333;
    font-style:normal;
    border-radius: 0;
    background: none;
    border: 2px solid #242424;
    box-shadow: none;
    transition: border-color 0.3s ease-in-out;
    -webkit-transition: border-color 0.3s ease-in-out;
}
</style>
