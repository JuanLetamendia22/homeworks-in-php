<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $nombreArchivo= 'imagen-categoria';
    
    validarArchivoEimagen($nombreArchivo);
    validarYprocesarDatos();
}


/**
 * Se asegura de que se haya subido un archivo sin errores, que este archivo sea una imagen jpg o *png, y lo mueve a la carpeta de Recursos.
 */
function validarArchivoEimagen($nomArchivo){

    if(isset($_FILES[$nomArchivo]) && $_FILES[$nomArchivo]['error'] == 0 && is_uploaded_file($_FILES[$nomArchivo]['tmp_name'])){

        $extensionArchivo = strtolower($_FILES[$nomArchivo]['type']);

        if(str_contains($extensionArchivo,'png') || str_contains($extensionArchivo,'jpeg')){

            moverArchivo($nomArchivo);
        
        }else{

            echo '<h2>Hubo un error al subir la imagen, verifique si es una imagen jpg o png</h2>';
        
        }
    }
}

/**
 * Mueve el archivo a la carpeta de recursos, si no existe la crea.
 */
function moverArchivo($nomArchivo){
    $nombreImagen = $_FILES[$nomArchivo]['name'];
    $rutaTemporal = $_FILES[$nomArchivo]['tmp_name'];
    $carpetaDestino= 'Recursos/';

    if(!file_exists($carpetaDestino)){

        mkdir($carpetaDestino, 0777,true);
    
    }

    $rutaDestino = $carpetaDestino.basename($nombreImagen);

    
    if(move_uploaded_file($rutaTemporal,$rutaDestino)){

        echo '<h2>Subida exitosa</h2>';

    }else{

        echo '<h2>Subida no exitosa</h2>';

    }


}


function validarYprocesarDatos() { 
   
   

    $nombreItem1 = htmlspecialchars($_POST['nombre-item1']);
    $descripcionItem1 = htmlspecialchars($_POST['descripcion-item1']);
    $precioItem1 = $_POST['precio-item1'];

    $nombreItem2 = htmlspecialchars($_POST['nombre-item2']);
    $descripcionItem2 = htmlspecialchars($_POST['descripcion-item2']);
    $precioItem2 = $_POST['precio-item2'];

    $nombreItem3 = htmlspecialchars($_POST['nombre-item3']);
    $descripcionItem3 = htmlspecialchars($_POST['descripcion-item3']);
    $precioItem3 = $_POST['precio-item3'];
   
    if(!empty($nombreItem1) && !empty($nombreItem2) && !empty($nombreItem3) && !empty($descripcionItem1) && !empty($descripcionItem2) && !empty($descripcionItem3)){
        
        $datos = array(
            'Categoria' => $_POST['categorias'],
            'NombreItem1' => $nombreItem1,
            'DescripcionItem1' => $descripcionItem1,
            'PrecioItem1' => $precioItem1,
            'NombreItem2' => $nombreItem2,
            'DescripcionItem2' => $descripcionItem2,
            'PrecioItem2' => $precioItem2,
            'NombreItem2' => $nombreItem3,
            'DescripcionItem3' => $descripcionItem3,
            'PrecioItem3' => $precioItem3
        );

        $menuJson = 'Recursos/Menu.json';
         
        if (file_exists($menuJson)) {

            $contenidoActual = file_get_contents($menuJson);
            $arrayDeDatos = json_decode($contenidoActual, true);
            $limiteArray = count($arrayDeDatos);
           
            for($i=0; $i < $limiteArray; $i++){

                if($arrayDeDatos[$i]['Categoria'] == $datos['Categoria']){
                    $arrayDeDatos= array_slice($arrayDeDatos,$i+1,count($arrayDeDatos));
                }
  
              }
        } else {
            $arrayDeDatos = array();
        }
        
      
            $arrayDeDatos[] = $datos;
        
       

    
        file_put_contents($menuJson, json_encode($arrayDeDatos, JSON_PRETTY_PRINT));
      
    }
}



?>