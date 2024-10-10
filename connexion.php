<?php
try {
    // la mehode de cnx /pdo
    // root >>>< username
    // password> chaine vide
    // SGBD>>>>>>> musql
    // host>>>>>> localhost
    // le nom de la base>>>>>>>>< amis
    // numero de port>>>>>>>>>> 3306
    $amis = new PDO("mysql:host=localhost;dbname=amis", "root", "");
    //echo ('<p style="color: green;">Connexion a la base de donnees faite avec succee</p>');
} catch (\Throwable $th) {
    // message d'erreur
    // pou afficher l'erreur>>>> .$th
    // la description de l'erreur >>>>>>>>< getMessage
    die('<p style="color: red;">Echec de connexion a la base de donnees</p>'.$th->getMessage());
}
