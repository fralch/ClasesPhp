<?php 
include ("conectar.php");
$con=conectar();


?>


   <?php 
      
        $consulta="SELECT * FROM mensaje order by idmensaje desc ";
        $rconsulta= mysqli_query($con, $consulta);
        

        foreach ($rconsulta as $valores) {
            
            ?>
            <p><?php echo "$valores[mensajes]"?></p>
            <?php 
            
            
        }

        header("refresh:3; mensaje.php"); //actualiza la pagina cada 2 segundos
        
    ?>
   