<?php

	include_once 'conexao.php';

	//Cadastramento de Produtos no Estoque
	$numeroProduto =  $_POST['nroproduto'];
	$nomeProduto =  $_POST['nomeproduto'];
	$categoria =  $_POST['categoria'];
	$quantidade =  $_POST['quantidade'];
	$fornecedor =  $_POST['fornecedor'];
	$vencimento =  $_POST['vencimento'];
	$complemento =  $_POST['complemento'];


   echo $sql = "INSERT INTO estoque VALUES(null,{$numeroProduto},'{$nomeProduto}','{$categoria}','{$quantidade}' , '{$fornecedor}', '{$vencimento}', '{$complemento}')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgEstoque.php?msg=".$msg);
?>