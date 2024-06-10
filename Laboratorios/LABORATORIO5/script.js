
function mostrarBandeja() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `listar.php`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            menu = document.getElementById("main");
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function redactar() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `form_redactar.html`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            menu = document.getElementById("main");
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function mostrarEnviados() {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `listarEnviados.php`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            menu = document.getElementById("main");
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function crearCorreo() {
    let form = document.getElementById("datosCorreo");
    let data = new FormData(form);
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `crearCorreo.php`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            menu = document.getElementById("main");
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send(data);

    console.log(data);
}

function mostrarMensaje(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", `mensaje.php?id=${id}`, false);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            menu = document.getElementById("main");
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

