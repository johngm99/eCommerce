<?php
require_once 'conectarBanco.php';

$valido = false;

if (isset ( $_POST ['fValidar'] ) && $_POST ['fValidar'] == true) {
	if (isset ( $_POST ['fEmailLogin'] ) && strlen ( $_POST ['fEmailLogin'] ) < 7) {
	} else if (isset ( $_POST ['fPassLogin'] ) && strlen ( $_POST ['fPassLogin'] ) < 6) {
	} else {
		$valido = true;
		
		// echo "Sucesso!";
		
		$sql = "SELECT email FROM login WHERE email = ? and senha = ?";
		
		$stmt = $connection->prepare ( $sql );
		
		$stmt->bindParam ( 1, $_POST ['fEmailLogin'] );
		$stmt->bindParam ( 2, md5 ( $_POST ['fPassLogin'] ) );
		
		if ($stmt->execute ()) {
			if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
// 				echo "Login efetuado com SUCESSO!";
				header("Location: minha_conta.php");
			} else {
// 				echo "Email ou senha incorretos!";
				echo "<body onLoad='window.history.back();'>";
			}
		}
		
		if ($stmt->errorCode () != "00000") {
			$valido = false;
			echo "Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
		} else {
			echo "<BR><BR> Acao efetuada com sucesso!";
		}
	}
}

echo $_POST ['fPassLogin'];
?>
