<?php
require_once 'conectarBanco.php';

$valido = false;
$CPFValido = false;

// echo "<BR>Email: " . $_COOKIE ['cEmailCadastro'];
// echo "<BR>CPF: " . $_COOKIE ['cCPFCNPJ'];
// echo "<BR>CEP: " . $_COOKIE ['cCEP'];
// echo "<BR>Rua: " . $_COOKIE ['cRua'];
// echo "<BR>Bairro: " . $_COOKIE ['cBairro'];
// echo "<BR>Cidade: " . $_COOKIE ['cCidade'];
// echo "<BR>UF: " . $_COOKIE ['cUf'];

if (isset ( $_POST ['fValidar'] ) && $_POST ['fValidar'] == true) {
	if (isset ( $_COOKIE ['cEmailCadastro'] ) && strlen ( $_COOKIE ['cEmailCadastro'] ) < 7) {
		echo "Falha na validacao do EMAIL";
	} else if (isset ( $_POST ['fNome'] ) && strlen ( $_POST ['fNome'] ) < 3) {
		echo "Falha na validacao do NOME";
	} else if (isset ( $_POST ['fSNome'] ) && strlen ( $_POST ['fSNome'] ) < 3) {
		echo "Falha na validacao do SOBRENOME";
	} else if (is_numeric ( $_COOKIE ['cCPFCNPJ'] ) && strlen ( $_COOKIE ['cCPFCNPJ'] ) < 11 || is_numeric ( $_COOKIE ['cCPFCNPJ'] ) && strlen ( $_COOKIE ['cCPFCNPJ'] ) > 14) {
		echo "Falha na validacao do CPF";
	} else if (strlen ( $_COOKIE ['cCPFCNPJ'] ) == 11) {
		$peso1 = 10;
		$peso2 = 11;
		$soma1 = 0;
		$soma2 = 0;
		$digito1 = 0;
		$digito2 = 0;
		
		for($i = 0; $i < 9; $i ++) {
			$soma1 += $_COOKIE ['cCPFCNPJ'] [$i] * $peso1 --;
		}
		
		$resto1 = $soma1 % 11;
		
		if (($digito1 = 11 - $resto1) >= 10) {
			$digito1 = 0;
		}
		
		for($i = 0; $i < 9; $i ++) {
			$soma2 += $_COOKIE ['cCPFCNPJ'] [$i] * $peso2 --;
		}
		
		$soma2 += $digito1 * $peso2 --;
		$resto2 = $soma2 % 11;
		
		if (($digito2 = 11 - $resto2) >= 10) {
			$digito2 = 0;
		}
		
		if ($_COOKIE ['cCPFCNPJ'] [9] == $digito1 && $_COOKIE ['cCPFCNPJ'] [10] == $digito2) {
			$CPFValido = true;
		} else {
			echo "CPF invalido!";
		}
	}
	
	if ($CPFValido) {
		if (isset ( $_POST ['fDia'] ) && $_POST ['fDia'] == 0) {
			echo "Falha na validacao do DIA";
		} else if (isset ( $_POST ['fMes'] ) && $_POST ['fMes'] == 0) {
			echo "Falha na validacao do MES";
		} else if (isset ( $_POST ['fAno'] ) && $_POST ['fAno'] == 0) {
			echo "Falha na validacao do ANO";
		} else if (isset ( $_POST ['fSexo'] ) && $_POST ['fSexo'] == "0") {
			echo "Falha na validacao do SEXO";
		} else if (is_numeric ( $_POST ['fDDD1'] ) && strlen ( $_POST ['fDDD1'] ) < 2 || is_numeric ( $_POST ['fDDD1'] ) && strlen ( $_POST ['fDDD1'] ) > 2) {
			echo "Falha na validacao do DDD1";
		} else if (is_numeric ( $_POST ['fTelefone'] ) && strlen ( $_POST ['fTelefone'] ) < 8 || is_numeric ( $_POST ['fTelefone'] ) && strlen ( $_POST ['fTelefone'] ) > 8) {
			echo "Falha na validacao do TELEFONE";
		} else if (is_numeric ( $_POST ['fDDD2'] ) && strlen ( $_POST ['fDDD2'] ) < 2 || is_numeric ( $_POST ['fDDD2'] ) && strlen ( $_POST ['fDDD2'] ) > 2) {
			echo "Falha na validacao do DDD2";
		} else if (is_numeric ( $_POST ['fCelular'] ) && strlen ( $_POST ['fCelular'] ) < 8 || is_numeric ( $_POST ['fCelular'] ) && strlen ( $_POST ['fCelular'] ) > 9) {
			echo "Falha na validacao do CELULAR";
		} else if (is_numeric ( $_COOKIE ['cCEP'] ) && strlen ( $_COOKIE ['cCEP'] ) < 8 || is_numeric ( $_COOKIE ['cCEP'] ) && strlen ( $_COOKIE ['cCEP'] ) > 8) {
			echo "Falha na validacao do CEP";
		} else if (isset ( $_COOKIE ['cRua'] ) && strlen ( $_COOKIE ['cRua'] ) == 0) {
			echo "Falha na validacao do ENDERECO";
		} else if (is_numeric ( $_POST ['fNumero'] ) && strlen ( $_POST ['fNumero'] ) < 1 || is_numeric ( $_POST ['fNumero'] ) && strlen ( $_POST ['fNumero'] ) > 6) {
			echo "Falha na validacao do NUMERO RESIDENCIAL";
		} else if (isset ( $_POST ['fComplemento'] ) && strlen ( $_POST ['fComplemento'] ) < 2) {
			echo "Falha na validacao do COMPLEMENTO";
		} else if (isset ( $_COOKIE ['cBairro'] ) && strlen ( $_COOKIE ['cBairro'] ) == 0) {
			echo "Falha na validacao do BAIRRO";
		} else if (isset ( $_COOKIE ['cUf'] ) && strlen ( $_COOKIE ['cUf'] ) == 0) {
			echo "Falha na validacao do ESTADO";
		} else if (isset ( $_COOKIE ['cCidade'] ) && strlen ( $_COOKIE ['cCidade'] ) == 0) {
			echo "Falha na validacao do CIDADE";
		} else if (isset ( $_POST ['fReceberOferta'] ) && $_POST ['fReceberOferta'] == "0") {
			echo "Falha na validacao do RECEBER OFERTA";
		} else if (isset ( $_POST ['fConheceu'] ) && $_POST ['fConheceu'] == "0") {
			echo "Falha na validacao do COMO CONHECEU";
		} else if (isset ( $_POST ['fPolitica'] ) && $_POST ['fPolitica'] == false) {
			echo "Falha na validacao do POLITICAS DO SITE";
		} else {
			$valido = true;
			session_start ();
			
			// VERIFICA SE JA HA ALGUM REGISTRO GRAVADO COM OS DADOS INFORMADOS
			
			$sql = "SELECT * FROM telefone WHERE ddd = ? and telefone = ?";
			
			$stmt = $connection->prepare ( $sql );
			
			$stmt->bindParam ( 1, $_POST ['fDDD1'] );
			$stmt->bindParam ( 2, $_POST ['fTelefone'] );
			
			if ($stmt->execute ()) {
				if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
					setcookie ( "cValidationError", "telefone", time () + (500 * 500 * 500), ";path=/" );
					$valido = false;
					header ( "Location: ../cadastro.html" );
				} else {
					// echo "Email ou senha incorretos!";
				}
			}
			
			if ($valido) {
				$sql = "SELECT * FROM telefone WHERE ddd = ? and telefone = ?";
				
				$stmt = $connection->prepare ( $sql );
				
				$stmt->bindParam ( 1, $_POST ['fDDD2'] );
				$stmt->bindParam ( 2, $_POST ['fCelular'] );
				
				if ($stmt->execute ()) {
					if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
						setcookie ( "cValidationError", "celular", time () + (500 * 500 * 500), ";path=/" );
						$valido = false;
						header ( "Location: ../cadastro.html" );
					} else {
						// echo "Email ou senha incorretos!";
					}
				}
			}
			// INSERCAO DOS DADOS NO BANCO DE DADOS
			
			echo "<BR> Sessao Pass: " . $_SESSION ['fPass'];
			
			if ($valido) {
				
				$sql = "INSERT INTO login (email,senha) VALUES ( ?, ? );";
				
				$stmt = $connection->prepare ( $sql );
				
				$stmt->bindParam ( 1, $_COOKIE ['cEmailCadastro'] );
				$stmt->bindParam ( 2, $_SESSION ['fPass'] );
				
				$stmt->execute ();
				
				if ($stmt->errorCode () != "00000") {
					$valido = false;
					echo "Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
					exit ();
				} else {
					// header ( "Location: ../cadastro.html" );
					// echo "<BR> Registro feito com sucesso!";
				}
				
				$sql = "INSERT INTO endereco (cep, endereco, numero, complemento, bairro, cidade, estado, tipo) VALUES (?, ?, ?, ?, ?, ?, ?, 'Principal');";
				
				$stmt = $connection->prepare ( $sql );
				
				$stmt->bindParam ( 1, $_COOKIE ['cCEP'] );
				$stmt->bindParam ( 2, $_COOKIE ['cRua'] );
				$stmt->bindParam ( 3, $_POST ['fNumero'] );
				$stmt->bindParam ( 4, $_POST ['fComplemento'] );
				$stmt->bindParam ( 5, $_COOKIE ['cBairro'] );
				$stmt->bindParam ( 6, $_COOKIE ['cCidade'] );
				$stmt->bindParam ( 7, $_COOKIE ['cUf'] );
				
				$stmt->execute ();
				
				if ($stmt->errorCode () != "00000") {
					$valido = false;
					echo "Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
					exit ();
				} else {
					// header ( "Location: ../cadastro.html" );
					// echo "Endereco salvo com sucesso!";
				}
				
				$sql = "SELECT cod FROM endereco WHERE cep = ? AND numero = ?";
				
				$stmt = $connection->prepare ( $sql );
				
				$stmt->bindParam ( 1, $_COOKIE ['cCEP'] );
				$stmt->bindParam ( 2, $_POST ['fNumero'] );
				
				if ($stmt->execute ()) {
					if ($registro = $stmt->fetch ( PDO::FETCH_OBJ )) {
						// echo "Login efetuado com SUCESSO!";
						$codEndereco = $registro->cod;
						
						$sql = "INSERT INTO cliente (cpf, login_email, endereco_cod, nome, sobre_nome, data_nasc, sexo)
					VALUES (?, ?, ?, ?, ?, ?, ?);";
						
						$stmt = $connection->prepare ( $sql );
						
						$dataNasc = $_POST ['fAno'] . '-' . $_POST ['fMes'] . '-' . $_POST ['fDia'];
						
						$stmt->bindParam ( 1, $_COOKIE ['cCPFCNPJ'] );
						$stmt->bindParam ( 2, $_COOKIE ['cEmailCadastro'] );
						$stmt->bindParam ( 3, $codEndereco );
						$stmt->bindParam ( 4, $_POST ['fNome'] );
						$stmt->bindParam ( 5, $_POST ['fSNome'] );
						$stmt->bindParam ( 6, $dataNasc );
						$stmt->bindParam ( 7, $_POST ['fSexo'] );
						
						$stmt->execute ();
						
						if ($stmt->errorCode () != "00000") {
							$valido = false;
							echo "Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
							exit ();
						} else {
							// header ( "Location: ../cadastro.html" );
							// echo "<BR>Cadatro do CLIENTE realizado com sucesso! <BR>";
						}
						
						// echo "<BR> Codigo:" . $codEndereco;
					} else {
						// echo "Falha no cadastro";
						// header("Location: ../login_cadastro.html");
					}
				}
				
				$sql = "INSERT INTO telefone (ddd, telefone, cliente_cpf, tipo) VALUES ( ?, ?, ?, 'Telefone');";
				
				$stmt = $connection->prepare ( $sql );
				
				$stmt->bindParam ( 1, $_POST ['fDDD1'] );
				$stmt->bindParam ( 2, $_POST ['fTelefone'] );
				$stmt->bindParam ( 3, $_COOKIE ['cCPFCNPJ'] );
				
				$stmt->execute ();
				
				if ($stmt->errorCode () != "00000") {
					$valido = false;
					echo "<BR>Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
					exit ();
				} else {
					// header ( "Location: ../cadastro.html" );
					// echo "<BR>Cadatro do TELEFONE realizado com sucesso! <BR>";
				}
				
				$sql = "INSERT INTO telefone (ddd, telefone, cliente_cpf, tipo) VALUES ( ?, ?, ?, 'Celular');";
				
				$stmt = $connection->prepare ( $sql );
				
				$stmt->bindParam ( 1, $_POST ['fDDD2'] );
				$stmt->bindParam ( 2, $_POST ['fCelular'] );
				$stmt->bindParam ( 3, $_COOKIE ['cCPFCNPJ'] );
				
				$stmt->execute ();
				
				if ($stmt->errorCode () != "00000") {
					$valido = false;
					echo "<BR>Erro Codigo " . $stmt->errorCode () . ": " . implode ( ",", $stmt->errorInfo () );
					exit ();
				} else {
					
					$emailLogin = explode ( " ", $_POST ['fNome'] );
					
					setcookie ( "cLoginValido", "true", time () + (86400 * 30), ";path=/" );
					setcookie ( "cEmailLogin", $emailLogin[0], time () + (86400 * 30), ";path=/" );
					
					setcookie ( "cCadastroInicialValido", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cCEP", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cRua", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cBairro", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cCidade", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cUf", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cEmailCadastro", "", time () - (86400 * 30), ";path=/" );
					setcookie ( "cCPFCNPJ", "", time () - (86400 * 30), ";path=/" );
					
					header ( "Location: ../minha_conta.html" );
					// echo "<BR>Cadatro do CELULAR realizado com sucesso! <BR>";
				}
			}
			echo "Sucesso!!";
			// header ( "Location: ../minha_conta.html" );
		}
	}
}
if (! $valido) {
	// echo "<body onLoad='window.history.back();'>";
	header ( "Location: ../cadastro.html" );
	echo "<BR><BR>Falhou!";
}
?>