<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private $host = 'localhost';
    private $db_name = 'lms_db'; // Default name, can be changed
    private $username = 'root';
    private $password = '1234';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            // If database doesn't exist, try connecting without db name to create it
            if ($e->getCode() == 1049) {
                try {
                    $dsn = "mysql:host=" . $this->host . ";charset=utf8mb4";
                    $conn = new PDO($dsn, $this->username, $this->password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $conn->exec("CREATE DATABASE IF NOT EXISTS " . $this->db_name);
                    
                    // Reconnect with db name
                    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
                    $this->conn = new PDO($dsn, $this->username, $this->password);
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                } catch(PDOException $ex) {
                    echo "Connection Error: " . $ex->getMessage();
                    exit;
                }
            } else {
                echo "Connection Error: " . $e->getMessage();
                exit;
            }
        }

        return $this->conn;
    }
}
