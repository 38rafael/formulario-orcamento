<?php 
session_start();
try{
	$pdo = new PDO("mysql:dbname=cliente_mensagem;host=localhost", "root", "");

}catch(PDOException $e){
	echo "Falhou a conexão com o banco de dados. ".$e->getMessage();
}

?>