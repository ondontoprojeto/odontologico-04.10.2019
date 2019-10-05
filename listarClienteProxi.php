<?php
	include 'conexao.php';
	$sql = "SELECT horario, nome, situacao FROM 'tabelaBancoDeDados'";

	$buscar = mysqli_query($con, $sql)

	while($array = mysqli_fetch_array($buscar)){

		$idProxi = $array['idProxi'];
		$horario = $array['horario'];
		$nomeProxi = $array['nome'];
		$situacao = $array['situacao'];
?>
	<tr>
		<td> <?php echo $horario ?></td>
		<td> <?php echo $nomeProxi ?></td>
		<td> <?php echo $situacao ?></td>
		<td><a class="btn btn-primary btn-sm" href="editarClienteProxi.php?id=<?php echo $idProxi?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</a></td>
	</tr>

<?php } ?>

