<?php
require 'config.php';

$idCliente = $_SESSION['id_cliente'];

if(isset($_POST['domin_empresa']) && !empty($_POST['domin_empresa'])){
	$tipo_site = addslashes($_POST['tipo_site']);
	//$loja_virtual= addslashes($_POST['loja_virtual']);
	//$loja_institucional= addslashes($_POST['loja_institucional']);
	$desc_site = addslashes($_POST['desc_site']);
	$mod_site = addslashes($_POST['mod_site']);
	$domin_empresa = addslashes($_POST['domin_empresa']);
	$cidade_empresa = addslashes($_POST['cidade_empresa']);
	$concorrentes = addslashes($_POST['concorrentes']);

	$sql= "INSERT INTO orcamento SET  tipo_site = '$tipo_site', desc_site = '$desc_site', mod_site = '$mod_site', domin_empresa = '$domin_empresa', cidade_empresa = '$cidade_empresa', idcliente = '$idCliente'";
	$sql = $pdo->query($sql);

	echo "<script>alert('Sua mensagem foi enviada com sucesso!')</script>";

	header("Location:pedido_finalizado.php");
	
}


?>

<h3>
<p>Aqui você irá descrever o que deseja para seu prejeto!</p>
</h3>
<form method="POST">
	Qual é o tipo de site que vc quer?
	<input type="text" name="tipo_site"><br/><br/>			
	Descreva abaixo os pontos que mais te atraem:
	<input type="text" name="desc_site"><br/><br/>  
	Modelo de site (URL):
	<input type="text" name="mod_site"><br><br>
	Insira o Dominio da sua Empresa:
	<input type="text" name="domin_empresa"><br><br>
	Qual é a cidade que sua empresa está localizada?
	<input type="text" name="cidade_empresa"><br/><br/>
	Insira o Dominio de site concorrentes que você gostaria que o seu acompanhasse<br> e as tendências, informe o que mais chama sua atenção:
	<input type="text" name="concorrentes"><br><br>
	<input type="submit" value="Enviar">

</form>
<a href="index.php" id= "menu">Sair</a></br></br>
