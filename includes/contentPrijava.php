<div class="sustav">

	<div class="prijavaNaslov"><h2>Prijavite se</h2></div>
	<div class="registracijaNaslov"><h2>Registrirajte se</h2></div>

	<div class="prijava">
		<div class="container">
	      <form class="form-signin" action="includes/inc/prijava.inc.php" method="POST">
	        <input name="loginUsername" type="text" id="loginInputUsername" class="form-control" placeholder="Korisničko ime" required autofocus>   
	        <input name="loginPassword" type="password" id="loginInputPassword" class="form-control" placeholder="Lozinka" required>
	        <button name="loginSubmit" class="btn btn-lg btn-primary btn-block" type="submit">Prijava</button>
	   
	        <a href="#">Izgubili ste zaporku?</a>
	      </form>
	    </div>
	</div>

	<div class="registracija">
		<div class="container">
	      <form class="form-signin" action="includes/inc/registracija.inc.php" method="POST">
	        <input name="first_name" type="text" id="inputName" class="form-control" placeholder="Ime" required="Molimo vas unesite vaše ime!" autofocus>       
	        <input name="last_name" type="text" id="inputLastname" class="form-control" placeholder="Prezime" required="Molimo vas unesite vaše prezime!">
			<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required="Molimo vas unesite vaš email!">       
	        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Korisničko ime" required="Molimo vas unesite vaše željeno korisničko ime!">
	        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Lozinka" required="Molimo vas unesite vaše željeno lozinku!">       
	        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit" >Registracija</button>
	      </form>
    	</div>
	</div>

</div>