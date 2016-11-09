<?php
require_once 'conectarBanco.php';

$valido = false;

if (isset ( $_POST ['fValidar'] ) && $_POST ['fValidar'] == true) {
	if (isset ( $_POST ['fEmail'] ) && strlen ( $_POST ['fEmail'] ) < 7) {
		// echo "Campo Email deve possuir pelo menos 7 caracteres!";
	} else if (isset ( $_POST ['fPass'] ) && strlen ( $_POST ['fPass'] ) < 6) {
// 		echo "Campo SENHA deve possuir pelo menos 6	 caracteres!";
	} else if (isset ( $_POST ['fRPass'] ) && $_POST ['fPass'] != $_POST ['fRPass']) {
		// echo "Campo REPETE SENHA deve ser igual a senha do primeiro campo!";
	} else {
		$valido = true;
		
		$sql = "INSERT INTO login (email, senha) VALUES (?, ?)";
		
		$stmt = $connection->prepare ( $sql );
		
		$stmt->bindParam ( 1, $_POST ['fEmail'] );
		$stmt->bindParam ( 2, md5( $_POST ['fPass']) );
		
		$stmt->execute ();
		
		if ($stmt->errorCode () != "00000") {
			$valido = false;
			echo "Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
			exit ();
		} else {
			header ( "Location: cadastro.html" );
		}
	}
}

if (! $valido) {
	echo "<body onLoad='window.history.back();'>";
}
?>
