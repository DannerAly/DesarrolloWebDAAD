val1 = 0;
val2 = 0;
section1 = document.getElementById("section1");
section2 = document.getElementById("section2");

function escribir(element) {
  num = element.innerHTML;
  section2.innerHTML += num;
}

buttons = document.querySelectorAll(".button");

buttons.forEach((button) => {
  if (!isNaN(button.innerHTML)) {
    button.addEventListener("click", () => {
      escribir(button);
    });
  }
});

function plus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}+`;
  section2.innerHTML = "";
}

plusButton = document.getElementById("plus");
plusButton.addEventListener("click", () => {
  plus();
});

function minus() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}-`;
  section2.innerHTML = "";
}

minusButton = document.getElementById("minus");
minusButton.addEventListener("click", () => {
  minus();
});

function multiplication() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}*`;
  section2.innerHTML = "";
}

multiplicationButton = document.getElementById("multiplication");
multiplicationButton.addEventListener("click", () => {
  multiplication();
});

function division() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}/`;
  section2.innerHTML = "";
}

divisionButton = document.getElementById("division");
divisionButton.addEventListener("click", () => {
  division();
});

function equal() {
  op = section1.innerHTML[section1.innerHTML.length - 1];
  if (section2.innerHTML.length > 0) val2 = parseInt(section2.innerHTML);
  else val2 = 0;
  switch (op) {
    case "+":
      res = val1 + val2;
      section1.innerHTML = `${val1}+${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "-":
      res = val1 - val2;
      section1.innerHTML = `${val1}-${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "*":
      res = val1 * val2;
      section1.innerHTML = `${val1}*${val2}`;
      section2.innerHTML = `${res}`;
      break;
    case "/":
      res = val1 / val2;
      section1.innerHTML = `${val1}/${val2}`;
      section2.innerHTML = `${res}`;
      break;
    default:
      break;
  }
}

equalButton = document.getElementById("equal");
equalButton.addEventListener("click", () => {
  equal();
});

function del() {
  section2.innerHTML = section2.innerHTML.slice(0, -1);
}

delButton = document.getElementById("delete");
delButton.addEventListener("click", () => {
  del();
});

function clean() {
  section1.innerHTML = "";
  section2.innerHTML = "";
}

cleanButton = document.getElementById("clean");
cleanButton.addEventListener("click", () => {
  clean();
});



let operation = "";
function potencia() {
    operation = "^";
    val1 = parseFloat(section2.innerHTML);
    section1.innerHTML += `${val1}<sup>${operation}</sup>`;
    section2.innerHTML = "";
}

potenciaBoton = document.getElementById("potencia");
potenciaBoton.addEventListener("click", () => {
    potencia();
});

function equal() {
    if (operation === "^") {
        let potencia = parseFloat(section2.innerHTML);
        let resultado = Math.pow(val1, potencia);

        section1.innerHTML += potencia;
        section2.innerHTML = resultado;
        operation = "";
    } else {
    }
}
equalButton = document.getElementById("equal");
equalButton.addEventListener("click", () => {
    equal();
});




function raiz() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `√${val1}`;
  section2.innerHTML = Math.sqrt(val1);
}

raizBoton = document.getElementById("raiz");
raizBoton.addEventListener("click", () => {
  raiz();
});

function factorial(n) {
  if (n === 0 || n === 1) return 1;
  for (let i = n - 1; i >= 1; i--) {
    n *= i;
  }
  return n;
}

function calcularFactorial() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}!`;
  section2.innerHTML = factorial(val1);
}

factorialBoton = document.getElementById("factorial");
factorialBoton.addEventListener("click", () => {
  calcularFactorial();
});

function logaritmo() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `log(${val1})`;
  section2.innerHTML = Math.log10(val1);
}

logaritmoBoton = document.getElementById("logaritmo");
logaritmoBoton.addEventListener("click", () => {
  logaritmo();
});
