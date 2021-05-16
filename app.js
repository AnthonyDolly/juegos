boton = document.getElementById('myBtn');

const almacenarRC = (respuestasCorrectas) => {
    respuestasC = [];

    respuestasC = respuestasCorrectas;
    console.log(respuestasC);
}

const compararRespuestas = (arr2) => {
    console.log('Respuestas correctas: ' + respuestasC);
    console.log('Respuestas enviadas: ' + arr2);
    let puntuacion = 0;
    for (j = 0; j < 10; j++) {
        if ((respuestasC[j] == arr2[j])) {
            puntuacion = puntuacion + 2;
        } else {
            puntuacion = puntuacion + 0;
        }
    }
    alert(`Tienes ${puntuacion} puntos`)
    return puntuacion;
}

const almacenarPuntos = (puntuacion) => {
    puntosTotales = puntuacion;
    return puntosTotales;
}



function enviar2() {
    respuestasE = [];
    var arr2 = [];
    for (var i = 1; i <= 10; i++) {
        respuestasE = document.getElementById(`respuesta${i}`).value;
        console.log(respuestasE)
        arr2.push(respuestasE)
    }
    compararRespuestas(arr2);
    pts = compararRespuestas(arr2);
    almacenarPuntos(pts);
}


// let botonEnviar = document.getElementById('myBtn');
// // botonEnviar.addEventListener('click', () => {


// });



