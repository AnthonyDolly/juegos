<?php

class recordsControlador
{
    #Insertando el puntaje obtenido en records
    public function registroRecordsControlador()
    {
        if (isset($_POST["ptsO"])) {
            $datosControlador = array(
                "dni" => $_SESSION["dni"],
                "ptsO" => $_POST["ptsO"]
            );

            $respuesta = DatosRecords::registroRecordsModelo($datosControlador, "records");

            if ($respuesta == "success") {
                header('location:index.php?action=ok&pts=' . $_GET["pts"] . '');
            } else {
                header("location:index.php");
            }
        }
    }

    #Vista de los 5 mejores puntajes con la feecha más actual
    public function vistaRecordsControlador()
    {
        $respuesta = DatosRecords::vistaRecordsModelo("records");

        $i = 0;
        foreach ($respuesta as $row => $item) {
            $i++;
            switch ($i) {
                case 1:
                    echo '<div>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle blue">looks_one</i>
                            <span class="title">' . $i . 'er Puesto</span>
                            <p>' . $item["Nombre"] . ' <br>
                                ' . $item["Puntuacion Total"] . '
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>';
                    break;
                case 2:
                    echo '<div>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle orange">looks_one</i>
                            <span class="title">' . $i . 'do Puesto</span>
                            <p>' . $item["Nombre"] . ' <br>
                                ' . $item["Puntuacion Total"] . '
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>';
                    break;
                case 3:
                    echo '<div>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green">looks_one</i>
                            <span class="title">' . $i . 'er Puesto</span>
                            <p>' . $item["Nombre"] . ' <br>
                                ' . $item["Puntuacion Total"] . '
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>';
                    break;
                case 4:
                    echo '<div>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle red">looks_one</i>
                            <span class="title">' . $i . 'to Puesto</span>
                            <p>' . $item["Nombre"] . ' <br>
                                ' . $item["Puntuacion Total"] . '
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>';
                    break;
                case 5:
                    echo '<div>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle purple">looks_one</i>
                            <span class="title">' . $i . 'to Puesto</span>
                            <p>' . $item["Nombre"] . ' <br>
                                ' . $item["Puntuacion Total"] . '
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>';
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
}
