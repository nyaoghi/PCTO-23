<head>
  <title>Registrazione Utente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

 
  </head>
  <body class="m-5 p-5">
     <h1 align="center">Registrazione Utente</h1>
	

    <center>
		<form  class="row g-3 needs-validation" method="post" action="controllo.php" novalidate>
			<div class="col-md-4">
				<label for="validationCustom01" class="form-label">Cognome</label>
				<input type=text name="cognome" class="form-control" id="validationCustom01" required />
			</div>
			<div class="valid-feedback">
      Looks good!
    </div>
			<div class="col-md-4">
				<label for="validationCustom02" class="form-label">Nome</label>
				<input type="text" name="nome" class="form-control" id="validationCustom02" required />
			<div class="valid-feedback">
				Looks good!
			</div>
			</div>
			<div class="col-md-4">
				<label for="validationCustom03" class="form-label">E-mail</label>
				<input type=text name="email" id="exampleFormControlInput1" placeholder="nome@esempio.com" class="form-control" id="validationCustom03" required />
			</div>
			<div class="col-md-4">
				<label for="validationCustom04" class="form-label">Password </label>
				<input type=text name="password" class="form-control" id="validationCustom04" required />
			</div>
			<div class="col-md-4">
				<label for="validationCustom05" class="form-label">Numero di telefono</label>
				<input type=text name="ntel" class="form-control" id="validationCustom05" required />
			</div>
			<div class="col-md-4">
				<label for="validationCustom06" class="form-label">Indirizzo di casa</label>
				<textarea name="ind" class="form-control" id="validationCustom06" required></textarea>
			</div>
		      <div align="center" class="form-check-inline">
			  <br><p>Specifica il genere</p>
                <div class="form-check mb-3 form-check-inline">
                    <input class="form-check-input" type="radio" name="genere" id="validationFormCheck2"  id="inlineRadio1" value="0" required>
                    <label class="form-check-label" for="inlineRadio1 validationFormCheck2" >Maschio (M)</label>
					<div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-check mb-3 form-check-inline">
                  <input class="form-check-input" type="radio" name="genere" id="validationFormCheck3"  id="inlineRadio2" value="1" required>
                  <label class="form-check-label" for="inlineRadio2 validationFormCheck3" >Femmina (F)</label>
				  <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
             </div>
				
			
			
			<br><input class="btn btn-primary" type="submit" value="INVIA">
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
