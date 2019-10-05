<!DOCTYPE html>
<html>
<head>
	<title>Odonto - Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<!--Cabeçalho do Sistema (LOGO)-->
	<header id = "cabecalho" class="d-flex border border-dark">
			<img class = "m-2 p-2" src="img/logo.png">
	</header>
	<!-- Área de login do Sistema (LOGIN) -->
		<div id = "areaDeLogin">
			<form action = "autenticacaoLogin.php" method = "post">
				<legend><b>BEM-VINDO</b></legend>


				<label id = "labelUsuario" for="usuario">Usuário:</label>
				<div id = "divUsuario" class = "form-group input-group w-75">
						<span class = "input-group-text" id ="addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name = "login" id="usuario" placeholder="Digite seu nome de usuário:" aria-describedby = "addon1">
				</div>


				<label id = "labelSenha" for="senha">Senha:</label>
				<div id = "divSenha" class="form-group input-group  w-75">
					<span class = "input-group-text" id ="addon2"><i class="fa fa-lock" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name = "senha" id="senha" placeholder="Digite sua senha:" aria-describedby = "addon2">
	
				</div>


				<input id = "buttonEsqueciSenha" type = "submit" value = "Esqueci minha senha" class = "btn btn-light">
				<input id = "buttonEntrar" type="submit" value = "Entrar" class="btn btn-light"> 			</form>
		</div>

	<!-- 	<?php
            // if(isset($_GET["erro"]))
            //     echo $_GET["erro"]; 
        ?> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
