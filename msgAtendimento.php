<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHome.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
    <title>Odontológico</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <?php $msg = $_GET["msg"];
             if($msg == "Gravado com sucesso"){?>
                <div class="alert alert-success" role="alert">
                    <?php echo $msg;?>
                </div>
        <?php } else {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg;?>
                </div>
        <?php };?>
        <a href="adm.php">Voltar</a>
    </div>
</body>
</html>