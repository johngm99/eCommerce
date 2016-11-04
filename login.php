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
										<li><a href="#">Políticas do Site</a></li>
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
														<div class="col-lg-12">
														<h3>Seu Cadastro</h3>
														<?php echo utf8_encode("<h4>Você precisa ser cadastrado ou já ter um cadastro para continuar...</h4>");?>
														</div>
														</div>
														<div class="row">
														<div class="col-lg-5 table-bordered">
														<?php echo utf8_encode("<h3>Já é cadastrado?</h3>
														<h5>Então entre com seus dados de login e senha.</h5>
														<small>E-mail e Senha obrigatórios para o login.</small><BR><BR>");?>
														<h4>Dados Pessoais</h4>

														<form class="form-horizontal">
														<div class="form-group">
														<label for="inputEmail" class="col-sm-2">E-mail:</label>
														<div class="col-sm-12">
														<input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
														</div>
														</div>
														<div class="form-group">
														<label for="inputPassword" class="col-sm-2">Senha:</label>
														<div class="col-sm-12">
														<input type="password" class="form-control" id="inputPassword" placeholder="Senha">
														</div>
														</div>
														<div class="form-group">
														<label class="col-sm-6">Esqueci <a href="#">meu login</a></label>
														<label class="col-sm-6">Esqueci <a href="#">minha senha</a></label>
														</div>

														<!--
														<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">

														<div class="checkbox">
														<label>
				          <input type="checkbox"> Remember me
				          </label>
				          </div>
				          </div>
				          </div>
				          -->
				          <div class="form-group">
				          <div class=" col-sm-10">
				          <button type="submit" class="btn btn-default">Entre</button>
				          </div>
				          </div>
				          </form>
				          </div>
				          	
				          <div class="col-sm-offset-1 col-lg-5 table-bordered">
				          <?php echo utf8_encode("<h3>Ainda não é cadastrado no site?</h3>
				          <h5>Faça agora mesmo o seu cadastro, é simples e rápido!</h5>
				          <small>Todos os campos são de preenchimento obrigatório.</small><BR><BR>
				          <h4>Dados Cadastrais</h4>");?>

				          <form class="form-horizontal" method="post" action="cadastro.php">
				          <div class="form-group">
				          <label for="inputEmail2" class="col-sm-2">E-mail:</label>
				          <div class="col-sm-12">
				          <input type="email" class="form-control" name="cEmail2" id="inputEmail2" placeholder="E-mail">
				          </div>
				          </div>
				          <div class="form-group">
				          <label for="inputPassword2" class="col-sm-6">Senha:</label>
				          <label for="inputRePassword" class="col-sm-6">Confirmar Senha:</label>
				          <div class="col-sm-6">
				          <input type="password" class="form-control" name="cSenha2" id="inputPassword2" placeholder="Senha">
				          </div>
				          <div class="col-sm-6">
				          <input type="password" class="form-control" name="cRSenha" id="inputRePassword" placeholder="Confirmar Senha">
				          </div>
				          </div>
				          <!--
				          <div class="form-group">
				          <label for="inputCPF/CNPJ" class="col-sm-12">CPF ou CNPJ (Apenas Números):</label>
				          <div class="col-sm-12">
				          <input type="number" class="form-control" id="inputCPF/CNPJ" placeholder="CPF ou CNPJ">
				          </div>
				          </div>
				          <div class="form-group">
				          <label for="inputCEP" class="col-sm-12">CEP:</label>
				          <div class="col-sm-5">
				          <input class="form-control input-sm" onkeyup="somenteNumeros(this);" id="inputCEP" maxlength="5" type="text"  ng-model="numero.valor" >
				          </div>
				          	
				          <div class="col-sm-3">
				          <input class="form-control input-sm" onkeyup="somenteNumeros(this);" id="inputCEP" maxlength="3" type="text"   >
				          </div>
				          </div>
				          -->
				          <!--
				          <div class="form-group">
				          <div class="col-sm-offset-2 col-sm-10">

				          <div class="checkbox">
				          <label>
				          <input type="checkbox"> Remember me
				          </label>
				          </div>
				           
				          </div>
				          </div>
				          -->
				          <div class="form-group">
				          <div class="col-sm-10">
				          <button type="submit" class="btn btn-default">Cadastrar</button>
				          </div>
				          </div>
				          <BR><BR>
				          </form>

				          </div>
				          </div>
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