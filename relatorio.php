<!DOCTYPE html>
<html>
	<head>
		<title>Relatório</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHome.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
  </head>
  <body>		
    			<?php include 'header.php'?>
    <div class = "d-flex justify-content-end mr-2">
      <h5 class = "ml-4">*Marque as opções, depois clique em gerar relatório</h5>
    </div>

    <!-- Módulos -->
   <div class = "row">
      <div class = "col-md-12">
        <h4>Módulo</h4>
        <form class = "form-inline justify-content-around">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Cadastro</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Agenda</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Ficha</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Estoque</label>
          </div>
        </form>
      </div>
    </div> 
  <!-- Contexto -->
    <div class = "row">
      <div class = "col-md-12">
        <h6>Contexto</h6>
        <form class = "form-inline justify-content-around">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Cadastro -> Nome</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Cadastro -> Orçamento</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Agenda -> Dentista</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Agenda -> Consulta</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Arquivo -> Ficha</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Arquivo -> Procedimento</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Ficha -> Situação</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Estoque -> Disponivel</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Estoque -> Validade</label>
          </div>
        </form>
      </div>
    </div>

  <!-- Ações -->

    <div class = "row">
      <div class = "col-md-12">
        <h6>Ações</h6>
         <form class = "form-inline justify-content-around">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Realizada</label>
          </div>
              
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Agendada</label>
          </div>
              
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Confirmada</label>
          </div>
              
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Cancelada</label>
          </div>
        </form>
      </div>
    </div>




    <container><h6>Período</h6>
    <div class="form-group">
        <label for="De">De</label>
        <input type="date" class="form-control w-25" id="De" placeholder="" name = "De">
    </div>	

    <div class="form-group">
        <label for="Até">Até</label>
        <input type="date" class="form-control w-25" id="Até" placeholder="" name = "Até">
    </div>	
    </container>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Validade</th>
          <th scope="col">Disponivel</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Gaze</th>
          <td>10/06/2020</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">Touca</th>
          <td>10/06/2020</td>
          <td>5</td>
        </tr>
        <tr>
          <th scope="row">Gaze</th>
          <td>10/06/2020</td>
          <td>10</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>