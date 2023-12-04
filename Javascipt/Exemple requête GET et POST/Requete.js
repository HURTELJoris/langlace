/*
en javascript pour faire une requête http aver un server http ( comme apache ou express avec node.js ) on utilise la méthode fetch() qui est une méthode ( fonction ) qui fait partie de l'API web de Javascript coté server. 

voici un exemple de code  :
*/

// URL de l'API ou de la ressource que vous souhaitez interroger
const url = 'https://example.com/api/data';

// Effectuer une requête GET
fetch(url)
  .then(response => {
    if (!response.ok) {
      throw new Error('La requête n\'a pas abouti.');
    }
    return response.json(); // ou response.text() si la réponse est en texte brut
  })
  .then(data => {
    // Traitez les données ici
    console.log(data);
  })
  .catch(error => {
    console.error('Une erreur s\'est produite :', error);
  });

  /*
  Pour comprendre ce code il faut bien comprendre ce qu'est une promise ( revoir si ce n'est pas le cas la video javascript [JS.05] )

On comprend donc que fetch(url) est une méthode qui retourne une promise et que donc la méthode  .then est appelé ensuite. cette deuxieme méthode prend en paramétre la réponse http du server ( response) et retourne le resultat sous son format json ( il faudra que le server renvoi dans la partie data de la requête http du json ) . 

Troisieme effet kisscool ( boomer ) la méthode .json est aussi une promise donc elle décode le json et aprés est lancé la méthode then qui prend en paramètre ( data ) le json celui si sera affiché dans la console du navigateur. 

La console du navigateur se trouve dans l'inspecteur d'élement.

selon la ressource que l'on cherche qui est stocké dans la constante "url" il faudra que notre server réponde à cela en renvoyant du json pour que cela marche. 

Et ce sera votre premier API.
  */