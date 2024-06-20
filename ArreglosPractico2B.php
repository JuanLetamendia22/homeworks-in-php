<?php
/**
 * Utilizaremos los conceptos aprendidos hasta el momento (estructuras de control, arrays,
 *bucles, funciones etc) para generar html de forma dinámica.
 *
 * Las filas par deben tener un color de fondo en tono gris. Las impares deben tener fondo
 * blancos.
 * Los puntos totales deben ser calculados a partir del resultado de los partidos.
 * Crea una lista o un arreglo multidimensional con los nombres,opcional (escudo),
 * puntos (valor calculado), partidos ganados, empatados, perdidos, goles a favor,
 * goles en contra, y la diferencia (valor calculado goles a favor - goles en contra) 
 * 
 */

 $equipos = array(array('Nombre'=>'Danubio','Escudo'=>'<img style="width:2%"; src="/img/imagenes/danubio.png">','pts'=>0,'pG'=>3,'pE'=>2,'pP'=>0,'gf'=>7,'gc'=>4,'dif'=>0),array('Nombre'=>'Peñarol','Escudo'=>'<img style="width:2%"; src="/img/imagenes/peñarol.png">','pts'=>0,'pG'=>3,'pE'=>0,'pP'=>2,'gf'=>6,'gc'=>4,'dif'=>0),array('Nombre'=>'Nacional','Escudo'=>'<img style="width:2%"; src="/img/imagenes/nacional.png">','pts'=>0,'pG'=>2,'pE'=>3,'pP'=>0,'gf'=>6,'gc'=>4,'dif'=>0),array('Nombre'=>'Rampla','Escudo'=>'<img style="width:2%"; src="/img/imagenes/rampla.png">','pts'=>0,'pG'=>3,'pE'=>1,'pP'=>1,'gf'=>5,'gc'=>2,'dif'=>0),array('Nombre'=>'Wanderers','Escudo'=>'<img style="width:2%"; src="/img/imagenes/wanderers.png">','pts'=>0,'pG'=>2,'pE'=>2,'pP'=>1,'gf'=>8,'gc'=>4,'dif'=>0),array('Nombre'=>'River','Escudo'=>'<img style="width:2%"; src="/img/imagenes/river.png">','pts'=>0,'pG'=>2,'pE'=>2,'pP'=>1,'gf'=>5,'gc'=>2,'dif'=>0));


/**
 * Calcula los puntos de los equipos
 */
function calcularPuntos(array $equipos){
    $cantDeEquipos= sizeof($equipos);
    for ($i=0; $i < $cantDeEquipos ; $i++) { 
        $equipos[$i]['pts'] = $equipos[$i]['pG']*3+ $equipos[$i]['pE']; 
    }
    return $equipos;
}
/**
 * Calcula la diferencia de goles de los equipos,
 */
function calcularDifGoles(array $equipos){
    $cantDeEquipos= sizeof($equipos);
    for ($i=0; $i < $cantDeEquipos ; $i++) { 
        $equipos[$i]['dif'] = $equipos[$i]['gf'] - $equipos[$i]['gc']; 
    }
    return $equipos;
}
/**
 * Ordena los equipos por puntos. De una manera ineficiente.
 */
function ordenarEquipos(array $equipos){

    $cantDeEquipos= sizeof($equipos);
    $indice=0;
    $subIndice=0;
    $esOrdenado=false;
    $arrayAuxiliar=array();

    while(!$esOrdenado) {

        $esOrdenado = true; // Asume que el array está ordenado

       while($indice < $cantDeEquipos-1){
        
        if($equipos[$indice]['pts'] < $equipos[$subIndice]['pts'] ){

            $arrayAuxiliar=$equipos[$indice];

            $equipos[$indice]=$equipos[$subIndice];

            $equipos[$subIndice]=$arrayAuxiliar;

            $esOrdenado = false; // Si se realiza un intercambio, el array no estaba ordenado
        }
        if ($subIndice == $cantDeEquipos - 1) {

            $indice++;
            $subIndice = $indice + 1;
        } else {
            $subIndice++;
        }

    }
    // Reinicia los índices para otra pasada
    $indice = 0;
    $subIndice = 1;

    }
    return $equipos;
}
/**
 * Pinta la tabla
 */
function mostrarTabla(array $equipos){
    //Titulo
    echo '<h1 style="background-color:Dodgerblue;text-align:center;color:white;border: 2px solid black ;border-radius: 3px ">Torneo Apertura 2038</h1>';
    //Tabla
    echo '<table style="width:100%;border-collapse:collapse">';
    //Header
    $llaves = array_keys($equipos[0]);
    foreach ($llaves as $llave => $valor) {
        echo '<th style= "background-color:#80ffdf; text-align:left">'.$valor.'</th>';
    }
    //Equipos
    $iteracion=1;
    foreach ($equipos as $equipo) {
        if($iteracion%2==0){  
            echo '<tr style="background-color:lightgray">';
        }else{
            echo '<tr>';
        }
        foreach ($equipo as $dato => $valor) {
            echo '<td style="padding-right:20px">'.$valor.'</td>';
        }
        echo '</tr>';
        $iteracion++;
    }
    echo '</table>';
}

$apertura=calcularPuntos($equipos);
$apertura=calcularDifGoles($apertura);
$apertura=ordenarEquipos($apertura);
mostrarTabla($apertura);
?>