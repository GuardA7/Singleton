<?php
include_once 'DatabaseConnection.php';

class ClubInsert {
    public function insertClub($nama, $liga, $wordRank) {
        try {
            $conn = DatabaseConnection::getInstance();
            $query = "INSERT INTO club (Nama, Liga, WordRank) VALUES (:nama, :liga, :wordRank)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':liga', $liga); // Mengikat parameter liga
            $stmt->bindParam(':wordRank', $wordRank);
            $stmt->execute();
            echo "Data club berhasil disimpan.<br>";
        } catch (PDOException $e) {
            echo 'Gagal menyimpan data club: ' . $e->getMessage() . "<br>";
        }
    }
}
?>
