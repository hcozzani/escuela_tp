<?php

class FiltrarMaterias{

    public function obtenerBd($nombreMateria){
        require("conexion.php");
        $query = "SELECT nombreMateria, cantHoras, aula, duracion
        FROM materia WHERE nombreMateria LIKE '%$nombreMateria%'";
        
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado;
        
}
}
?>