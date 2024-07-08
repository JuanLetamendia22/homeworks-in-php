<?php
/**
 * 1. El programa debe calcular la velocidad promedio de un viaje, a partir de la distancia
*total en kilómetros y la velocidad promedio en kilómetros por hora.
*2. Luego, el programa debe calcular y mostrar el tiempo total que tomará llegar al
*destino, considerando la velocidad definida.
*3. Si la velocidad promedio es mayor a 90km/h debe mostrar un mensaje que indique
*que excedió la velocidad límite permitida.
 */



/**
 * Recibe dos enteros, el primero es la distancia y el segundo la velocidad en KmsxH
 * Calcula el tiempo que toma llegar a destino.
 */
function calcularTiempoSegunDestino(int $distanciaDeViajeEnKms, int $velocidadPromedioEnKmsH){
//Declaracion
    $tiempoParaDestino=0;
//Operacion

    $tiempoParaDestino=($distanciaDeViajeEnKms/$velocidadPromedioEnKmsH);

    echo 'La distancia es: '.$distanciaDeViajeEnKms.'<br>'.'La velocidad es: '.$velocidadPromedioEnKmsH.'<br>';
    if($velocidadPromedioEnKmsH>90){
        echo 'La velocidad actual supera el límite permitido.<br>';
    }
    return $tiempoParaDestino;
}
function formatearTiempo(float $tiempo){
//Declaracion
    $horas=0;
    $minutos=0;
//Operación

 $horas= floor($tiempo);
 $minutos=round(($tiempo-$horas)*60);

    echo 'Tiempo a destino: '.$horas.'hs '.$minutos.'mins';
}

formatearTiempo(calcularTiempoSegunDestino(300,95));
?>