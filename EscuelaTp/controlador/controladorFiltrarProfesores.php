<?php
    require ("../modelo/modeloFiltrarProfesores.php");
    $conexion = new FiltrarProfesor();
    $datos = $conexion->obtenerBd($_GET['nombre'], $_GET['apellido']);
    require ("../vista/vistaProfesores.php");
?>