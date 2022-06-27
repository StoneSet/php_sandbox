<?php

function logs($logType)
{
    $logs_directory_name = './logs/';
    switch ($logType) {
        case Log::SUBSCRIPTION_ERROR:
            $var = 'inscription en erreur';
            break;
        case Log::AUTHENTIFICATION_ERROR:
            $var = 'authentification en erreur';
            break;
        case Log::SUBSCRIPTION_SUCCESS:
            $var = 'inscription en succès';
            break;
        case Log::AUTHENTIFICATION_SUCCESS:
            $var = 'authentification en succès';
            break;
    }
    echo 'tefsfdf';
    $date = date('d-m-y h:i:s');
    $fp = fopen($logs_directory_name . 'log.txt', 'a+');
    $text = "\n" . $date . "\n" . $var;
    fwrite($fp, $text);
    fclose($fp);
}
