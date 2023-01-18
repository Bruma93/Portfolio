
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
