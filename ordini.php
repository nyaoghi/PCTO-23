<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="m-5 p-5">
    <center>
        <h1>Il tuo ordine</h1>
        <form class="row g-2 needs-validation" method="post" action="ordini.php" novalidate>
            <input type="hidden" name="iduser" value="<?=$_GET['iduser'];?>">
           
            <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Cognome</label>
            <input type=text name="cognome" class="form-control" id="validationCustom01" required />
            </div>
            
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="validationCustom02" required />

                <div class=" col-md-4">
                    <label for="validationCustom01" class="form-label">Cosa vuoi ordinare?</label>
                    <input type=text name="ordine" class="form-control" id="validationCustom01" required />
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-danger">EFFETTUA UN NUOVO ORDINE</button>
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
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
      } 

    ?>
    </center>
</body>