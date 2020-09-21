<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="background:#ccc;">
<div class="error">
<?php
//requerir la conexion a la bd
require("consignup.php");
//llamado a los datos ingresados en el formulario de registro
$nom=$_POST['nom'];
$usu=$_POST['usu'];
$contra=$_POST['contra'];
$reqlen=strlen($usu)*strlen($contra);
//condicion para que si los campos estan vacios muestre un mesaje de que regrese para llenar el formulario, sino que pueda insertar los datos en la bd
if($reqlen>0){
    //inserta los datos a la bd
    $mysqli="INSERT INTO hoja1 VALUES ('$nom', '$usu', '$contra')";
    $resultado=mysqli_query($conexion,$mysqli);
    //cerrar la conexion a la bd
    mysqli_close($conexion);
    //condicion para que si se guardaron los datos en la bd muestre un mensaje de exito, sino un mensaje para que regrese a llenar el formulario de registro
    if($resultado){
        echo"<script>alert('Usuario registrado exitosamente'); window.location='formlogin.php';</script>";
    }else{
        echo"<center><h1>UPS! HUBO UN ERROR GUARDANDO TUS DATOS, <BR> POR FAVOR VUELVE A INTENTARLO</h1><br><center>";
        echo"<a href='index.php'><button type='button'>REGRESAR</button></a>";
    }
    
}else{
    echo"<center><h1>UPS! PARECE QUE NO LLENASTE TODOS LOS CAMPOS, <BR> POR FAVOR VUELVE A INTENTARLO</h1><br><center>";
    echo"<a href='index.php'><button type='button'>REGRESAR</button></a>";
}

?>

</div>
</body>
</html>