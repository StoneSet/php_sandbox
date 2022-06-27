<?php

function getPromotions()
{
    $mysqlConnection = sqlConnection();
    $manyPromotion = $mysqlConnection->prepare('SELECT * FROM promotion');
    $manyPromotion->execute();
    $promotions = $manyPromotion->fetchAll();
    return $promotions;
}

function deletePromotion($p)
{
    echo $p;
    $mysqlConnection = sqlConnection();
    $sql = "DELETE FROM promotion WHERE id = :promotionid";
    $deletePromotion = $mysqlConnection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $deletePromotion->execute(array('promotionid' => $p));
    echo "ok";
    header("Location: /");
    header("Status: 301 Moved Permanently", false, 301);
}

function addPromotion($name)
{
    echo $name;
    $mysqlConnection = sqlConnection();
    $sql = "INSERT INTO promotion VALUES (NULL, :promotionname)";
    $deletePromotion = $mysqlConnection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $deletePromotion->execute(array('promotionname' => $name));
    echo "ok";
    header("Location: /");
    header("Status: 301 Moved Permanently", false, 301);
}

function countPromotion()
{
    $mysqlConnection = sqlConnection();
    $result = $mysqlConnection->query('SELECT * FROM promotion');
    $count = $result->rowCount();
    #echo($count);
    return $count;
}
