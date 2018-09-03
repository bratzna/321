<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dodavanje komponenti</title>
</head>
<body>
    <h1>Dodavanje komponenti</h1>
    <form action="komponenta-dodavanje-db.php" method="post">
        <select name="racunar_id">
        <?php
        require ('baza-parametri.php');

        $upit = "select * from racunar";
        $rezultat= mysqli_query($bp,$upit);
        if(!$rezultat) {die(mysqli_error($bp));}

        while($red = mysqli_fetch_object($rezultat)) {
            echo "<option value= '{$red->racunar_id}'>{$red->opis}</option>/n";
        }
        ?>
        </select>
        <br/>       
        Naziv: <input type="text" name="naziv" />
        <hr />
        <button type="submit">Dodavanje</button>
    </form>
</body>
</html>
