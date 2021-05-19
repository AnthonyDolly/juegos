boton = document.getElementById('myBtn');

const almacenarRC = (respuestasCorrectas) => {
    respuestasC = [];

    respuestasC = respuestasCorrectas;
    console.log(respuestasC);
}

const compararRespuestas = (arr2) => {
    console.log('Respuestas correctas: ' + respuestasC);
    console.log('Respuestas enviadas: ' + arr2);
    var puntuacion = 0;
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

const almacenarPuntos = (respuestasE) => {
    // compararRespuestas(respuestasE);

    puntosTotales = compararRespuestas(respuestasE);

    console.log(puntosTotales);
    return puntosTotales;
}

// function pts() {
//     var pts = 0;
//     pts = puntosTotales;
// }


function enviar2() {
    respuestasE = [];
    var arr2 = [];
    for (var i = 1; i <= 10; i++) {
        respuestasE = document.getElementById(`respuesta${i}`).value;
        console.log(respuestasE)
        arr2.push(respuestasE)
    }
    almacenarPuntos(arr2);

}


// let botonEnviar = document.getElementById('myBtn');
// // botonEnviar.addEventListener('click', () => {


// });

function Usuario(fullName, id) {
    ul = document.getElementById('nav-mobile');
    while (ul.firstChild) {
        ul.removeChild(ul.firstChild);
    }

    ul.insertAdjacentHTML('afterbegin', `
      <li class="px-3 username-list-item">
        <span>
            ${fullName}
            <div class="flecha">
              <img src="vista/img/flecha-down.svg" alt="flecha">
            </div>
        </span>
        <ul class="username-sublist">
            <li class="username-subitem">
                <a href="index.php?action=cerrar-sesion">
                    <div>
                        <img src="vista/img/cerrar-sesion.svg" alt="close-sesion"> Cerrar Sesión
                    </div>
                </a>
            </li>
        </ul>
      </li>`);
}


