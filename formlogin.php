<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="background-color:#ccc">
<div class="cont">
  <div class="contenedor">
    <div class="caja1">
      <div class="login">LogIn</div>
      <div class="menlogin">Al acceder aceptas todos los terminos y condiciones que nunca leiste</div>
    </div>
    <div class="caja2">
      <!-- Formulario de login -->
      <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="USUARIO"><br>
        <input type="password" name="contrasenia" placeholder="CONTRASEÑA"><br>
        <input type="submit" name="Iniciar Sesion" value="LogIn"><b> or</b>
        <!-- Boton para registrarse en caso de que no tenga un usuario ya creado -->
        <a href="index.php"><button type="button">SignUp</button></a>
        </form>
    </div>  
  </div>
</cont>
</body>
</html>