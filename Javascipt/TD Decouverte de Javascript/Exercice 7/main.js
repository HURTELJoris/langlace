function jourDeLaSemaine(x) {
  switch (new Date().getDay()) {
    case 0:
      day = "Dimanche";
      alert(day);
      break;
    case 1:
      day = "Lundi";
      alert(day);
      break;
    case 2:
       day = "Mardi";
       alert(day);
      break;
    case 3:
      day = "Mercredi";
      alert(day);
      break;
    case 4:
      day = "Jeudi";
      alert(day);
      break;
    case 5:
      day = "Vendredi";
      alert(day);
      break;
    case 6:
      day = "Samedi";
      alert(day);
  }
}

function mafonction(){
  var MaDiv = document.getElementById("exercice7");
  MaDiv.addEventListener("click",jourDeLaSemaine);
}

mafonction();