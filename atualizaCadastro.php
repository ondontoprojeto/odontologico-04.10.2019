
<?php
    include 'conexao.php';

    $id = $_POST['id'];
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
    $uf= $_POST['uf'];
    $situacaoficha = $_POST['situacaoficha'];
    $doencabase = $_POST['doencabase'];
    $alergia = $_POST['alergia'];
    $medicamentos = $_POST['medicamentos'];
    $cirurgia = $_POST['cirurgia'];
    $internacoes = $_POST['internacoes'];
    $pa = $_POST['pa'];
    $queixaprinc = $_POST['queixaprinc'];


    $sql = "UPDATE pessoa SET `cpf`= '$cpf', `rg`= '$rg', `nome`='$nome', `orcamento`= '$orcamento', `telefone`='$telefone', `celular`='$celular', `email`= '$email', `cep`='$cep', `endereco`='$endereco', `complemento`= '$complemento', `bairro`='$bairro', `nascimento`='$nascimento', `cidade`='$cidade', `uf`='$uf', `situacaoficha`= '$situacaoficha', `doencabase`='$doencabase', `alergia`='$alergia', `medicamentos`='$medicamentos', `cirurgia`='$cirurgia', `internacoes`='$internacoes', `pa`='$pa', `queixaprinc`='$queixaprinc' WHERE `id_pessoa` = $id";


    $atualizar = mysqli_query($con, $sql)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Odonto - Atualização</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styleHeader.css">
</head>
<body>
    <?php include 'header.php'?>
        <div class="container" style="width:400px">
        <center>
            <h3>Editado com Sucesso!</h3>
            <div style="margin-top: 10px">
            <a href="cadastro.php" class="btn btn-sm btn-success" style="color:#fff">Voltar</a>
            </div>    
        </center>
        </div>
    ?>
</body>
</html>