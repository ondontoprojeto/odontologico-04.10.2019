<?php

	include_once 'conexao.php';

	//
	$nome = $_POST['nome'];
	$data = $_POST['data'];
    $descricao = $_POST['descricao'];
    $dentista = $_POST['dentista'];
	
	


    $sql = "INSERT INTO atendimento VALUES(null,'{$nome}','{$data}', null, '{$descricao}','{$dentista}')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgAtendimento.php?msg=".$msg);
?>