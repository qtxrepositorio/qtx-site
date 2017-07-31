<?php ?>
<section class="content">

    <div class="container">

        <br><br>

        <h4>Solicitar Proposta Comercial:</h4>
        <hr>

        <?php $x = 0; ?>
        <?= $this->Form->create($x, ['type'=>'file','multiple'=>'multiple']) ?>

        <div class="row">

            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-6">
                        <?php

                        echo $this->Form->input('type_client', ['required', 'class'=>'form-control input-text', 'label' => 'Tipo de cliente: *',
                        'options' => [
                            'Física'=>'Física',
                            'Jurídica'=>'Jurídica'
                        ]
                    ]);

                    ?>
                </div>
                <div class="col-md-6">
                    <?php

                    echo $this->Form->input('cgc', ['required', 'class'=>'form-control input-text', 'label' => 'CGC: *', 'type' => 'text', 'placeholder'=>'Documento para identificação.']);

                    ?>
                </div>

            </div>

            <?php

            echo $this->Form->input('name', ['required', 'class'=>'form-control input-text', 'label' => 'Nome ou Razão social: *', 'type' => 'text']);

            echo $this->Form->input('responsible', ['required', 'class'=>'form-control input-text', 'label' => 'Nome do responsável: *', 'type' => 'text']);

            echo $this->Form->input('email', ['required', 'class'=>'form-control input-text', 'label' => 'Email: *', 'type' => 'text']);

            ?>

            <div class="row">

                <div class="col-md-6">
                    <?php

                    echo $this->Form->input('landline', ['required', 'class'=>'form-control input-text', 'label' => 'Telefone Fixo: *',
                    'type' => 'text']);

                    ?>
                </div>
                <div class="col-md-6">
                    <?php

                    echo $this->Form->input('mobile_phone', ['required', 'class'=>'form-control input-text', 'label' => 'Telefone Celular: *',
                    'type' => 'text']);

                    ?>
                </div>

            </div>

            <?php
            echo $this->Form->input('public_place', ['required', 'class'=>'form-control input-text', 'label' => 'Logradouro: *', 'type' => 'text']);
            ?>

            <div class="row">

                <div class="col-md-3">
                    <?php
                    echo $this->Form->input('number', ['required', 'class'=>'form-control input-text', 'label' => 'Número: *', 'type' => 'text']);
                    ?>
                </div>
                <div class="col-md-9">
                    <?php
                    echo $this->Form->input('district', ['required', 'class'=>'form-control input-text', 'label' => 'Bairro: *', 'type' => 'text']);
                    ?>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <?php
                    echo $this->Form->input('city', ['required', 'class'=>'form-control input-text', 'label' => 'Cidade: *', 'type' => 'text']);
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->input('state', ['class'=>'form-control input-text', 'label'=>'Estado: *',
                    'options' => [
                        'AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas'
                        ,'BA'=>'Bahia','CE'=>'Ceará','DF'=>'Destrito Federal'
                        ,'ES'=>'Espirito Santo','GO'=>'Goiás','MA'=>'Maranhão'
                        ,'MT'=>'Mato Grosso','MS'=>'Mato Grosso do sul'
                        ,'MG'=>'Minas Gerais','PA'=>'Pará','PB'=>'Paraíba'
                        ,'PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí'
                        ,'RJ'=>'Rio de Janeiro','RN'=>'Rio Grande do Norte'
                        ,'RS'=>'Rio Grando do Sul','RO'=>'Rondônia','RR'=>'Roraima'
                        ,'SC'=>'Santa Catarina','SP'=>'São Paulo','SE'=>'Sergipe','TO'=>'Tocantins'
                    ]
                ]);
                ?>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <?php
                echo $this->Form->input('cep', ['required', 'class'=>'form-control input-text', 'label' => 'CEP: *', 'type' => 'text']);
                ?>
            </div>
            <div class="col-md-8">
                <?php
                echo $this->Form->input('reference_point', ['required', 'class'=>'form-control input-text', 'label' => 'Ponto de referência: *', 'type' => 'text']);
                ?>
            </div>

        </div>

    </div>

    <div class="col-md-6">

        <?php

        echo $this->Form->input('do', ['required', 'class'=>'form-control input-text','placeholder'=>'Nome do serviço.', 'label' => 'O que fazer? *', 'type' => 'text']);
        echo $this->Form->input('local', ['required', 'class'=>'form-control input-text','placeholder'=>'Informe os possíveis locais.', 'label' => 'Qual o local? *', 'type' => 'text']);
        echo $this->Form->input('period_frequency', ['required', 'class'=>'form-control input-text','placeholder'=>'Perído e frequência da realização.', 'label' => 'Quando/Frequência? *', 'type' => 'text']);
        echo $this->Form->input('quantity', ['required', 'class'=>'form-control input-text','placeholder'=>'Quantidade prevista dos itens do serviço.', 'label' => 'Quantidade? *', 'type' => 'text']);
        echo $this->Form->input('objective', ['required', 'class'=>'form-control input-text','placeholder'=>'O objetivo do serviço.', 'label' => 'Objetivo? *', 'type' => 'text']);
        echo $this->Form->input('objective_legal', ['required', 'class'=>'form-control input-text','placeholder'=>'Existe algum requisito legal?','label' => 'Algum objetivo legal? *', 'type' => 'text']);
        echo $this->Form->input('consideration', ['label' => 'Mais alguma consideração?', 'class'=>'form-control input-text-area', 'type' => 'textarea']);

        ?>

        <br>
        <?php
        echo $this->Form->input('file', ['class'=>'', 'label' => 'Algum anexo para nos enviar?', 'type' => 'file']);
        ?>

    </div>

</div>

<br><br><br>

<div class="row">

    <div align="center">
        <?= $this->Form->button(__('Solicitar proposta comercial'), ['class' => 'btn btn-success']) ?>
    </div>

</div>

<br><br><br><br>


<?= $this->Form->end() ?>
</div>

</section>



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
