<?php 
//DUJEugasi nakon dema slj liniju!!!!!!!!!!!!!!!!!!!!!!!!
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();

	if(isset($_POST["dodajUKosaricu"]))
	{
			if(isset($_SESSION["cart"]))
			{
				$proizvod_u_kosarici = array_column($_SESSION["cart"], "naziv");
				$count = count($_SESSION["cart"]);

				if(!in_array($_POST["hidden_name"], $proizvod_u_kosarici))
				{
					
					$dodaniProizvod = array(

						'naziv'		=>	$_POST["hidden_name"],
						'cijena'	=>	$_POST["hidden_price"],
						'slika'		=>	$_POST["hidden_image"],
						'količina'	=>	1
					);
					$_SESSION["cart"][$count] = $dodaniProizvod;

				}
				else
				{
					$pozicijaUNizu = array_search($_POST["hidden_name"], array_column($_SESSION["cart"], 'naziv'));
					$_SESSION["cart"][$pozicijaUNizu]["količina"] += 1;
					

				}
		
			}
			else
			{

				$dodaniProizvod = array(

					'naziv'		=>	$_POST["hidden_name"],
					'cijena'	=>	$_POST["hidden_price"],
					'slika'		=>	$_POST["hidden_image"],
					'količina'	=>	1
				);
				$_SESSION["cart"][] = $dodaniProizvod;
			}

			$_SESSION["cijenaAktivneKošarice"] += ($dodaniProizvod["cijena"]*$dodaniProizvod["količina"]);

			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit();
	}
	
	else if(isset($_POST["ukloniKosaricu"]))
	{
		unset($_SESSION["cart"]);
		$_SESSION["cijenaAktivneKošarice"] = 0;

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit();

	}

	else if(isset($_POST["ukloniProizvod"]))
	{
		if(sizeof($_SESSION["cart"])<= 1){

			unset($_SESSION["cart"]);
			$_SESSION["cijenaAktivneKošarice"] = 0;
		}
		else
		{
		$pozicijaUNizu = array_search($_POST["proizvodZaUkloniti"], array_column($_SESSION["cart"], 'naziv'));
		$_SESSION["cijenaAktivneKošarice"] -= ($_SESSION["cart"][$pozicijaUNizu]["cijena"]*$_SESSION["cart"][$pozicijaUNizu]["količina"]);
		unset($_SESSION["cart"][$pozicijaUNizu]);
		}
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit();
	}
	


?>