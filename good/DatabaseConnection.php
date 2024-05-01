<?php
class DatabaseConnection {
    private static ?PDO $instance = null;

    private function __construct() {}

    public static function getInstance(): PDO {
        if (!self::$instance) {
            self::$instance = new PDO('mysql:host=localhost;dbname=clubbola;charset=utf8mb4', 'root', '');
        }
        return self::$instance;
    }
}
?>
