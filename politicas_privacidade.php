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
    			
    			<?php echo utf8_encode("
<h2 class='text-center'>Pol�tica de Privacidade</h2>

<h3>1) Obten��o e Armazenamento dos dados</h3>

<p>1.1. O KaBuM! zela pela seguran�a e privacidade de seus clientes, portanto todas as informa��es fornecidas durante a navega��o e compra no site s�o armazenadas de forma autom�tica no banco de dados, n�o sendo vendidas, trocadas ou divulgadas � terceiros - exceto quando estas informa��es forem necess�rias para processo de entrega, cobran�a, participa��o de promo��es solicitadas pelos clientes, confirma��o de dados objetivando a seguran�a na finaliza��o da compra, ordem judicial e administrativa.<br><br>

1.1.1. Para a preserva��o de seus dados, o KaBuM! n�o aconselha a divulga��o de senha a terceiros, mesmo que familiares ou amigos.<br><br>

1.2. O KaBuM! tamb�m poder� utilizar outras tecnologias padr�es as quais coletam informa��es para melhorar a experi�ncia de navega��o do usu�rio, baseada nos h�bitos e prefer�ncias deste, como os Cookies, que s�o os dados enviados para o navegador do usu�rio ap�s acesso ao site KaBuM!. Recordando que, para bloqueios dos Cookies, caber� ao pr�prio visitante/usu�rio configurar o seu navegador.<br><br>

1.2.1. O usu�rio consente que o KaBuM! utilize as informa��es para realiza��o de marketing direto.</p>


<h3>2) Disposi��es Finais</h3>

<p>2.1. O conte�do constante nesta Pol�tica de Privacidade poder� ser atualizado ou modificado a qualquer momento, cabendo aos usu�rios verific�-lo sempre que efetuar o acesso ao site.<br><br>

2.2. O usu�rio, ao colocar informa��es em uma �rea p�blica do KaBuM!, est� ciente de que elas estar�o dispon�veis a outros visitantes e usu�rios do site.<br><br>

2.3. Caso persistir d�vida em rela��o ao conte�do dessa Pol�tica, o usu�rio dever� entrar em contato com a Central de Atendimento.<br><br><br>


Atualizado em 25 de julho de 2016.</p>");?>

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