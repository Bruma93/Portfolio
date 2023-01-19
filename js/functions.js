// Modo claro y modo oscuro
// obtener elementos de link
var style = document.getElementById("estilos");
var imagen_modo = document.getElementById("modoButton");
var oscuro = false;

// función para activar el dark mode
function activateDarkMode() {
  if (oscuro == false){
    style.setAttribute("href","css/dark-style.css");
    imagen_modo.setAttribute("src","resources/imgs/sun.png");
    oscuro = true; 
  }else{
    style.setAttribute("href","css/light-style.css");
    imagen_modo.setAttribute("src","resources/imgs/moon.png");
    oscuro = false; 
  } 
}

/////////////////

var logo = document.querySelector(".navbar-brand");

// Verifica si el ancho de la pantalla es mayor a 992px
var mq = window.matchMedia("(min-width: 992px)");

function checkWidth(mq) {
  if (mq.matches) {
    // si es mayor a 992px, se activa el evento scroll
    window.onscroll = function() {
      var scrollPercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
      if (scrollPercent > 0.03) {
        logo.classList.add("scrolled");
      } else {
        logo.classList.remove("scrolled");
      }
    };
  } else {
    // si es menor a 992px, se remueve el evento scroll
    window.onscroll = null;
    logo.classList.remove("scrolled");
  }
}

// se verifica el ancho de la pantalla al cargar la página
checkWidth(mq);

// se verifica el ancho de la pantalla cada vez que se cambia el tamaño de la pantalla
mq.addEventListener("resize", function() {
  checkWidth(mq);
});

//////////////

//Efecto de escritura y borrado de texto
var texts = ["#Desarrollador", "#Web", "#Marketing"];
var i = 0;
var speed = 150; // 50ms = 0.05 segundos

function type() {
  if (texts[i].length > document.getElementById("changing-text").innerHTML.length) {
    document.getElementById("changing-text").innerHTML += texts[i].charAt(document.getElementById("changing-text").innerHTML.length);
    setTimeout(type, speed);
  } else {
    setTimeout(erase, 2000);
  }
}

function erase() {
  if (document.getElementById("changing-text").innerHTML.length > 1) {
    var text = document.getElementById("changing-text").innerHTML;
    text = text.substring(0, text.length - 1);
    document.getElementById("changing-text").innerHTML = text;
    changeText();
    setTimeout(erase, speed);
  } else {
    i = (i + 1) % texts.length;
    setTimeout(type, 0);
  }
}

function changeText(){
  if (document.getElementById("changing-text").innerHTML.length > 0){
    document.getElementById("changing-text").classList.remove("invisible");
    document.getElementById("changing-text").classList.add("visible");
  } else {
    document.getElementById("changing-text").classList.remove("visible");
    document.getElementById("changing-text").classList.add("invisible");
  }
}

setTimeout(type, speed);

//Para usar ToolTips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
