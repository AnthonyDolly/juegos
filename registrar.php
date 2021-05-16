<?php 
    include('conexion.php');

    $nombreNew = $_POST['nombre'];
    $apellidoNew = $_POST['apellido'];
    $idNew = $_POST['idNew']; 
    $contraseñaNew = $_POST['contraseñaNew'];

    $registro = "INSERT INTO usuarios(id, nombres, apellidos, contra, puntos ) 
                    VALUES('$idNew', '$nombreNew','$apellidoNew', '$contraseñaNew', 0 )";
    $resultado = mysqli_query($conexion, $registro);

    if($resultado){
        echo '
            <script type="text/javascript">
                alert("Usuario registrado con éxito");
                </script> ' ;
        header("location:index.php");

    }else{
  
        echo '
        <script type="text/javascript">
            alert("Error en el registro");
        </script> ' ;
        header("location:index.php");    
    }

    mysqli_close($conexion);
