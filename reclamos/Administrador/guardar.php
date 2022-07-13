<?php
    include '../config.php';

    if(isset ($_POST['guardar'])){

        $estado = $_POST["select"];

        foreach($_POST['checks'] as $unId){ 

            if($estado = "En espera"){
                $nuevoestado = $estado;
                
            }

            if($estado = "En proceso"){
                $nuevoestado = $estado;
                
            }

            if($estado = "Finalizado"){
                $nuevoestado = $estado;
                
            }

            $query= "UPDATE reclamos SET estado='$nuevoestado' WHERE id='$unId'";
            mysqli_query($conexion, $query);

           
        }
    }
    echo $estado;
    //header('Location: index.php');
?>