<?php
    require ("../modelo/modeloFiltrarMaterias.php");
    $conexion = new FiltrarMaterias();
    $datos = $conexion->obtenerBd($_GET['nombreMateria']);
    require ("../vista/vistaMaterias.php");
?>