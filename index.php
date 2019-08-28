<?php 
require 'config.php';
?>

<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.bundle.js">
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.js">


<!--

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->


<style type="text/css">
	
	.container{
		background-color:#CEF6D8;
		text-align: center;
		padding-bottom: 10%;
		
	}

</style>

<?php



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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>