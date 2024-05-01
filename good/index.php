<?php
include_once 'ClubInsert.php';

// Membuat objek dari kelas ClubInsert
$insert = new ClubInsert();

// Memanggil method insertClub untuk menyimpan data klub ke dalam database
$insert->insertClub('Liverpool', 'Premier League', 1);
var_dump($insert);

$insert->insertClub('Barcelona', 'La Liga', 2);
var_dump($insert);

$insert->insertClub('Bayern Munich', 'Bundesliga', 3);
var_dump($insert);
?>
