<?php
/**
 * 
 * 1. Escribe un programa en PHP que reemplace todas las ocurrencias
 * de la palabra “error” por “éxito” en el siguiente párrafo: “Este es un
 * mensaje de error. Si ves otro error, por favor reporta el error.”
 * 2. Además, muestra la subcadena desde el carácter 10 hasta el 20.
 * 3. Cuenta los caracteres de la cadena.
 * 4. Cuenta las palabras de la cadena.
 * 5. Transforma el párrafo a mayúsculas.
 * 6. Transforma esta cadena en un array y borra o remueve el elemento que esté en la posición 4.
 * 
 */

 $stringParaManipular='Este es un mensaje de error. Si ves otro error, por favor reporta el error.';

 $stringExitoso= str_replace('error','éxito',$stringParaManipular);
 $stringSubDividido= substr($stringParaManipular,9,10);
 $arrayDeString=explode(" ",$stringParaManipular);
 
 echo '<h2>String a Manipular</h2>'.$stringParaManipular.'<hr>';
 echo '<h3>Manipulaciones:</h3>';
 echo '1) '.$stringExitoso.'<br>';
 echo '2) '.$stringSubDividido.'<br>';
 echo '3) Cantidad de caracteres: '.mb_strlen($stringParaManipular).'<br>';
 echo '4) Cantidad de palabras: '.str_word_count($stringParaManipular).'<br>';
 echo '5) '.strtoupper($stringParaManipular).'<hr>';
 echo print_r($arrayDeString).'<hr>';
 array_splice($arrayDeString,3,1);
 echo print_r($arrayDeString);

?>