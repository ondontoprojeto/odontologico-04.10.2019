<?php

	include_once 'conexao.php';

	//
	$nomeconsulta = $_POST['nomeconsulta'];

    $sql = "INSERT INTO tipoconsulta VALUES(null,'{$nomeconsulta}')"; 

	//$inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgAtendimento.php?msg=".$msg);
?>