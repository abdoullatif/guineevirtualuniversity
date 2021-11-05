<?php
//Connection a la base de donnee
function connectBd (){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=gvu_bd', 'root', '');
    }catch (Exception $e){
        die('Erreur de connection du type :'.$e->getMessage());
    }
    return $bdd;
    //end function
}

