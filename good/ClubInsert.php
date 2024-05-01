<?php
include_once 'DatabaseConnection.php';

class ClubInsert {
    private static ?ClubInsert $instance = null;

    private function __construct() {}

    public static function getInstance(): ClubInsert {
        if (!self::$instance) {
            self::$instance = new ClubInsert();
        }
        return self::$instance;
    }

    public function insertClub($nama, $liga, $wordRank, $uclTrofi) {
        try {
            $conn = DatabaseConnection::getInstance();
            $query = "INSERT INTO club (Nama, Liga, WordRank, UCL_trofi) VALUES (:nama, :liga, :wordRank, :uclTrofi)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':liga', $liga);
            $stmt->bindParam(':wordRank', $wordRank);
            $stmt->bindParam(':uclTrofi', $uclTrofi);
            $stmt->execute();
            echo "Data club berhasil disimpan.<br>";
        } catch (PDOException $e) {
            echo 'Gagal menyimpan data club: ' . $e->getMessage() . "<br>";
        }
    }

    // Fungsi __clone() dideklarasikan private untuk mencegah duplikasi objek ClubInsert
    private function __clone() {}
}
?>
