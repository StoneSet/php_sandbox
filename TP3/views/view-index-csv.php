<?php

function csvExport()
{
    $mysqlConnection = sqlConnection();
    $sql = $mysqlConnection->query("SELECT * FROM promotion ORDER BY nom ASC");

    if ($sql->rowCount() > 0) {
        $delimiter = ",";
        $filename = "promotion-data_" . date('Y-m-d') . ".csv";

        $f = fopen('php://memory', 'w');

        $fields = array('id', 'nom');
        fputcsv($f, $fields, $delimiter);
        $sql ->execute();
        foreach ($sql as $rec) {
            $lineData = array($rec['id'], $rec['nom']);
            fputcsv($f, $lineData, $delimiter);
        }

        fseek($f, 0);

        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        fpassthru($f);
    }
    exit;
}

csvExport();
