<?php

function muestra_tabla($ruta){
    $archivo = fopen($ruta, "r");
    if($archivo != null){
        while (($fila = fgetcsv($archivo, 1000, ",")) != FALSE) {
            echo '<tr>';
            foreach ($fila as $valor) {
                echo '<td>' . htmlspecialchars($valor) . '</td>';
            }
        }
        fclose($archivo);
    }
}