<section class="content">

    <div class="container">

        <br><br>

        <div class="col-md-6">

        </div>

        <div class="col-md-6">

            <div>
                    
                <?php $x = 0; ?>
                <?= $this->Form->create($x) ?>
                <fieldset>
                    <?php

                        echo $this->Form->input('name', ['label' => 'Nome:', 'type' => 'text']);

                        echo $this->Form->input('email', ['label'=>'Email:', 'type' => 'text']);
                    ?>
                    <div class="col-md-6">
                        <?php

                            echo $this->Form->input('phone', ['label' => 'Telefone:', 'type' => 'text']);
                        ?>
                    </div>
                    <?php
                        echo $this->Form->input('considerations', ['required', 'label' => 'Sinta-se á vontade, informe-nos suas considerações: *', 'type' => 'textarea']); 

                    ?>
                </fieldset>

                <?= $this->Form->button(__('Enviar'), ['class' => 'contact_btn']) ?>

                <?= $this->Form->end() ?>

            </div>

        </div>

</section>

