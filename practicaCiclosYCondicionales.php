<?php 
/*
 * Ejercicio 1:
 * Imprimir una tabla de multiplicar
 * Escribe un programa que imprima la tabla de multiplicar de un número
 */

/* En mi caso trate de hacer una tabla de multiplicar pero que sea capaz de ingresar un numero 
para obtener la tabla de ese numero hasta la posicion 10. 
En los casos que probe(1 a 10 y el 20) anduvo bien.
*/

echo "<b>Ejercicio 1</b><br>";
/**
 * Muestra los primeros 10 multiplos de un numero introducido.
 */
function tablaDeMultiplicar($numero){
    if(is_int($numero)){
        $largoTabla= ($numero*10);
        $indice=1;
        echo "Tabla de multiplicar desde ".$numero." hasta: ".$largoTabla."<hr>";
        while ($total<$largoTabla) {
            $total+=$numero;
            echo $indice."X".$numero." = ".$total."<br>";
            $indice++;
        }
    
    }else{
        echo "Para poder multiplicar debes ingresar un numero, sin comillas para no convertirlo en una cadena de texto.";
    }
    
}
tablaDeMultiplicar(10);
/*
 * Ejercicio 2:
 * Escribe un programa que determine el nombre del mes basado en un número del 1 al 12.
 * Y dado el nombre del mes determine a que estación pertenece. 
 */

 //Decidi separar la lógica del programa en dos pues las considero como dos funciones distintas.

echo "<br><b>Ejercicio 2</b><hr>";
/**
 * Da el nombre del mes segun una entrada de un numero entero.
 */
function nombreDelMes($numeroMes){
        echo "Segun la entrada su mes es: ";
        switch ($numeroMes) {
            case 1:
                echo 'enero';
                estacionSegunMes('enero');
                break;
            case 2:
                echo 'febrero';
                estacionSegunMes('febrero');
                break;
            case 3:
                echo 'marzo';
                estacionSegunMes('marzo');
                break;
            case 4:
                echo 'abril';
                estacionSegunMes('abril');
                break;
            case 5:
                echo 'mayo';
                estacionSegunMes('mayo');
                break;
            case 6:
                echo 'junio';
                estacionSegunMes('junio');
                break;
            case 7:
                echo 'julio';
                estacionSegunMes('julio');
                break;
            case 8:
                echo 'agosto';
                estacionSegunMes('agosto');
                break;
            case 9:
                echo 'septiembre';
                estacionSegunMes('septiembre');
                break;
            case 10:
                echo 'octubre';
                estacionSegunMes('octubre');
                break;
            case 11:
                echo 'noviembre';
                estacionSegunMes('noviembre');
                break;
            case 12:
                echo 'diciembre';
                estacionSegunMes('diciembre');
                break;
            default:
                echo "Probablemente no haya ingresado un numero valido para interpretar como mes.";
                break;
        }

    
}
/**
 *Da el nombre de la estacion para el hemisferio sur 
 *segun una entrada de un string.
 */
function estacionSegunMes($nombreDelMes){
    if($nombreDelMes=='diciembre'||$nombreDelMes=='enero'||$nombreDelMes=='febrero'){
        echo '<br>La estacion del mes es verano.<br>';
    }elseif($nombreDelMes=='marzo'||$nombreDelMes=='abril'||$nombreDelMes=='mayo'){
        echo '<br>La estacion del mes es otoño.<br>';
    }elseif($nombreDelMes=='junio'||$nombreDelMes=='julio'||$nombreDelMes=='agosto'){
        echo '<br>La estacion del mes es invierno.<br>';
    }elseif($nombreDelMes=='septiembre'||$nombreDelMes=='octubre'||$nombreDelMes=='noviembre'){
        echo '<br>La estacion del mes es primavera.<br>';
    }else{
        echo '<br>No se encuentra la estación.';
    }
}

nombreDelMes(11);

echo "<br><b>Ejercicio 3</b><hr>";
/*
 * Ejercicio 3:
 * Escribe un programa que sume todos los números enteros desde el 1 
 * hasta un número dado por el usuario, pero solo si el número es positivo.
 * Si el número es negativo o cero, imprime un mensaje de error.
 */
//

 /**
  * Suma los numeros desde 1 hasta el numero introducido.
  * Solo admite valores mayores a 1.
  */
function contarHasta($numero){
    if(is_int($numero)){
        if($numero>=1){
            $inicio=1;
            $suma=0;
            for ($inicio; $inicio <=$numero ; $inicio++) { 
                $suma+=$inicio;
                echo '<br> La suma es: '.$inicio.' + suma anterior ='.$suma;
            }
            echo '<br>La suma desde: 1 hasta: '.$numero.' es: '.$suma;
        }else{
            echo 'El numero introducido no es mayor que 0';
        }
    }else{
        echo 'Al parecer no se ha recibido una entrada valida, la entrada deberia ser un numero.';
    }
}

contarHasta(5);

?>