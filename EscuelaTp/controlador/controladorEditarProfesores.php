<?php
require("../modelo/modeloEditarProfesores.php");
$legajo = $_POST['legajoProf'];
$materia = $_POST['materia'];
$conexion = new EditarProfesor();
$info = $conexion->obtenerBd($legajo, $materia);
header ("location: ../vista/vistaProfesores.php");
?>