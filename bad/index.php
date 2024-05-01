<?php

include_once 'DatabaseConnection.php';

// create -> Mhs1
$db1 = new DatabaseConnection();
var_dump($db1->connect());

// create -> Mhs2
$db2 = new DatabaseConnection();
var_dump($db2->connect());

// create -> Mhs3
$db3 = new DatabaseConnection();
var_dump($db3->connect());

// create -> Mhs4
$db4 = new DatabaseConnection();
var_dump($db4->connect());