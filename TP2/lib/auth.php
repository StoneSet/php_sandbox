<?php
function authentification($identifiant, $mdp)
{
    $authenticationlogin = false;
    $authenticationpwd = false;
    
    $authentication = false;

    $login = 'admin';
    $password = 'Not24get';

    $okmsg = "Identification correcte";
    $errormsg = "Identification incorrecte";


    if (isset($identifiant) == true) {
        if ($identifiant == $login) {
            $authenticationlogin = true;
            echo "OK pour login";
        }
    }

    if (isset($mdp) == true) {
        if ($mdp == $password) {
            $authenticationpwd = true;
            echo "OK pour mdp";
        }
    }

    if ($authenticationlogin == true) {
        if ($authenticationpwd == true) {
            $_SESSION['valid'] = true;
        } else {
            return $errormsg;
        }
    } else {
        echo $errormsg;
    }

    if (isset($_SESSION['valid']) == true) {
        if ($_SESSION['valid'] == true ) {
        header("Location: views/view-page2.php");
    }
  }
}