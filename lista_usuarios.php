<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">

	.container{
		background-color:#CEF6D8;
		text-align: center;
		padding-bottom: 10%;
		
	}

	#menu{
			border: 1px solid;
			padding: 4px;
			background-color: #D8D8D8;
			margin-top: 20px;
		}
</style>


<?php
require 'config.php';
?>
<div class="container">
	<div class="col-sn">
		<a href="login.php" id= "menu">Sair</a></br></br>

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
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
