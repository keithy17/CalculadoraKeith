<?php
//establecimiento de conexion a la bd
 $host='localhost';
 $us='root';
 $pass='';
 $db='usua';
 
 $conexion = mysqli_connect($host,$us,$pass,$db)
 //mensaje en caso de que no se pueda conectar
            or die ("ERROR: No se Conecto al Servidor");

?>