<?php
	try{
		$connection = new PDO("mysql:host=127.0.0.1;dbname=ecommerce", "root", "password");
		$connection->exec("set names utf8");
	}catch(PDOException $e){
		echo "Falha: " . $e->getMessage();
		exit();
	}
	
// 	echo "conectado com sucesso!";
?>
