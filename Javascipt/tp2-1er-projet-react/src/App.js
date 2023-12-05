// import logo from './logo.svg';
import './App.css';

function App() {
  return (
 
      <section>
        <head>
          <link rel="stylesheet" href="./css/main.css" />
          <link rel="icon" type="image/ico" sizes="700x700" href="./img/icone.jpg" />
          <title>Login</title>
        </head>


      <div className="form-box">
          <div className="form-value">
              <form action="" method="post">
                  <h2>Register</h2>
                  <div className="inputbox">
                      <ion-icon name="mail-outline"></ion-icon> 
                      <input type="email" name="email" required />
                      <label for="">Email</label>
                  </div>
                  <div className="inputbox">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                      <input type="password" name="password" minlength="3" maxlength="50" required />
                      <label for="">Password</label>
                  </div>
                  <div className="inputbox">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                      <input type="password" name="password2" minlength="3" maxlength="50" required />
                      <label for="">Confirm Password</label>
                  </div>
                  <div className="inputbox">
                      <ion-icon name="lock-closed-outline"></ion-icon>
                      <input type="text" name="pseudo" minlength="3" maxlength="50" required />
                      <label for="">Pseudo</label>
                  </div>
                  
                  <div className="forget">
                      <label for=""><input type="checkbox" />Remember Me  </label>
                  
                  </div>
                  <button name="register">Register</button>
                  <div className="register" name="redirectaccueil">
                      <p>Already have a account ? <a onclick="switchpagejs(hidden,accueil)">Log in</a></p>
                  </div>
                  <div name="hidden" hidden></div>
              </form>
          </div>
      </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </section>
  
  );
}

export default App;
