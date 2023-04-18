<?php

//$db = new PDO ('mysql:host=37.9.203.197;dbname=testdb;','root','root');

try {
    $db = new PDO (
        'mysql:host=37.9.203.197;dbname=testdb;',
        'root',
        'root');
    echo "Connected to Database";
}catch (PDOException $PDOException) {
    die("Could not connect to the Database: ".$PDOException->getMessage());
}

