<?php
    require ("../modelo/modeloListarAlumnos.php");
    $conexion = new ListarAlumno();
    $datos = $conexion->obtenerBd($_GET['apellido'], $_GET['nombre']);
    require ("../vista/vistaPrincipal.php");
?>