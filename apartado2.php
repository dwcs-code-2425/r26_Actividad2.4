<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas lunch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="container">
    <h1>Reservas lunch</h1>
    <form method="post">

        <div class="row mb-3 ">
            <label for="data" class="form-label ">Introduza a data: </label>
            <div class="col-lg-6   ">
                <input type="date" name="data" id="data" min="2025-10-15" value="2025-10-15" max="2025-10-31" required
                    class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="hora" class="form-label">Introduza a hora:</label>
            <div class="col-lg-6  ">
                <input type="time" name="hora" id="hora" min="13:00" max="15:00" value="13:00" class="form-control">
            </div>
        </div>
        <fieldset class="mb-3">
            <legend>Ubicación</legend>
            <input type="radio" name="ubicacion" id="interior" value="i" class="form-check-input"> <label for="interior"
                class="form-check-label">Interior</label>
            <input type="radio" name="ubicacion" id="terraza" checked value="t" class="form-check-input"> <label
                for="terraza" class="form-check-label">Terraza</label>
        </fieldset>
        <div class="row mb-3">
            <label for="prendas" class="form-label">Introduza se é alérxico a algún dos seguintes elementos:</label>
            <div class="col-lg-6  ">
                <select name="alerxenos[]" id="alerxenos" multiple class="form-select">
                    <option value="" disabled>--</option>
                    <option value="leite">Leite</option>
                    <option value="ovo">Ovo</option>
                    <option value="gluten">Gluten</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Reservar" class="btn btn-primary">
    </form>

    <?php
    //cambiar $_POST por $_GET en función del método HTTP utilizado
    foreach ($_POST as $clave => $valor) {

        echo "<strong>$clave</strong>:";

        if (!is_array($valor)) {


            echo $valor;

        } else {

            echo var_dump($valor);
        }

        echo "<br/>";
    }
    ?>
    <!-- Extra (no estaba en el ejercicio):
 Le he pedido a ChatGPT que nos haga una función en JavaScript para obtener la fecha actual y asignar los valores min y max del input:date -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const input = document.getElementById("data");
            const today = new Date();

            // Función para formatear la fecha a YYYY-MM-DD
            const formatDate = (date) => {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, "0");
                const day = String(date.getDate()).padStart(2, "0");
                return `${year}-${month}-${day}`;
            };

            // Fecha actual
            const todayStr = formatDate(today);

            // Último día del mes actual
            const lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);
            const lastDayStr = formatDate(lastDay);

            // Asignar valores al input
            input.value = todayStr;
            input.min = todayStr;
            input.max = lastDayStr;
        });
    </script>
</body>

</html>