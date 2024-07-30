<?php
$rutaJson= 'Recursos/Menu.json';

if(file_exists($rutaJson)){
    $datos = file_get_contents($rutaJson);

    $jsonDecodificado = json_decode($datos,TRUE);
    
}else{
    echo '<h1>No hay un menu establecido</h1>';
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Menu Dinamico</title>
</head>
<body>
    <div class="logo">
        <h1>La dinamica</h1>
        <img src="RecursosDePrueba\logo.png" alt="Logo">
        <?php
              echo '<br>
                        <a href="form-opciones-menu.php">
                            <button type="button">Modificar el menu</button>
                        </a>';
        ?>
    </div>
    <div class="menu">
    <?php   foreach ($jsonDecodificado as $array) {
        echo '<h2>'.$array['Categoria'].'</h2>';
        echo '<img src='.$array['UrlImagenCategoria'].' alt="imagen comida"><hr>';
        echo '<p>'.$array['NombreItem1'].'</p><p style="text-align:right">'.$array['PrecioItem1'].'</p><p>'.$array['DescripcionItem1'].'</p><br>';
        echo '<p>'.$array['NombreItem2'].'</p><p style="text-align:right">'.$array['PrecioItem2'].'</p><p>'.$array['DescripcionItem2'].'</p><br>';
        echo '<p>'.$array['NombreItem3'].'</p><p style="text-align:right">'.$array['PrecioItem3'].'</p><p>'.$array['DescripcionItem3'].'</p><hr>';
    }

?>      
    </div>  
</body>
</html>