<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" type="text/css" rel="stylesheet" />
    <title>PACIENTE</title>
</head>
<body>
    <div class="cuerpo_login_admin">
        <form  action = "" method= "post"  class="login_admin"   >
            <label>USUARIO   <label><input type="text" name="usuario"><br>
            <label>CLAVE    <label><br><input type="password" name="clave"><br>
            <input type="submit" name="ingresar" value="INGRESAR" ><br><br>
            <a href="cerrar_sesion.php">CERRAR SESIÓN</a><br>
            <br><a href="index.html">INICIO</><br>
        </form>
    </div>   
</body>
</html>