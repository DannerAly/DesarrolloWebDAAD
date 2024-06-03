//var nombre = prompt("Ingrese su nombre");
//var cu = prompt("Ingrese su CU")
var nombre = "Danner Abel Aly Delgado"
var cu = "35-5281"

function cargarMenu() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `menu.php`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById("menu");
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    mensaje.innerHTML = `Nombre: ${nombre} CU: ${cu}`
}

function pregunta2() {
    fetch("galeria.php?")

        .then(response => response.text())
        .then(data => menu.innerHTML = data);
}

function agrandarImagen(id) {
    principal = document.getElementById("principal");
    mensaje = document.getElementById("mensaje");

    fetch(`imagen.php?id=${id}`)
        .then(response => response.text())
        .then(data => principal.innerHTML = data);

    fetch(`nombreImagen.php?id=${id}`)
        .then(response => response.text())
        .then(data => mensaje.innerHTML = data);
}


function abrirLogin() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `Form_login.php`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            principal = document.getElementById("principal");
            menu = document.getElementById("menu");

            principal.innerHTML = ajax.responseText;
            menu.innerHTML = "";
        }
    }
    ajax.send();
}

function autenticar() {
    let form = document.getElementById("datosUsuario");
    let data = new FormData(form);
    var ajax = new XMLHttpRequest();

    //data = `usuario=${usuario}&password=${password}`

    ajax.open("POST", `autenticar.php`, true);

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            principal = document.getElementById("principal");

            principal.innerHTML = "";
            mensaje2 = document.getElementById("mensaje2");

            mensaje2.innerHTML = ajax.responseText;
            cargarMenu();
        }
    }
    ajax.send(data);
}

function verificarLogueado(logueado){
        
    if(logueado == 1){
    var ajax = new XMLHttpRequest();
        
        ajax.open("GET", `listar.php`, true);
        
        ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            principal = document.getElementById("principal");

            principal.innerHTML = ajax.responseText;
        }   
    }
    ajax.send();
    }else{
        principal.innerHTML = "El usuario no esta logueado";
    }
}




function ObtenerTitulos() {
    var principal = document.getElementById('principal');

    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "datos.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            titulos = JSON.parse(ajax.responseText)

            let selected = document.createElement("select");
            selected.setAttribute("onchange", "obtenerImagen()");
            principal.appendChild(selected);

            selected.id = "titulos";
 
            let divImg = document.createElement("div");
            principal.appendChild(divImg);
            divImg.id = "imagen";
            

            for (i = 0; i < titulos.length; i++) {
                let elemento = document.createElement("option");
                elemento.value = titulos[i].titulo
                elemento.textContent = titulos[i].titulo
                if (i==0)
                    {
                        elemento.selected=true;
                    }
                selected.appendChild(elemento);
                

            }
        }
    }
    ajax.send();
}

function obtenerImagen() {
    var imagen = document.getElementById("imagen");
    imagen.innerHTML = "";
    var idTitulo = document.getElementById("titulos").value;

    var ajax = new XMLHttpRequest(); // crea el objeto AJAX 
    ajax.open("get", "imagenes.php?id=" + idTitulo, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            imagenes = JSON.parse(ajax.responseText);

            for (var i = 0; i < imagenes.length; i++) {
                let elemento = document.createElement("img");
                elemento.src = imagenes[i].imagen;
                imagen.appendChild(elemento);
            }
        }
    };
    ajax.send(); // ¡No olvides enviar la solicitud AJAX!
}

