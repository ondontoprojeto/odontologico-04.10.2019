<?php

	include_once 'conexao.php';

	//
	$nomeprocedimento = $_POST['nomeprocedimento'];
	
    $sql = "INSERT INTO procedimento VALUES(null,'{$nomeprocedimento}')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgProcedimento.php?msg=".$msg);
?>