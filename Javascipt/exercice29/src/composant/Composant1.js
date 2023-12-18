const Composant1 = () => {
    const login = 'Toto';
    const mdp = 'Julien';

    return (
        <div>
            <form action="">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" value={login} required/> 
                <button type="submit">Envoyer</button>
                <label for="password">Password :</label>
                <input type="text" id="mdp" name="mdp" value={mdp} required/>
            </form>
        </div>
    );
};
export default Composant1;