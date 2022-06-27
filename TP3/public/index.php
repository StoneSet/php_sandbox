<?php
//1 se connecter à la BDD (utiliser PDO et non mysql_)
//2 Envoyer une requête SQL pour sélectionner toutes les promotions
//3 Boucler sur le jeu de résultats pour afficher les intitulés des promotions
//3.1 créer un lien hypertexte sur chaque intitulé
require '../lib/sql.php';

if (isset($_GET["view"])) {
    $view = $_GET["view"];
} else {
    $view = 'html';
}

switch ($view) {
    case 'json':
        require '../views/view-index-json.php';
        break;
    case 'csv':
        require '../views/view-index-csv.php';
        break;
    case 'html':
        default:
        require '../views/view-index.php';
        break;
}
