function mafunction(){
  var MaDiv = document.getElementById("exercice2");
  MaDiv.addEventListener("click",AirePerimetreCercle);
  function AirePerimetreCercle(event) {
    let longueur = prompt("Selectionez la longueur : ");
    let perimetre = 2*Math.PI * longueur;
    let aire = longueur * longueur * Math.PI; 
    alert("Le perimetre du cercle est de : "+perimetre);
    alert("L'aire du cercle est de : "+aire);
  }
}

mafunction();