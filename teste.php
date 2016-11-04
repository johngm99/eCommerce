
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
					<li><a href="#">Atendimento</a></li>
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
						<input type="text" class="form-control"
							placeholder="Nome do Produto">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
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
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>


	<!-- Page Content -->

	<div class="container">
		<div class="row">
														<?php
														echo utf8_encode ( "<h2>Entre com seus dados pessoais e Endereço</h2>" );
														echo utf8_encode ( "<small>Para sua comodidade, alguns dados de endereço talvez já estejam preenchidos baseado no CEP informado na tela anterior</small>" );
														?>
    	</div>
		<div class="row">

			<form class="form-horizontal">

				<div class="col-lg-5">
    			<?php echo utf8_encode("<h3>Seus Dados Pessoais</h3>");?>
    				
				  <div class="form-group">
						<label for="inputEmail" class="col-sm-2">E-mail:</label>
						<div class="col-sm-12">
							<input type="email" class="form-control" id="inputEmail"
								placeholder="E-mail">
						</div>
					</div>





				</div>
				<div class="col-lg-offset-1 col-lg-5">
					<div class="form-group">
    			<?php echo utf8_encode("<h3>Seu Endereço</h3>");?>
    			
				  <div class="form-group">
							<label for="endereco" class="col-sm-12">Endereço (Rua Avenida):</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="endereco"
									placeholder="Endereço">
							</div>
						</div>
					</div>
				</div>
			</form>


		</div>


		<div class="container">

			<hr>

			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="col-lg-12">
						<p>Copyright &copy; Your Website 2016</p>
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