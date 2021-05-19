<?php

class preguntasControlador
{
    #Vista de 10 preguntas
    #----------------------------
    public function vistaPreguntasControlador()
    {
        $datosControlador = $_SESSION["dni"];
        $respuesta = DatosPreguntas::vistaPreguntasModelo($datosControlador, "preguntas");

        echo '
        <script type="text/javascript">
            var arr = [];
        </script> ';
        $i = 0;
        foreach ($respuesta as $row => $item) {
            $i++;

            echo '
                    <div class="pregunta-' . $i . ' p">
                        <h2>Pregunta ' . $i . ' </h2>
                        <p>' . $item["descripcion"] . '</p>
                        <p>
                            <div class="row">
                                <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input autocomplete="off" type="text" id="respuesta' . $i . '" class="validate">
                                    </div>
                                </div>
                                </form>
                            </div>
                        </p>
                    </div>';
            if ($item) {
                echo '<script type="text/javascript">
                        var respuestaC = ' . $item["respuesta"] . ';
                        arr.push(respuestaC);
                        var respuestaE = document.getElementById("respuesta' . $i . '");
                    </script>';
            }
        }

        echo '
            <script type="text/javascript">
                almacenarRC(arr);
            </script>
            <form method="POST">
                <input type="text" name="pts" id="pts" value=' . $_SESSION["puntos"] . '>
                <input type="hidden" name="ptsO" id="ptsO" value>
                <input type="submit" value="Enviar" id="myBtn" name="myBtn" onclick="enviar2(),pt()">
            </form>
            ';
    }
}
