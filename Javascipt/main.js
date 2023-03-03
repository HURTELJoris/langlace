var mavarablenumerique = prompt("Entrez un nombre n",10);

var resultat = 1;
for(var i = 1; i<mavarablenumerique;i++)
{
  resultat += i*resultat;
}
alert("Resultat : " + resultat);