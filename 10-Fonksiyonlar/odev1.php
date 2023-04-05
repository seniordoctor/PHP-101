<!doctype html>
<html lang="en">
<body>
<?php

function ucgen($say)
{
    $sayac = 0;

        while($sayac <= $say)
        {
            for ($i = 0; $i <= $sayac; $i++)
            {
                echo " 0 ";
            }
        $sayac++;
        echo '<br>';
        }
}

ucgen(15);

?>

</body>
</html>