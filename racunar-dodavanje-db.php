<?php

require ('baza-parametri.php');
//eskejpovanje,tj zabrana unosenja koda u polje
$opis = mysqli_real_escape_string($bp, @$_POST['opis']);

$upit = "insert into racunar (opis) values ('$opis')";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){ die(mysqli_error($bp));}

mysqli_close($bp);

die(header("Location: racunar-pregled.php"));
