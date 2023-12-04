/*
Node.js : recevoir une requête POST avec le module Express de node.js
Pour traiter une requête POST avec Express en Node.js, vous pouvez utiliser le code suivant en utilisant le code d'envoi POST de cette leçon . Dans cet exemple, nous supposons que vous envoyez des données JSON au serveur. ( login et mdp 
*/

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 8080; //on 80 si apache est fermé

// Middleware pour analyser les données JSON du corps de la requête POST
app.use(bodyParser.json());

// Gestionnaire de route pour la soumission de la requête POST
app.post('/api/user', (req, res) => {
  const login = req.body.login;
  const mdp = req.body.mdp;

  // Vous pouvez maintenant traiter les données comme vous le souhaitez
  // Dans cet exemple, nous les renvoyons simplement au client
  res.json({ test:"bien reçu" }); // ajouté 'test:'
});

app.listen(port, () => {
  console.log(`Serveur en cours d'exécution sur le port ${port}`);
});
 
/*
ici le traitement est comme une route get sauf qu'on fait un app.post pour intercepter les post qui vienne de la route /api/user. donc des qu'un client mettra une url post http:ip:port/api.user alors çà sera ce code qui répondra.

ici la requet se trouve dans la variable req . du coup on peut accèder à son body car comme vu dans la video sur http ; une requête http de type post possède un Head mais aussi un Body avec les données qui sont envoyé du front ( client ) vers le back ( server node.js )

donc req.body.login représente 'julienCode' si on regarde les données qui avaient été envoyé du client : ( ci dessous code client ) 
*/


const data = {
  login: 'julienCode',
  mdp: 'jeSuisUnMotDePassNonSecurise'
};

/*
ici le code ne fait rien de particulier , il répond dans la reponse http ( res) en mettant en json ( "bien reçu") 

quand on avait fait le code coté client dans les pages précédentes pour la partie envoi d'une requete http en POST on avait fait en sorte d'afficher la réponse dans la console. donc on devrait voir "bien reçu" dans la console du navigateur.
*/

console.log(data);