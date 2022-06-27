<?php
session_start();
require 'lib/validator.php';

$directory_name = './storage/';

class Log
{
    const AUTHENTIFICATION_SUCCESS = 1;
    const AUTHENTIFICATION_ERROR = 2;
    const SUBSCRIPTION_SUCCESS = 3;
    const SUBSCRIPTION_ERROR = 4;
}


if (isset($_POST['action'])) {

    $PASSWORD = md5($_POST['password1']);
    $data = [
        ['PSEUDO=', $_POST['pseudo'], 'PASSWORD=', $PASSWORD],
    ];
    $errors = SubformIsValid();
    if (empty($errors) == true) {
        //write logs
        log(Log::SUBSCRIPTION_SUCCESS);
        //write accounts
        $fp = fopen($directory_name . 'accounts.csv', 'a+');
        foreach ($data as $row) {
            fputcsv($fp, $row);
        }
        fclose($fp);
    } else {
        //write logs
        log(Log::SUBSCRIPTION_ERROR);
    }
}

require 'views/view-inscription.php';

?>