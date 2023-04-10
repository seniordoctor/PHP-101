<?php
// PDO


try {
    $db = new PDO('mysql:host=localhost;','root', 'R3c3p!;');
    $db->query('USE `whmcstel_db_8.1.3`;');
    $db->query('SHOW DATABASES');
}catch (PDOException $exception)
{
    echo $exception->getMessage();
}
