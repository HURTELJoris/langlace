var tab = [-2,1,4];

function soustrait(x) {
  x -= 2;
  if (x < 0){
    return "Nombre negatif !";
  }
  else{
    return x;
  }
}

function affiche(){
  var MaDiv = document.getElementById("exercice6");
  MaDiv.addEventListener("click",Soustraittab);
  function Soustraittab(event) {
    alert("Additionne tab[0] : "+soustrait(tab[length-length]));
    alert("Additionne tab[1] : "+soustrait(tab[length-length+1]));
    alert("Additionne tab[2] : "+soustrait(tab[length-length+2]));
  }
}

affiche();