<?php
//1 se connecter à la BDD (utiliser PDO et non mysql_)
//2 Envoyer une requête SQL pour sélectionner toutes les promotions
//3 Boucler sur le jeu de résultats pour afficher les intitulés des promotions
//3.1 créer un lien hypertexte sur chaque intitulé
require '../lib/sql.php';
require '../views/view-student.php';
