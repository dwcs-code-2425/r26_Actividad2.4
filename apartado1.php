<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>


<body>
    <div class="container">
        <h1>Tienda de ropa</h1>
        <form action="" method="get">
            <div>
                <label for="prenda" class="form-label">Seleccione tipo de prenda</label>
                <select name="prenda[]" id="prenda" multiple class="form-select">
                    <option value="value1">Abrigos</option>
                    <option value="value2">Tops</option>
                    <option value="value3">Camisas</option>
                </select>
            </div>
            <div class="mb-3"><label for="color" class="form-label">Color:</label>
                <input type="color" name="color" id="color" class="form-control form-control-color">
            </div>
            <div><input type="submit" value="Enviar" class="btn btn-primary"></div>
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

    </div>
</body>

</html>