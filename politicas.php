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
					<li><a href="#"><?php echo utf8_encode("Pol�ticas do Site");?></a></li>
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
    			
    			
    			<?php echo utf8_encode("<h2 class='text-center'>Pol�ticas do Site</h2>

<p>Caro cliente, aqui voc� encontrar� informa��es importantes sobre os seus direitos e obriga��es assim como limita��es e exclus�es que podem lhe ser �teis.<br>
Por favor, leia todas as informa��es com aten��o.</p>


<h3>1) Pedido</h3>

<p>Os pedidos somente ser�o aceitos por meio da p�gina oficial www.kabum.com.br, mediante a emiss�o de uma Confirma��o do Pedido, enviada atrav�s do e-mail de cadastro mencionado pelo cliente.<br>
O cliente deve verificar a Confirma��o do Pedido e informar � KaBuM! imediatamente sobre qualquer eventual erro para averigua��es.</p>


<h3>2) Oferta, Pre�o e Condi��es de Pagamento</h3>

<p>As ofertas somente ser�o v�lidas quando disponibilizadas por escrito no site da KaBuM! durante o prazo indicado ou, caso n�o seja mencionado o prazo, enquanto detivermos a mercadoria dispon�vel em estoque.<br><br>

O pre�o do produto, prazos e condi��es de pagamento s�o estabelecidos no ato da contrata��o.<br><br>

O pedido ser� postado ap�s a confirma��o do pagamento no sistema da KaBuM! ou nas condi��es estabelecidas na pr�pria Confirma��o do Pedido.<br><br>

A KaBuM! reserva-se no direito de requerer pr�via autoriza��o das administradoras de cart�o de cr�dito ou para compensa��o do boletos banc�rios para concluir a venda e enviar o produto a entrega, n�o se responsabilizando por eventuais fraudes ocorridas.</p>

<h3>3) Entrega</h3>

<p>A KaBuM! n�o garante a entrega nos casos de insucessos provocados por: cliente ausente, dados cadastrais incorretos, recusa pelo cliente ou funcion�rios de endere�os residenciais e comerciais, mudan�a de endere�o, endere�os comerciais fechados, �rea de risco e desastres naturais (for�a maior). A entrega ser� realizada dentro do prazo e no local indicado na Confirma��o do Pedido.<br><br>

O cliente ser� respons�vel pelas perdas e danos causados pela recusa injustificada da entrega, assim considerada aquela n�o prevista na legisla��o aplic�vel.</p>

<h3>3.1). Formas de postagem</h3>

<p>O cliente poder� solicitar, no momento da formaliza��o do pedido, o envio da mercadoria por meio dos Correios ou Transportadora, recordando que cada localidade det�m de um prazo espec�fico para entrega.<br><br>

Algumas mercadorias em raz�o da dimens�o e do peso est�o sujeitas a altera��o da forma de postagem (por exemplo: TVs, Instrumentos Musicais, etc.)<br>

Em caso de grandes eventos como Black Friday e Cyber Monday, os prazos de entrega poder�o sofrer altera��es devido a grande demanda de postagens.</p>


<h3>4). Aceita��o e devolu��o</h3>

<p>Toda solicita��o de troca ou devolu��o deve ser comunicada a Central de Atendimento da KaBuM! para instru��es detalhadas sobre o processo de devolu��o. Servi�o de Atendimento ao Cliente (SAC Online), pelo telefone (19) 2114-4444 ou atrav�s do e-mail: e-mail: atendimento@kabum.com.br.</p> 

<h3>4.1). Condi��es de Devolu��o</h3>

<p>A mercadoria dever� retornar nas mesmas condi��es em que foi entregue, ou seja: lacres intactos do fabricante e KaBuM!, na embalagem original e com todos acess�rios (cabos, manuais, cds e etc.) que acompanham o produto. � importante ressaltar que a caixa do produto tamb�m deve estar em perfeitas condi��es, isto �, a embalagem n�o pode ter sido danificada ou violada. Esclarece-se que o produto N�O PODE TER SIDO USADO.<br>
O protocolo de retorno de mercadoria e o remetente dever�o estar facilmente identificados na embalagem de postagem.</p>

<h3>4.1a). Autoriza��o de Postagem</h3>

<p>A autoriza��o de postagem � enviada ao e-mail de cadastro do cliente e tem validade de 7 dias, prazo este n�o renov�vel. Caso o produto n�o seja enviado neste prazo, dever� ser realizado novo contato com a KaBuM! para ser reavaliado a emiss�o de uma nova autoriza��o.<br><br>

A KaBuM! reserva-se no direito de recusar o recebimento de produtos postados fora do prazo de garantia, conforme determinado na nota fiscal de compra.</p> 

<h3>4.1b). Despesas de envio</h3>

<p>Todos os custos de transporte s�o de responsabilidade do cliente, exceto:<br><br>

- Autoriza��es de postagem enviada pela KaBuM!<br>
- Produto com defeito informado dentro do prazo de sete dias do recebimento, sendo enviado via PAC (encomenda normal por Correios).<br><br>

Constatado defeito, troca ou qualquer repostagem a KaBuM! enviar� o pedido por meio de PAC � encomenda normal , cujo prazo de entrega depender� da localidade do endere�o de entrega. Caso o cliente tenha urg�ncia no reenvio poder� solicitar outra modalidade de postagem, arcando com os custos da postagem adicional.<br><br>

IMPORTANTE: A KaBuM! n�o restitui despesas com embalagens de postagem e deslocamento do cliente.</p>

<h3>4.1.2). Procedimentos de devolu��o para pessoa jur�dica</h3>

<p>Em caso de cliente pessoa jur�dica (CNPJ), a empresa dever� emitir uma nota fiscal de devolu��o (desist�ncia da compra - prazo de 7 dias ou produto em desacordo com o pedido) ou nota de remessa para conserto (produto com defeito) com os mesmos dados da nota fiscal de compra (modelo do produto, al�quotas de impostos, etc.) que foi enviada por nossa empresa juntamente com o pedido de compra. Caso esta pessoa jur�dica n�o seja emissora de nota fiscal (como escolas, institui��es, etc.), dever� enviar umas das vias da nota fiscal de compra juntamente com uma declara��o informando os produtos que est�o sendo devolvidos e o motivo da devolu��o.</p>

<h3>4.2). Avarias</h3>

<p>O Cliente dever� ficar atento no ato da entrega, recusando imediatamente o pedido cuja a embalagem estiver sido violada ou avariada no transporte.<br>
Na impossibilidade de recusa dever� ser realizado o contato no prazo m�ximo de 48 horas. N�o sendo aceitas as solicita��es de avarias fora do prazo.<br>
A troca por outro produto igual ao descrito na nota fiscal, ser� efetivada somente ap�s o recebimento e an�lise das condi��es do produto devolvido. Constatada qualquer diverg�ncia como aus�ncia de avaria, ind�cios de mau uso ou aus�ncia de manual/acess�rios, a KaBuM! se reserva no direito de n�o realizar a troca e reenviar o produto ao cliente sem pr�via autoriza��o.</p> 

<h3>4.3). Produto em desacordo com o pedido</h3>

<p>Caso detecte no ato da entrega que o produto encomendado e o produto adquirido s�o diferentes, dever� recusar de imediato a entrega. Ao aceitar a encomenda sem observar a descri��o da Nota Fiscal, o prazo para entrar em contato com nosso SAC ser� de 48 horas. Solicita��es fora deste prazo n�o ser�o aceitas, pois ser� considerado aceito pelo cliente.<br>
Constatado aus�ncia de diverg�ncia entre o produto adquirido e o produto entregue, ind�cios de mau uso ou aus�ncia de manual/acess�rios, a KaBuM! se reserva no direito de n�o realizar a troca e reenviar o produto ao cliente sem pr�via autoriza��o.</p> 

<h3>4.4). Arrependimento</h3>

<p>Em casos de arrependimento, o Cliente poder� solicitar a devolu��o do produto e obter a consequente restitui��o do valor pago ou a inser��o de cr�ditos para nova compra desde que, os produtos sejam devolvidos em sua embalagem original, com todos os selos/lacres intactos, n�o devendo apresentar qualquer ind�cio de manipula��o ou utiliza��o, acompanhados da nota fiscal.<br>
Essa solicita��o dever� ser feita em at� 07 (sete) dias corridos ap�s a data de recebimento da compra, nos moldes do artigo 49 do CDC, atrav�s do Servi�o de Atendimento ao Cliente (SAC Online), pelo telefone (19) 2114-4444 ou atrav�s do atendimento@kabum.com.br<br>
O produto dever� ser devolvido sempre acompanhado de c�pia da nota fiscal e preenchido o �Termo de Retorno de Mercadoria� enviado pela KaBuM!. A aus�ncia destes documentos impedir� a r�pida identifica��o da sua solicita��o, gerando atrasos no processo de troca ou na restitui��o do valor pago.<br>
Ao ser exercido o direito de arrependimento, ap�s a an�lise do produto em nosso Centro de Distribui��o, o reembolso de valores poder� ser feito de duas maneiras, dependendo da forma de pagamento efetuada no momento da compra: <br><br>

1) Em compras pagas por meio de cart�o de cr�dito, o respectivo estorno ser� solicitado de imediato a administradora do seu cart�o, mas por ser um procedimento de inteira responsabilidade da administradora do cart�o o estorno poder� ocorrer em at� 2 (duas) faturas subsequentes.<br>

2) Em compras pagas por meio de boleto banc�rio, a restitui��o ser� creditada sempre na conta corrente de titularidade do cliente que pagou o boleto.<br><br>

Caso n�o seja respeitada a Pol�tica de Troca e Devolu��o da KaBuM!, e a legisla��o aplic�vel, os custos de devolu��o do produto correr�o por conta do cliente.<br><br>

OBSERVA��O: N�o poder� ser exercido a troca ou devolu��o de produtos que estiverem impossibilitados de serem novamente comercializados, por exemplo: jogos, embalagens externas danificadas, itens faltantes, etc.</p>

<h3>5). Garantia</h3>

<p>� reservada a garantia contra defeito de fabrica��o de todos os produtos adquiridos na empresa durante o per�odo de cobertura, salvo se os produtos possu�rem assist�ncia t�cnica da fabricante (item 5.1). Por�m, o defeito dever� ser informado no prazo estabelecido na nota fiscal de compra, contados da data de recebimento, onde sua substitui��o poder� ocorrer em at� 30 dias.<br>
A KaBuM! n�o se responsabiliza por danos causados por terceiros, por quest�es ou elementos fora do alcance, controle ou inger�ncia das partes; adequa��o do produto adquirido pelo cliente para um determinado fim, prop�sito ou uso escolhido pelo cliente.<br>
Todo produto encaminhado por conta de v�cio passar� previamente por uma an�lise t�cnica para a devida verifica��o do defeito, pelo prazo de 30 dias, conforme previsto pelo artigo 18 do CDC. Caso seja constatado pelo laudo da assist�ncia t�cnica que n�o h� v�cio no produto, ou ainda que o v�cio tenha sido causado por mau uso por parte do Cliente, a KaBuM! far� o reenvio do mesmo produto ao endere�o do cliente, isentando-se da obriga��o de troca e de despesas de frete geradas por este reenvio.<br>
ATEN��O: � de inteira responsabilidade do cliente a execu��o pr�via de c�pias de seguran�a de quaisquer programas ou dados que julgue necess�rios para a reinstala��o de software e arquivos do disco r�gido ou outras m�dias, se for o caso.</p> 

<h3>5.1) A Garantia n�o abrange</h3>

<p>Produtos n�o adquiridos no site da KaBuM!;<br>
Defeito por manuseio inadequado, m� instala��o;<br>
Custos de instala��o;<br>
Custos de conserto do produto fixado pelas assist�ncias t�cnicas;.<br>
Recupera��o de programas, aplicativos, sistemas operacionais, ou qualquer outro software, uma vez que, a responsabilidade de fazer back-up � do cliente;<br>
Defeitos ocasionados por falhas ou erros durante ou ap�s atualiza��es de firmware;<br>
Casos de mau funcionamento por falha na configura��o de software ou drives;.<br>
Conserto ou reposi��o de pe�as por desgaste natural ou troca peri�dica durante o tempo de vida do produto; por ex: adaptadores de for�a, cabos el�tricos, cabe�otes laser de aparelhos de CDs, acess�rios, vidros de prote��o, fus�veis internos, pilhas ou baterias internas ou externas, fitas, cartuchos e etc;<br>
Uso inadequado, imprud�ncia ou neglig�ncia;<br>
Perda ou dano ocasionado por for�a maior ou caso fortuito;<br>
Carregadores de bateria, controles remotos, bem como quaisquer tipos de transformadores externos ou estabilizadores de voltagem e outros acess�rios externos ao produto;<br>
Devolu��o de produtos pelo motivo de incompatibilidade entre componentes f�sicos (hardware), sistemas operacionais ou outros softwares, j� que a escolha do produto adequado � de inteira responsabilidade do cliente. Lembrando que, as informa��es t�cnicas refletem nas especifica��es disponibilizadas pelos fabricantes e servem t�o somente para auxiliar o cliente na decis�o de compra.</p>


<h3>5.2) Perda de Garantia</h3>

<p>A KaBuM! cobre defeitos de fabrica��o no prazo estipulado na nota fiscal de compra, havendo perda total da garantia nas seguintes hip�teses: <br><br>


Retirada ou viola��o de selos de garantia ou identifica��o da KaBuM! e/ou fabricante;<br>
Viola��o, modifica��o, troca de componentes, ajustes conserto feito por pessoal n�o autorizado;<br>
Servi�os solicitados e/ou executados diretamente pelo CLIENTE sem pr�vio consentimento da KaBuM! e/ou Fabricante;<br>
Manuseio incorreto, em desacordo com o manual ou ind�cio de descuido.<br>
Uso de acess�rios, componentes ou sistemas n�o originais ou n�o recomendados n�o aprovados pelo fabricante.<br>
Transporte inadequado adotado pelo cliente que exp�e o produto a trepida��es, umidade, quedas, calor ou excesso de peso sobre a pe�a ou embalagem.<br>
Danos f�sicos (amassados, arranh�es, manuscritos, descaracteriza��o, componentes queimados por descarga el�trica ou excesso de voltagem, danos decorrentes de exposi��o excessiva ao calor, fogo, umidade, placas ou processadores queimados, trincados, lascados, processadores e placas m�e com pinos e sockets tortos, etc).<br>
Danos causados por v�rus.<br>
Qualquer outro defeito que n�o seja classificado como defeito de fabrica��o.</p>


<h3>5.3). Assist�ncia T�cnica do Fabricante.</h3>

<p>Nos casos que a KaBuM! indicar a assist�ncia t�cnica autorizada para reparo/conserto, o cliente dever� acionar a mesma, garantindo assim um c�lere e eficaz atendimento, vez que esta empresa n�o det�m de autoriza��o de conserto para determinados produtos.<br>
A mercadoria dever� ser enviada para as assist�ncias autorizadas com a nota fiscal de compra, na embalagem original, com todos acess�rios (cabos, manuais, cds e etc.) que acompanham o produto.</p> 

<h3>6). Forma de Remessa</h3>

<p>A remessa somente ser� aceita nos termos do item �4.1.b.� para o seguinte endere�o: <br><br>

KaBuM! � Autoriza��o (Protocolo n� ....) <br>
Rua Santa Cruz, n� 787 � andar L 1 � Centro <br>
Limeira �SP <br>
Cep: 13480-041 <br><br><br>


Click Aqui e acesse nossa Pol�tica de Privacidade</p>");?>
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
        			<?php echo utf8_encode("Perif�ricos<br>");?>
        			
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
					
					<?php echo utf8_encode("Pol�ticas do site<br>
					Pol�tica de Privacidade<br>
					Pr�mios");?>
					</small>
        		</div>
        		
        		<div class="col-lg-3">
        			<h5><strong>Atendimento</strong></h5>
        			
        			<?php echo utf8_encode("<small>Hor�rio de atendimento: 09:00 �s 19:00 de segunda � sexta-feira,
        			hor�rio de Bras�lia (exceto feriados).<br><br>
					E-mail: atendimento@kabum.com.br Recep��o de Fax: (19) 2114-4412</small>");?>
        		</div>
        	</div>
        	<hr>
            <div class="row">
                <div class="col-lg-12">
                	<?php echo utf8_encode("<h6><p>KaBuM!� � uma marca registrada de KABUM COM�RCIO ELETR�NICO S/A |
                	CNPJ: 05.570.714/0001-59 | Todos os direitos reservados. Os pre�os anunciados neste site ou via
                	e-mail promocional podem ser alterados sem pr�vio aviso. O KaBuM! n�o � respons�vel por erros
                	descritivos. As fotos contidas nesta p�gina s�o meramente ilustrativas do produto e podem variar
                	de acordo com o fornecedor/lote do fabricante. Este site trabalha 100% em criptografia SSL. 
                	<br>Clique aqui e veja as pol�ticas de nossa empresa </p>
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