<?php
    require ("../modelo/modeloFiltrarAlumnos.php");
    $conexion = new FiltrarAlumnos();
    $datos = $conexion->obtenerBd($_GET['nombre'], $_GET['apellido']);
    require ("../vista/vistaAlumnos.php");
?>