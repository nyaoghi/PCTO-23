
<head>

</head>
<body>
<h1>hai effettuato un nuovo ordine</h1>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'INSERT into ordine (Ordine) values ('.'\''.$_POST['ordine'].'\''.'where ID = '. $_GET['iduser'].')';
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } 

    ?>
</body>
