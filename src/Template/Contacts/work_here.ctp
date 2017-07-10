<?php ?>

<?= $this->Html->script('bootstrap-filestyle.js') ?>
<?= $this->Html->script('bootstrap-filestyle.min.js') ?>

<section class="content">

    <div class="container">

        <br>

        <div class="col-md-6">

        </div>

        <div class="col-md-6">

            <div>

                <?php $x = 0; ?>
                <?= $this->Form->create($x, ['type'=>'file','multiple'=>'multiple']) ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('name', ['required', 'label' => 'Nome: *', 'type' => 'text']);
                    echo $this->Form->input('email', ['required', 'label'=>'Email: *', 'type' => 'text']);
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('city', ['required', 'label'=>'Cidade: *', 'type' => 'text']);
                            ?>
                        </div>
                        <div class="col-md-6">

                            <?php
                            echo $this->Form->input('state', ['class' => 'div-select','label'=>'Estado: *','options' => ['AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá'
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
                            echo $this->Form->input('phone', ['required', 'label' => 'Telefone: *', 'type' => 'text']);
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->input('area', ['id'=>'area','class' => 'div-select','required', 'label' => 'Area de atuação: *', 'options' => 
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
                            echo $this->Form->input('vacancy', ['id'=>'vacancy','class' => 'div-select','required', 'label' => 'Vagas da area de atuação: *', 'options' => 
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
                            echo $this->Form->input('pcd', ['class' => 'div-select','required', 'label' => 'PCD? *', 'options' => 
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

                <?= $this->Form->button(__('Enviar'), ['class' => 'contact_btn']) ?>

                <?= $this->Form->end() ?>

            </div>

        </div>

</section>


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
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help