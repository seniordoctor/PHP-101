<?php
// PDO

//phpinfo();

try {
    $db = new PDO('mysql:host=localhost;','root', 'root');
    $db->query('USE test;');
    $db->query('SHOW DATABASES');
}catch (PDOException $exception)
{
    echo $exception->getMessage();
}
