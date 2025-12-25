<?php
require_once 'Database/DatabaseConnection.php';
$connect = new Connection();
$pdo = $connect->get_connection();

if ($pdo) {
    echo "Welcom to payment system\n";
}
?>