<?php
//1 se connecter à la BDD (utiliser PDO et non mysql_)
//2 Envoyer une requête SQL pour sélectionner toutes les promotions
//3 Boucler sur le jeu de résultats pour afficher les intitulés des promotions
//3.1 créer un lien hypertexte sur chaque intitulé

function sqlConnection()
{
    require '../conf/db.php';
    try {
        return new PDO(
            'mysql:host='.$DATABASE_URL.';dbname='.$DATABASE_NAME.';charset=utf8',
            $DATABASE_USER,
            $DATABASE_PASSWORD
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}