<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="background-color:#ccc;">
<div class="error"><p>
<?php
    //incluir la conexion a la bd
    include('consignup.php');
    //llamado a los datos ingresados en el formulario del login
    $usuario=$_REQUEST["usuario"];
    $contrasenia=$_REQUEST["contrasenia"];
    //consulta para revisar que el usuario y contraseña ingresados existan en la bd
    $consulta = "SELECT * FROM hoja1 WHERE B='$usuario' AND C='$contrasenia'";
    
    $query= mysqli_query($conexion, $consulta);
    $nr= mysqli_num_rows($query);
    //condicion para que ingrese a la calculadora en caso de que el usuario y contraseña existan, sino que mustre una opcion para regresar a registrarse
    if($nr==1){
        header("location:calculadora.php");
    }
    else if($nr==0){
        echo"<center><h1>LOS DATOS QUE INGRESASTE SON INCORRECTOS<BR>POR FAVOR VUELVE A INTENTARLO</h1><br><center>";
        echo"<a href='index.php'><button type='button'>REGRESAR</button></a>";
    }

    ?>
    <p>
</div>
</body>
</html>