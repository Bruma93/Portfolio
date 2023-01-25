//////// Modo claro y modo oscuro
// obtener elementos de link
var style = document.getElementById("estilos");
var imagen_modo = document.getElementById("modoButton");
var logo_principal = document.getElementById("logo-principal");
var logo_menu = document.getElementById("logo-menu");
var oscuro = false;

// función para activar el dark mode
function activateDarkMode() {
  if (oscuro == false){
    style.setAttribute("href","css/dark-style.css");
    imagen_modo.setAttribute("src","resources/imgs/sun.png");
    logo_principal.setAttribute("src","resources/imgs/logo_yellow.png");
    logo_menu.setAttribute("src","resources/imgs/logo_yellow.png")
    oscuro = true; 
  }else{
    style.setAttribute("href","css/light-style.css");
    imagen_modo.setAttribute("src","resources/imgs/moon.png");
    logo_principal.setAttribute("src","resources/imgs/logo-dark.svg");
    logo_menu.setAttribute("src","resources/imgs/logo-dark.svg");
    oscuro = false; 
  } 
}

/////////////////

///////// Función para aumentar de tamaño el logo cuando se hace scroll
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

/////////Efecto de escritura y borrado de texto
var texts = ["#Desarrollador", "#Web", "Front-end", "Back-end", "#Marketing Digital", "Diseño"];
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

///////// Seccion PortFolio

// Aove
var aove = document.getElementById("Aove");
var aove_imagen = aove.getAttribute('src') ;

function aovePortfolio() {
  switch (aove_imagen){
    case "resources/imgs/AOVE_LaTaranta_desktop.webp":
     aove_imagen = "resources/imgs/AOVE_LaTaranta_Mobile.webp";
     break;

    case "resources/imgs/AOVE_LaTaranta_Mobile.webp":
      aove_imagen = "resources/imgs/AOVE_LaTaranta_tablet.webp";
      break;

    case "resources/imgs/AOVE_LaTaranta_tablet.webp":
      aove_imagen = "resources/imgs/AOVE_LaTaranta_desktop.webp";
      break;

    default:
      break;
  }  
  aove.setAttribute('src' , aove_imagen);
}

// AppFut
var appFut = document.getElementById("appFut");
var appFut_imagen = appFut.getAttribute('src') ;

function appFutPortfolio() {
  switch (appFut_imagen){
    case "resources/imgs/statFootball.webp":
      appFut_imagen = "resources/imgs/statFootball2.webp";
     break;

    case "resources/imgs/statFootball2.webp":
      appFut_imagen = "resources/imgs/statFootball.webp";
      break;

    default:
      break;
  }  
  appFut.setAttribute('src' , appFut_imagen);
}

// Ilustraciones
var ilustraciones = document.getElementById("ilustraciones");
var ilustraciones_imagen = ilustraciones.getAttribute('src') ;

function ilustacionPortfolio() {
  switch (ilustraciones_imagen){
    case "resources/imgs/Cabecera.webp":
      ilustraciones_imagen = "resources/imgs/Carmen2.webp";
        console.log(ilustraciones_imagen);

     break;

    case "resources/imgs/Carmen2.webp":
      ilustraciones_imagen = "resources/imgs/ilustracion.webp";
        console.log(ilustraciones_imagen);

      break;

    case "resources/imgs/ilustracion.webp":
      ilustraciones_imagen = "resources/imgs/Cabecera.webp";
        console.log(ilustraciones_imagen);

      break;

    default:
      break;
  }  
  ilustraciones.setAttribute('src' , ilustraciones_imagen);
}

// Futbol
var futbol = document.getElementById("futbol");
var futbol_imagen = futbol.getAttribute('src') ;

function futbolPortfolio() {
  switch (futbol_imagen){
    case "resources/imgs/futbol_v1.webp":
      futbol_imagen = "resources/imgs/futbol_v2.webp";
     break;

    case "resources/imgs/futbol_v2.webp":
      futbol_imagen = "resources/imgs/futbol_v3.webp";
      break;

    case "resources/imgs/futbol_v3.webp":
      futbol_imagen = "resources/imgs/futbol_v1.webp";
      break;

    default:
      break;
  }  
  futbol.setAttribute('src' , futbol_imagen);
}


//Para usar ToolTips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
