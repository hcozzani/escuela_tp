<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela Tp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!--bara de navegacion -->
    <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Escuela Tp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cartelera Gral</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistaAlumnos.php">Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistaProfesores.php">Profesores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistaMaterias.php">Materias</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <!-- buscador nombre y apellido -->
    <!-- <div>
    <form action="controlador/controladorListarAlumnos.php" method="GET" style="margin-top: 10px;">
					<label for="cantidad">Nombre:</label>
					<input type="text" name="nombre" />
					<br><br>
					<label for="producto">Apellido:</label>
					<input type="text" name="apellido" />
					<br><br>		
					<input type="submit" class="btn btn-success" value="Filtrar" />
			</form>	
    </div> -->

    <!-- grilla de nombres -->
    <div>
    <table class="table" style="margin-top: 5px;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Materia</th>
      <th scope="col">Aula</th>
      <th scope="col">Duracion</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($datos as $fila) { ?>
    <tr>
      <td><?php echo $fila['NombreAlumno'] ?></td>
      <td><?php echo $fila['ApellidoAlumno'] ?></td>
      <td><?php echo $fila['Materia'] ?></td>
      <td><?php echo $fila['Aula'] ?></td>
      <td><?php echo $fila['Duracion'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>