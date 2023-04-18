<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
<h1>Güvenlik</h1>
<!--
<?php
require 'config/config.php';
$q = $db->query('SELECT * FROM users');
$users = $q->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($users);
?>
-->

<form action="" method="post">
    <input type="text" name="username"><br>
    <button type="submit">Gönder</button>

</form>

<?php

//setcookie(
//    'theme',
//    'dark',
//    time() + 86400,
//    '/',
//    'localhost',
//    false,
//    true
//);

echo $_POST['username'] ?? '';

?>

</body>
</html>