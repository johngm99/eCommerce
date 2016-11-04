<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap 101 Template</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>
 <script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Login | Cadastre-se <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Meus Pedidos</a></li>
					
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Produtos <span class="caret"></span></a>
						<ul class="dropdown-menu">		
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul></li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nome do Produto">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Minha Conta</a></li>
					<li><a href="#">Quem Somos</a></li>
					<li><a href="#"><?php echo utf8_encode("Políticas do Site");?></a></li>
					<li><a href="#">Atendimento</a></li>
					<li><a href="#">SAC</a></li>
					
					<!--  
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul></li>
						-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	
    <!-- Page Content -->
    
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12">
    			
    			
    			<?php echo utf8_encode("<h2 class='text-center'>Políticas do Site</h2>

<p>Caro cliente, aqui você encontrará informações importantes sobre os seus direitos e obrigações assim como limitações e exclusões que podem lhe ser úteis.<br>
Por favor, leia todas as informações com atenção.</p>


<h3>1) Pedido</h3>

<p>Os pedidos somente serão aceitos por meio da página oficial www.kabum.com.br, mediante a emissão de uma Confirmação do Pedido, enviada através do e-mail de cadastro mencionado pelo cliente.<br>
O cliente deve verificar a Confirmação do Pedido e informar à KaBuM! imediatamente sobre qualquer eventual erro para averiguações.</p>


<h3>2) Oferta, Preço e Condições de Pagamento</h3>

<p>As ofertas somente serão válidas quando disponibilizadas por escrito no site da KaBuM! durante o prazo indicado ou, caso não seja mencionado o prazo, enquanto detivermos a mercadoria disponível em estoque.<br><br>

O preço do produto, prazos e condições de pagamento são estabelecidos no ato da contratação.<br><br>

O pedido será postado após a confirmação do pagamento no sistema da KaBuM! ou nas condições estabelecidas na própria Confirmação do Pedido.<br><br>

A KaBuM! reserva-se no direito de requerer prévia autorização das administradoras de cartão de crédito ou para compensação do boletos bancários para concluir a venda e enviar o produto a entrega, não se responsabilizando por eventuais fraudes ocorridas.</p>

<h3>3) Entrega</h3>

<p>A KaBuM! não garante a entrega nos casos de insucessos provocados por: cliente ausente, dados cadastrais incorretos, recusa pelo cliente ou funcionários de endereços residenciais e comerciais, mudança de endereço, endereços comerciais fechados, área de risco e desastres naturais (força maior). A entrega será realizada dentro do prazo e no local indicado na Confirmação do Pedido.<br><br>

O cliente será responsável pelas perdas e danos causados pela recusa injustificada da entrega, assim considerada aquela não prevista na legislação aplicável.</p>

<h3>3.1). Formas de postagem</h3>

<p>O cliente poderá solicitar, no momento da formalização do pedido, o envio da mercadoria por meio dos Correios ou Transportadora, recordando que cada localidade detém de um prazo específico para entrega.<br><br>

Algumas mercadorias em razão da dimensão e do peso estão sujeitas a alteração da forma de postagem (por exemplo: TVs, Instrumentos Musicais, etc.)<br>

Em caso de grandes eventos como Black Friday e Cyber Monday, os prazos de entrega poderão sofrer alterações devido a grande demanda de postagens.</p>


<h3>4). Aceitação e devolução</h3>

<p>Toda solicitação de troca ou devolução deve ser comunicada a Central de Atendimento da KaBuM! para instruções detalhadas sobre o processo de devolução. Serviço de Atendimento ao Cliente (SAC Online), pelo telefone (19) 2114-4444 ou através do e-mail: e-mail: atendimento@kabum.com.br.</p> 

<h3>4.1). Condições de Devolução</h3>

<p>A mercadoria deverá retornar nas mesmas condições em que foi entregue, ou seja: lacres intactos do fabricante e KaBuM!, na embalagem original e com todos acessórios (cabos, manuais, cds e etc.) que acompanham o produto. É importante ressaltar que a caixa do produto também deve estar em perfeitas condições, isto é, a embalagem não pode ter sido danificada ou violada. Esclarece-se que o produto NÃO PODE TER SIDO USADO.<br>
O protocolo de retorno de mercadoria e o remetente deverão estar facilmente identificados na embalagem de postagem.</p>

<h3>4.1a). Autorização de Postagem</h3>

<p>A autorização de postagem é enviada ao e-mail de cadastro do cliente e tem validade de 7 dias, prazo este não renovável. Caso o produto não seja enviado neste prazo, deverá ser realizado novo contato com a KaBuM! para ser reavaliado a emissão de uma nova autorização.<br><br>

A KaBuM! reserva-se no direito de recusar o recebimento de produtos postados fora do prazo de garantia, conforme determinado na nota fiscal de compra.</p> 

<h3>4.1b). Despesas de envio</h3>

<p>Todos os custos de transporte são de responsabilidade do cliente, exceto:<br><br>

- Autorizações de postagem enviada pela KaBuM!<br>
- Produto com defeito informado dentro do prazo de sete dias do recebimento, sendo enviado via PAC (encomenda normal por Correios).<br><br>

Constatado defeito, troca ou qualquer repostagem a KaBuM! enviará o pedido por meio de PAC – encomenda normal , cujo prazo de entrega dependerá da localidade do endereço de entrega. Caso o cliente tenha urgência no reenvio poderá solicitar outra modalidade de postagem, arcando com os custos da postagem adicional.<br><br>

IMPORTANTE: A KaBuM! não restitui despesas com embalagens de postagem e deslocamento do cliente.</p>

<h3>4.1.2). Procedimentos de devolução para pessoa jurídica</h3>

<p>Em caso de cliente pessoa jurídica (CNPJ), a empresa deverá emitir uma nota fiscal de devolução (desistência da compra - prazo de 7 dias ou produto em desacordo com o pedido) ou nota de remessa para conserto (produto com defeito) com os mesmos dados da nota fiscal de compra (modelo do produto, alíquotas de impostos, etc.) que foi enviada por nossa empresa juntamente com o pedido de compra. Caso esta pessoa jurídica não seja emissora de nota fiscal (como escolas, instituições, etc.), deverá enviar umas das vias da nota fiscal de compra juntamente com uma declaração informando os produtos que estão sendo devolvidos e o motivo da devolução.</p>

<h3>4.2). Avarias</h3>

<p>O Cliente deverá ficar atento no ato da entrega, recusando imediatamente o pedido cuja a embalagem estiver sido violada ou avariada no transporte.<br>
Na impossibilidade de recusa deverá ser realizado o contato no prazo máximo de 48 horas. Não sendo aceitas as solicitações de avarias fora do prazo.<br>
A troca por outro produto igual ao descrito na nota fiscal, será efetivada somente após o recebimento e análise das condições do produto devolvido. Constatada qualquer divergência como ausência de avaria, indícios de mau uso ou ausência de manual/acessórios, a KaBuM! se reserva no direito de não realizar a troca e reenviar o produto ao cliente sem prévia autorização.</p> 

<h3>4.3). Produto em desacordo com o pedido</h3>

<p>Caso detecte no ato da entrega que o produto encomendado e o produto adquirido são diferentes, deverá recusar de imediato a entrega. Ao aceitar a encomenda sem observar a descrição da Nota Fiscal, o prazo para entrar em contato com nosso SAC será de 48 horas. Solicitações fora deste prazo não serão aceitas, pois será considerado aceito pelo cliente.<br>
Constatado ausência de divergência entre o produto adquirido e o produto entregue, indícios de mau uso ou ausência de manual/acessórios, a KaBuM! se reserva no direito de não realizar a troca e reenviar o produto ao cliente sem prévia autorização.</p> 

<h3>4.4). Arrependimento</h3>

<p>Em casos de arrependimento, o Cliente poderá solicitar a devolução do produto e obter a consequente restituição do valor pago ou a inserção de créditos para nova compra desde que, os produtos sejam devolvidos em sua embalagem original, com todos os selos/lacres intactos, não devendo apresentar qualquer indício de manipulação ou utilização, acompanhados da nota fiscal.<br>
Essa solicitação deverá ser feita em até 07 (sete) dias corridos após a data de recebimento da compra, nos moldes do artigo 49 do CDC, através do Serviço de Atendimento ao Cliente (SAC Online), pelo telefone (19) 2114-4444 ou através do atendimento@kabum.com.br<br>
O produto deverá ser devolvido sempre acompanhado de cópia da nota fiscal e preenchido o “Termo de Retorno de Mercadoria” enviado pela KaBuM!. A ausência destes documentos impedirá a rápida identificação da sua solicitação, gerando atrasos no processo de troca ou na restituição do valor pago.<br>
Ao ser exercido o direito de arrependimento, após a análise do produto em nosso Centro de Distribuição, o reembolso de valores poderá ser feito de duas maneiras, dependendo da forma de pagamento efetuada no momento da compra: <br><br>

1) Em compras pagas por meio de cartão de crédito, o respectivo estorno será solicitado de imediato a administradora do seu cartão, mas por ser um procedimento de inteira responsabilidade da administradora do cartão o estorno poderá ocorrer em até 2 (duas) faturas subsequentes.<br>

2) Em compras pagas por meio de boleto bancário, a restituição será creditada sempre na conta corrente de titularidade do cliente que pagou o boleto.<br><br>

Caso não seja respeitada a Política de Troca e Devolução da KaBuM!, e a legislação aplicável, os custos de devolução do produto correrão por conta do cliente.<br><br>

OBSERVAÇÃO: Não poderá ser exercido a troca ou devolução de produtos que estiverem impossibilitados de serem novamente comercializados, por exemplo: jogos, embalagens externas danificadas, itens faltantes, etc.</p>

<h3>5). Garantia</h3>

<p>É reservada a garantia contra defeito de fabricação de todos os produtos adquiridos na empresa durante o período de cobertura, salvo se os produtos possuírem assistência técnica da fabricante (item 5.1). Porém, o defeito deverá ser informado no prazo estabelecido na nota fiscal de compra, contados da data de recebimento, onde sua substituição poderá ocorrer em até 30 dias.<br>
A KaBuM! não se responsabiliza por danos causados por terceiros, por questões ou elementos fora do alcance, controle ou ingerência das partes; adequação do produto adquirido pelo cliente para um determinado fim, propósito ou uso escolhido pelo cliente.<br>
Todo produto encaminhado por conta de vício passará previamente por uma análise técnica para a devida verificação do defeito, pelo prazo de 30 dias, conforme previsto pelo artigo 18 do CDC. Caso seja constatado pelo laudo da assistência técnica que não há vício no produto, ou ainda que o vício tenha sido causado por mau uso por parte do Cliente, a KaBuM! fará o reenvio do mesmo produto ao endereço do cliente, isentando-se da obrigação de troca e de despesas de frete geradas por este reenvio.<br>
ATENÇÃO: é de inteira responsabilidade do cliente a execução prévia de cópias de segurança de quaisquer programas ou dados que julgue necessários para a reinstalação de software e arquivos do disco rígido ou outras mídias, se for o caso.</p> 

<h3>5.1) A Garantia não abrange</h3>

<p>Produtos não adquiridos no site da KaBuM!;<br>
Defeito por manuseio inadequado, má instalação;<br>
Custos de instalação;<br>
Custos de conserto do produto fixado pelas assistências técnicas;.<br>
Recuperação de programas, aplicativos, sistemas operacionais, ou qualquer outro software, uma vez que, a responsabilidade de fazer back-up é do cliente;<br>
Defeitos ocasionados por falhas ou erros durante ou após atualizações de firmware;<br>
Casos de mau funcionamento por falha na configuração de software ou drives;.<br>
Conserto ou reposição de peças por desgaste natural ou troca periódica durante o tempo de vida do produto; por ex: adaptadores de força, cabos elétricos, cabeçotes laser de aparelhos de CDs, acessórios, vidros de proteção, fusíveis internos, pilhas ou baterias internas ou externas, fitas, cartuchos e etc;<br>
Uso inadequado, imprudência ou negligência;<br>
Perda ou dano ocasionado por força maior ou caso fortuito;<br>
Carregadores de bateria, controles remotos, bem como quaisquer tipos de transformadores externos ou estabilizadores de voltagem e outros acessórios externos ao produto;<br>
Devolução de produtos pelo motivo de incompatibilidade entre componentes físicos (hardware), sistemas operacionais ou outros softwares, já que a escolha do produto adequado é de inteira responsabilidade do cliente. Lembrando que, as informações técnicas refletem nas especificações disponibilizadas pelos fabricantes e servem tão somente para auxiliar o cliente na decisão de compra.</p>


<h3>5.2) Perda de Garantia</h3>

<p>A KaBuM! cobre defeitos de fabricação no prazo estipulado na nota fiscal de compra, havendo perda total da garantia nas seguintes hipóteses: <br><br>


Retirada ou violação de selos de garantia ou identificação da KaBuM! e/ou fabricante;<br>
Violação, modificação, troca de componentes, ajustes conserto feito por pessoal não autorizado;<br>
Serviços solicitados e/ou executados diretamente pelo CLIENTE sem prévio consentimento da KaBuM! e/ou Fabricante;<br>
Manuseio incorreto, em desacordo com o manual ou indício de descuido.<br>
Uso de acessórios, componentes ou sistemas não originais ou não recomendados não aprovados pelo fabricante.<br>
Transporte inadequado adotado pelo cliente que expõe o produto a trepidações, umidade, quedas, calor ou excesso de peso sobre a peça ou embalagem.<br>
Danos físicos (amassados, arranhões, manuscritos, descaracterização, componentes queimados por descarga elétrica ou excesso de voltagem, danos decorrentes de exposição excessiva ao calor, fogo, umidade, placas ou processadores queimados, trincados, lascados, processadores e placas mãe com pinos e sockets tortos, etc).<br>
Danos causados por vírus.<br>
Qualquer outro defeito que não seja classificado como defeito de fabricação.</p>


<h3>5.3). Assistência Técnica do Fabricante.</h3>

<p>Nos casos que a KaBuM! indicar a assistência técnica autorizada para reparo/conserto, o cliente deverá acionar a mesma, garantindo assim um célere e eficaz atendimento, vez que esta empresa não detém de autorização de conserto para determinados produtos.<br>
A mercadoria deverá ser enviada para as assistências autorizadas com a nota fiscal de compra, na embalagem original, com todos acessórios (cabos, manuais, cds e etc.) que acompanham o produto.</p> 

<h3>6). Forma de Remessa</h3>

<p>A remessa somente será aceita nos termos do item “4.1.b.” para o seguinte endereço: <br><br>

KaBuM! – Autorização (Protocolo nº ....) <br>
Rua Santa Cruz, nº 787 – andar L 1 – Centro <br>
Limeira –SP <br>
Cep: 13480-041 <br><br><br>


Click Aqui e acesse nossa Política de Privacidade</p>");?>
    		</div>
    		<div class="col-sm-6">
    			
    		</div>
    	</div>
    </div>





    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
        	
        	<div class="row">
        		<div class="col-lg-3">
        			<h5><strong>Departamentos</strong></h5>
        			
        			<small>Computadores<br>
        			Hardware<br>
        			<?php echo utf8_encode("Periféricos<br>");?>
        			
        			</small>

        			<!-- <ul class="list-group">
					  <li class="">Cras justo odio</li>
					  <li class="list-group-item">Dapibus ac facilisis in</li>
					  <li class="list-group-item">Morbi leo risus</li>
					  <li class="list-group-item">Porta ac consectetur ac</li>
					  <li class="list-group-item">Vestibulum at eros</li>
					</ul>
					 -->
					 
        		</div>
        		
        		<div class="col-lg-3">
        			<h5><strong>Minha Conta</strong></h5>
        			
        			<small>Meus Pedidos<br>
					Direito de Arrependimento<br>
					Cadastrar / Remover Newsletter<br>
					
					</small>
        		</div>
        		
        		<div class="col-lg-3">
        			<h5><strong>Institucional</strong></h5>
        			
        			<small>Sobre o eCommerce<br>
					
					<?php echo utf8_encode("Políticas do site<br>
					Política de Privacidade<br>
					Prêmios");?>
					</small>
        		</div>
        		
        		<div class="col-lg-3">
        			<h5><strong>Atendimento</strong></h5>
        			
        			<?php echo utf8_encode("<small>Horário de atendimento: 09:00 às 19:00 de segunda à sexta-feira,
        			horário de Brasília (exceto feriados).<br><br>
					E-mail: atendimento@kabum.com.br Recepção de Fax: (19) 2114-4412</small>");?>
        		</div>
        	</div>
        	<hr>
            <div class="row">
                <div class="col-lg-12">
                	<?php echo utf8_encode("<h6><p>KaBuM!® é uma marca registrada de KABUM COMÉRCIO ELETRÔNICO S/A |
                	CNPJ: 05.570.714/0001-59 | Todos os direitos reservados. Os preços anunciados neste site ou via
                	e-mail promocional podem ser alterados sem prévio aviso. O KaBuM! não é responsável por erros
                	descritivos. As fotos contidas nesta página são meramente ilustrativas do produto e podem variar
                	de acordo com o fornecedor/lote do fabricante. Este site trabalha 100% em criptografia SSL. 
                	<br>Clique aqui e veja as políticas de nossa empresa </p>
                    <p><strong>Copyright &copy; Your Website 2016</strong></p></h6>");?>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
	

	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>