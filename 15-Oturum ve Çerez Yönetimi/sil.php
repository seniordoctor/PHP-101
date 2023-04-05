<?php

session_start();
//session ile ilgili tüm değerler silinir.
session_destroy();

header('Location: a.php');