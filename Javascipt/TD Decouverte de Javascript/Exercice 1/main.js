function mafunction(){
  var MaDiv = document.getElementById("exercice1");
  MaDiv.addEventListener("click",AirePerimetreCercle);
  function AirePerimetreCercle(event) {
    let longueur = prompt("Selectionez la longueur : ");
    let largeur = prompt("Selectionez la largeur : ");
    let aire = longueur*largeur;
    let perimetre = longueur*2 + largeur*2;
    alert("L'aire du rectangle est de : "+aire);
    alert("Le perimetre du rectangle est de : "+perimetre);
  }
}

mafunction();