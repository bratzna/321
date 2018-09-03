<?php

require ('baza-parametri.php');

$racunar_id= (int) @$_REQUEST['racunar_id'];
$naziv = mysqli_real_escape_string($bp, @$_POST['naziv']);

$upit = "insert into komponenta (naziv, racunar_id) values ('$naziv','$racunar_id')";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){ die(mysqli_error($bp));}

mysqli_close($bp);

die(header("Location: komponenta-pregled.php"));
