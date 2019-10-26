<?php 
include ("conectar.php");
$con=conectar();
if ($_POST) {
    $men= $_POST["mensaje"];
    //echo $men;
    $ins= "insert into mensaje(mensajes) values('$men')";

    mysqli_query($con,$ins) or die (mysql_error());
    header("Location: chat.php"); //redirige a la pagina de chat
}

?>
