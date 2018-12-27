<?php
	$strcon = mysqli_connect('localhost', 'root', '') or die('Erro ao conectar ao banco de dados');
	mysqli_select_db($strcon, 'narguile');
?>