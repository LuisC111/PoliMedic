<?php

function obtenerRutaRelativa($desde, $hasta) {
    // some compatibility fixes for Windows paths
    $desde = is_dir($desde) ? rtrim($desde, '\/') . '/' : $desde;
    $hasta = is_dir($hasta) ? rtrim($hasta, '\/') . '/' : $hasta;
    $desde = str_replace('\\', '/', $desde);
    $hasta = str_replace('\\', '/', $hasta);

    $desde = explode('/', $desde);
    $hasta = explode('/', $hasta);
    $rutaRelativa = $hasta;

    foreach ($desde as $profundidad => $directorio) {
        if ($directorio === $hasta[$profundidad]) {        
            array_shift($rutaRelativa);
        } 
        else {
            $remaining = count($desde) - $profundidad;
            if ($remaining > 1) {
                $padLength = (count($rutaRelativa) + $remaining - 1) * -1;
                $rutaRelativa = array_pad($rutaRelativa, $padLength, '..');
                break;
            } 
            else {
                $rutaRelativa[0] = './' . $rutaRelativa[0];
            }
        }
    }
    return implode('/', $rutaRelativa);
}
