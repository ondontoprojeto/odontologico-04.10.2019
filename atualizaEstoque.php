<?php
    include_once 'conexao.php';
    $id = $_POST['id'];
    $nroProduto = $_POST['nroproduto'];
    $nomeProduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    $vencimento = $_POST['vencimento'];
    $complemento = $_POST['complemento'];


    $sql = "UPDATE estoque SET `numeroproduto`= '$nroProduto', `nomeproduto`='$nomeProduto', `categoria`= '$categoria', `quantidade`='$quantidade', `fornecedor`='$fornecedor', `vencimento`='$vencimento', `complemento`='$complemento' WHERE `id_estoque` = $id";


    $atualizar = mysqli_query($con, $sql);
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
            <a href="estoque.php" class="btn btn-sm btn-success" style="color:#fff">Voltar</a>
            </div>    
        </center>
        </div>
    ?>
</body>
</html>