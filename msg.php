
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