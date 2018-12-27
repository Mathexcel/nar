<div id="back_produtos">
	
	<?php include("components/connect_bd.php");?>

	<?php
	
		$sql = "SELECT id_aluguel, mesa, descricao, data, hora, preco_aluguel, status FROM aluguel WHERE status = 'Ativo'";
		$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

		while ($registro = mysqli_fetch_array($resultado)) {

			$id_aluguel = $registro['id_aluguel'];
			$mesa = $registro['mesa'];
			$descricao = $registro['descricao'];
			$data = $registro['data'];
			$hora = $registro['hora'];
			$preco = $registro['preco_aluguel'];
			$status = $registro['status'];

			include("components/card.php");
		}

		mysqli_close($strcon);
	?>
</div>