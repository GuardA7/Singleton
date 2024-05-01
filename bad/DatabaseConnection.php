<?php

class DatabaseConnection
{

    private PDO $connection;

    public function __construct()
    {
        echo "<br>New Database Instance is Created!<br>";
    }

    public function connect(): PDO
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=test;port:3306', 'root', '');
            $this->connection = $pdo;

            return $this->connection;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        echo "<br>";
    }
}
