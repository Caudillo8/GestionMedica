<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" type="text/css" rel="stylesheet" />
    <title>MENÚ ADMINISTRADOR</title>
</head>
<body>
    <!---MEDICOS------------------------------- --->
    <h2>MEDICOS</h2>
    <br><strong>Búsqueda por lista:</strong>
    <form action="" method="post" >
        <select name="select_medico">
            <?php
                $query = "SELECT * FROM medicos WHERE 1 ;" ;
                $resultado = mysqli_query ($conexion , $query);
                if (! $resultado){
                    echo "ERROR CONSULTA";
                    exit;
                }
            ?>
            <?php while ($fila = mysqli_fetch_assoc($resultado) ){?> 
                <option value="<?= $fila['id'] ?>" name="buscar_medico" method="post">
                    <?= $fila['apellido'] ?>   <?= $fila['nombre'] ?>    
                </option>
            <?php } ?>
        </select>
        <input type="submit" name="boton_buscar_medico" value="DATOS">
   
    <?php
        if(isset($_POST['boton_buscar_medico'])){
            $id_medico= $_POST['select_medico'];
            echo '<br>ID :'.$id_medico.'<br>';
            $query_datos_medico = "SELECT * from medicos WHERE id = '$id_medico';";
            $resultado_medico = mysqli_query($conexion, $query_datos_medico);
            $dato_medico = mysqli_fetch_assoc($resultado_medico);
            echo'NRO CATEGORIA  :'.$dato_medico['fk_categoria'];
            $fk_medico_categoria = $dato_medico['fk_categoria'];
            $query_categoria_medico = "SELECT nombre FROM categorias WHERE id = '$fk_medico_categoria';";
            $resultado_categoria_medico = mysqli_query($conexion, $query_categoria_medico);
            $dato_categoria_medico = mysqli_fetch_assoc($resultado_categoria_medico);
            echo'<br>ESPECIALIDAD :'.$dato_categoria_medico['nombre'];
            echo'<br>MATRÍCULA :'.$dato_medico['matricula'];
            echo'<br> DNI :'.$dato_medico['dni'];
            echo'<br> MAIL :'.$dato_medico['mail'];
            echo'<br> TELEFONO :'.$dato_medico['telefono'];

        }
        

    ?>
     </form>
    <!--------------------------------------->











</body>
</html>