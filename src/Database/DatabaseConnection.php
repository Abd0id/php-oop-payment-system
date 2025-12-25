<?php
class Connection
{
    private PDO $conn;
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "root";
    private string $db = "payment_system";

    public function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->user,
                $this->pass
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $erorr) {
            echo "Connection failed: " . $erorr->getMessage();
            exit; 
        }
    }

        public function get_connection()
    {
        return $this->conn;
    }

}