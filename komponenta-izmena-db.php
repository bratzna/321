<?php

require ('baza-parametri.php');

$komponenta_id= (int) @$_POST['komponenta_id'];
$naziv = mysqli_real_escape_string($bp, @$_POST['naziv']);
$racunar_id= (int) @$_POST['racunar_id'];

$upit = "update komponenta set naziv= '$naziv' , racunar_id= '$racunar_id' where komponenta_id=$komponenta_id";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){ die(mysqli_error($bp));}

mysqli_close($bp);

die(header("Location: komponenta-pregled.php"));
