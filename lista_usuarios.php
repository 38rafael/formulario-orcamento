<?php
require 'config.php';
?>

<table border="1px"width="100%">
	<th>Nome</th>
	<th>E-mail</th>
	<th>Telefone</th>
	<th>Empresa</th>
	<th>Razão Social</th>
	<th>CNPJ</th>
	<th>Ações</th>
	
	<?php
		$sql = "SELECT * FROM dados_cliente";
		$sql = $pdo->query($sql);
		if($sql->rowCount() > 0){
			foreach ($sql->fetchall() as $usuario) {
				echo "<tr>";

				echo "<td>".$usuario['nome']."</td>";
				echo "<td>".$usuario['email']."</td>";
				echo "<td>".$usuario['telefone']."</td>";
				echo "<td>".$usuario['nome_empresa']."</td>";
				echo "<td>".$usuario['razao_social']."</td>";
				echo "<td>".$usuario['cnpj']."</td>";

				echo '<td><a href="msg.php?id='.$usuario['id'].'">Listar</a> </td>';
				echo "</tr>";
			}
		}
	?>
</table>
