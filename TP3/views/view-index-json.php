<?php

function jsonExport()
{
    $mysqlConnection = sqlConnection();
    $row = $mysqlConnection->prepare('SELECT * FROM etudiant ORDER BY nom ASC');
    $row->execute();
    $json_data = array();
    foreach ($row as $rec) {
        $json_array['id'] = $rec['id'];
        $json_array['nom'] = $rec['nom'];
        $json_array['prenom'] = $rec['prenom'];
        $json_array['promotion_id'] = $rec['promotion_id'];
        array_push($json_data, $json_array);
    }
    $result = json_encode($json_data);
    echo $result;
    return $result;
}

jsonExport();
