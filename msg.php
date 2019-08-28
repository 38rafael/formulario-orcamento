<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style type="text/css">
	input{
		background-color:#D8D8D8;
	}
	.container{
		background-color:#CEF6D8;
		text-align: justify;
		padding-bottom: 10%;
		
	}
	a{
		border: 1px solid;
		padding: 4px;
		background-color: #D8D8D8;

	}

</style>

<div class="container">
	<div class="col-sn">
		<a href="lista_usuarios.php">Voltar</a><br/><br/>
		<?php
		require 'config.php';
		$idCliente = $_GET['id'];
				$sql = "SELECT * FROM orcamento WHERE idcliente = '$idCliente'";
				$sql = $pdo->query($sql);
				if($sql->rowCount() > 0){
					foreach ($sql->fetchall() as $pedido) {				

						echo "Tipo de site: ".$pedido['tipo_site']."<br/><br/>";
						echo "Descrição do site: ".$pedido['desc_site']."<br/><br/>";
						echo "Modelo do site: " .$pedido['mod_site']."<br/><br/>";
						echo "Dominio da Empresa: ".$pedido['domin_empresa']."<br/><br/>";
						echo "Cidade da Empresa: ".utf8_encode($pedido['cidade_empresa'])."<br/><br/>";				

						
					}
				}
		?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>