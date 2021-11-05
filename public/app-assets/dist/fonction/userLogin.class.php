<?php
//session_start();
//include 'connect-bd.php';

class userLogin {
    private $nom;
    private $email;
    private $mdp;
    private $Com_mdp;
    private $bdd;
    
    public function __construct ($nom,$email,$mdp,$Com_mdp){
        $this->nom = htmlspecialchars($nom);
        $this->email = htmlspecialchars($email);
        $this->mdp = htmlspecialchars($mdp);
        $this->Com_mdp = htmlspecialchars($Com_mdp);
        $this->bdd = connectBd();
    }
    
    public function reg(){
        //Verification plus inscription de l'utilisateur
        $minWord = 6;
        if (strlen($this->mdp) <= $minWord){
            $Msg = "Le nombre de caratere de votre mot de passe doit depasser 6 caractere";
            
        } else {
            if ($this->mdp != $this->Com_mdp){
                $Msg = "Les mots de passe saissir ne sont pas identique";
                //return $Msg;
            }else {
                //inscription
                $inscription = $this->bdd->prepare('INSERT INTO users (nom,email,mdp) VALUES (:nom,:email,:mdp)');
                $inscription->execute(array('nom' => $this->nom, 'email' => $this->email, 'mdp'=>$this->mdp));
                $Msg = $this->nom.' '.$this->email.' '.$this->mdp.' '.$this->Com_mdp;
            }//mot de passe identique
        }// Nombre de caratere
        return $Msg;
    }
    
    public function login (){
        // verifie les donnnees de connection
        $login = $this->bdd->prepare('');
        $login->execute();
    }
}


?>