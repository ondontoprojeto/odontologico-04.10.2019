<?php
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	include_once 'conexao.php';

	$sql = "SELECT * FROM login WHERE `login` = '".$login."' AND `senha`= '".$senha."'";

	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result) == 1){
		$array = mysqli_fetch_array($result);
		$_SESSION["login"] = $array['login'];
		$_SESSION['senha'] = $array['senha'];
		header("location:home.php");
	} else {
		$msg = "Login ou Senha Inválidas!";
		header("location:login.php?erro=".$msg);
	}

?>
