<div class="box-body">

	<h2>Pedido recebido via site qualitex:</h2>

	<hr>

	<h3>Dados do cliente:</h3>

    <p><b>Nome ou Razão social: </b><?= h($request['name']) ?></p> 
    <p><b>Tipo de cliente: </b><?= h($request['type_client']) ?></p> 
    <p><b>CGC: </b><?= h($request['cgc']) ?></p> 
    <p><b>Nome do responsável: </b><?= h($request['responsible']) ?></p>
    <p><b>Email: </b><?= h($request['email']) ?></p>
    <p><b>Telefone Fixo: </b><?= h($request['landline']) ?></p>
    <p><b>Telefone Celular: </b><?= h($request['mobile_phone']) ?></p>
	<p><b>Logradouro: </b><?= h($request['public_place']) ?></p>   
	<p><b>Número: </b><?= h($request['number']) ?></p>   
	<p><b>Bairro: </b><?= h($request['district']) ?></p>   
	<p><b>Cidade: </b><?= h($request['city']) ?></p>   
	<p><b>Estado: </b><?= h($request['state']) ?></p>   
	<p><b>CEP: </b><?= h($request['cep']) ?></p>   
	<p><b>Ponto de referência: </b><?= h($request['reference_point']) ?></p>   

	<hr>

	<h3>Dados do serviço:</h3>

	<p><b>O que fazer?</b></p>
	<p><?= h($request['do']) ?></p>   
	<p><b>Qual o local?</b></p>
	<p><?= h($request['local']) ?></p> 
	<p><b>Quando/Frequência?</b></p>
	<p><?= h($request['period_frequency']) ?></p> 
	<p><b>Quantidade?</b></p>
	<p><?= h($request['quantity']) ?></p> 
	<p><b>Objetivo?</b></p>
	<p><?= h($request['objective']) ?></p> 
	<p><b>Algum objetivo legal?</b></p>
	<p><?= h($request['objective_legal']) ?></p> 
	<p><b>Mais alguma consideração?</b></p>
	<p><?= h($request['consideration']) ?></p>

</div>
