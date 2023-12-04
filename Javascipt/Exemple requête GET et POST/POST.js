/*
En javascript pour faire une requête http aver un server http ( comme apache ou express avec node.js ) on utilise la méthode fetch() qui est une méthode ( fonction ) qui fait partie de l'API web de Javascript coté server. 

Supposons que vous souhaitiez envoyer un formulaire avec deux champs, "login" et "password", vers un serveur qui traite les données. Voici comment vous pouvez le faire :

voici un exemple de code  pour la méthode post :
*/



// URL du serveur où vous souhaitez envoyer les données
const url = 'https://www.example.com/api/user';

// Données à envoyer au serveur (peut être un objet JSON ou des données de formulaire)
const data = {
  login: 'julienCode',
  mdp: 'jeSuisUnMotDePassNonSecurise'
};

// Configuration de la requête POST
const options = {
  method: 'POST', // Spécifiez la méthode HTTP
  headers: {
    'Content-Type': 'application/json' // Spécifiez le type de contenu (dans cet exemple, JSON)
  },
  body: JSON.stringify(data) // Convertissez les données en chaîne JSON
};

// Envoi de la requête POST
fetch(url, options)
  .then(response => {
    if (!response.ok) {
      throw new Error('La requête n\'a pas abouti.');
    }
    return response.json(); // ou response.text() si la réponse est en texte brut
  })
  .then(data => {
    // Traitez la réponse du serveur ici
    console.log(data);
  })
  .catch(error => {
    console.error('Une erreur s\'est produite :', error);
  });

/*
  Pour comprendre ce code il faut bien comprendre ce qu'est une promise ( revoir si ce n'est pas le cas la video javascript [JS.05] ) bien comprendre qu'on est presque dans le même cas qu'une méthode get mais que là la méthode fetch attend aussi des options en plus de url .

fetch( url , options)

on remarque que les options sont en fait là pour composé la requete http de type POST avec le Head et le body. le data envoyé dans le json est défini plus haut avec 'const data  = {..}'

const options = {
  method: 'POST', // Spécifiez la méthode HTTP
  headers: {
    'Content-Type': 'application/json' // Spécifiez le type de contenu (dans cet exemple, JSON)
  },
  body: JSON.stringify(data) // Convertissez les données en chaîne JSON
};

le reste et la meme chose qu'une méthode get , on fait l'envoi et on attend la réponse au forma JSON du server node.js ou d'une page php.

Et ce sera votre premier API POST.
*/