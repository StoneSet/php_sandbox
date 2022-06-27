<?php
require '../lib/sql.php';
require '../repository/etudiant.php';

var_dump($_POST);

if (isset($_POST['action'])) {
    $name = $_POST['surname'];
    $surname = $_POST['name'];

    $promotionId = $_POST['id'];
    echo($promotionId);
    addStudent($name, $surname, $promotionId);
}
