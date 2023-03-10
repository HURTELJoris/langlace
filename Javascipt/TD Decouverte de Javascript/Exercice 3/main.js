var a = 2;
var b = 3;

function multiplie(x = 8) {
  x *= 3;
  return x;
}

function mafunction(){
  var MaDiv = document.getElementById("exercice3");
  MaDiv.addEventListener("click",Multiplieab);
  function Multiplieab(event) {
    alert("Multiplie a : "+ multiplie(a));
    alert("Multiplie b : "+ multiplie(b));
    alert("Multiplie x : "+ multiplie());
  }
}

mafunction();