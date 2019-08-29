<?php 
require 'config.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {

	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = $pdo->query("SELECT * FROM admin WHERE email = '$email' AND senha = '$senha'");
		if($sql->rowCount()>0){
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];
			
			header("Location: lista_usuarios.php");
		}else{
			//echo "Você não está cadastrado!";

			echo "<script>alert('Você não privilegios de administrador!')</script>";

		}
}
?>

<h3>Faça seu login:</h3>
<form method="POST">			
	E-Mail:<br/><br/>
	<input type="email" name="email"><br/><br/>
	Senha:<br/><br/>
	<input type="password" name="senha"><br/><br/>
	<input type="submit" value="Enviar">
	
</form>
