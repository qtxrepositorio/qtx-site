<section class="content">

    <div class="container">

        <br><br>

        <div class="col-md-6">
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
