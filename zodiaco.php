<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Zodiaco</title>
</head>

<body>

    <?php
    const CAPRICORNIO = "Capricornio";
    const ACUARIO = "Acuario";
    const PISCIS = "Piscis";
    const ARIES = "Aries";
    const TAURO = "Tauro";
    const GEMINIS = "Géminis";
    const CANCER = "Cáncer";
    const LEO = "Leo";
    const VIRGO = "Virgo";
    const LIBRA = "Libra";
    const ESCORPIO = "Escorpio";
    const SAGITARIO = "Sagitario";

    //Las claves del día de corte van incluídas. Por ejemplo: los nacidos hasta el 20/01 son capricornio
    $zodiaco = array(
        //enero  
        1 => array(
            20 => CAPRICORNIO,
            "else" => ACUARIO
        ),
        //febrero
        2 => array(
            19 => ACUARIO,
            "else" => PISCIS
        ),
        //marzo
        3 => array(
            20 => PISCIS,
            "else" => ARIES
        ),
        //abril
        4 => array(
            19 => ARIES,
            "else" => TAURO
        ),
        //mayo
        5 => array(
            20 => TAURO,
            "else" => GEMINIS
        ),
        //junio
        6 => array(
            20 => GEMINIS,
            "else" => CANCER
        ),
        //julio
        7 => array(
            22 => CANCER,
            "else" => LEO
        ),
        //agosto
        8 => array(
            22 => LEO,
            "else" => VIRGO
        ),
        //septiembre
        9 => array(
            22 => VIRGO,
            "else" => LIBRA
        ),
        //octubre
        10 => array(
            22 => LIBRA,
            "else" => ESCORPIO
        ),
        //completar aquí...
        11 => [
            22 => ESCORPIO,
            "else" => SAGITARIO
        ],
        12 => [
            21 => SAGITARIO,
            "else" => CAPRICORNIO
        ]

    );

    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");



    if (isset($_POST["mes"], $_POST["dia"])) {
        $mes = $_POST["mes"];
        $dia = $_POST["dia"];

        //echo "día: $dia y mes: $mes";
        $subarray = $zodiaco[$mes];
        $dia_corte = array_key_first($subarray);
        if ($dia <= $dia_corte) {
            $signo = $subarray[$dia_corte];
        } else {
            $signo = $subarray["else"];
        }

     
    }



    ?>
    <form method="post">

        Selecciona tu día y mes de nacimiento:

        <p>
            <label for="dia">Día:</label>
            <select name="dia" id="dia" required>
                <?php


                for ($i = 1; $i <= 31; $i++) {
                    // $att_selected = "";
                    // if ($i == $dia) {
                    //     $att_selected = "selected";
                    // }
                    $att_selected = ($i == $dia) ? "selected" : "";
                    echo "  <option value='$i' $att_selected>$i</option>";
                }
                ?>


            </select>


            <label for="mes">Mes</label>
            <select name="mes" id="mes" required>
                <?php
                foreach ($meses as $key => $value) {
                    $option_value = $key + 1;

                    $att_selected = ($option_value==$mes) ? "selected" : "";
                    echo "  <option value='$option_value' $att_selected>$value</option>";
                }
                ?>



            </select>



        </p>


        <p>
            <input type="submit" value="Enviar" />
        </p>



    </form>


    <?php 
    if(isset($signo)){
       echo "<p>Su signo es $signo</p>";
    }
    ?>



</body>

</html>