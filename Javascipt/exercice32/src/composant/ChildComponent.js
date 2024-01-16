// ChildComponent.js

import React from 'react';

const ChildComponent = ({ isFormComplete }) => {
  return (
    <div style={{ marginLeft: '10px', backgroundColor: isFormComplete ? 'green' : 'transparent', width: '100px', height: '100px' }}>
      {/* Contenu du composant enfant */}
    </div>
  );
};

export default ChildComponent;