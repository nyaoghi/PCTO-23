<head>
  <title>Registrazione Utente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

 
  </head>
  <body class="m-5 p-5">
  <center>
   <h1>Login</h1>
   <form  class="needs-validation" method="post" action="controllo.php" novalidate> 
   <div class="col-md-4">
				<label for="validationCustom03" class="form-label">E-mail</label>
				<input type=text name="emaillog" id="exampleFormControlInput1" placeholder="nome@esempio.com" class="form-control" id="validationCustom03" required />
			</div>
			<div class="col-md-4 my-3" >
      <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="passwordlog">
			</div>
			<br><input class="btn btn-primary" type="submit" value="ACCEDI">
      <a href="https://localhost/php/form.php"><input class="btn btn-primary" type="button" value="REGISTRATI"></a>
			</form>
    </center>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
		<script>
		(() => {
    'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
		</script>
		
	</body>
