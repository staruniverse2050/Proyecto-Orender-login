<?php
    $conexion=mysqli_connect("localhost", "root", "", "orende");
?>
 <?php

session_start();
if(!empty($_POST['IniciarSesion'])){

    $Email=$_POST['Email'];
    $Contraseña=$_POST['contraseña'];


    $sql2= "SELECT COUNT(*) as contar FROM registro WHERE Email='$Email' AND contraseña='$Contraseña' ";
    $consulta2 = mysqli_query($conexion, $sql2);

    $array=mysqli_fetch_array($consulta2);

    if($array['contar']>0){
        echo '<script language="javascript">alert("Bienvenido señor usuario :3 ");window.location.href="Orender.php"</script>';


    }else{
        echo '<script language="javascript">alert("No te encuentras registrado :(");window.location.href="login.php"</script>';
}
}

?>