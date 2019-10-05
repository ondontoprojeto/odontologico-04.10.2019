<?php

	include_once 'conexao.php';

	//
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$nome = $_POST['nome'];
	$orcamento = $_POST['orcamento'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$cep = $_POST['cep'];
	$endereco = $_POST['endereco'];
	$complemento = $_POST['complemento'];
	$bairro = $_POST['bairro'];
	$nascimento = $_POST['nascimento'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$situacaoficha = $_POST['situacaoficha'];


	//Anaminésia
	$doencabase = $_POST['doencabase'];
	$alergia = $_POST['alergia'];
	$medicamentos = $_POST['medicamentos'];
	$cirurgia = $_POST['cirurgia'];
	$internacoes = $_POST['internacoes'];
	$pa = $_POST['pa'];
	$queixaprinc = $_POST['queixaprinc'];
		
	

    $sql = "INSERT INTO pessoa VALUES(null,'{$cpf}','{$rg}','{$nome}','{$orcamento}' , '{$telefone}', '{$celular}', '{$email}', '{$cep}', '{$endereco}', '{$complemento}', '{$bairro}', '{$nascimento}', '{$cidade}', '{$uf}' , '{$situacaoficha}', '{$doencabase}' ,  '{$alergia}', '{$medicamentos}' , '{$cirurgia}' ,  '{$internacoes}' , '{$pa}' , '{$queixaprinc}')"; 


	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Cadastrado com sucesso" : "Erro ao Cadastrar";

	header("location:msg.php?msg=".$msg);
?>