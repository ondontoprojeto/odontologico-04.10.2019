
<?php
	include 'conexao.php';

	$sql = "SELECT nome, idade FROM 'tabelaBancoDeDados'";
	$buscar = mysqli_query($con, $sql);

	while($array = mysqli_fetch_array($buscar)){

		$nome =  $array['nome'];
		$idade =  $array['idade'];
?>
	<tr>
		<td><?php echo $nome; ?></td>
		<td><?php echo $idade; ?></td>
	</tr>
<?php } ?>




   <?php
                            include_once 'conexao.php';

                            $sql = "SELECT * FROM pessoa";

                            $busca = mysqli_query($con, $sql);

                            while($array = mysqli_fetch_array($busca)){


                                $idPessoa = $array['id_pessoa'];
                                $cpf = $array['cpf'];
                                $rg = $array['rg'];
                                $nome = $array['nome'];
                                $orcamento = $array['orcamento'];
                                $telefone = $array['telefone'];
                                $celular = $array['celular'];
                                $email = $array['email'];
                                $cep = $array['cep'];
                                $endereco = $array['endereco'];
                                $complemento = $array['complemento'];
                                $bairro = $array['bairro'];
                                $nascimento = $array['nascimento'];
                                $cidade = $array['cidade'];
                                $uf= $array['uf'];
                                $situacaoficha = $array['situacaoficha'];
                                $doencabase = $array['doencabase'];
                                $alergia = $array['alergia'];
                                $medicamentos = $array['medicamentos'];
                                $cirurgia = $array['cirurgia'];
                                $internacoes = $array['internacoes'];
                                $pa = $array['pa'];
                                $queixaprinc = $array['queixaprinc'];                            

                                //Ajuste da formatação da data DD/MM/AAAA
                                $dtNasci = explode('-', $nascimento);
                                $datadeNascimento = $dtNasci[2] . "-" . $dtNasci[1]. "-" . $dtNasci[0];


                        ?>
                            <tr>
                                <td><?php echo $cpf?></td>
                                <td><?php echo $rg?></td>
                                <td><?php echo $nome?></td>
                                <td><?php echo $orcamento?></td>
                                <td><?php echo $telefone?></td>
                                <td><?php echo $celular?></td>
                                <td><?php echo $situacaoficha?></td>
                                <td><?php echo $datadeNascimento?></td>

                                <td>
                                    <a class="btn btn-warning btn-sm"  style="color:#fff" href="editarCadastro.php?id=<?php echo $idPessoa?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                    <a class="btn btn-danger btn-sm"  style="color:#fff" href="#" onclick = "excluir(<?php echo $array['id_pessoa']?>)" role="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                             </tr>

                        <?php } ?>