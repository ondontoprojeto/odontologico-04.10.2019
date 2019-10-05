<?php

	include_once 'conexao.php';


	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$datadeNascimento = $_POST['datadeNascimento'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$cep = $_POST['cep'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];


	$sql = "INSERT INTO cliente VALUES('$cpf', '$nome', '$datadeNascimento', '$telefone', '$celular', '$email', '$cep', $numero, '$complemento', '$bairro', '$cidade', '$uf')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msg.php?msg=".$msg);
?>