<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>

<!--
<form action="get.php" method="get">

    <input type="text" name="isim" placeholder="İsim"><br>
    <input type="text" name="soyisim" placeholder="Soyisim"><br>
    <hr>
    <label>Diller</label><br>
    <label>PHP</label>
    <input type="checkbox" value="php" name="dil[]"><br>
    <label>NODEJS</label>
    <input type="checkbox" value="node" name="dil[]"><br>
    <label>JAVASCRIPT</label>
    <input type="checkbox" value="js" name="dil[]"><br>

    <button type="submit">Gönder</button>

</form>
-->

<!-- action özelliği bu formun içindeki verileri nereye göndereceğimizi seçebiliriz-->
<form action="request.php?islem=ek" method="post">

    <input type="text" name="isim" placeholder="İsim"><br>
    <input type="text" name="soyisim" placeholder="Soyisim"><br>
    <hr>
    <label>Diller</label><br>
    <label>PHP</label>
    <input type="checkbox" value="php" name="dil[]"><br>
    <label>NODEJS</label>
    <input type="checkbox" value="node" name="dil[]"><br>
    <label>JAVASCRIPT</label>
    <input type="checkbox" value="js" name="dil[]"><br>

    <button type="submit">Gönder</button>

</form>



</body>
</html>