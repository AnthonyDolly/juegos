<?php
// session_start();

if (!$_SESSION["validar"]) {
    header("location:index.php?action=inicio");
    exit();
}
?>

<div id="main-container">
    <div class="container" id="container">
        <?php
        $vista = new preguntasControlador();
        $vista->vistaPreguntasControlador();
        ?>
    </div>
</div>