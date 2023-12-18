class Connexion {
    constructor(login, mdp) {
      this.login = login;
      this.mdp = mdp;
    }
};

const Composant2 = () => {

    const co = new Connexion("Toto","Julien");
    return (
        <div>
            <form action="">
                <label for="login">Login :</label>
                <input type="text" id="login" name="login" value={co.login} required/> 
                <button type="submit">Envoyer</button>
                <label for="password">Password :</label>
                <input type="text" id="mdp" name="mdp" value={co.mdp} required/>
            </form>
        </div>
    );
};
export default Composant2;