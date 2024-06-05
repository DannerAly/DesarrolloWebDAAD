function pregunta1(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `pregunta1/datos.html`, false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {
            titulo = document.getElementById("titulo");
            titulo.innerHTML = "PREGUNTA 1";

            submenu = document.getElementById("sub-menu");
            submenu.innerHTML = ajax.responseText;
            contenido = document.getElementById("contenido");
            contenido.innerHTML = " ";
        }
    }
    ajax.send();
}


function generarTabla(){
    let form = document.getElementById("datosTabla");
    let data = new FormData(form);
    var ajax = new XMLHttpRequest();

    ajax.open("POST", `pregunta1/tabla.php`, true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido = document.getElementById("contenido");
            
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send(data);


}


function pregunta3(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `galeria.php`, false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {
            titulo = document.getElementById("titulo");
            titulo.innerHTML = "PREGUNTA 3";

            submenu = document.getElementById("sub-menu");
            submenu.innerHTML = ajax.responseText;

            contenido = document.getElementById("contenido");
            contenido.innerHTML = " ";
        }
    }
    ajax.send();
}

function datosImagen(id) {
    contenido = document.getElementById("contenido");

    fetch(`imagen.php?id=${id}`)
        .then(response => response.text())
        .then(data => contenido.innerHTML = data);


}

function pregunta4(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "pregunta4/botones.html", false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {
            titulo = document.getElementById("titulo");
            titulo.innerHTML = "PREGUNTA 4";

            submenu = document.getElementById("sub-menu");
            submenu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function listar(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "pregunta4/listar.php", false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {

            contenido = document.getElementById("contenido");
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function insertar(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "pregunta4/form_insertar.php", false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {

            contenido = document.getElementById("contenido");
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}


function crearLibro() {
    var datos = document.getElementById('datos');
    var formulario = document.getElementById("datos-libro");
  
    var parametros =new FormData(formulario);
    
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    
    ajax.open("post", "insertar.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //datos.innerHTML = ajax.responseText
            listar();
        }
    }
    ajax.send(parametros);
}

function pregunta5(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `pregunta5/form-calendar.html`, false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {
            titulo = document.getElementById("titulo");
            titulo.innerHTML = "PREGUNTA 5";

            submenu = document.getElementById("sub-menu");
            submenu.innerHTML = ajax.responseText;

            contenido = document.getElementById("contenido");
            contenido.innerHTML = " ";
        }
    }
    ajax.send();
}


function pregunta2(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `pregunta2/form-color.html`, false);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {
            titulo = document.getElementById("titulo");
            titulo.innerHTML = "PREGUNTA 2";

            submenu = document.getElementById("sub-menu");
            submenu.innerHTML = ajax.responseText;

            contenido = document.getElementById("contenido");
            contenido.innerHTML = " ";
        }
    }
    ajax.send();
}

function textoColor(){
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `pregunta2/generarPalabraColor.php`, false);

    var formulario = document.getElementById("datosTabla");
  
    var parametros =new FormData(formulario);
    ajax.onreadystatechange = function () {
    
        if (ajax.readyState == 4) {
            titulo = document.getElementById("titulo");
            titulo.innerHTML = "PREGUNTA 2";

            contenido = document.getElementById("contenido");
            contenido.innerHTML = ajax.responseText;
        }
    }

    ajax.send(parametros);
}