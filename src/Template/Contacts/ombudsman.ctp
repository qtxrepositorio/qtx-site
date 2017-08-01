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

                <?= $this->Form->button(__('Enviar'), ['class' => 'contact_btn']) ?>

                <?= $this->Form->end() ?>

            </div>

        </div>
    </div>

    <br><br><br>


</section>
