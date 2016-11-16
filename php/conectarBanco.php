<?php
	try{
		$connection = new PDO("mysql:host=127.0.0.1;dbname=ecommerce2", "root", "knowledge");
		$connection->exec("set names utf8");
	}catch(PDOException $e){
		echo "Falha: " . $e->getMessage();
		exit();
	}
?>