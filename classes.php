<?php

	/* Essa é a classe */
	class Aluguel{

		public $idAluguel;
		public $idProduto;
		public $qntdeProduto;
		public $desconto;

		public valordoAluguel($idProduto, $qntdeProduto, $desconto){
		}
	}

	#
		/* Essas são as variáveis que vão acionar o método*/
		$idAluguel = "Meu pau";
		$idProduto = "menta";
		$qntdeProduto = "Pelé";
		$desconto = "Sei lá";

		/* Aqui a classe é acionada*/
		$tempAluguel = new Aluguel();

		/* Aqui o atributo é acionado*/
		$tempAluguel->idAluguel = $idAluguel;
		$tempAluguel->idProduto = $idProduto;
		$tempAluguel->qntdeProduto = $qntdeProduto;
		$tempAluguel->desconto = $desconto;

		/* Aqui é onde apresentado na tela*/
	#
?>