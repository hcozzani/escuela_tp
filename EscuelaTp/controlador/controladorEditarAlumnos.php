<?php
require("../modelo/modeloEditarAlumnos.php");
$legajo = $_POST['legajoAlum'];
$materia = $_POST['materia'];
$conexion = new EditarAlumnos();
$info = $conexion->obtenerBd($legajo, $materia);
header ("location: ../vista/vistaAlumnos.php");
?>