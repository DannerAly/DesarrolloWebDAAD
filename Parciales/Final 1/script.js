var contenido = document.getElementById("contenido");
var titulo = document.getElementById("titulo");

function actualizar(url) {
    contenido.innerHTML = " ";
    var ajax = new XMLHttpRequest();
    ajax.open('get', url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
//PREGUNTA 5
function escribir(valor) {
    input = document.getElementById("contra");
    anterior = input.value;
    input.value = `${anterior}${valor}`;
};

function login() {
    const form = document.getElementById("form-login");
    const data = new FormData(form);

    var ajax = new XMLHttpRequest();

    ajax.open("post", "Pregunta5/autenticar.php", true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send(data);
    //    ajax.send();
}

//limpiar
function limpiar() {
    user = document.getElementById('user');
    contra = document.getElementById('contra');

    user.value = "";
    contra.value = "";

}

function listarMaterias() {
    submenu = document.getElementById('sub-menu');

    var ajax = new XMLHttpRequest();
    ajax.open('get', "Pregunta1/mostrarMaterias.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            materias = JSON.parse(ajax.responseText);
            var html = ` `
            for (i = 0; i < materias.length; i++) {
                html += `
                
                     <div onclick ="javascript:(mostrarHorario('${materias[i].materia}'))" >${materias[i].materia}</div>
                
                `
            }
            submenu.innerHTML += html;
        }
    }
    ajax.send();
}

function mostrarHorario(materia) {
    contenido.innerHTML = " ";
    var ajax = new XMLHttpRequest();
    ajax.open('get', `Pregunta3/horarios.php?materia=${materia}`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

//pregunta 3
function listarAlumnos() {
    titulo.innerHTML = "Pregunta 3";
    contenido.innerHTML = ' ';

    fetch("Pregunta3/mostrar.php")
        .then(response => response.text()) 
        .then(text => {
            let alumnos = JSON.parse(text); 

            var html = `<table border="1px">
                            <tr>
                                <td><b>Carnet Universitario</b></td>
                                <td><b>Nombres</b></td>
                                <td><b>Apellidos</b></td>
                                <td><b>Opcion</b></td>
                            </tr>`;
            for (let i = 0; i < alumnos.length; i++) {
                html += `<tr>
                            <td>${alumnos[i].cu}</td>
                            <td>${alumnos[i].nombres}</td>
                            <td>${alumnos[i].apellidos}</td>
                            <td onclick="EliminarAlumno(${i})"> eliminar </td>
                         </tr>`;
            }
            html += `</table>
                     <div onclick="actualizar('Pregunta3/formInsertar.html')"> Insertar Alumno </div>`;
            contenido.innerHTML += html;
        });
}

function EliminarAlumno(i) {
    contenido.innerHTML = " ";
    fetch(`Pregunta3/eliminarAlumno.php?indice=${i}`)
        .then(() => listarAlumnos());
}
function insertar() {
    const form = document.getElementById("insert");
    const data = new FormData(form);

    fetch('Pregunta3/insertarAlumno.php', {
        method: 'POST',
        body: data
    })
        .then(() => listarAlumnos());
}




//PREGUNTA 1
function cambiarColor() {
    const elementoSeleccionado = document.getElementById('ides');
    const colorElegido = document.getElementById('elegirColor');
    const elementoSeleccionadoID = elementoSeleccionado.value;
    const color = colorElegido.value;
    const elemento = document.getElementById(elementoSeleccionadoID);
    if (elemento) {
        elemento.style.backgroundColor = color;
    }
}

function incrementarContador() {

    titulo.innerHTML = "Pregunta 1";

    var contadorElemento = document.getElementById("contador");
    var valorActual = parseInt(contadorElemento.textContent);
    contadorElemento.textContent = valorActual + 1;
}

function pregunta5() {
    titulo.innerHTML = "Pregunta 5"
    contenido.innerHTML = " ";
    var ajax = new XMLHttpRequest();
    ajax.open('get', `Pregunta5/pregunta5.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
            actualizarTecladoNumerico()
        }
    }
    ajax.send();
}

function actualizarTecladoNumerico() {
    submenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest();
    ajax.open('get', `Pregunta5/tecladoNumerico.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            submenu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}


function pregunta2() {
    titulo.innerHTML = "Pregunta 2"
    submenu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest();
    ajax.open('get', `Pregunta2/menuOperacion.html`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            submenu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

//Pregunta2
function operacion(op) {
    let numero = document.getElementById('numerito');
    let cantidad = numero.value;
    let operacionSimbolo;

    switch (op) {
        case "suma":
            operacionSimbolo = "+";
            break;
        case "resta":
            operacionSimbolo = "-";
            break;
        case "multiplicacion":
            operacionSimbolo = "x";
            break;
        case "division":
            operacionSimbolo = "/";
            break;
    }

    let html = `<table border="1px">`;

    for (let i = 0; i < cantidad; i++) {
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;

        html += `
            <tr>
                <td>${num1}</td>
                <td>${operacionSimbolo}</td>
                <td>${num2}</td>
                <td>=</td>
                <td><input class="resultado" type="number"></td>
            </tr>`;
    }

    html += `</table>
        <button onclick="calificar('${op}')">Calificar</button>`;
    
    let contenido = document.getElementById('contenido');
    contenido.innerHTML = html;
}

function calificar(operacion) {
    let filas = document.querySelectorAll('table tr');

    filas.forEach(fila => {
        let numeros = fila.querySelectorAll('td');
        let num1 = parseFloat(numeros[0].textContent);
        let num2 = parseFloat(numeros[2].textContent);
        let resultado = parseFloat(fila.querySelector('.resultado').value);
        let correcto;

        switch (operacion) {
            case "suma":
                correcto = (num1 + num2 === resultado);
                break;
            case "resta":
                correcto = (num1 - num2 === resultado);
                break;
            case "multiplicacion":
                correcto = (num1 * num2 === resultado);
                break;
            case "division":
                correcto = (num1 / num2 === resultado);
                break;
        }

        if (correcto) {
            fila.style.backgroundColor = 'green';
        } else {
            fila.style.backgroundColor = 'red';
        }
    });
}


//Pregunta 4
function pregunta4() {
    titulo.innerHTML = "Pregunta 4";
    var submenu = document.getElementById('sub-menu');
    submenu.innerHTML = "";
    var ajax = new XMLHttpRequest();
    ajax.open('get', "Pregunta4/mostrarMaterias.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var materias = JSON.parse(ajax.responseText);
            var html = `
                <select id="materiaSelect" onchange="mostrarAlumnos(this.value)">
                  
            `;
            for (var i = 0; i < materias.length; i++) {
                html += `
                    <option value="${materias[i].materia}">${materias[i].materia}</option>
                `;
            }
            html += `</select>`;
            submenu.innerHTML += html;
        }
    };
    ajax.send();
}

function mostrarAlumnos(materia) {
    var ajax = new XMLHttpRequest();
    ajax.open('get', `Pregunta4/mostrarAlumnos.php?materia=${materia}`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            var alumnos = JSON.parse(ajax.responseText);
            let html = `<table border="1px">`;

            for (let i = 0; i < alumnos.length; i++) {
                html += `
                    <tr>
                        <td>${alumnos[i].nombres_apellidos}</td>
                    </tr>`;
            }

            html += `</table>`;
            contenido.innerHTML = html;  // Asegúrate de que este elemento existe
        }
    };
    ajax.send();
}


