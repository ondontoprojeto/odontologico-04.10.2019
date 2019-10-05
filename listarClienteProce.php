
<?php
	include 'conexao.php';
	$sql = "SELECT nome, quantidade, dentista FROM 'tabelaBancoDeDados'";

	$buscar = mysqli_query($con, $sql)

	while($array = mysqli_fetch_array($buscar)){

		$nomeProce = $array['nome'];
		$quantidade = $array['quantidade'];
		$dentista = $array['dentista'];
?>
	<tr>
		<td> <?php echo $nomeProce ?></td>
		<td> <?php echo $quantidade ?></td>
		<td> <?php echo $dentista ?></td>
		<td><a class="btn btn-primary" href="#" role="button">Editar</a></td>
	</tr>

<?php }?>