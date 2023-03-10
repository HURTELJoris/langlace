function mafunction(){
  var MaDiv = document.getElementById("exercice2");
  MaDiv.addEventListener("click",AirePerimetreCercle);
  function AirePerimetreCercle(event) {
    let longueur = prompt("Selectionez la longueur : ");
    let perimetre = 6.28 * longueur;
    let aire = longueur*longueur*3.14; 
    alert("Le perimetre du cercle est de : "+perimetre);
    alert("L'aire du cercle est de : "+aire);
  }
}

mafunction();