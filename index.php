<head>
	
</head>
<body>
	<h1>Titolo</h1>
	<?php
	for ($i = 0; $i < 10; ++$i) {
		echo $i . "<br/>";
	}
	echo "<pre>Questo l'ho scritto da PHP</pre>";
	
	function myFun(&$myVar) {
		$myVar = "Cane";		
	}
	
	$var = "Gatto";
	echo $var;
	myFun($var);
	echo $var;
	?>
<body>