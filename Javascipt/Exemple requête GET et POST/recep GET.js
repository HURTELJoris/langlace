/*
Node.js : recevoir une requête Get avec le module Express de node.js
Pour traiter une requête GET pour l'URL https://example.com/api/data dans une application Node.js avec Express, vous pouvez utiliser la bibliothèque Express pour créer un gestionnaire de route approprié. Voici un exemple de code Node.js avec Express pour gérer une requête GET sur cette URL :
*/

const express = require('express');
const app = express();
const port = 8080; // Port sur lequel votre serveur écoutera on peut utiliser 80 mais il faut arréter apache ou ngix

// Gestionnaire de route pour la requête GET sur l'URL '/api/data'
app.get('/api/data', (req, res) => {
  // Vous pouvez traiter la requête ici et renvoyer une réponse JSON par exemple
  const data = {
    message: 'Ceci est la réponse de l\'API GET sur /api/data',
    timestamp: new Date()
  };
  
  // Envoyer une réponse JSON
  res.json(data);
});

// Lancer le serveur et écouter sur le port spécifié
app.listen(port, () => {
  console.log(`Serveur en cours d'exécution sur le port ${port}`);
});
 
/*
ce qui est propre au traitement de la requête est la route suivante : 


app.get( ' route à intercepter ' , (requet http, reponse http) 

// Gestionnaire de route pour la requête GET sur l'URL '/api/data'
app.get('/api/data', (req, res) => {
  // Vous pouvez traiter la requête ici et renvoyer une réponse JSON par exemple
  const data = {
    message: 'Ceci est la réponse de l\'API GET sur /api/data',
    timestamp: new Date()
  };
  
  // Envoyer une réponse JSON
  res.json(data);
});



en fait on va utiliser la réponse http ici res et utiiser la méthode json poru envoyer nos donée data . Comme cela c'est bien du json qui sera envoyer au client.
pour former du json il suffit de fabriquer un objet javascript avec des propriétés et des valeurs avec : 


const data = {
    message: 'Ceci est la réponse de l\'API GET sur /api/data',
    timestamp: new Date()
  };


ici dans la réponse si on regarde dans l'inspecteur web de son navigateur on trouvera une propriété message avec la valeur : "ceci est la réponse de l'api ...
et une  propriété timestamp avec une valeur : "122892733" qui correspond à la date du jours en seconde.
il faudra ensuite coté client ( coté front ) en javascript à afficher ses données dans une div.

*/

const div = document.getElementById('ladiv');
          div.innerHTML = `
            <p>Message du serveur : ${data.message}</p>
            <p>Horodatage : ${data.timestamp}</p>
          `;
 


/*
data est la variable retourné dans la méthode fetch().then()
*/

fetch('/api/data')
        .then(response => response.json())
        .then(data => {
          // Mettre à jour la div avec les données du serveur
          const dataContainer = document.getElementById('data-container');
          dataContainer.innerHTML = `
            <p>Message du serveur : ${data.message}</p>
            <p>Horodatage : ${data.timestamp}</p>
          `;
        })
        .catch(error => {
          console.error('Erreur lors de la récupération des données :', error);
        });

