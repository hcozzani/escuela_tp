<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos</title>
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
              <a class="nav-link active" aria-current="page" href="vistaPrincipal.php">Cartelera Gral</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Alumnos</a>
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

  <!-- barra filtrar -->
  <div>
    <form action="controlador/controladorFiltrarAlumnos.php" method="GET" style="margin-top: 10px;">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre">
        <label for="floatingInput">Nombre:</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Apellido" name="apellido">
        <label for="floatingPassword">Apellido:</label>
        <br>
        <input type="submit" class="btn btn-success" value="Filtrar" />
      </div>
    </form>
  </div>



  <!-- grilla listado -->
  <table class="table" style="margin-top: 10px;">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Materia</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <?php
    foreach ($datos as $fila) { ?>
      <tr>
        <tbody>
          <td>
            <?php echo $fila['NombreAlumno'] ?></td>
          <td><?php echo $fila['ApellidoAlumno'] ?></td>
          <td><?php echo $fila['Materia'] ?></td>
          <!-- modal de ediccion -->
          <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Editar
            </button>
          <?php } ?>
        </tbody>
      </tr>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Inscripcion Materia</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form action="controlador/controladorEditarAlumnos.php" method="POST">
                <?php
                foreach ($info as $filas) { ?>
                  <input type="hidden" class="form-control" name="legajoAlum" value="<?php echo $filas['legajoAlum'] ?>">
                  <input type="text" class="form-control" name="materia" value="<?php echo $filas['Materia'] ?>">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <input type="submit" class="btn btn-primary" name="btneditar" value="Editar">
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </table>


















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>