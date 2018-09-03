<?php
require ('baza-parametri.php');

$racunar_id= (int) @$_REQUEST['racunar_id'];
$opis = mysqli_real_escape_string($bp, @$_POST['opis']);

$upit = "update racunar set opis='$opis' where racunar_id= $racunar_id";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat) 
    die(mysqli_error($bp));

die(header("Location: racunar-pregled.php"));
