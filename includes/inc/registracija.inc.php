<?php
	
	require_once $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/inc/dbh.inc.php';

	//provjera jeli klika botun ili doša na str urlom
	if(isset($_POST['submit'])) {

		//Briše određene znakove sa stringa pri prijenosu u bazu
		$first_name	= mysqli_real_escape_string($conn, $_POST['first_name']);
		$last_name	= mysqli_real_escape_string($conn, $_POST['last_name']);
		$email		= mysqli_real_escape_string($conn, $_POST['email']);
		$username	= mysqli_real_escape_string($conn, $_POST['username']);
		$password	= mysqli_real_escape_string($conn, $_POST['password']);				
		//Provjere mogućih errora
		//Provjera jeli prazan koji input
		if(empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password)) {

			mysqli_close($conn);
			header("Location: ../../prijava.php?signup=empty");
			exit();
		
		} else {

			//Provjera jesu li (ne--!)unešena slova dozvoljena
			if(!preg_match('/^[a-zA-Z]*$/', $first_name) || !preg_match('/^[a-zA-Z]*$/', $last_name)) {

				mysqli_close($conn);
				header("Location: ../../prijava.php?signup=nameInvalid");
				exit();

			} else {

				//Provjera jeli mail ispravan
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

					mysqli_close($conn);
					header("Location: ../../prijava.php?signup=emailInvalid");
					exit();

				} else {

					//Provjera ima li šifra barem 8 znakova, 1 slovo i 1 br!!NE RADI
					//if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", $password)) {

						//header("Location: ../../prijava.php?signup=passInvalid");
						//exit();

					//} else {

						//Provjeravan jeli uneseni mail već korišten
						$sql 		 = "SELECT * FROM person WHERE email='$email';";
						$result 	 = mysqli_query($conn, $sql);
						$resultCount = mysqli_num_rows($result); 

						if($resultCount > 0) {

							mysqli_close($conn);					
							header("Location: ../../prijava.php?signup=emailTaken");
							exit();

						} else {

							//Provjeravan jeli username već iskorišteno!!NE RADI ili jeli unešeno zabranjeno ime (Admin)
							$sql 		 = "SELECT * FROM person WHERE username = $username;";
							$result 	 = mysqli_query($sql);
							$resultCount = mysqli_num_rows($result);

							if(($resultCount > 0) || !strcasecmp($username, "admin")){

								mysqli_close($conn);
								header("Location: ../../prijava.php?signup=usernameTaken");
								exit();
							
							} else {

								//Kriptiran šifru(algoritmon password default)
								//!!promini ivi pass na db na 255
								$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
								//Ubacujen novog usera u bazu
								$sqlInsertPerson 	= 	"INSERT INTO person(first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$hashedPassword');";
								$sqlInsertUser		=	"INSERT INTO usr(user_id) VALUES (LAST_INSERT_ID());";
								mysqli_query($conn, $sqlInsertPerson);
								mysqli_query($conn, $sqlInsertUser);
								mysqli_close($conn);
								header("Location: ../../prijava.php?signup=successful");
								exit();

							}


						}


						



					//}

				}
			}
		}

	} else {

		header("Location: ../../prijava.php");
		exit();
	}