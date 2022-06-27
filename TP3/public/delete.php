<?php
//1 se connecter à la BDD (utiliser PDO et non mysql_)
//2 Envoyer une requête SQL pour sélectionner toutes les promotions
//3 Boucler sur le jeu de résultats pour afficher les intitulés des promotions
//3.1 créer un lien hypertexte sur chaque intitulé
require '../lib/sql.php';
require '../repository/promotion.php';
require '../repository/etudiant.php';

if (isset($_GET["p"])) {
    deletePromotion($_GET["p"]);
}
if (isset($_GET["s"])) {
    deleteStudent($_GET["s"]);
}
