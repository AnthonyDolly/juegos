<?php 

    $id = $_POST['id'];
    $contraseña = $_POST['contraseña'];

    session_start();
    $_SESSION['id'] =  $id ;

    include('conexion.php');

    $consulta = "SELECT * FROM usuarios where id= '$id' and contra='$contraseña' ";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location:home.php");
    }else{
        ?>
        <?php
            echo '
            <script type="text/javascript">
                alert("Error en la autenticacion");
            </script> ' ;
            include('index.php');
            
        ?>  
        <?php 
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
