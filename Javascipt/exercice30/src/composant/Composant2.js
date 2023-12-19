const Composant2 = () => {
    const login = 'Toto';
    const mdps = ['Julien','Julien2','Julien3'];

    return (
        <div>
            <form action="">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" value={login} required/> 
                <button type="submit">Envoyer</button>
                <label for="password">Password :</label>
                <input type="text" id="mdp" name="mdp" value={mdps.map(mdp => mdp)} required/>
            </form>
        </div>
    );
};
export default Composant2;