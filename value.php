<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <h1 align="center">I tuoi dati</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<table class="table">
<tr><th>Key</th><th>Value</th></tr>
<?php
//print_r($_POST);
//var_dump($_POST);
	/*echo "ciao il tuo cognome è ". $_POST['cognome']."<br>"."ciao il tuo nome è ". $_POST['nome']."<br>".
	"ciao la tua e-mail è ". $_POST['email']."<br>"."ciao la tua password è ". $_POST['password']."<br>"."ciao il tuo numero telefonico ". $_POST['ntel'].
	"ciao il tuo indirizzo è ". $_POST['ind']."<br>"."ciao il tuo genere è ". $_POST['inlineRadioOptions'];*/
	
	foreach ($_POST as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td> <td>" . $value . "</td>";
            echo "</tr>";
        }
	/*$a='b';
	$b=3;
	echo $$a;*/
?>
</table>
