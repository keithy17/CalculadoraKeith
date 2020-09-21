<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="background:#ccc;">
<div class="cont">
  <div class="contenedor">
    <div class="caja1">
      <div class="login">SignUp</div>
      <div class="menlogin">Registrate para acceder a la Calculadora KI 10 Plus</div>
    </div>
    <div class="caja2">
      <!-- Formulario de registro -->
      <form action="signup.php" method="POST">
        <input type="text" name="nom" placeholder="NOMBRE"><br>
        <input type="text" name="usu" placeholder="USUARIO"><br>
        <input type="password" name="contra" placeholder="CONTRASEÑA"><br>
        <input type="submit" name="Registrarme" value="SignUp"> <b>or</b>
        <!-- Boton para dirigirse al login en caso de que ya tenga un usuario ya creado -->
        <a href="formlogin.php"><button type="button">LogIn</button></a>
        </form>
      </div>  
    </div>  
  </div>
</cont>
</body>
</html>