// nivel = document.getElementById('nivel');

// boton = document.getElementById('myBtn');

// function agregarElemento() {
//     h1 = [];
//     div = [];
//     h2 = [];
//     p = [];
//     p2 = [];
//     input = [];
//     label = [];


// }

boton = document.getElementById('myBtn');

// function enviar() {
//     contador = 1;
//     boton.onclick = function () {
//         contador++;
//         switch (contador) {
//             case 1:
//                 agregarElementos(1, 1);
//                 break;
//             case 2:
//                 agregarElementos(2, 2);
//                 break;
//             case 3:
//                 agregarElementos(3, 3);
//                 break;
//             case 4:
//                 agregarElementos(4, 4);
//                 break;
//             case 5:
//                 agregarElementos(5, 5);
//                 break;
//             case 6:
//                 agregarElementos(6, 6);
//                 break;
//             case 7:
//                 agregarElementos(7, 7);
//                 break;
//             case 8:
//                 agregarElementos(8, 8);
//                 break;
//             case 9:
//                 agregarElementos(9, 9);
//                 break;
//             case 10:
//                 agregarElementos(10, 10);
//                 break;
//             default:
//                 break;
//         }
//     }

// }

// const agregarElementos = (n, j) => {

//     h1 = document.createElement('H1');
//     h1.innerHTML = `Nivel ${n}`;


//     div = document.createElement('div');
//     div.className = `Pregunta-${n} p`;


//     h2 = document.createElement('H2');
//     h2.innerHTML = `Pregunta ${n}`;


//     p = document.createElement('P');
//     p.className = 'pr';
//     p.innerHTML = `Preguntas random ${n}`;


//     p2 = document.createElement('P');


//     button = document.createElement('INPUT');


//     for (i = 1; i <= 5; i++) {

//         input = document.createElement('INPUT');
//         input.setAttribute('type', 'radio');
//         input.name = 'respuesta'
//         input.className = 'respuesta';
//         input.id = `respuesta-${j + '.' + i}`;



//         label = document.createElement('LABEL');
//         label.setAttribute('for', `respuesta-${j + '.' + i}`);
//         labelTexto = document.createTextNode(`respuesta ${i}`);
//         label.appendChild(labelTexto);


//         p2.insertBefore(label, document.getElementById(`respuesta-${j + '.' + i}`));
//         p2.appendChild(input);

//     }

//     div.appendChild(h2);
//     div.appendChild(p);
//     div.appendChild(p2);

//     const currentDiv = document.getElementById("container");
//     currentDiv.appendChild(div);

// }


// function Contadora (cont){
//     return cont;
// }


// puntos = 0;
const almacenarRC = (respuestasCorrectas) => {
    respuestasC = [];

    respuestasC = respuestasCorrectas;

    // let arr = [] 
    // arr.push(respuestasC)
    console.log(respuestasC);
    // return respuestasC;
}


//puntos = 0;
const compararRespuestas = (arr2) => {
    console.log(respuestasC);
    console.log(arr2);
    let puntos = 0;
    for (j = 0; j < 10; j++) {
        // console.log(respuestasC[j], arr2[j]);
        if( (respuestasC[j] == arr2[j])){
            puntos = puntos + 2;
        } else {
            puntos = puntos + 0;
        }
     
    }
    alert(`Tienes ${ puntos } puntos`)


}


function enviar2() {
    respuestasE = [];
    var arr2 = [];
    for (var i = 1; i <= 10; i++) {
        respuestasE = document.getElementById(`respuesta${i}`).value;
        console.log(respuestasE)
        arr2.push(respuestasE)
    }
    console.log(arr2)
    compararRespuestas(arr2);
}


// let botonEnviar = document.getElementById('myBtn');
// // botonEnviar.addEventListener('click', () => {


// });



