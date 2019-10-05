<!DOCTYPE html>
<html>
	<head>
		<title>Odonto - Cadastro</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
        <script>
            function excluir(id){
                if(confirm('Deseja realmente excluir este Paciente?')){
                    location.href = 'deletarCadastro.php?id=' + id;   
                }
            }
        </script>
	</head>
	<body>
		<?php include 'header.php'?>

		<h1 class = "text-center mb-4">Cadastro de Pacientes</h1>
			<!--Botão que ativa o Modal-->
			
        <div class = "pl-5 pr-5">
            <span class = "d-flex d-inline-flex mb-2">
                <form class="form-inline">
                    <input class="form-control mr-2 ml-1" type="search" name = "nome">
                    <button class="btn btn-success btn-md mr-3" type="submit">Pesquisar</button>
                </form>
                <?php
                    if(isset($_GET["nome"])){
                        $nome = $_GET["nome"];
                        
                        include_once 'conexao.php';
                        
                        $sql = "SELECT * FROM pessoa WHERE nome
                        LIKE '%{$nome}%'";
                        
                        $result = mysqli_query($con, $sql); 
                        
                        $totalRegistros = mysqli_num_rows($result);

                        if($totalRegistros > 0){
                ?>
                        
                
                <button type="button" class="btn btn-primary btn-md ml-2" data-toggle="modal" data-target="#modal1">Cadastrar Paciente</button>

                <input type="button" class ="btn btn-dark ml-2" onclick="window.print();" value="Imprimir">
                <!--Modal  Tela de Cadastro-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-primary ml-5" id="modalTitle">Formulário de Cadastramento</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body justify-content-around">
                                <h5>Dados Pessoais:</h5>
                                <form class = "form-group mt-2" action="cadastraPessoa.php" method="post">
                                    <div class="form-group w-100">
                                        <label for="cpf">CPF:</label>
                                        <input type="text" class="form-control" id="cpf" placeholder="" name = "cpf">
                                    </div>

                                    <div class="form-group w-100">
                                        <label for="rg">RG:</label>
                                        <input type="text" class="form-control" id="rg" placeholder="" name = "rg">
                                    </div>

                                    <div class="form-group w-100">
                                        <label for="nome">Nome:</label>
                                        <input type="text" class="form-control" id="nome" placeholder="" name = "nome">
                                    </div>
                    

                                    <div class="form-group">
                                        <label for="orcamento">Orçamento:</label>
                                        <input type="text" class="form-control" id="orcamento" placeholder="" name = "orcamento">
                                    </div>

                                    <div class="form-group">
                                        <label for="telefone">Telefone:</label>
                                        <input type="text" class="form-control" id="telefone" placeholder="" name = "telefone">
                                    </div>

                                    <div class="form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" id="celular" placeholder="" name = "celular">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="" name = "email">
                                    </div>								


                                    <div class="form-group">
                                        <label for="cep">CEP:</label>
                                        <input type="text" class="form-control" id="cep" placeholder="" name = "cep">
                                    </div>

                                    <div class="form-group">
                                        <label for="endereco">Endereço:</label>
                                        <input type="endereco" class="form-control" id="endereco" placeholder="" name = "endereco">
                                    </div>	

                                    <div class="form-group">
                                        <label for="complemento">Complemento:</label>
                                        <input type="text" class="form-control" id="complemento" placeholder="" Digite seuname = "complemento">
                                    </div>


                                    <div class="form-group">
                                        <label for="bairro">Bairro:</label>
                                        <input type="text" class="form-control" id="bairro" placeholder="" name = "bairro">
                                    </div>

                                    <div class="form-group">
                                        <label for="nascimento">Data de Nascimento:</label>
                                        <input type="date" class="form-control" id="nascimento" placeholder="" name = "nascimento">
                                    </div>	
                                    <div class="form-group">
                                        <label for="cidade">Cidade:</label>
                                        <input type="text" class="form-control" id="cidade" placeholder="" name = "cidade">
                                    </div>

                                    <div class="form-group">
                                        <label for="uf">UF:</label>
                                        <input type="text" class="form-control" id="uf" placeholder="" name = "uf">
                                    </div>

                                    <div class="form-group">
                                        <label for="situacaoficha">Situação da Ficha:</label>
                                        <input type="text" class="form-control" id="situacaoficha" placeholder="" name = "situacaoficha">
                                    </div>

                                    <div class = "mb-2">
                                        <h5>-----------------------Anamnese---------------------</h5>
                                    </div>	

                                    <div class="form-group">
                                        <label for="data">Doenças de Base:</label>
                                        <input type="text" class="form-control" id="doencabase" placeholder="" name = "doencabase">
                                    </div>

                                    <div class="form-group">
                                        <label for="alergia">Alergias:</label>
                                        <input type="text" class="form-control" id="alergia" placeholder="" name = "alergia">
                                    </div>	

                                    <div class="form-group">
                                        <label for="medicamentos">Medicamentos:</label>
                                        <input type="text" class="form-control" id="medicamentos" placeholder="" name = "medicamentos">
                                    </div>

                                    <div class="form-group">
                                        <label for="cirurgia">Cirurgias:</label>
                                        <input type="text" class="form-control" id="cirurgia" placeholder="" name = "cirurgia">
                                    </div>

                                    <div class="form-group">
                                        <label for="internacoes">Internacões:</label>
                                        <input type="text" class="form-control" id="internacoes" placeholder="" name = "internacoes">
                                    </div>

                                    <div class="form-group">
                                        <label for="pa">P.A:</label>
                                        <input type="text" class="form-control" id="pa" placeholder="" name = "pa">
                                    </div>

                                    <div class="form-group">
                                        <label for="queixaprinc">Queixas Principais:</label>
                                        <input type="text" class="form-control" id="queixaprinc" placeholder="" name = "queixaprinc">
                                    </div>						


                                    <input type="submit" class="btn btn-primary float-right" value = "Cadastrar">
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </span>
            <div class = "overflow-auto ml-1 mr-1" style = "max-height: 550px">
                <table class="table border table-striped">
                    <thead id = "theadCadastro" class = "thead-dark">
                        <tr>
                            <th scope="col">CPF</th>
                            <th scope="col">RG</th>						
                            <th scope="col">Nome</th>
                            <th scope="col">Orçamento</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Celular</th>	
                            <th scope="col">Ficha</th>	
                            <th scope="col">Data de Nasci.</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody id = "tbodyCadastro">
                    <?php
                            while($array = mysqli_fetch_array($result)){
                            $idPessoa = $array['id_pessoa'];
                            $nascimento = $array['nascimento'];
                            $dtNasci = explode('-', $nascimento);
                            $datadeNascimento = $dtNasci[2] . "-" . $dtNasci[1]. "-" . $dtNasci[0];
                        ?>
                            <tr>
                                <td><?php echo $array['cpf'];?></td>
                                <td><?php echo $array['rg'];?></td>
                                <td><?php echo $array['nome'];?></td>
                                <td><?php echo $array['telefone'];?></td>
                                <td><?php echo $array['celular'];?></td>
                                <td><?php echo $array['situacaoficha'];?></td>
                                <td><?php echo $datadeNascimento?></td>
                            </tr>  
                            <td>
                                <a class="btn btn-warning btn-sm"  style="color:#fff" href="editarCadastro.php?id=<?php echo $idPessoa?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                <a class="btn btn-danger btn-sm"  style="color:#fff" href="#" onclick = "excluir(<?php echo $array['id_pessoa']?>)" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                            <?php
                            }
                        } else {
                            echo "Nenhum registro encontrado!";
                        }
                    }      
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>