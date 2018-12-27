<?php

	$connect = mysqli_connect("localhost", "root", "", "narguile");

	$number = count($_POST["input_quantidade_venda"]);

	$soma_venda = $_POST['soma_venda'];

	$sql = "INSERT INTO vendas(preco_venda, data, hora) VALUES";
	$sql .= "('$soma_venda', CURDATE(), CURTIME())";
	mysqli_query($connect, $sql);

	$id_venda = mysqli_insert_id($connect);

	if($number > 0) {

		for($i=0; $i<$number; $i++) {

			if(trim($_POST["input_quantidade_venda"][$i] != '')) {

				$sql2 = "INSERT INTO venda_produto(quantidade, id_venda) VALUES('".mysqli_real_escape_string($connect, $_POST["input_quantidade_venda"][$i])."', '$id_venda')";
				mysqli_query($connect, $sql2);
			}  
		}

		echo "Venda cadastrada!";  
	}  

	else {

		echo "Não rolou";  
	}
?>