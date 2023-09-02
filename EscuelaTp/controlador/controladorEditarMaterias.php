<?php
require("../modelo/modeloEditarMaterias.php");
//arreglar esto
$legajo = $_POST['legajoProf'];
$materia = $_POST['materia'];
$conexion = new EditarProfesor();
$info = $conexion->obtenerBd($legajo, $materia);
header ("location: ../vista/vistaMaterias.php");
?>