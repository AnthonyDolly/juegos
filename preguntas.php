<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="main-container">
        <h1 id="nivel">Nivel 1</h1>
        <div class="container" id="container">
            <div class="pregunta-1 p">
                <h2>Pregunta 1</h2>
                <p>¿Cuánto es 7 + 2?</p>
                <p>
                    <input type="radio" class="respuesta" name="respuesta" id="respuesta-1.1">
                    <label for="respuesta-1.1">Respuesta 1</label>
                    <input type="radio" class="respuesta" name="respuesta" id="respuesta-1.2">
                    <label for="respuesta-1.2">Respuesta 2</label>
                    <input type="radio" class="respuesta" name="respuesta" id="respuesta-1.3">
                    <label for="respuesta-1.3">Respuesta 3</label>
                    <input type="radio" class="respuesta" name="respuesta" id="respuesta-1.4">
                    <label for="respuesta-1.4">Respuesta 4</label>
                    <input type="radio" class="respuesta" name="respuesta" id="respuesta-1.5">
                    <label for="respuesta-1.5">Respuesta 5</label>
                </p>
            </div>
            <input type="button" value="Enviar" onclick="enviar()" id="myBtn">
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>