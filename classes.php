<?php

	/* Essa é a classe */
	class Aluguel{

		public $idAluguel;
		public $desconto;
		public $descricao;
		public $valordoAluguel;
		public $data;
		public $hora;
		public $statusAluguel;

		/* Método que inclui um Produto*/
		public function inserirProduto(){


		}

		/* Método que exclui um Produto*/
		public function excluirProduto(){


		}

		/* Método que calcula o valor do aluguel*/
		public function valordoAluguel(){
			/* Essa ação ainda não está correta */
			$this->valordoAluguel = 10*$this->narguile*$this->desconto;
		}
	}

	#
		# /* Essas são as variáveis que vão acionar o método*/

			$idAluguel = "a";
			$desconto = 1.1;
			$descricao = "c";
		#

		#/* Aqui a classe é acionada*/

			$tempAluguel = new Aluguel();
		#

		#/* Aqui o atributo é acionado*/

			$tempAluguel->idAluguel = $idAluguel;
			$tempAluguel->desconto = $desconto;
			$tempAluguel->descricao = $descricao;
		#

		#/* Aqui o metodo é acionado*/

			$tempAluguel->valordoAluguel();
			$tempAluguel->inserirProduto();
			$tempAluguel->excluirProduto();
		#

		#/* Aqui é onde apresentado na tela*/

			echo "O valor do Aluguel é: " .$tempAluguel->valordoAluguel;
		#
	#

	class Produto{

		public $idProduto;
		public $nome;
		public $preco;
		public $quantidade;
		public $descricao;
	}

	class Venda{

		public $idVenda;
		public $narguile;
		public $desconto;
		public $descricao;

		public function valordaVenda(){

		}

		public function incluirProduto(){

		}

		public function excluirProduto(){

		}
	}

	class Cliente{

		public $idCliente;
	}

	class Pessoa{

		public $nome;
	}

	class Funcionario{

		public $idFuncionario;
		public $cpf;
	}

	class ListadeCompras{

		public $idLista;
		public $produto;
		public $preço;
		public $descricao;

		public function inserirProduto(){


		}

		public function excluirProduto(){


		}

		public function valordaLista(){

			
		}
	}

?>