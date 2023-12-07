import React, { useState } from 'react';

const FunctionnalComponent = ({ couleur }) => {
    const [color, setColor] = useState(couleur);

    const getRandomColor = () => {
        // Génère des valeurs aléatoires pour R, G, B entre 0 et 255
        const randomR = Math.floor(Math.random() * 256);
        const randomG = Math.floor(Math.random() * 256);
        const randomB = Math.floor(Math.random() * 256);

        // Crée une chaîne de couleur RGB avec les valeurs aléatoires
        const randomColor = `rgb(${randomR}, ${randomG}, ${randomB})`;
        
        // Met à jour la couleur d'état avec la nouvelle couleur aléatoire
        setColor(randomColor);
    };

    return (

        <div>
            <div>
                <p style={{ color , display : 'inline'}} onMouseOver={getRandomColor} >Je suis un composant</p>
            </div>
            <button>Changer la couleur</button>
        </div>
    );
};

export default FunctionnalComponent;