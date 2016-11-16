<?php
require_once 'conectarBanco.php';

$valido = false;

if (isset ( $_POST ['fValidar'] ) && $_POST ['fValidar'] == true) {
	if (isset ( $_POST ['fEmailLogin'] ) && strlen ( $_POST ['fEmailLogin'] ) < 7) {
		setcookie ( "cUserPassError", "true", time () + (500 * 500 * 500), ";path=/" );
		header ( "Location: ../login_cadastro.html" );
	} else if (isset ( $_POST ['fPassLogin'] ) && strlen ( $_POST ['fPassLogin'] ) < 6) {
		// echo "Senha deve ter mais de 6 caracteres!";
		setcookie ( "cUserPassError", "true", time () + (500 * 500 * 500), ";path=/" );
		header ( "Location: ../login_cadastro.html" );
	} else {
		$valido = true;
		
		// echo "Sucesso!";
		
		$sql = "SELECT nome FROM cliente WHERE login_email = ?";
		
		$stmt = $connection->prepare ( $sql );
		
		$stmt->bindParam ( 1, $_POST ['fEmailLogin'] );
		
		if ($stmt->execute ()) {
			if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
				// echo "Login efetuado com SUCESSO!";
				setcookie ( "cNome", $registro->nome, time () + (86400 * 30), ";path=/" );
			} else {
			}
		}
		
		$sql = "SELECT email FROM login WHERE email = ? and senha = ?";
		
		$stmt = $connection->prepare ( $sql );
		
		$stmt->bindParam ( 1, $_POST ['fEmailLogin'] );
		$stmt->bindParam ( 2, md5 ( $_POST ['fPassLogin'] ) );
		
		if ($stmt->execute ()) {
			if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
				// echo "Login efetuado com SUCESSO!";
				setcookie ( "cLoginValido", "true", time () + (86400 * 30), ";path=/" );
				
				$nome = explode ( " ", $_COOKIE ['cNome'] );
				
				setcookie ( "cEmailLogin", $nome [0], time () + (86400 * 30), ";path=/" );
				
				header("Location: ../minha_conta.html");
			} else {
				// echo "Email ou senha incorretos!";
				setcookie ( "cUserPassError", "true", time () + (500 * 500 * 500), ";path=/" );
				header ( "Location: ../login_cadastro.html" );
			}
		}
		
		if ($stmt->errorCode () != "00000") {
			$valido = false;
			echo "Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
		} else {
			// echo "<BR><BR> Acao efetuada com sucesso!";
		}
	}
}
?>