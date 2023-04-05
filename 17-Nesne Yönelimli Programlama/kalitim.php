<?php

class Hash{

    public function md5Hash($string){
        return md5($string).' Hash Class';
    }

    public function sha1Hash($string){
        return sha1($string);
    }
}

//  extends ile kalıtımdan yararlanabiliriz.
class User extends Hash {
    public $username;
    public $password;

    //eper aynı isimde kendi class'ı içinde md5Hash adında function varsa önceliği kendi içindekine verir.
    public function md5Hash($string)
    {
        return md5($string).' User Class';
    }

    public function saveUser($username, $password){

        $this->username = $username;
        $this->password = $this->md5Hash($password);

        // Eğer Hash Class'ı çağırmak istiyorsak;
        $this->password = parent::md5Hash($password);
    }

    public function showUser(){
        echo $this->username. "<br>";
        echo $this->password;
    }

}

$User = new User();

$User->saveUser('Recep', '123');

$User->showUser();
