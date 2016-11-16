<?php
require_once 'conectarBanco.php';

$valido = false;
$CPFCNPJValido = false;

if (isset ( $_POST ['fValidar'] ) && $_POST ['fValidar'] == true) {
	if (isset ( $_POST ['fEmail'] ) && strlen ( $_POST ['fEmail'] ) < 7) {
		// echo "Campo Email deve possuir pelo menos 7 caracteres!";
	} else if (isset ( $_POST ['fPass'] ) && strlen ( $_POST ['fPass'] ) < 6) {
		// echo "Campo SENHA deve possuir pelo menos 6 caracteres!";
	} else if (isset ( $_POST ['fRPass'] ) && $_POST ['fPass'] != $_POST ['fRPass']) {
		// echo "Campo REPETE SENHA deve ser igual a senha do primeiro campo!";
	} else if (is_numeric ( $_POST ['fCPFCNPJ'] ) && strlen ( $_POST ['fCPFCNPJ'] ) < 11 || is_numeric ( $_POST ['fCPFCNPJ'] ) && strlen ( $_POST ['fCPFCNPJ'] ) > 14) {
		// echo "Falha na validacao do CPF";
	} else if (strlen ( $_POST ['fCPFCNPJ'] ) == 11) {
		$peso1 = 10;
		$peso2 = 11;
		$soma1 = 0;
		$soma2 = 0;
		$digito1 = 0;
		$digito2 = 0;
		
		for($i = 0; $i < 9; $i ++) {
			$soma1 += $_POST ['fCPFCNPJ'] [$i] * $peso1 --;
		}
		
		$resto1 = $soma1 % 11;
		
		if (($digito1 = 11 - $resto1) >= 10) {
			$digito1 = 0;
		}
		
		for($i = 0; $i < 9; $i ++) {
			$soma2 += $_POST ['fCPFCNPJ'] [$i] * $peso2 --;
		}
		
		$soma2 += $digito1 * $peso2 --;
		$resto2 = $soma2 % 11;
		
		if (($digito2 = 11 - $resto2) >= 10) {
			$digito2 = 0;
		}
		if ($_POST ['fCPFCNPJ'] [9] == $digito1 && $_POST ['fCPFCNPJ'] [10] == $digito2) {
			$CPFCNPJValido = true;
		} else {
			echo "CPF invalido!";
		}
	}
	
	if ($CPFCNPJValido) {
		$valido = true;
		session_start ();
		
		// VERIFICA SE JA HA ALGUM REGISTRO GRAVADO COM OS DADOS INFORMADOS
		
		$sql = "SELECT email FROM login WHERE email = ?";
		
		$stmt = $connection->prepare ( $sql );
		
		$stmt->bindParam ( 1, $_POST ['fEmail'] );
		
		if ($stmt->execute ()) {
			if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
				setcookie ( "cValidationError", "email", time () + (500 * 500 * 500), ";path=/" );
				$valido = false;
				echo "Email ja existe " . $_POST['fEmail'] ;
				header ( "Location: ../login_cadastro.html" );
			} else {
			}
		}
		
// 		$sql = "SELECT cpf FROM cliente WHERE cpf = ?";
		
// 		$stmt = $connection->prepare ( $sql );
		
// 		$stmt->bindParam ( 1, $_POST ['fCPFCNPJ'] );
		
// 		if ($stmt->execute ()) {
// 			if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
// 				setcookie ( "cValidationError", "cpf", time () + (500 * 500 * 500), ";path=/" );
// 				$valido = false;
// 				header ( "Location: ../login_cadastro.html" );
// 			} else {
// 				// echo "Email ou senha incorretos!";
// 			}
// 		}
		
		// $_SESSION ['fPass'] = md5 ( $_POST ['fPass'] );
		
		// // echo "<BR>Sessao Pass: " . $_SESSION ['fPass'];
		// setcookie ( "cCPFCNPJ", $_POST ['fCPFCNPJ'], time () + (86400 * 30), ";path=/" );
		// setcookie("cCadastroInicialValido", "true", time () + (86400 * 30), ";path=/");
		// setcookie("cEmailCadastro", $_POST['fEmail'], time() + (86400*30),"/");
		// header ( "Location: ../cadastro.html" );
	}
}

if($valido){
	$sql = "SELECT cpf FROM cliente WHERE cpf = ?";
	
	$stmt = $connection->prepare ( $sql );
	
	$stmt->bindParam ( 1, $_POST ['fCPFCNPJ'] );
	
	if ($stmt->execute ()) {
		if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
			setcookie ( "cValidationError", "cpf", time () + (500 * 500 * 500), ";path=/" );
			$valido = false;
			header ( "Location: ../login_cadastro.html" );
		} else {
			// echo "Email ou senha incorretos!";
		}
	}
}

if ($valido) {
	$_SESSION ['fPass'] = md5 ( $_POST ['fPass'] );
	
	// echo "<BR>Sessao Pass: " . $_SESSION ['fPass'];
	setcookie ( "cCPFCNPJ", $_POST ['fCPFCNPJ'], time () + (86400 * 30), ";path=/" );
	setcookie ( "cCadastroInicialValido", "true", time () + (86400 * 30), ";path=/" );
// 	setcookie ( "cEmailCadastro", $_POST ['fEmail'], time () + (86400 * 30), ";path=/" );
// 	echo $_COOKIE['cEmailCadastro'];
	header ( "Location: ../cadastro.html" );
}

if (! $valido) {
	setcookie ( "cEmailCadastro", "", time () - (86400 * 30), ";path=/" );
	setcookie ( "cCadastroInicialValido", "", time () - (86400 * 30), ";path=/" );
	// echo "Falha";
	setcookie ( "cErroNaValidacao", "", time () + (500), ";path=/" );
	header ( "Location: ../login_cadastro.html" );
	// echo "<body onLoad='window.history.back();'>";
}
?>