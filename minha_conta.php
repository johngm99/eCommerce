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
    		
				<h2>Minha Conta</h2>
				<?php echo utf8_encode("<h4>Administre seus dados, endereços e pedidos. Se houver dúvida, entre em contato com nossa Central de Atendimento.</h4><br><br>");?>
    		</div>
    	</div>    
    	<div class="row">
    		<div class="col-sm-4">
				
				<h4>Pedidos</h4>
				<h4><small>Acompanhe todos seus pedidos em tempo real</small></h4>
				<hr>
				<?php echo utf8_encode("<h4><small>» Todos os seus Pedidos</small></h4>
				<h4><small>» Direito de Arrependimento</small></h4>");?>
				
				<br><br>
				
				<?php echo utf8_encode("
				<h4>Dados e Endereços</h4>
				<h4><small>Informações cadastrais e Endereços de Entrega</small></h4>
				<hr>
				<h4><small>» Alterar Senha</small></h4>
				<h4><small>» Alterar E-mail / Login de acesso</small></h4>
				<h4><small>» Dados Cadastrais</small></h4>
				<h4><small>» Incluir novo Endereço</small></h4>
				<h4><small>» Endereços de Entrega</small></h4>
				");?>
				
				<br><br>
				
				<?php echo utf8_encode("
				<h4>Lista de Desejos</h4>
				<hr>
				<h4><small>Produtos guardados por você em sua lista</small></h4>
				<h4><small>» Produtos na Lista de Desejos</small></h4>
				");?>
				
				<br><br>
				
				<?php echo utf8_encode("
				<h4>Atendimento ao Cliente</h4>
				<hr>
				<h4><small>Estamos aqui! Como podemos ajudá-lo?</small></h4>
				<h4><small>» Central SAC: (19) 2114.4444</small></h4>
				<h4><small>» Atendimento por chat: Clique aqui.</small></h4>
				<h4><small>» E-mail: atendimento@kabum.com.br</small></h4>
				");?>
				
    		</div>
    		<div class="col-sm-8">
				<h4>Seus Pedidos</h4>
				<?php echo utf8_encode("<h4><small>Estes são seus pedidos no KaBuM! - Para informações completas, clique no número do pedido</small></h4>");?>
				<hr>
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