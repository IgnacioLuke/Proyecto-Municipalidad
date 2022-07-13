<?php
    include '../config.php';

    if(isset ($_POST['eliminar'])){

        foreach($_POST['checks'] as $unId){  
        
            $query='DELETE FROM reclamos WHERE id ='.$unId;
            mysqli_query($conexion, $query);
            
           
        }
    }
    
    header('Location: index.php');
?>