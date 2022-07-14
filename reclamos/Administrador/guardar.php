<?php
    include '../config.php';

    if(isset ($_POST['guardar'])){

        $estado = $_POST['myselect'];
        $observaciones = $_POST['observaciones'];
        echo $observaciones;
        echo $estado;

        if(isset ($_POST['checks'])){

            foreach($_POST['checks'] as $unId){ 

                if($estado == "Finalizado"){

                    date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $fecha = date('Y-m-d H:i:s', time());

                    $query= "UPDATE reclamos SET estado='$estado', fecha_finalizado='$fecha' WHERE id=".$unId;
                    mysqli_query($conexion, $query);
                    


                }else{


                   

                }
                $query= "UPDATE reclamos SET observaciones='$observaciones' WHERE id=".$unId;
                mysqli_query($conexion, $query);

            }
        }
    }
   
    //header('Location: index.php');
?>