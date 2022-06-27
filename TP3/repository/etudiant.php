<?php

function getAllStudents()
{
    $p = $_GET["p"];
    $mysqlConnection = sqlConnection();
    $sql = 'SELECT * FROM etudiant';
    $manyStudents = $mysqlConnection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $manyStudents->execute();
    $manyStudents->execute(array('promotion' => $p));
    $listStudent = $manyStudents->fetchAll();
    return $listStudent;
}

function getStudents()
{
    $p = $_GET["p"];
    if ($p == "all") {
        return getAllStudents();
    } else {
        $mysqlConnection = sqlConnection();
        $sql = 'SELECT * FROM etudiant WHERE promotion_id = :promotion';
        $listStudents = $mysqlConnection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $listStudents->execute(array('promotion' => $p));
        $listStudent = $listStudents->fetchAll();
        return $listStudent;
    }
}

function deleteStudent($s)
{
    echo $s;
    $mysqlConnection = sqlConnection();
    $sql = "DELETE FROM etudiant WHERE id = :etudiantid";
    $deletePromotion = $mysqlConnection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $deletePromotion->execute(array('etudiantid' => $s));
    echo "ok";
    header("Location: /");
    header("Status: 301 Moved Permanently", false, 301);
}


function addStudent($name, $surname, $promotionId)
{
    echo $name, $surname, $promotionId;
    $mysqlConnection = sqlConnection();
    $sql = "INSERT INTO etudiant VALUES (NULL, :studentName, :studentSurname, :promotionId)";
    $addStudent = $mysqlConnection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $addStudent->execute(array('studentName' => $name, 'studentSurname' => $surname, 'promotionId' => $promotionId));
    echo "ok";
    header("Location: /");
    header("Status: 301 Moved Permanently", false, 301);
}

function countStudent()
{
    $mysqlConnection = sqlConnection();
    $result = $mysqlConnection->query('SELECT * FROM etudiant');
    $count = $result->rowCount();
    #echo($count);
    return $count;
}

function searchStudent($search)
{
    $mysqlConnection = sqlConnection();
    $sql = "SELECT * from etudiant WHERE nom LIKE :search or prenom like :search";
    $searchStudent = $mysqlConnection->prepare($sql);
    $searchStudent->execute(array('search' => '%' . $search . '%'));
    $result = $searchStudent->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
