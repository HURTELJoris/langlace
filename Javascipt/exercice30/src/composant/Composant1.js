const Composant1 = () => {
    const login = 'Toto2';
    const mdp = 'Julien';

    let result = login === 'Toto' ?
        (
            <div>
                <form action="">
                    <label for="login">Login :</label>
                    <input type="text" id="login" name="login" value={login} required />
                    <button type="submit">Envoyer</button>
                    <label for="password">Password :</label>
                    <input type="text" id="mdp" name="mdp" value={mdp} required />
                </form>
            </div>

        )
        :
        (
            <div>
                <form action="">
                    <label for="login">Login :</label>
                    <input type="text" id="login" name="login" value='Erreur de login' required />
                    <button type="submit">Envoyer</button>
                    <label for="password">Password :</label>
                    <input type="text" id="mdp" name="mdp" value={mdp} required />
                </form>
            </div>
        )

    return (result);
};
export default Composant1;