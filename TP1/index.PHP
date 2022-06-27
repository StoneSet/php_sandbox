<?php

require 'validator.php';

$directory_name = $_SERVER['REMOTE_ADDR'];
$directory_name = str_replace(".", "_", $directory_name);
$directory_name = './storage/' . $directory_name;

//var_dump($_POST);
//var_dump($_FILES);

if (is_dir($directory_name) == true) {
    echo "folder already exist";
    //block access to the page
    header("Location: thanks.php", TRUE, 301);
    exit();
}

if (isset($_POST['action'])) {
    $errors = formIsValid();
    if ($errors == 0) {
        //echo $directory_name;
        mkdir($directory_name, 0777, true);
        $target_file = $directory_name . '/' . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $date = date('d-m-y h:i:s');
        $text = "\n" . $date . "\n" . "Prenom : " . $_POST['prenom'] . "\n" . "Nom : " . $_POST['nom'] . "\n" . "Mot de passe : " . $_POST['password1'] . "\n" . "Mail : " . $_POST['mail'] . "\n" . "Civilite : " . $_POST['civilite'] . "\n" . "Description : " . $_POST['textarea'] . "\n" . "Date d'anniversaire : " . $_POST['bdate'];
        $fp = fopen($directory_name . '\responses.txt', 'a+');
        fwrite($fp, $text);
        fclose($fp);
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            //echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        }

        header("Location: thanks.php", TRUE, 301);
        exit();
    }
}

require 'view-index.php';
