var texts = ["#Desarrollador", "#Web", "#Marketing"];
var i = 0;
var speed = 150; // 50ms = 0.05 segundos

function type() {
  if (texts[i].length > document.getElementById("changing-text").innerHTML.length) {
    document.getElementById("changing-text").innerHTML += texts[i].charAt(document.getElementById("changing-text").innerHTML.length);
    setTimeout(type, speed);
  } else {
    setTimeout(erase, speed);
  }
}

function erase() {
  if (document.getElementById("changing-text").innerHTML.length > 0) {
    var text = document.getElementById("changing-text").innerHTML;
    text = text.substring(0, text.length - 1);
    document.getElementById("changing-text").innerHTML = text;
    setTimeout(erase, speed);
  } else {
    i = (i + 1) % texts.length;
    setTimeout(type, speed);
  }
}

setTimeout(type, speed);
