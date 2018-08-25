<div id="back_produtos">
	
	<?php include("components/connect_bd.php");?>

	<?php
		$sql = "SELECT idAluguel, desconto, descricao, valordoAluguel, data, hora, statusAluguel FROM aluguel WHERE statusAluguel = 'Ativo'";
		$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

		while ($registro = mysqli_fetch_array($resultado)) {
			$idAluguel = $registro['idAluguel'];
			$desconto = $registro['desconto'];
			$descricao = $registro['descricao'];
			$valordoAluguel = $registro['valordoAluguel'];
			$data = $registro['data'];
			$hora = $registro['hora'];
			$statusAluguel = $registro['statusAluguel'];

			include("components/card.php");
		}

		mysqli_close($strcon);
	?>
</div>