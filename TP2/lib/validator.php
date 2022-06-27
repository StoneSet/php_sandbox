<?php

function LogformIsValid()
{
    $errors = [];
    $_invalidpass = 0;

    if ($_POST['pseudo'] == "") {
        $_invalidpass++;
    }

    if ($_POST['password1'] == "") {
        $_invalidpass++;
    }
    if (strlen($_POST['password1']) < 3) {
        $_invalidpass++;
    }
    if ($_invalidpass >= 1) {
        $errors[] = 'Mot de passe ou pseudo invalide';
    }
    return $errors;
}

function SubformIsValid()
{
    $_invalidpass = 0;
    $errors = [];

    if ($_POST['pseudo'] == "") {
        $_invalidpass++;
    }

    if ($_POST['password1'] == "") {
        $_invalidpass++;
    }
    if ($_POST['password2'] == "") {
        $_invalidpass++;
    }
    if (strlen($_POST['password1']) < 3) {
        $_invalidpass++;
    }
    if (($_POST['password1']) != ($_POST['password2'])) {
        $_invalidpass++;
    }
    if ($_invalidpass >= 1) {
        $errors[] = 'Mot de passe ou pseudo invalide';
    }
    return $errors;
}
