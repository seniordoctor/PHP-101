<?php
//
////                  CREATE
//// TEK VERİ EKLEME $sql = "INSERT INTO test SET isim = 'Recep', soyisim = 'MERT', abonelikler = 'A,B,C'"; $query = $db->query($sql);
//if ( $query->rowCount() ){ echo $query->rowCount().' adet veri eklendi'; }
//// ÇOKLU VERİ EKLEME
//$sql = "INSERT INTO test (isim, soyisim, abonelikler) VALUES ('Ahmet', 'ÇAKAR', 'A,D'), ('Musa', 'KALKAN', 'D'), ('Mehmet', 'BÜYÜK', 'F')";
//
//$query = $db->query($sql);
//
//if ( $query->rowCount() ){
//    echo $query->rowCount().' adet veri eklendi';
//}
//
//
////                  UPDATE
//$sql = "UPDATE test SET isim = 'ŞAHİN' WHERE id = 1"; $query = $db->query($sql);
//if ( $query->rowCount() ){ echo $query->rowCount().' adet veri güncellendi'; }
//
//
//
////                  READ
//$sql = "SELECT * FROM test"; $query = $db->query($sql);
//if ( $query->rowCount() ){ print_r($query->fetchAll(PDO::FETCH_ASSOC)); }
//
//$sql = "SELECT * FROM test WHERE id = 1"; $query = $db->query($sql);
//if ( $query->rowCount() ){ print_r($query->fetch(PDO::FETCH_ASSOC)); }
//
//
//
////                  DELETE
//$sql = "DELETE FROM test WHERE id > 10"; $query = $db->query($sql);
//if ( $query->rowCount() ){ echo $query->rowCount(). ' adet satır silindi.';
//
//
//
//
////                  PREPARE
//    $query = $db->prepare("INSERT INTO test SET isim = ?, soyisim = ?, abonelikler = ?");
//    $insert = $query->execute(["Fatma", "BURAK", "A,B,C"]);
//    if ( $query->rowCount() ){ echo $db->lastInsertId(); echo ' '.$query->rowCount()." adet satır etkilendi!"; }