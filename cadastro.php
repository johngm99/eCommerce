<?php 

$erro = null;
$valido = false;

if(isset($_POST["cSenha2"])){
	$password = $_POST["cSenha2"];
}

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
	
	if(strlen(utf8_decode($_POST["cEmail"])) < 6){
		$erro = "Preencha o campo EMAIL corretamente (6 ou mais caracteres)";
	}
	else if(strlen(utf8_decode($_POST["cNome"])) < 3){
		$erro = "Preencha o campo NOME corretamente (3 ou mais caracteres)";
	}
	else if(strlen(utf8_decode($_POST["cSNome"])) < 3){
		$erro = "Preencha o campo SOBRENOME corretamente (3 ou mais caracteres)";
	}
	else if(is_numeric($_POST["cCPF"]) == false){
		$erro = "Campo CPF deve ser numérico";
	}
	else if(is_numeric($_POST["cRG"]) == false){
		$erro = "Campo RG deve ser numérico";
	}
	else if(is_numeric($_POST["cDDD1"]) == false){
		$erro = "Campo DDD TELEFONE deve ser numérico";
	}
	else if(is_numeric($_POST["cDDD2"]) == false){
		$erro = "Campo DDD CELULAR deve ser numérico";
	}
	else if(is_numeric($_POST["cCelular"]) == false){
		$erro = "Campo CELULAR deve ser numérico";
	}
	else if(is_numeric($_POST["cTelefone"]) == false){
		$erro = "Campo TELEFONE deve ser numérico";
	}
	else if(is_numeric($_POST["cNum"]) == false){
		$erro = "Campo NÚMERO deve ser numérico";
	}
	else if(strlen(utf8_decode($_POST["cEndereco"])) < 5){
		$erro = "Preencha o campo ENDERECO corretamente (5 ou mais caracteres)";
	}
	else if(strlen(utf8_decode($_POST["cComplemento"])) < 5){
		$erro = "Preencha o campo COMPLEMENTO corretamente (5 ou mais caracteres)";
	}
	else if(strlen(utf8_decode($_POST["cBairro"])) < 4){
		$erro = "Preencha o campo BAIRRO corretamente (5 ou mais caracteres)";
	}
	else if(strlen(utf8_decode($_POST["cReferencia"])) < 6){
		$erro = "Preencha o campo REFERENCIA corretamente (6 ou mais caracteres)";
	}
	else if(is_numeric($_POST["cCEP"]) == false){
		$erro = "Campo CEP deve ser numérico";
	}
	
	else{
		$valido = true;
		
	try{
		$connection = new PDO("mysql:host=127.0.0.1;dbname=ecommerce", "root", "");
		$connection->exec("set names utf8");
	}catch(PDOException $e){
		echo "Falha: " . $e->getMessage();
		exit();
	}
	
	$sql = "INSERT INTO clientes (email, nome, sobrenome, cpf, rg, data_nascimento, 
			sexo, telefone, celular, endereco, numero, complemento, bairro, 
			referencia, cidade, estado, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
	$stmt = $connection->prepare($sql);
	
	$stmt->bindParam(1, $_POST["cEmail"]);
	$stmt->bindParam(2, $_POST["cNome"]);
	$stmt->bindParam(3, $_POST["cSNome"]);
	$stmt->bindParam(4, $_POST["cCPF"]);
	$stmt->bindParam(5, $_POST["cRG"]);
	
	$dataNascimento = $_POST["cDia"] . "/" . $_POST["cMes"] . "/" . $_POST["cAno"];
	
	$stmt->bindParam(6, $dataNascimento);
	$stmt->bindParam(7, $_POST["cSexo"]);
	$stmt->bindParam(8, $_POST["cDDD1"]);
	$stmt->bindParam(9, $_POST["cDDD2"]);
	$stmt->bindParam(10, $_POST["cEndereco"]);
	$stmt->bindParam(11, $_POST["cNum"]);
	$stmt->bindParam(12, $_POST["cComplemento"]);
	$stmt->bindParam(13, $_POST["cBairro"]);
	$stmt->bindParam(14, $_POST["cReferencia"]);
	$stmt->bindParam(15, $_POST["cCidade"]);
	$stmt->bindParam(16, $_POST["cEstado"]);
	
	$password = crypt($password,"abc");
	#echo $password;
	$stmt->bindParam(17, $password);
	
	$stmt->execute();
	
	if($stmt->errorCode() != "00000"){
		$valido = false;
		echo "Erro codigo " . $stmt->errorCode() . ": ";
		echo implode(", " , $stmt->errorInfo());
	}
	
}
}


?>
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
    		<?php   echo utf8_encode("<h2>Entre com seus dados pessoais e Endereço</h2>");
    		echo utf8_encode("<small>Para sua comodidade, alguns dados de endereço talvez já estejam preenchidos baseado no CEP informado na tela anterior</small>");?>
    	</div><BR><BR>
    	<div class="row">
    	
    	<?php 
    		
    		if($valido == true){
    			echo "Dados enviados com sucesso!";
    		}else{
    			if(isset($erro)){
    				echo utf8_encode("ERRO: " . $erro . "<BR><BR>");
    			}
    		
    	
    	?>
    	
    		<form class="form-horizontal" method="post" action="?validar=true">
    	 <?php #echo "senha " . $_POST["cSenha2"] . "<BR>" . "Email: " . $_POST["cEmail2"]?>
    		<div class="col-lg-5">
    			<div class="form-group">
    			<?php echo utf8_encode("<h3>Seus Dados Pessoais</h3>");?>
    			
    			
				  <div class="form-group">
				    <label for="inputEmail" class="col-sm-2">E-mail:</label>
				    <div class="col-sm-12">
				      <input type="email" class="form-control" name="cEmail" id="inputEmail" placeholder="E-mail"
				      <?php if(isset($_POST["cEmail2"])){echo "value='" . $_POST["cEmail2"] . "'";}
				      else if(isset($_POST["cEmail"])){echo "value='" . $_POST["cEmail"] . "'";}?>>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="pNome" class="col-sm-2">Nome:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cNome" id="pNome" placeholder="Nome"
				      <?php if(isset($_POST["cNome"])){echo "value=" . $_POST["cNome"];}?>>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="sNome" class="col-sm-2">Sobrenome:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cSNome" id="sNome" placeholder="Sobrenome"
				      <?php if(isset($_POST["cSNome"])){echo "value=" . $_POST["cSNome"];}?>>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="cpf" class="col-sm-2">CPF:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cCPF" id="cpf" placeholder="CPF"
				      <?php if(isset($_POST["cCPF"])){echo "value=" . $_POST["cCPF"];}?>>
				    </div>
				  </div>
				  
				  
				  <div class="form-group">
				    <label for="rg" class="col-sm-2">RG:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cRG" id="rg" placeholder="RG"
				      <?php if(isset($_POST["cRG"])){echo "value=" . $_POST["cRG"];}?>>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="dNascimento" class="col-sm-12">Data de Nascimento:</label>
				    <div class="col-sm-3">
				    	<select class="form-control col-sm-3" name="cDia">
				    		<option
				    		<?php 
				    		if(isset($_POST["cDia"]) && $_POST["cDia"] == "1") {echo "selected";}?>
				    		>1</option>
				    		<option
				    		<?php 
				    		if(isset($_POST["cDia"]) && $_POST["cDia"] == "2") {echo "selected";}?>
				    		>2</option>
				    		<option
				    		<?php 
				    		if(isset($_POST["cDia"]) && $_POST["cDia"] == "3") {echo "selected";}?>
				    		>3</option>
				    	</select>
				    </div>
				    <div class="col-sm-3">
				    	<select class="form-control col-sm-offset-1 col-sm-3" name="cMes">
				    		<option
				    		<?php 
				    		if(isset($_POST["cMes"]) && $_POST["cMes"] == "1") {echo "selected";}?>
				    		>1</option>
				    		<option
				    		<?php 
				    		if(isset($_POST["cMes"]) && $_POST["cMes"] == "2") {echo "selected";}?>
				    		>2</option>
				    		<option
				    		<?php 
				    		if(isset($_POST["cMes"]) && $_POST["cMes"] == "3") {echo "selected";}?>
				    		>3</option>
				    	</select>
				    </div>
				    <div class="col-sm-3">
				    	<select class="form-control col-sm-offset-1 col-sm-3" name="cAno">
				    		<option
				    		<?php 
				    		if(isset($_POST["cAno"]) && $_POST["cAno"] == "1") {echo "selected";}?>
				    		>1</option>
				    		<option
				    		<?php 
				    		if(isset($_POST["cAno"]) && $_POST["cAno"] == "2") {echo "selected";}?>
				    		>2</option>
				    		<option
				    		<?php 
				    		if(isset($_POST["cAno"]) && $_POST["cAno"] == "3") {echo "selected";}?>
				    		>3</option>
				    	</select>
				    </div>
				    </div>
				    
				    <div class="form-group">
				    	<label class="col-sm-7">Sexo:</label>
					    <div class="col-sm-6">
					    	<select class="form-control" name="cSexo">
					    		<option
					    		<?php if(isset($_POST["cSexo"]) && $_POST["cSexo"] == "Masculino") echo "selected";?>
					    		>Masculino</option>
					    		<option
					    		<?php if(isset($_POST["cSexo"]) && $_POST["cSexo"] == "Feminino") echo "selected";?>
					    		>Feminino</option>
					    	</select>
					    </div>
				    </div>
				    
				    <div class="row">
				    	<div class="col-sm-12">
				    	<h3>Seus Telefones</h3>
				    	</div>
				    </div>
				    
				    <div class="row">
				    	<div class="col-sm-12">
				    	<div class="form-group">
				    		<label for="ddd" class="col-sm-12">Telefone:</label>
				    		<div class="col-sm-2">
				    			<input type="text" class="form-control" name="cDDD1" id="ddd" onkeyup="somenteNumeros(this);"
				    			<?php if (isset($_POST["cDDD1"])) echo "value=" . $_POST["cDDD1"];?>
				    			>
				    		</div>
				    		<div class="col-sm-8">
				    			<input type="text" class="form-control" name="cTelefone" id="telefone" onkeyup="somenteNumeros(this);"
				    			<?php if (isset($_POST["cTelefone"])) echo "value=" . $_POST["cTelefone"];?>
				    			>
				    		</div>
				    	</div>
				    </div>
				    
				    <div class="col-sm-12">
				    	<div class="form-group">
				    		<label for="ddd2" class="col-sm-12">Celular:</label>
				    		<div class="col-sm-2">
				    			<input type="text" class="form-control" name="cDDD2" id="ddd2" onkeyup="somenteNumeros(this);"
				    				<?php if (isset($_POST["cDDD2"])) echo "value=" . $_POST["cDDD2"];?>
				    			>
				    		</div>
				    		<div class="col-sm-8">
				    			<input type="text" class="form-control" name="cCelular" id="celular" onkeyup="somenteNumeros(this);"
				    			<?php if (isset($_POST["cCelular"])) echo "value=" . $_POST["cCelular"];?>
				    			>
				    		</div>
				    	</div>
				    </div>
				    
				  </div>
				
			
    			
    			</div>
    		</div>
    		<div class="col-lg-offset-1 col-lg-5">
    			<div class="form-group">
    			<?php echo utf8_encode("<h3>Seu Endereço</h3>");?>
    			
    			
				  <div class="form-group">
				    <label for="endereco" class="col-sm-12"><?php echo utf8_encode("Endereço (Rua Avenida):");?></label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cEndereco" id="endereco" placeholder=<?php echo utf8_encode("Endereço");?>
				      value="<?php if (isset($_POST["cEndereco"])) echo $_POST["cEndereco"];?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="numero" class="col-sm-2"><?php echo utf8_encode("Número:");?></label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cNum" id="numero" onkeyup="somenteNumeros(this);" placeholder=<?php echo utf8_encode("Número");?>
				      value="<?php if (isset($_POST["cNum"])) echo $_POST["cNum"];?>">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="complemento" class="col-sm-2">Complemento:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cComplemento" id="complemento" placeholder="Complemento"
				      <?php if (isset($_POST["cComplemento"])) echo "value=" . $_POST["cComplemento"];?>>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="bairro" class="col-sm-2">Bairro:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cBairro" id="bairro" placeholder="Bairro"
				      <?php if (isset($_POST["cBairro"])) echo "value='" . $_POST["cBairro"] . "'";?>>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="referencia" class="col-sm-12"><?php echo utf8_encode("Referência:");?></label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cReferencia" id="referencia" placeholder=<?php echo utf8_encode("Referência");?>
				      <?php if (isset($_POST["cReferencia"])) echo "value='" . $_POST["cReferencia"] . "'";?>>
				    </div>
				  </div>
				  
				  
				    <div class="form-group">
				    	<label class="col-sm-12">Cidade/Estado: </label>
					    <div class="col-sm-6">
					    	<select class="form-control" name="cCidade">
					    		<option
					    		<?php if (isset($_POST["cCidade"]) && $_POST["cCidade"] == "Cidade 1") echo "selected";?>
					    		>Cidade 1</option>
					    		<option
					    		<?php if (isset($_POST["cCidade"]) && $_POST["cCidade"] == "Cidade 2") echo "selected";?>
					    		>Cidade 2</option>
					    	</select>
					    </div>
					    
					    <div class="col-sm-3">
					    	<select class="form-control" name="cEstado">
					    		<option
					    		<?php if (isset($_POST["cEstado"]) && $_POST["cEstado"] == "SP") echo "selected";?>
					    		>SP</option>
					    		<option
					    		<?php if (isset($_POST["cEstado"]) && $_POST["cEstado"] == "MG") echo "selected";?>
					    		>MG</option>
					    	</select>
					    </div>
				    </div>
				    
				    
				  <div class="form-group">
				    <label for="cep" class="col-sm-12">CEP:</label>
				    <div class="col-sm-12">
				      <input type="text" class="form-control" name="cCEP" id="cep" onkeyup="somenteNumeros(this);" placeholder="CEP"
				      value="<?php if(isset($_POST["cCEP"])) echo $_POST["cCEP"];?>">
				    </div>
				  </div>
				  
				  
				    <div class="row">
				   		<div class="form-group">
				    		<div class="col-sm-12">
				    			<h3 class="col-sm-12"><?php echo utf8_encode("Observações");?></h3>
				    			<label class="col-sm-12">Deseja receber ofertas exclusivas por e-mail?</label>
					    		<div class="col-sm-3">
					    			<select class="form-control ">
					    				<option>Sim</option>
					    				<option><?php echo utf8_encode("Não");?></option>
					    			</select>
					    		</div>
					    	</div>
				    	</div>
				    </div>
				    
				    <div class="row">
				   		<div class="form-group">
				    		<div class="col-sm-12">
				    			<label class="col-sm-12"><?php echo utf8_encode("Onde você conheceu o eCommerce do Amor?");?></label>
					    		<div class="col-sm-8">
					    			<select class="form-control ">
					    				<option>Na LUA</option>
					    				<option><?php echo utf8_encode("Na Escuridão");?></option>
					    			</select>
					    		</div>
					    	</div>
				    	</div>
				    </div>
				    
				    <div class="checkbox">
  						<label>
   						<input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
   						Li e estou de acordo com as <a href="#"><?php echo utf8_encode("políticas da empresa");?></a>
 						</label>
					</div>
					
			
				</div>
    		</div>
    		
					<div class="row">
						<div class="col-sm-offset-5 col-sm-6">
							<input type="submit" class="btn btn-default" value="Cadastrar">
						</div>
					</div>
    		
				</form>
    			
    		
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
	<?php }
	
	?>
</body>
</html>