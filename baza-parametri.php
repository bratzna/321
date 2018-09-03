<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'webispitjun';

    $bp = mysqli_connect($server, $user,$pass,$db);
        if(!$db) {
            die('Javila se greska pri povezivanju sa bazom');
        }
