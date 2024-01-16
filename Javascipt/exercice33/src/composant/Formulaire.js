// Formulaire.js

import React, { useState } from 'react';
import ChildComponent from './ChildComponent';

const Formulaire = () => {
  const [login, setLogin] = useState('');
  const [mdp, setMdp] = useState('');
  const [error, setError] = useState(false);
  const [isFormComplete, setIsFormComplete] = useState(false);
  const [colorr, setColorr] = useState('red');

  const Verification = () => {
    if (mdp !== '1234') {
      setError(true);
    } else {
      setError(false);
      setIsFormComplete(true);
      setColorr('green');  // Mise à jour directe de la couleur ici
    }
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    Verification();
    // Ajoutez d'autres traitements de soumission ici si nécessaire
  };

  const changementcouleur = (newcouleur) => {
    setColorr(newcouleur);
    console.log("Color changed to", newcouleur);
  };

  return (
    <div style={{ color: error ? 'black' : 'white', backgroundColor: error ? colorr : 'black' }}>
      <form onSubmit={handleSubmit}>
        <label htmlFor="login">Login :</label>
        <input
          type="text"
          id="login"
          name="login"
          value={login}
          onChange={(e) => setLogin(e.target.value)}
          required
        />
        <button type="submit">Envoyer</button>
        <label htmlFor="mdp">Password :</label>
        <input
          type="text"
          id="mdp"
          name="mdp"
          value={mdp}
          onChange={(e) => setMdp(e.target.value)}
          required
        />
      </form>
      <ChildComponent isFormComplete={isFormComplete} couleur={changementcouleur} />
    </div>
  );
};

export default Formulaire;
