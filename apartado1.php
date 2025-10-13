<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tienda de ropa</h1>

    <form action="" method="get">
        <div>
            <label for="prenda">Seleccione tipo de prenda</label>
            <select name="prenda[]" id="prenda" multiple>
                <option value="value1">Abrigos</option>
                <option value="value2">Tops</option>
                <option value="value3">Camisas</option>
            </select>
        </div>

        <div><label for="color">Color:</label>
            <input type="color" name="color" id="color">
        </div>

        <div><input type="submit" value="Enviar"></div>

    </form>


    <h2> Estos son los datos recibidos de tu formulario:</h2>
    <?php

    //cambiar $_POST por $_GET en función del método HTTP utilizado
    foreach ($_GET as $clave => $valor) {

        echo "<strong>$clave</strong>:";

        if (!is_array($valor)) {
            if ($clave == "color") {
                echo " <span style='background-color:$valor'>$valor</span>";
            } else {
                echo " $valor";
            }
        } else {
            echo "<pre>";
            print_r($valor);
            echo "</pre>";
        }

        echo "<br/>";
    }
    ?>
</body>

</html>