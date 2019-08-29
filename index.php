<?php
require 'config.php';


if(isset($_POST['email']) && !empty($_POST['email'])){

	$email = addslashes($_POST['email']);	
	 $nome = addslashes($_POST['nome']);
	 $telefone= addslashes($_POST['telefone']);
	 $nome_empresa= addslashes($_POST['nome_empresa']);
	 $razao_social= addslashes($_POST['razao_social']);
	 $cnpj = addslashes($_POST['cnpj']);
 
	$sql = "INSERT INTO dados_cliente SET email = '$email', nome = '$nome', telefone = '$telefone', nome_empresa = '$nome_empresa', razao_social = '$razao_social', cnpj = '$cnpj'";	
	$pdo->query($sql);

	$sql = "SELECT id FROM dados_cliente ORDER BY id DESC LIMIT 1";
	$sql = $pdo->query($sql);

	$id_cliente = $sql->fetch();

	$_SESSION['id_cliente'] = $id_cliente['id'];


	header("Location:pedido_contrat.php");	
		
}
?>



<div class="container">
	<div class="col-sn alin-itens-center">
		<h3>Responda o Formulári abaixo:</h3>

		<form method="POST">			
			E-Mail:<br/>
			<input type="email" name="email"><br/><br/>
			Quem Respondeu?:<br/>
			<input type="text" name="nome"><br/><br/>
			Telefone (Watsapp):<br/>
			<input type="text" name="telefone"><br/><br/>
			Nome Da Sua Empresa (Fantasia):<br/>
			<input type="text" name="nome_empresa"><br/><br/>
			Razão Social:<br>
			<input type="text" name="razao_social"><br/><br/>
			CNPJ:<br>
			<input type="text" name="cnpj"><br><br>

			<input type="submit" value="Enviar">
			
		</form>
	</div>
</div>
