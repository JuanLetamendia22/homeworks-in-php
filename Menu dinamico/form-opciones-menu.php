<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Formulario del menu</title>
</head>
<body>
    <header class="encabezado">
        <h1>Menu de comidas "La dinámica"</h1>
        <h3>Formulario para agregar comidas</h3>
        <?php
              echo '<html>
                        <a href="vista-menu.php">
                            <button type="button">Representar el menu</button>
                        </a>
                    </html>';
        ?>
    </header>
    <main class="principal">
        <div class="form">
            <form action="\pruebasPhp\ejercicios\homeworks-in-php\Menu dinamico\procesar-form.php" method="post" enctype="multipart/form-data">
                <div class="selector-categorias">
                    <label for="categorias">Categoría:</label>
                    <select id="categorias" name="categorias">
                        <option value="Hamburguesas"> Hamburguesas</option>
                        <option value="Panchos"> Panchos</option>
                        <option value="Pizza"> Pizza</option>
                    </select>
                    <!--Agregar dinamismo con php y agregar la posibilidad de agregar o modificar imagen-->
                </div>
                <div class="subir-imagen">
                    <label for="imagen">Subir Imagen de la categoría</label>
                    <input type="file" name="imagen-categoria" required>
                </div>
                <div class="items">
                    <h3>Item</h3>
                    <label for="nombre-item1">Nombre</label>
                    <input id="nombre-item1" type="text" name="nombre-item1" required>
                    <label for="descripcion1">Descripción</label>
                    <input id="descripcion1" type="text" name="descripcion-item1" required>
                    <label for="precio1">Precio</label>
                    <input id="precio1" type="number" name="precio-item1" required>
                </div>
                <div class="items">
                    <h3>Item</h3>
                    <label for="nombre-item2">Nombre</label>
                    <input id="nombre-item2" type="text" name="nombre-item2" required>
                    <label for="descripcion2">Descripción</label>
                    <input id="descripcion2" type="text "name="descripcion-item2" required>
                    <label for="precio2">Precio</label>
                    <input id="precio1" type="number" name="precio-item2" required>
                </div>
                <div class="items">
                    <h3>Item</h3>
                    <label for="nombre-item3">Nombre</label>
                    <input id="nombre-item3" type="text" name="nombre-item3" required>
                    <label for="descripcion3">Descripción</label>
                    <input id="descripcion3" type="text" name="descripcion-item3" required>
                    <label for="precio3">Precio</label>
                    <input id="precio3" type="number" name="precio-item3" required>
                </div>
                <div class="enviar">
                    <input type="submit" value="Enviar Menu">
                </div>
            </form>
        </div>
    </main>
</body>
</html>