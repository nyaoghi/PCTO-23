<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (sizeof($_POST) > 2) {

            
            $sql = "INSERT INTO user(Cognome, Nome, Email, Password, Telefono, Indirizzo, Sesso) VALUES( '" . str_replace("'","''",$_POST['cognome'])."','" . str_replace("'","''",$_POST['nome']) ."','" . $_POST['email'] . "','" . $_POST['password'] . "','". $_POST['ntel'] . "','". str_replace("'","''",$_POST['ind']) ."','". $_POST['genere'] . '\'' . ')';
            
            if ($conn->query($sql) === TRUE) {
          
                $iduser = $conn->insert_id;
            } else {
                die("Error: " . $sql . "<br>" . $conn->error);
            }
        } else {

            $sql = "SELECT ID from user where Email = '" . $_POST['emaillog'] . "' AND Password = '" . $_POST['passwordlog'] . '\'';
            $result = $conn->query($sql);

            if ($result->num_rows === 1) {
                $iduser = $result->fetch_object()->ID;
            } else {
                header("Location: https://localhost/php/login.php");
            }
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['iduser'])) {
            $iduser = $_GET['iduser'];
        } else {
            header("Location: https://localhost/php/login.php");
        }
    } else {
        header("Location: https://localhost/php/login.php");
    }
    ?>
    <center>
        <table class="table">
            <tr>
                <?php
                $info = array(
                    array('user', 'Nome'),
                    array('user', 'Cognome'),
                    array('user', 'Indirizzo'),
                    array('ordine', 'Ordine'),
                    array('ordine', 'ID'),
                    array('user', 'Telefono')
                );
                $imp = [];
                for ($c = 0; $c < sizeof($info); $c++) {
                    $imp[$c] = implode(".", $info[$c]);
                }
                $sql = "SELECT " . implode(", ", $imp) . " from user join ordine on user.ID = ordine.IDUtente where IDUtente = $iduser";


                for ($c = 0; $c < sizeof($info); $c++) {
                    echo "<th>" . $info[$c][1] . "</th>";
                }
                echo "</tr>";
                $n = 0;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        for ($c = 0; $c < sizeof($info); $c++) {

                            echo "<td>" . $row[$info[$c][1]] . "</td>";
                        }
                        $n = $n + 1;
                        echo "</tr>";
                    }
                }
                ?>
                <br><a href="https://localhost/php/ordini.php?iduser=<?= $iduser; ?>"><button type="button" class="btn btn-danger">EFFETTUA UN NUOVO ORDINE</button></a>

            <tr>
                <td colspan="<?php echo sizeof($info); ?>"><?php echo $result->num_rows; ?> results</td>
            </tr>
            <?php
            $conn->close();
            ?>





            </tr>
        </table>
    </center>
</body>
