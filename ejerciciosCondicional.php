<?php
echo 'Ejercicio 1<br>';
$puntajeExamen=90;
$calificacion=' ';
if($puntajeExamen>=90){
    $califcacion='A';
    echo 'Su calificacion es:'.$calificacion;
}elseif($puntajeExamen<90 && $puntajeExamen>=80){
        echo 'Su calificacion es: B';
}elseif($puntajeExamen<80 && $puntajeExamen>=70){
    $califcacion='C';
    echo 'Su calificacion es: C';
}else{
    $califcacion='F';
    echo 'Su calificacion es: F';
}


echo '<br>Ejercicio 2<br>';
$hora=3;
if($hora>=6 && $hora<=12){
    echo 'Buenos dias';
}elseif($hora>12 && $hora<18){
    echo 'Buenas tardes';
}else{
    echo 'Buenas noches';
}

echo '<br>Ejercicio 3<br>';

$edadPersona=68;
if($edadPersona<18){
    echo 'Es menor de edad';
}elseif($edadPersona>18&& $edadPersona<=64){
    echo 'Eres un adulto';
}else{
    echo 'Es una persona mayor';
}

?>