// ChildComponent.js

import React from 'react';

const ChildComponent = (props) => {
  const handleChildClick = () => {
    // Fonction à exécuter lors du clic sur la zone verte du composant enfant
    // Ici, nous changeons la couleur en appelant la fonction du parent
    props.couleur("blue");
  };

  return (
    <div
      onClick={handleChildClick}
      style={{
        marginLeft: '10px',
        backgroundColor: props.isFormComplete ? 'green' : 'transparent',
        width: '100px',
        height: '100px',
        cursor: props.isFormComplete ? 'pointer' : 'default',
      }}
    >
      {/* Contenu du composant enfant */}
    </div>
  );
};

export default ChildComponent;
