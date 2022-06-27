<?php

if ($_SESSION['valid'] == true) {
    require 'views/view-page2.php';
}
else {
    header("Location: index.php");
}