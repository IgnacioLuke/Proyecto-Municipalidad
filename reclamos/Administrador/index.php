<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>
<body>
    <header>
        <h2>Reclamos</h2>

        <nav>

        </nav>

    </header>

    
    <?php 
        include '../config.php';

        $query= "SELECT * FROM reclamos";
        $result = mysqli_query($conexion, $query);

        echo "<center>";
        echo "<table>";
        echo '<form method="POST">';

        echo "<td>Nro de reclamo</td>";
        echo "<td>Agente</td>";
        echo "<td>Localidad</td>";
        echo "<td>Sector</td>";
        echo "<td>Reclamo</td>";
        echo "<td>detalles</td>";
        echo "<td>fecha de reclamo</td>";
        echo "<td>estado</td>";
        echo "<td>fecha de finalizado</td>";
        echo "<td>observaciones</td>";
        

        while($registro = mysqli_fetch_assoc($result)){

            echo "<tr>";

            echo '<td>';       
            echo '<input type="checkbox" name="checks[]" value='.$registro['id'].'>';        
 
            echo $registro['id'];
            echo "</td>";

            echo "<td>";
                echo $registro['agente'];
            echo "</td>";

            echo "<td>";
                echo $registro['localidad'];
            echo "</td>";

            echo "<td>";
                echo $registro['sector'];
            echo "</td>";

            echo "<td>";
                echo $registro['pedido'];
            echo "</td>";

            echo "<td>";
                echo $registro['detalles'];
            echo "</td>";

            echo "<td>";
               $originalDate = $registro['fecha_reclamo'];
               $timestamp = strtotime($originalDate); 
               $newDate = date("d/m/Y H:i:s", $timestamp );
               echo "$newDate";
            echo "</td>"; 

            echo "<td>";
                echo $registro['estado'];
            echo "</td>"; 

            echo "<td>" ;
               $originalDate = $registro['fecha_finalizado'];
               $timestamp = strtotime($originalDate); 
               $newDate = date("d/m/Y H:i:s", $timestamp );
               echo "$newDate";
            echo "</td>"; 

            echo "<td>";
            echo $registro['observaciones'];
            echo "</td>"; 
        
            echo "</tr>";
        
        }
        echo "</table>";

        echo '<button type="submit"  name="eliminar" formaction="eliminar.php" >Eliminar</button>';
        echo '<button type="submit"  name="guardar" formaction="guardar.php" >Guardar cambios</button>';
        echo "<select name='select'>
                <option value='' name='espera'>En espera</option>
                <option value='' name='proceso'>En proceso</option>
                <option value='' name='finalizado'>Finalizado</option>
              </select>";

        echo '</form>';
        echo "</center>";

    ?>

    
    
</body>
</html>
