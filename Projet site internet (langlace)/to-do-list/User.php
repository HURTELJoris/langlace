<?php
    class User
    {
        //propriétés private
        private $id_;
        private $mail_;
        private $password_;
        private $pseudo_;


        //méthodes public
        public function __construct($id,$mail,$password,$pseudo){
            $this->id_ = $id;
            $this->mail_ = $mail;
            $this->password_ = $password;
            $this->pseudo_= $pseudo;
        }

        public function connexion($mail,$password){
           

                // $requete = "select * from user";
                $requete = "select * from user where `email` = '" . $mail . "' && `mdp` = '" . $password . "'";
                $resultat = $GLOBALS["pdo"]->query($requete);
                //resultat est du coup un objet de type PDOStatement
    
                $count = $resultat->rowCount();
    
                if ($count == 1) {
                    $_SESSION["trueconnect"] = true;
        ?>
                    <script>
                        window.location.replace("ToDoList/TODOLIST.php");
                    </script>
        <?php
                } else {
                    $erreur = 1;
                }
        }

        public function inscription($pseudo,$mail,$password){
           
            $requete4 = "INSERT INTO `user`(pseudo, email, mdp) VALUES ('" . $pseudo . "','". $mail ."','". $password ."')";
            $resultat4 = $GLOBALS["pdo"]->query($requete4);
            //resultat est du coup un objet de type PDOStatement

            $_SESSION["trueconnect"] = true;

            ?>
            <script>
                window.location.replace("ToDoList/TODOLIST.php");
            </script>
            <?php
    }
    }

    
    

?>