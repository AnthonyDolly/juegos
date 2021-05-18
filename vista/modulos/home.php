<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>

<body>
    <nav class="nav-extended blue lighten-1 row">
        <div class="nav-wrapper col s12">
            <a href="index.php" class="brand-logo" style="height: 100%;"><img src="img/logo.svg" alt="Logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <?php
                    if (isset($_SESSION["username"])) { ?>
                        <script type="text/javascript">
                            var userC = '<?php echo $_SESSION['username']; ?>'
                            var idC = '<?php echo $_SESSION['id']; ?>'
                        </script>
                    <?php
                        echo ' 
                            <script type="text/javascript">
                            Usuario(userC,idC);
                            </script> ';
                    } else {
                    ?>
                    <li><a class="waves-effect waves-light btn-small light-blue lighten-1 modal-trigger" href="#modalLogin">Iniciar Sesión</a></li>
                    <li><a class="waves-effect waves-light btn-small light-blue lighten-1 modal-trigger" href="#modalRegister">Registrarse</a></li>
                    <?php
                    } ?>
                </li>
            </ul>
        </div>
        <div class="nav-content col s12 l4 right">
            <ul id="nav-mobile" class="tabs tabs-transparent right ">
                <li class="tab"><a class="active" href="index.php">Inicio</a></li>
                <li class="tab"><a href="preguntas.php">Preguntas</a></li>
                <li class="tab"><a href="records.php">Record de Notas</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Iniciar Sesión</a></li>
        <li><a href="badges.html">Registrarse</a></li>
    </ul>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>