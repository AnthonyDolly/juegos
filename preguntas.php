<?php
$conexion = mysqli_connect('localhost', 'root', '', 'juego');
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
        $sql = "SELECT * FROM preguntas 
                WHERE nivel = 1
                ORDER BY RAND()
                LIMIT 10;";
        $result = mysqli_query($conexion, $sql);
        $i = 0;
        while ($mostrar = mysqli_fetch_array($result)) {
            $i++;
        ?>
            <div class="container" id="container">
                <div class="pregunta-1 p">
                    <h2>Pregunta <?php echo $i ?> </h2>
                    <p> <?php echo $mostrar['descripcion'] ?> </p>
                    <p>
                        <input autocomplete="off" type="text" name="respuesta" id="respuesta<?php echo $i ?>">
                        <?php
                        if ($mostrar) { ?>
                            <script type="text/javascript">
                                var i = '<?php echo $i ?> '
                                var respuestasC = '<?php echo $mostrar['respuesta'] ?> '
                                var respuestaE = document.getElementById(`respuesta${i}`)
                            </script>

                        <?php
                            echo '
                            <script type="text/javascript">

                                almacenarRC(respuestasC);
                                
                            </script> ';
                        } ?>


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