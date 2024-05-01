<?php
class DatabaseConnection {
    private static ?PDO $connection = null;

    private function __construct() {}

    public static function getInstance(): PDO {
        if(!self::$connection) {
            try {
                self::$connection = new PDO('mysql:host=localhost;dbname=clubbola', 'root', '');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$connection;
    }
}
?>
