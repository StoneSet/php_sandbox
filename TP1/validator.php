<?php

function formIsValid() {
    $_invalidpass = 0;
   if ($_POST['prenom'] == "") {
        $errors[] = 'Veuillez saisir un prénom';
    }

    if ($_POST['prenom'] == "") {
        $errors[] = 'Veuillez saisir un nom';
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

    if ($_POST['bdate'] == "") {
        $errors[] = 'Veuillez saisir votre date d\'anniversaire';
    }

    if (isset($_POST['bdate'])) {
        //$month =
        //$day =
        //$year =
        //$bdate =  checkdate(int $month, int $day, int $year);
    }

    if ($_invalidpass >= 1) {
        $errors[] = 'Mot de passe invalide';
    }

    if ($_FILES['file']['error'] != 0) {
        $errors[] = 'Veuillez ajouter une photo';
    }

    if ($_POST['textarea'] == "") {
        $errors[] = 'Veuillez ajouter une description';
    }
    return $errors;
}