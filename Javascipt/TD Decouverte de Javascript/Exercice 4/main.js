var tab = [-2,1,4];

function additionne(x) {
  x += 2;
  return x;
}

function affiche(){
  var MaDiv = document.getElementById("exercice4");
  MaDiv.addEventListener("click",Additionnetab);
  function Additionnetab(event) {
    alert("Additionne tab[0] : "+additionne(tab[length-length]));
    alert("Additionne tab[1] : "+additionne(tab[length-length+1]));
    alert("Additionne tab[2] : "+additionne(tab[length-length+2]));
  }
}

affiche();