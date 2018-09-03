<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pregled komponenti</title>
</head>
<body>
    <h1>Pregled komponenti</h1>
    <table border= "1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>racunar_id</th>
        </tr>
        </thead>
        <?php 
        require ('baza-parametri.php');

        $upit = "select * from komponenta";
        $rezultat = mysqli_query($bp, $upit);
        if (!$rezultat)
            die(mysqli_error($bp));

        
        while ($red = mysqli_fetch_object($rezultat)) {
            echo "<tr>\n";
            echo " <td>{$red->komponenta_id}</td>\n";
            echo " <td>{$red->naziv}</td>\n";
            echo " <td>{$red->racunar_id}</td>\n";
            echo " <td><a href= 'komponenta-izmena.php?komponenta_id={$red->komponenta_id}'>Izmena</a></td>\n";
            echo " <td><a href= 'komponenta-uklanjanje-db.php?komponenta_id={$red->komponenta_id}'>Uklanjanje</a></td>\n";
            echo "</tr>\n";
        }
        ?>
    </table>
    <hr />
    <a href="index.php">Pocetna</a>
    <a href="komponenta-dodavanje.php">Dodavanje nove komponente</a>
</body>
</html>
