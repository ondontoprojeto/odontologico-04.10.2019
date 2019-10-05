<!DOCTYPE html>
<html>
	<head>
		<title>Odontologico - Agendamento</title>
		<meta charset="utf-8">
		
		
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
       
      
        <script>
            function excluir(id){
                if(confirm('Deseja realmente excluir este produto?')){
                    location.href = 'deletarEstoque.php?id=' + id;   
                }
            }
        </script>
	</head>
	<body>
		
		<?php include 'header.php'?>

        <h1 class = "text-center mb-4">Agenda de Pacientes</h1>
		
		
		<div class = "pl-5 pr-5">
            <button type="button" class="btn btn-primary btn-md ml-1" data-toggle="modal" data-target="#modal1">Marcar Consulta</button>
            <input type="button" class ="btn btn-dark ml-5" onclick="window.print();" value="Imprimir">
            <!--Modal-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-primary" id="modalTitle">Cadastro de Consultas</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5 class="front-left">Dados da Consulta</h5>
                                <form class = "form-group mt-2" action="admcadatendimento.php" method="post"> 
                                                                      
                                    <form action="action_cadastro.php">
                                      Buscar Pessoa:
                                      <input type="search" name="buscapessoa">                                      
                                      <button class="btn btn-primary btn-md mr-3" type="submit">Busca Pessoa</button>
                                      
                                       <?php

                                include_once 'conexao.php';

                                $sql = "SELECT * FROM pessoa";

                                $busca = mysqli_query($con, $sql);

                                while($array = mysqli_fetch_array($busca)){
                                    
                                    $nome = $array['nome'];                                        
                               
                                ?>
                               
                                    <?php } ?>                                    
                                      
                                    </form>
                                    
                                    
                                    <div class="form-group">
                                        <label for="nome">Paciente</label>
                                        <input type="text" class="form-control" id="nome" placeholder="" name = "nome">
                                    </div>
                                                                       <!-- AQUI É A LISTA DE SELEÇÃO DA consultas-->
                                    <div class="form-group">
                                    <label>Tipo da Consulta</label>
                                    <select class="form-control" name="tipoconsulta" id="id_tipoconsu" placeholder="" name="id_tipoconsu">
                   
                                       <?php
                                       include_once 'conexao.php';

                                $sql = "SELECT * FROM tipoconsulta";

                                $busca = mysqli_query($con, $sql);

                                while($array = mysqli_fetch_array($busca)){
                                    
                                    $id_tipoconsulta = $array['id_tipoconsu'];                                        
                               
                                ?>
                               
                                    <?php } ?>                                     
                    
                                        
                                        
                    
                                </select>
                            </div>

                                   <div class="form-group">
                                        <label for="id_paciente">Data</label>
                                        <input type="date" class="form-control" id="data" placeholder="" name = "data">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="id_paciente">Hora</label>
                                        <input type="time" class="form-control" id="hora" placeholder="" name = "hora">
                                    </div>
                                   
                                    
                                <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" id="descricao" placeholder="" name = "descricao">
                                    </div>
                                    <div class="form-group">
                                        <label for="dentista">Dentista</label>
                                        <input type="text" class="form-control" id="dentista" placeholder="" name = "dentista">
                                    </div>

                                    <input type="submit" class="btn btn-primary float-right" value = "Cadastrar">
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "overflow-auto ml-1 mr-1" style = "max-height: 550px">
                    <table class="table w-100 mt-4">
                        <thead class="thead-dark">
                            <tr>
                                
                                <th scope="col">Tipo da Consulta</th>
                                <th scope="col">Data</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Dentista</th>                                
                                <th scope = "col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include_once 'conexao.php';

                                $sql = "SELECT * FROM atendimento";

                                $busca = mysqli_query($con, $sql);

                                while($array = mysqli_fetch_array($busca)){


                                    
                                    $nome = $array['nome'];
                                    $data = $array['data'];
                                    $descricao = $array['descricao'];
                                    $dentista = $array['dentista'];                             
                               

                                ?>

                                <tr>
                                    
                                    <td><?php echo $nome?></td>
                                    <td><?php echo $data?></td>
                                    <td><?php echo $descricao?></td>
                                    <td><?php echo $dentista?></td>
                                    <td>

                                        <a class="btn btn-secondary btn-sm"  style="color:#fff" href="#" onclick = "excluir(<?php echo $array['id_pessoa']?>)" role="button"><i  aria-hidden="true">PROCEDIMENTOS</i></a>           

                                        <a class="btn btn-warning btn-sm"  style="color:#fff" href="editarEstoque.php?id=<?php echo $idEstoque?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                        <a class="btn btn-danger btn-sm"  style="color:#fff" href="#" onclick="excluir(<?php echo $array['id_estoque']; ?>)" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>     
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>