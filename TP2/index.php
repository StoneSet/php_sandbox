<?php
session_start();

class Log
{
    const AUTHENTIFICATION_SUCCESS = 1;
    const AUTHENTIFICATION_ERROR = 2;
    const SUBSCRIPTION_SUCCESS = 3;
    const SUBSCRIPTION_ERROR = 4;
}

require 'lib/validator.php';
require 'lib/auth.php';
require 'lib/logs.php';

if (isset($_POST['action'])) {
    $errors = LogformIsValid();
    if (empty($errors) == true) {
        logs(Log::AUTHENTIFICATION_SUCCESS);
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['password1'];
        authentification($pseudo, $mdp);
    } else {
        echo 'ejfbgerhzjgbfnm';
        logs(Log::AUTHENTIFICATION_ERROR);
    }
}

require 'views/view-login.php';