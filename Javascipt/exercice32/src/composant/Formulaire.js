import React, { useState } from 'react';
import ChildComponent from './ChildComponent';

const Formulaire = () => {
  const [login, setLogin] = useState('');
  const [mdp, setMdp] = useState('');
  const [error, setError] = useState(false);
  const [isFormComplete, setIsFormComplete] = useState(false);

  const Verification = () => {
    if (mdp !== '1234') {
      setError(true);
    } else {
      setError(false);
      setIsFormComplete(true);
    }
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    Verification();
    // Ajoutez d'autres traitements de soumission ici si nécessaire
  };

  return (
    <div style={{ color: error ? 'black' : 'white', backgroundColor: error ? 'red' : 'black' }}>
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
      <ChildComponent isFormComplete={isFormComplete} />
    </div>
  );
};

export default Formulaire;
