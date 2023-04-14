<?php
session_start();
$_SESSION["trueconnect"] = false;
include("User.php");
$utilisateur = new User(null,null,null,null);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/ico" sizes="700x700" href="./img/icone.jpg">
    <title>Login</title>
</head>

<body>

    <?php

    try {

        $erreur = 0;
        $count = 0;

        $ipserver = "192.168.65.36";
        $nomBase = "to_do_list";
        $loginPrivilege = "root";
        $passPrivilege = "root";

        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

        if(isset($_POST["hidden"]) && $_POST["hidden"] == "register"){
            if(isset($_POST["register"]) && $_POST["password"] == $_POST["password2"])
            {
                $utilisateur->inscription($_POST["pseudo"],$_POST["email"],$_POST["password"]);
            }


            ?>

            <section>
                <div class="form-box">
                    <div class="form-value">
                        <form action="" method="post">
                            <h2>Register</h2>
                            <div class="inputbox">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" name="email" required>
                                <label for="">Email</label>
                            </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" name="password" minlength="3" maxlength="50" required>
                                <label for="">Password</label>
                            </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" name="password2" minlength="3" maxlength="50" required>
                                <label for="">Confirm Password</label>
                            </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="text" name="pseudo" minlength="3" maxlength="50" required>
                                <label for="">Pseudo</label>
                            </div>
                            <div class="forget">
                                <label for=""><input type="checkbox">Remember Me  </label>
                            
                            </div>
                            <button name="register">Register</button>
                            <div class="register" name="redirectaccueil">
                                <p>Already have a account ? <a onclick="switchpagejs(hidden,accueil)">Log in</a></p>
                            </div>
                            <div name="hidden" hidden></div>
                        </form>
                    </div>
                </div>
            </section>
            <?php
        }else if(isset($_POST["hidden"]) && $_POST["hidden"] == "password"){
            ?>
            <section>
                <div class="form-box">
                    <div class="form-value">
                        <form action="">
                            <h2>Tant pis</h2>
                            <div class="register" name="redirectaccueil">
                            <p>Fallait s'en souvenir <a  onclick='switchpagejs(hidden,accueil)'>Maintenant, direction accueil bg</a></p>
                            </div>
                            <div name="hidden" hidden></div>
                        </form>
                    </div>
                </div>
            </section>
            <?php
        }else if(isset($_POST["hidden"]) && $_POST["hidden"] == "accueil"){
            if (isset($_POST["login"])) {

                $utilisateur->connexion($_POST["email"],$_POST["password"]);
   
            }
    
        ?>
    
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="post">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" minlength="3" maxlength="50" required>
                            <label for="">Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Remember Me </label>
    
                        </div>
                        <?php
                        if ($erreur == 1) {
                        ?>
                            <div class="error">
                                <label for="">Password or Login error </label>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="password" name="redirectpassword">
                            <p><a onclick='switchpagejs(hidden,password)'>Forget Password ?</a></p>
    
                        </div>
                        <button name="login">Log in</button>
                        <div class="register">
                            <p>Don't have a account ? <a onclick='switchpagejs(hidden,register)'>Register</a></p>
                        </div>
                        <div name="hidden" hidden></div>
                    </form>
                </div>
            </div>
        </section>
        <?php
        }else{
            if (isset($_POST["login"])) {

                $utilisateur->connexion($_POST["email"],$_POST["password"]);
   
            }
    
        ?>
    
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="post">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" minlength="3" maxlength="50" required>
                            <label for="">Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Remember Me </label>
    
                        </div>
                        <?php
                        if ($erreur == 1) {
                        ?>
                            <div class="error">
                                <label for="">Password or Login error </label>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="password" name="redirectpassword">
                            <p><a onclick='switchpagejs("hidden","password")'>Forget Password ?</a></p>
    
                        </div>
                        <button name="login">Log in</button>
                        <div class="register">
                            <p>Don't have a account ? <a onclick="switchpagejs(hidden,register)">Register</a></p>
                        </div>
                        <div name="hidden" hidden></div>
                    </form>
                </div>
            </div>
        </section>
        <?php
        }
        
    } catch (Exception  $error) {
        echo "error est : " . $error->getMessage();
    }

    ?>
    <script src="source.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>