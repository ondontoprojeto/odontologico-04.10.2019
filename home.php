<!DOCTYPE html>
<html>
	<head>
		<title>Odonto - Inicio</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHome.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
	</head>
	<body>
		
		<?php include 'header.php'?>

		<!-- SESSÃO DO SISTEMA WEB -->
		
		<!--Área de verificação de Consultas-->
		<div class = "row">
			<div class = "col"></div>
		    <div class = "col-lg-5 mt-4">
				<div class = "border">
					<table class = "table table-hover border">
					  	<tr class = "bg-light">
					  		<th><i class = "fa fa-user mr-2" aria-hidden="true"></i>Consultas</th>
					  	</tr>
					</table>
					<div class="row">
						<div class = "col-md-4 d-none d-md-block">
							<div class="bd-highlight ml-2">
								<div id = "real" class="d-inline-flex bg-success border border-dark mb-1">
									 <i class = "fa fa-users fa-2x m-2" aria-hidden="true"></i>
		                            <span class = "estudos ml-2">
		                                <h6 class = "text-center">Realizados</h6>
		                                <h6 class = "text-center text-dark">X</h6>
		                            </span>
								</div><br>
								<div id = "agen" class="d-inline-flex bg-primary border border-dark mb-1">
									<i class = "fa fa-calendar fa-2x m-2" aria-hidden="true"></i>
		                            <span class = "estudos ml-2">
		                                <h6 class = "text-center pt-1">Agendados</h6>
		                                <h6 class = "text-center text-dark">X</h6>
		                            </span>
								</div><br>
								<div id = "conf" class="d-inline-flex bg-warning border border-dark mb-1">
		                            <i class = "fa fa-check fa-2x m-2" aria-hidden="true"></i>
		                            <span class = "estudos ml-2">
		                                <h6 class = "text-center pt-1">Confirmados</h6>
		                                <h6 class = "text-center text-dark mr-3">X</h6>
		                            </span>
								</div><br>
								<div id = "canc" class="d-inline-flex bg-danger border border-dark mb-1">
									<i class = "fa fa-ban fa-2x m-2" aria-hidden="true"></i>
		                            <span class = "estudos ml-2">
		                                <h6 class = "text-center pt-1">Cancelados</h6>
		                                <h6 class = "text-center text-dark">X</h6>
		                            </span>
								</div>
							</div>
						</div>

						<div class = "col-md-7 ml-2 w-50">
							<span  class = "d-inline-flex">
								<i class="fa fa-calendar mr-2" aria-hidden="true"></i>
							</span>
							<span class = "d-inline-flex w-50">
								<input class = "form-control" type="date" name="data" style = "width: 85%">
							</span>
							<p class="text-center mt-2">
		                    	<strong>Comparativo de Consultas</strong>
		                    </p>
							<div class="progress-group">
								<b>Realizado</b>
								<span class="float-right"><b>80</b>/100</span>
								<div class="progress progress-sm">
									<div class="progress-bar bg-success" style="width: 80%"></div>
								</div>
							</div>
					
							<div class="progress-group">
								<b>Agendado</b>
								<span class="float-right"><b>75</b>/100</span>
								<div class="progress progress-sm">
									<div class="progress-bar bg-primary" style="width: 75%"></div>
								</div>
							</div>

							<div class="progress-group">
								<b>Confirmado</b>
								<span class="float-right"><b>60</b>/100</span>
								<div class="progress progress-sm">
									<div class="progress-bar bg-warning" style="width: 60%"></div>
								</div>
							</div>

							<div class="progress-group">
								<b>Cancelado</b>
								<span class="float-right"><b>50</b>/100</span>
								<div class="progress progress-sm">
									<div class="progress-bar bg-danger" style="width: 50%"></div>
								</div>
							</div>
						</div>	
					</div>				
				</div>
			</div>

		<!-- Área de visualização de próximos pacientes -->

		    <div class = "col-lg-5 mt-4">
		    	<table id = "tableProxi" class = "table border table-hover">
					<thead id = "theadProxi" class = "bg-light">
				  		<tr>
				  			<th><i class="fa fa-calendar mr-2" aria-hidden="true"></i>Próximos Pacientes</th>
				  		</tr>
				  	</thead>
				  	<thead id = "theadProxi2">
				    	<tr class = "bg-primary">
					      	<th>Horário</th>
					      	<th>Nome</th>
					    	<th>Situação</th>
					    	<th>Ação</th>
				  		</tr>
					</thead>
					<tbody id = "tbodyProxi">
				  		<tr>
				      		<td>8:00</td>
				      		<td>Leandro Cerqueira</td>
				      		<td>
				      			<i class="fa fa-circle text-success" aria-hidden="true"></i>
				      		</td>
				      		<td>A</td>
				    	</tr>
					    <tr>
					      
					      	<td>9:00</td>
					      	<td>Matheus Ribeiro</td>
					    	<td>
					    			<i class = "fa fa-circle text-primary" aria-hidden="true"></i>
					    	</td>
					    	<td>A</td>
					    </tr>
					    <tr>
				      		<td>10:00</td>
				      		<td>Marcus Vinicius</td>
				      		<td>
				      			<i class = "fa fa-circle text-danger" aria-hidden="true"></i>
				      		</td>
				      		<td>A</td>
				    	</tr>
				    	 <tr>
				      		<td>10:00</td>
				      		<td>Marcus Vinicius</td>
				      		<td>
				      			<i class = "fa fa-circle text-danger" aria-hidden="true"></i>
				      		</td>
				      		<td>A</td>
				    	</tr>
				    	<tr>
				      		<td>8:00</td>
				      		<td>Leandro Cerqueira</td>
				      		<td>
				      			<i class="fa fa-circle text-success" aria-hidden="true"></i>
				      		</td>
				      		<td>A</td>
				    	</tr>
				    	<tr>
					      
					      	<td>9:00</td>
					      	<td>Matheus Ribeiro</td>
					    	<td>
					    			<i class = "fa fa-circle text-primary" aria-hidden="true"></i>
					    	</td>
					    	<td>A</td>
					    </tr>
				 	</tbody>
				</table>
				<span>
					<input class = "text-center" type = "text" value = "N Pacientes" disabled>
				</span>
				<span>
					<a href= "#"><input class = "btn btn-primary float-right" type = "submit" value = "Visualizar Agenda"></a>
				</span>
			</div>
			<div class = "col"></div>
		</div>

		<!-- Visualização de Aniversariantes do mês -->

		<div class="row">
			<div class = "col"></div>
			<div class = "col-lg-3 mt-5">

				<table id = "tableAni" class = "table border table-hover w-100 h-50">
					<thead id = "theadAni">
						<tr  class = "bg-light">
							<th  class = "text-center" colspan="2"><i class="fa fa-birthday-cake mr-2" aria-hidden="true"></i>Aniversariantes do Mês</th>
						</tr>
					</thead>

					<thead id = "theadProce2">
				    	<tr>
				      		<th class = "text-center">Nome</th>
				     	 	<th class = "text-center">Dia</th>
				    		<th>Contato</th>
				  		</tr>
				  	</thead>

				  	<tbody id = "tbodyAni">
				    	<tr>
				      		<td>Leandro Cerqueira</td>
				      		<td>16-10</td>
				      		<td>21 98365-6429</td>
				    	</tr>
				    	<tr>
				      		<td>Matheus Ribeiro</td>
				    		<td>15-08</td>
				    		<td>21 98365-6429</td>
				    	</tr>
				    	<tr>
				      		<td>Marcus Vinicius</td>
				    		<td>22-09</td>
				    		<td>21 98365-6429</td>
				    	</tr>
				    	<tr>
				      		<td>Paulo Victor</td>
				    		<td>01-02</td>
				    		<td>21 98365-6429</td>
				    	</tr>
				    	<tr>
				      		<td>XXX.XXX</td>
				    		<td>02-08</td>
				    	</tr>
				    	<tr>
				      		<td>Leandro Cerqueira</td>
				      		<td>05-10</td>
				      		<td>21 98365-6429</td>
				    	</tr>
				    	<tr>
				      		<td>Marcus Vinicius</td>
				    		<td>06-09</td>
				    		<td>21 98365-6429</td>
				    	</tr>
				 	</tbody>
				</table>
			</div>

		<!-- Visualização de consolidado Financeiro -->

			<div class="col-lg-4 mt-5">
		    	<table class=" table border w-100">
		    		<thead>
					  	<tr class = "bg-light">
					  		<th class = "text-center"><i class="fa fa-money mr-2" aria-hidden="true" colspan = "1"></i>Consolidado Financeiro</th>
					  	</tr>
				  	</thead>
				  	<tbody>
						<tr>
							<td class = "d-inline-flex border w-100">
								<i class="fa fa-arrow-up text-white border fa-5x bg-success" aria-hidden="true"></i>
								<span class = "consolidado">
									<h6 class = "pt-2">Consultas Recebidas</h6>
									<p class = "text-center text-success">R$XX,XX</p>
								</span>
							</td>
						</tr>
						<tr>
							<td class = "d-inline-flex border w-100">
								<i class="fa fa-arrow-down text-white border fa-5x bg-danger" aria-hidden="true"></i>
								<span class = "consolidado">
									<h6 class = "pt-2">Consultas à pagar</h6>
									<p class = "text-center text-danger">R$XX,XX</p>
								</span>
							</td>
						</tr>
				  </tbody>
				</table>
			</div>

		<!-- Visualização dos procedimentos realizados -->

			<div class=" col-lg-3 mt-5">
		    	<table id = "tableProce" class="table table-hover border w-100 h-50">
					<thead id = "theadProce">
				  		<tr class = "bg-light">
				  			<th class = "text-center" colspan="3"> <i class="fa fa-user-md mr-2" aria-hidden="true"></i>Procedimentos Realizados</th>
				  		</tr>
				  	</thead>
				  	<thead id = "theadProce2">
				    	<tr>
				      		<th class = "text-center">Nome</th>
				     	 	<th class = "text-center">Quantidade</th>
				    		<th>Dentista</th>
				  		</tr>
				  	</thead>

				  <tbody id = "tbodyProce">
				    <tr>
				      	<td class = "text-center">Clínica Geral</td>
				      	<td class = "text-center">5</td>
				      	<td>Dra.Cristiani</td>
				    </tr>
				    <tr>
				      	<td class = "text-center">Bucomaxilo</td>
				      	<td class = "text-center">4</td>
				    	<td>Dra.Adriane</td>
				    </tr>
				    <tr>
				      	<td class = "text-center">Endodontia</td>
				      	<td class = "text-center">2</td>
				      	<td>Dra.Adriane</td>
				    </tr>
				    <tr>
				      	<td class = "text-center">Implantodontia</td>
				      	<td class = "text-center">1</td>
				      	<td>Dra.Cristiani</td>
				    </tr>
				    <tr>
				      	<td class = "text-center">Endodontia</td>
				      	<td class = "text-center">2</td>
				      	<td>Dra.Adriane</td>
				    </tr>
				    <tr>
				      	<td class = "text-center">Implantodontia</td>
				      	<td class = "text-center">1</td>
				      	<td>Dra.Cristiani</td>
				    </tr>
				 </tbody>
				</table>
			</div>
			<div class = "col"></div>
		</div>			
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>