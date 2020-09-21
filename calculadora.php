<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body background="fondo.jpg" >
  <h1>Bienvenido!<br>
  Has accedido correctamente</h1>
  <!-- Formulario para ingresar los valores que desea operar -->
  <form name="calculadora" method="POST" action="calculadora.php">
    <input type="text" name="valor1" placeholder="Valor 1">
    <input type="text" name="valor2" placeholder="Valor 2">
    <br>
    <input type="button" value="1" onClick="valor1.value+='1'">
    <input type="button" value="2" onClick="valor1.value+='2'">
    <input type="button" value="3" onClick="valor1.value+='3'">
    <!-- Boton para realizar la suma de ambos valores -->
    <input type="submit" name="suma" value="+">
    <br>
    <input type="button" value="4" onClick="valor1.value+='4'">
    <input type="button" value="5" onClick="valor1.value+='5'">
    <input type="button" value="6" onClick="valor1.value+='6'">
    <!-- Boton para realizar la resta de ambos valores -->
    <input type="submit" name="resta" value="-">
    <br>
    <input type="button" value="7" onClick="valor1.value+='7'">
    <input type="button" value="8" onClick="valor1.value+='8'">
    <input type="button" value="9" onClick="valor1.value+='9'">
    <!-- Boton para realizar la multiplicacion de ambos valores -->
    <input type="submit" name="multi" value="*">
    <br>
    <input type="button" value="0" onClick="valor1.value+='0'">
    <!-- Boton eliminar los valores ingresados en el formulario -->
    <input type="reset" value="c">
    <!-- Boton para Cerrar sesion -->
    <input type="submit" name="volver" value="LogOut">
    <!-- Boton para realizar la division de ambos valores -->
    <input type="submit" name="div" value="/">
    <p>
   <?php
      //incluir las funciones de la calculadora
      include ("operaciones.php");
      
      //Muestra de resultado segun la operacion escogida con los botones
      if(isset($_REQUEST['suma'])){
        //llamado a los valores ingresados en los campos de la calculadora
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
        echo "Resultado: ".operaciones::sumar($valor1,$valor2); 
        }
      if(isset($_REQUEST['resta'])){
        //llamado a los valores ingresados en los campos de la calculadora
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
        echo "Resultado: ".operaciones::restar($valor1,$valor2);
        }
      if(isset($_REQUEST['multi'])){
        //llamado a los valores ingresados en los campos de la calculadora
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
        echo "Resultado: ".operaciones::multiplicar($valor1,$valor2);
        }
      if(isset($_REQUEST['div'])){
        //llamado a los valores ingresados en los campos de la calculadora
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
        echo "Resultado: ".operaciones::dividir($valor1,$valor2);
        }
      //direccionamiento a la pagina de registro en caso de presionar el boton para cerrar sesion
      if(isset($_REQUEST['volver'])){
          header("location:index.php");
        } 

    ?>  </p>
</body>
</html>