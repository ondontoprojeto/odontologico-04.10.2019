<?php

	include_once 'conexao.php';

	//
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$perfil = $_POST['perfil'];	
	


    $sql = "INSERT INTO login VALUES(null,'{$nome}','{$login}','{$senha}','{$perfil}')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgLogin.php?msg=".$msg);
?>