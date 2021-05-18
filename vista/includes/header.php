<?php
session_start();
?>

<nav class="nav-extended blue lighten-1 row">
    <div class="nav-wrapper col s12">
        <a href="index.php" class="brand-logo" style="height: 100%;"><img src="vista/img/logo.svg" alt="Logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
            if (isset($_SESSION["username"])) { ?>
                <script>
                    var user = '<?php echo $_SESSION["username"] ?>'
                    var id = <?php echo $_SESSION["dni"] ?>
                </script>
            <?php
                echo ' 
                <script type="text/javascript">
                Usuario(user,id);
                    
                </script> ';
            } else {
            ?>
                <li><a class="waves-effect waves-light btn-small light-blue lighten-1 modal-trigger" href="#modalLogin">Iniciar Sesión</a></li>
                <li><a class="waves-effect waves-light btn-small light-blue lighten-1 modal-trigger" href="#modalRegister">Registrarse</a></li>
            <?php
            } ?>
        </ul>
    </div>
    <div class="nav-content col s12 l5 right">
        <ul id="nav-mobile" class="tabs tabs-transparent right ">
            <li class="tab"><a class="active" href="index.php?action=inicio">Inicio</a></li>
            <li class="tab"><a href="index.php?action=preguntas">Preguntas</a></li>
            <li class="tab"><a href="index.php?action=records">Record de Notas</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Iniciar Sesión</a></li>
    <li><a href="badges.html">Registrarse</a></li>
</ul>