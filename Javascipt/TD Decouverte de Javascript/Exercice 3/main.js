var a = 2;
var b = 3;

function multiplie(x = 8,) {
  let resultat = x * 3;
  return resultat;
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