<?php

	include 'conexao.php';


	$idCliente = $_POST['idCliente'];
	$horario = $_POST['horario'];
	$nomeCli = $_POST['nomeCli'];
	$situacao = $_POST['situacao'];

	$sql = "INSERT INTO nome_Tabela (idCliente, horario, nome, situacao) VALUES(null, '{$horario}', '{$nomeCli}'. '{$situacao}')"; 


	mysqli_query($con, $sql)
?>