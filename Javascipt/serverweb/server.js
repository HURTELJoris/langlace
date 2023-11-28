const express = require('express');
const app = express();
const port = 1234; // Le port sur lequel votre serveur écoutera

const mysql = require('mysql');

// Configuration de la connexnion à la base de données (Lucas)
const connection = mysql.createConnection({
  host: '192.169.65.167', // L'hôte de la base de données
  user : 'apiWeb', // Votre nom d'utilisateur MySQL
  password : 'apiWeb', // Votre mot de passe MySQL
  database : 'reactTuto' // Le nom de votre base de données
});

// Connexion à la base de données
connection.connect((error) => {
  if (error) {
    console.error('Erreur de connexion à la base de données :', error);
    throw error;
  }
  console.log('Connecté à la base de données MySQL');
});





// Route d'exemple
app.get('/', (req, res) => {
  res.send('Bonjour, ceci est un serveur web simple en utilisant Node.js et Express.js');
});

// Démarrer le serveur
app.listen(port, () => {
  console.log(`Le serveur est en écoute sur le port ${port}`);
});

// Route post pour le traitement du formulaire.
app.post('/', (req, res) => {
  connection.query('SELECT * FROM User', (error, results) => {
    if (error) {
      console.error('Erreur lors de l\'exécution de la requête :', error);
      res.status(500).send('Erreur lors de l\'exécution de la requête');
    } else {
      // Vous pouvez manipuler les résultats de la requête ici
      res.status(200).json(results); // Envoie des résultats en tant que réponse JSON
    }
  })


});
