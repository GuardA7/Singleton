<?php
include_once 'ClubInsert.php';


$insert = ClubInsert::getInstance();
$insert->insertClub('Liverpool', 'Premier League', 1, 6);
var_dump($insert);

$insert1 = ClubInsert::getInstance();
$insert1->insertClub('Barcelona', 'La Liga', 2, 5);
var_dump($insert1);

$insert2 = ClubInsert::getInstance();
$insert2->insertClub('Juventus', 'Serie A', 3, 7);
var_dump($insert2);

$insert3 = ClubInsert::getInstance();
$insert3->insertClub('Bayern Munich', 'Bundesliga', 4, 8);
var_dump($insert3);

$insert4 = ClubInsert::getInstance();
$insert4->insertClub('Paris Saint-Germain', 'Ligue 1', 5, 9);
var_dump($insert4);

$insert5 = ClubInsert::getInstance();
$insert5->insertClub('Ajax', 'Eredivisie', 6, 10);
var_dump($insert5);
?>
