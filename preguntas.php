

<?php 
    $conexion = mysqli_connect('localhost','root','','juego');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>


<body>
    <div id="main-container">
        <?php 
            $sql = "SELECT * FROM  preguntas";
            $result = mysqli_query( $conexion, $sql);
            while( $mostrar = mysqli_fetch_array($result) ){
        ?>
        <div class="container" id="container">
            <div class="pregunta-1 p">
                <h2>Pregunta <?php echo $mostrar['id']?>  </h2>              
                <p> <?php echo $mostrar['descripcion']?>  </p>
                <p>
                   
                <?php 
                    if($mostrar){ ?>
                        <script type="text/javascript">
                            var conta = '<?php echo $mostrar['id']?> '
                        </script>  
                        
                        <?php 
                            echo '
                            <script type="text/javascript">

                                console.log(Contadora(conta));
                                
                            </script> '
                            ;
                    }?>
                    <input autocomplete="off" type="text" name="respuesta" id="<?php echo $mostrar['id']?>;">
                    <input style="display: none;" autocomplete="off" value="<?php echo $mostrar['respuesta']?>" id="respuestaCorrecta">
                </p>
               
            </div>
        </div>
        <?php 
            }    
        ?>
        <input type="button" value="Enviar" onclick="enviar2()" id="myBtn">
    </div>

    <!-- <script src="app.js"></script>        -->
   
</body>

</html>



