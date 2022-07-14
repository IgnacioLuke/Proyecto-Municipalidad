<?php
/* Este código imprime los datos de un reclamo mediante su ID */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi reclamo</title>
</head>
<body>
    <form action="ver_reclamo.php" method="POST">
        <input type="number" name="numero_reclamo">
        <input type="submit">
    </form>
</body>
</html>

<?php

include "../config.php";

//Si se detecta un número de reclamo, se imprime en una tabla
if(isset($_POST["numero_reclamo"])){
    $numero_reclamo = $_POST["numero_reclamo"];

    $query = "SELECT `id`, `agente`, `localidad`, `sector`, `pedido`, `detalles`, `fecha_reclamo`, `estado`, `fecha_finalizado`, `observaciones` FROM `reclamos` WHERE id='$numero_reclamo'";

    $reclamo = mysqli_query($conexion, $query);

    $reclamo = mysqli_fetch_assoc($reclamo);

    echo "<table>";
        echo "<tr>";

            echo "<center>";
            echo "<table>";
            echo "<td>Nº de reclamo</td>";
            echo "<td>Agente</td>";
            echo "<td>Localidad</td>";
            echo "<td>Sector</td>";
            echo "<td>Reclamo</td>";
            echo "<td>Detalles</td>";
            echo "<td>Fecha_reclamo</td>";
            echo "<td>Estado</td>";
            echo "<td>Fecha_finalizado</td>";
            echo "<td>Observaciones</td>";

        echo "</tr>";
        echo "<tr>";

            echo"<td>";
                echo $reclamo['id'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['agente'];
            echo"</td>";

            echo"<td>";
            echo $reclamo['localidad'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['sector'];
            echo"</td>";
         
            echo"<td>";
                echo $reclamo['pedido'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['detalles'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['fecha_reclamo'];
            echo"</td>";
            
            echo"<td>";
                echo $reclamo['estado'];
            echo"</td>";
            
            echo"<td>";
                echo $reclamo['fecha_finalizado'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['observaciones'];
            echo"</td>";


        echo "</tr>";
    echo "</table>";


}else{}

?>

<a href="index.html">Volver</a>