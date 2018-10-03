<?php 

//započinjen sesiju u slučaju da user se prijavi
session_start();

	//provjera jeli kliknut submit
	if(isset($_POST['loginSubmit'])) {

	require_once $_SERVER['DOCUMENT_ROOT'] . '/terminal/includes/inc/dbh.inc.php';

		//pretvaranje unesenih stringova u tip teksta za bazu
		$username	= mysqli_real_escape_string($conn, $_POST['loginUsername']);
		$password	= mysqli_real_escape_string($conn, $_POST['loginPassword']);
		//ako je prazno neko od trazenih polja a klika se login submit
		if(empty($username) || empty($password)) {

			header('Location: ../../prijava.php?login=empty');
			exit();
		} else {

			$sql = "SELECT * FROM PERSON WHERE username = '$username' OR email = '$username'";
			$result = mysqli_query($conn, $sql);
			$num_results = mysqli_num_rows($result);

			if($num_results <= 0) {

				header('Location: ../../prijava.php?login=error2');
				exit();
			} else {

				//izvuče iz odgovora upita redak ka asocijativni niz (vrijednost - kljuć)
				$row = mysqli_fetch_assoc($result);
				if($row) {

					//de-haširanje šifre
					$hashedPassCheck = password_verify($password, $row['password']);
					if($hashedPassCheck == false) {

						header('Location: ../../prijava.php?login=error3');
						exit();
					} elseif($hashedPassCheck == true) {

						//prijavljivanje korisnika u sustav
						$_SESSION['fist_name'] = $row['fist_name'];
						$_SESSION['last_name'] = $row['last_name'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['profileImage'] = $row['profileImage'];
						$_SESSION['cart'] = array();
						$_SESSION['cijenaAktivneKošarice'] = 0;

						header('Location: ../../index.php?login=successful');
						exit();
					}
				}
			}

		}


	} else {


		header('Location: ../../prijava.php?login=error1');
		exit();
	}