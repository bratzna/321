<?php

require ('baza-parametri.php');

$racunar_id=(int) @$_REQUEST['racunar_id'];

$upit = "delete from racunar where racunar_id=$racunar_id";
$rezultat= mysqli_query($bp,$upit);

if (!$rezultat)
    die(mysqli_error($bp));

    die(header("Location: racunar-pregled.php"));
