<?php 
//Contexto
echo "<h1> Arreglos Iniciales:</h1>";

//Declaración de arreglos
$departamentos=array("Artigas","Canelones","Cerro Largo","Colonia","Durazno","Flores","Florida","Lavalleja","Maldonado","Montevideo","Paysandú","Rio Negro","Rivera","Rocha","Salto","San José","Soriano","Tacuarembó","Treinta y Tres");

$capitalesDepartamentales=array("Artigas","Canelones","Melo","Colonia del Sacramento","Durazno","Trinidad","Florida","Minas","Maldonado","Montevideo","Paysandú","Fray Bentos","Rivera","Rocha","Salto","San José de Mayo","Mercedes","Tacuarembó","Treinta y Tres");

mostrarArray($departamentos);
echo "<hr>";
mostrarArray($capitalesDepartamentales);
echo "<hr>";
echo "<h3>Arreglos combinados:</h3>";

//Fusión de arreglos
$departamentosConCapitales= array_merge($departamentos,$capitalesDepartamentales);

//Función para ordenarlos en orden alfabetico
sort($departamentosConCapitales);

/**
 * Función para mostrar en pantalla resultado
*/
function mostrarArray($arreglo){
    foreach($arreglo as $indice => $valor) {
        echo " [".$indice."]  ".$valor;
        if($indice % 5 == 0 && $indice > 0){
            echo "<br>";
        }
    }
}

mostrarArray($departamentosConCapitales);

//Borrar el ultimo elemento del array
array_pop($departamentosConCapitales);


//Mostrar en pantalla el resultado
echo "<hr><h3> Arreglo final:</h3>";
mostrarArray($departamentosConCapitales);
?>