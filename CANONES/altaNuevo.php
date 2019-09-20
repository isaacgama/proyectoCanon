<!DOCTYPE html>
<html>
<head>
  <title>Sistema de aparatado de cañones</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php require_once ("navbar.php"); ?>
<div>
  <br>
<br>

  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" placeholder="Apellido">
    </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Materia</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Programacion visual">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Carrera</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Ing.Sistemas">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Entregado Por:</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Horas Necesarias</label>
      <select id="inputState" class="form-control">
        <option selected>1 hr</option>
         <option selected>2 hr</option>
          <option selected>3 hr</option>
           <option selected>4 hr</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Fecha</label>
      <input type="date" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        ESTOY DE ACUERDO
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">APARTAR</button>
</form>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>