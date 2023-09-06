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
        if (count($_POST) > 2) {
            if ($_POST['inlineRadioOptions'] = "Femmina") {
                $_POST['inlineRadioOptions'] = 1;
            } else {
                $_POST['inlineRadioOptions'] = 0;
            }
            $sql = 'INSERT INTO user(Cognome, Nome, Email, Password, Telefono, Indirizzo, Sesso) VALUES(' . '\'' . $_POST['cognome'] . '\'' . ',' . '\'' . $_POST['nome'] . '\'' . ',' . '\'' . $_POST['email'] . '\'' . ',' . '\'' . $_POST['password'] . '\'' . ',' . '\'' . $_POST['ntel'] . '\'' . ',' . '\'' . $_POST['ind'] . '\'' . ',' . '\'' . $_POST['inlineRadioOptions'] . '\'' . ')';
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
                die("credenziali non corrette");
                //header("Location: https://localhost/php/login.php");
            }
        }
    } else {
        header("Location: https://localhost/php/login.php");
    }
    ?>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>ORDINE</th>
            <th>NOME</th>
            <th>COGNOME</th>
            <th>INDIRIZZO</th>
        </tr>
        <br><a href="https://localhost/php/ordini.php?iduser=<?=$iduser;?>"><button type="button" class="btn btn-danger">EFFETTUA UN NUOVO ORDINE</button></a>
        <?php
        if ($iduser !== 0) {
            $sql = "SELECT Nome, Cognome, Indirizzo, ordine.ID, ordine.Ordine from user join ordine on user.ID = ordine.IDUtente where IDUtente = $iduser";
            //Echo "<textarea>".$sql."</textarea>";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>" . "<td>" . $row["Ordine"] . "</td>" . "<td>" . $row["Nome"] . "</td>" . "<td>" . $row["Cognome"] . "</td>" . "<td>" . $row["Indirizzo"] . "</td>";
                    echo "</tr>";
                }
            } else {
        ?>
                <tr>
                    <td colspan="5">0 results</td>
                </tr>
        <?php

            }
        }

        $conn->close();
        ?>
      
       






</body>

</table>