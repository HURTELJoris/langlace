function boucle() {
  let tab = new Array(3);
  for (let i = 0; i < 3; i++) {
    tab[i] = i*i;
    alert("tab ["+i+"] : "+tab[i]);
  }
  return tab;
}

function boucle2() {
  let valeur = prompt("Entrez la longueur du tableau voulue : ");
  let tab= new Array(valeur);
  for (let i = 0; i < valeur; i++) {
    tab[i] = i*i; 
    alert("tab["+i+"] : "+tab[i]);
  }
  return tab;
}

function mafonction(){
  var MaDiv = document.getElementById("exercice5");
  MaDiv.addEventListener("click",boucle);
  var MaDiv2 = document.getElementById("exercice5-2");
  MaDiv2.addEventListener("click",boucle2);
}

mafonction();