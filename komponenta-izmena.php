<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>izmena komponente</title>
</head>
<body>
    <h1>izmena komponente</h1>
    <?php
        require ('baza-parametri.php');

        $komponenta_id = (int) @$_REQUEST['komponenta_id'];

        $upit = "select * from komponenta where komponenta_id = '$komponenta_id'";
        $rezultat= mysqli_query($bp, $upit);


        if (!$rezultat) 
            die(mysqli_error($bp));
        if (mysqli_num_rows($rezultat) != 1) 
            die();
        
        
        $komponenta = mysqli_fetch_object($rezultat);
    ?>
    <form action="komponenta-izmena-db.php" method="post">
        komponenta_id: <input type="text" name="komponenta_id" value="<?php echo $komponenta->komponenta_id;?>" readonly />
        <select name="racunar_id">
        <?php
        require ('baza-parametri.php');

        $upit = "select * from racunar";
        $rezultat= mysqli_query($bp,$upit);
        if(!$rezultat) {die(mysqli_error($bp));}

        while($red = mysqli_fetch_object($rezultat)) {
            if($komponenta->racunar_id == $red->racunar_id)
                echo "<option value= '{$red->racunar_id}' selected>{$red->opis}</option>\n";
            else
                echo "<option value= '{$red->racunar_id}'>{$red->opis}</option>\n";
            }
        ?>
        </select>
        <br/>       
        Naziv: <input type="text" name="naziv" value= "<?php echo $komponenta->naziv;?> " />
        <hr />
        <button type="submit">Izmena</button>
    </form>
</body>
</html>
