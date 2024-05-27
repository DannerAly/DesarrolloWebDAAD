function mostrar() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest(); // Crea el objeto AJAX
    ajax.open("GET", "personas.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            var personas = JSON.parse(ajax.responseText);
            console.log(personas);
            contenido.innerHTML = "";
            let elementotabla = document.createElement("table");
            contenido.appendChild(elementotabla);
            let encabezado = document.createElement("tr");
            encabezado.style.backgroundColor = "blue";
            encabezado.style.color = "white";
            elementotabla.appendChild(encabezado);
            let azul = ["ID", "Nombres", "Apellidos", "Edad", "Sexo", "Ocupacion ID", "Fotografia"];
            azul.forEach(headerText => {
                let th = document.createElement("th");
                th.textContent = headerText;
                encabezado.appendChild(th);
            });
            for (let i = 0; i < personas.length; i++) {
                let elementotr = document.createElement("tr");
                if (i % 2 == 0) {
                    elementotr.style.backgroundColor = "grey";
                } else {
                    elementotr.style.backgroundColor = "white";
                }
                elementotabla.appendChild(elementotr);
                let elementotd1 = document.createElement("td");
                elementotd1.innerHTML = personas[i].id;
                elementotr.appendChild(elementotd1);
                let elementotd2 = document.createElement("td");
                elementotd2.innerHTML = personas[i].nombres;
                elementotr.appendChild(elementotd2);
                let elementotd3 = document.createElement("td");
                elementotd3.innerHTML = personas[i].apellidos;
                elementotr.appendChild(elementotd3);
                let elementotd4 = document.createElement("td");
                elementotd4.innerHTML = personas[i].edad;
                elementotr.appendChild(elementotd4);
                let elementotd5 = document.createElement("td");
                elementotd5.innerHTML = personas[i].sexo;
                elementotr.appendChild(elementotd5);
                let elementotd6 = document.createElement("td");
                elementotd6.innerHTML = personas[i].ocupacion_id;
                elementotr.appendChild(elementotd6);
                let elementotd7 = document.createElement("td");
                elementotd7.innerHTML = personas[i].fotografia;
                elementotr.appendChild(elementotd7);
            }
        }
    };
    ajax.send();
}
