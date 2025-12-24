<?php
class Connection
{
    private PDO $conn;
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "root";
    private string $db = "payment_system";

    public function __construct($host,$user,$pass,$db)
    {
        $this->conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }

}