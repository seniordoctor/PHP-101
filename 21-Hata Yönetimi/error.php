<div style="width: 100%; padding: 30px; margin-bottom: 10px; background: red; color: whitesmoke;">
    <?php

//$no
//$msg
//$file
//$line
    ?>
    <p><?= $no; ?> - <?= $msg; ?></p>
    <p><strong>Hatalı Dosya:</strong> <?= $file; ?></p>
    <p><strong>Hatalı Satır:</strong> <?= $line; ?></p>

    <?php
            $open_file = fopen($file,'r');
            $count = 0;
            while ($satir = fgets($open_file)){

                if (++$count == $line){
                    echo "<p><strong>Yaptığınız Hata:</strong> <?= $line; ?>" .$satir."</p>";
                }
            }
    ?>
</div>