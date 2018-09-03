<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Pregled racunara</h1>
    <table border= "1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Opis</th>
        </tr>
        </thead>
        <?php 
        require ('baza-parametri.php');

        $upit = "select * from racunar";
        $rezultat = mysqli_query($bp, $upit);
        if (!$rezultat)
            die(mysqli_error($bp));

        
        while ($red = mysqli_fetch_object($rezultat)) {
            echo "<tr>\n";
            echo " <td>{$red->racunar_id}</td>\n";
            echo " <td>{$red->opis}</td>\n";
            echo " <td><a href= 'racunar-izmena.php?racunar_id={$red->racunar_id}'>Izmena</a></td>\n";
            echo " <td><a href= 'racunar-uklanjanje-db.php?racunar_id={$red->racunar_id}'>Uklanjanje</a></td>\n";
            echo "</tr>\n";
        }
        ?>
    </table>
    <hr />
    <a href="index.php">Pocetna</a>
    <a href="racunar-dodavanje.php">Dodavanje novog racunara</a>
</body>
</html>
