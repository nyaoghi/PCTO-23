<head>

</head>
<body>
<h1>hai effettuato un nuovo ordine</h1>
<form method="get" action="controllo.php">
<input type="hidden" name="iduser" value="<?=$_POST['iduser'];?>">
<a href="https://localhost/php/ordini.php?iduser=<?= $iduser; ?>"><button type="submit" class="btn btn-danger">TORNA ALLA HOMEPAGE</button></a>
</form>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'INSERT into ordine (Ordine, IDUtente) values ('.'\''.$_POST['ordine'].'\''.','.'\''.$_POST['iduser'].'\''.')';
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } 

    ?>
</body>
