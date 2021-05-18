<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Juegos</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vista/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="vista/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="vista/styles.css">
    <script src="vista/app.js"></script>

</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <?php
    $mvc = new MvcControlador();
    $mvc->enlacesPaginasControlador();
    ?>

    <?php
    include "includes/footer.php";
    ?>

    <?php
    include "includes/modalLogin.php";
    ?>

    <?php
    include "includes/modalRegister.php";
    ?>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });
    </script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="vista/js/materialize.js"></script>
    <script src="vista/js/init.js"></script>
    


    <?php
    $ingreso = new usuarioControlador();
    $ingreso->ingresoUsuarioControlador();
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "fallo") {
            echo "Fallo al ingresar";
        }
    }
    ?>

    <?php
    $registro = new usuarioControlador();
    $registro->registroUsuarioControlador();
    if (isset($_GET["action"])) {
        if ($_GET["action"] == "ok") {
            echo "Registro exitoso";
        }
    }
    ?>


</body>

</html>

<?php
ob_end_flush();
?>