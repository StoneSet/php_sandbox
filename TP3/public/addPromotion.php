<?php
require '../lib/sql.php';
require '../repository/promotion.php';

if (isset($_POST['action'])) {
    $name = $_POST['promotion'];
    var_dump($_POST['promotion']);
    addPromotion($name);
}
