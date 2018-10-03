<?php
	session_start();

	include('includes/inc/dbh.inc.php');

 ?>
<!DOCTYPE html>
<html lang="hr">
	<head>
		<meta charset="UTF-8">
		<!--za responzivan izgled uunutar svakog uređaja-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!--opis u search engineu stranice-->
		<meta name="description" contetnt="<? php echo $phpdescription; ?>">
		<!--za search engine da sta bolje bude rangiran u pregledu (radi?)-->
		<meta name="keywords" content="<? php echo $pkeywords; ?>">
		<meta name="author" content="VaShA">
		<title><?php echo $ptitle . "Početna";?></title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="css/stil.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet"> 


		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script language="javascript">
		$(document).ready(function(){
		   $('.linkovi').click(function(){
		       $('#listContent').load($(this).attr('href'));
		       return false;
		   });
		});
		</script>
			<script>
			$(document).ready(function () {
			    var allBoxes = $("div.boxes").children("div");
			    transitionBox(null, allBoxes.first());
			});

			function transitionBox(from, to) {
			    function next() {
			        var nextTo;
			        if (to.is(":last-child")) {
			            nextTo = to.closest(".boxes").children("div").first();
			        } else {
			            nextTo = to.next();
			        }
			        to.fadeIn(500, function () {
			            setTimeout(function () {
			                transitionBox(to, nextTo);
			            }, 2000);
			        });
			    }
			    
			    if (from) {
			        from.fadeOut(500, next);
			    } else {
			        next();
			    }
			}
		</script>
	</head>
	<body>
		<script>
			function myFunction() {
			    alert("Narudžba je uspješno izvršena!");
			    document.location = "index.php";
			}
		</script>
		<script type="text/javascript">
			function openRequestedPopup() {
 				 windowObjectReference = window.open("/includes/test/splitCity.php", "contentPoslovnice.php");
			}
		</script>
		<script>
			$(document).ready(function(){
	
			//Check to see if the window is top if not then display button
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('#myBtn').fadeIn();
				} else {
					$('#myBtn').fadeOut();
				}
			});
			
			//Click event to scroll to top
			$('#myBtn').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			
		});
		</script>
		<script>
			function openNav() {
			    document.getElementById("mySidenav").style.width = "250px";
			    document.getElementById("main").style.marginRight = "250px";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			    document.getElementById("main").style.marginRight= "0";
			}
		</script>
		<script>
			$(document).ready(function () {
				window.open("includes/test/splitCity.php","_self")
			}
		</script>
		<div id="mySidenav" class="sidenav">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="images/icons/go-back-left-arrow.png" height=16 width=16></a>
  			<div class="textareaPrikaz" rows="1300"><textarea>Vi: Dobar dan, imam problem sa kupnjom.

Admin:	Opišite mi trenutni problem kako bi vam mogao pomoći.

Vi:	Kada idem kupiti proizvod govori mi kako mi je kartica ne važeća, u realnosti je važeća.

Admin:	Vidit ću što mogu učinit za vas

Admin:	Probajte sada kupiti.

Vi:	Radi...Hvala vam</textarea></div>
  			<form action="/action_page.php">
				<input type="text" name="FirstName">
			</form>
		</div>
	<div id="main">
		<div class="grid">
			<header class="header">
				<!-- <div class="logo"><img src="<?php //echo $logoImg?>" class="image"></div> -->
				<div class="logo">
					<div class="logoCont"><a href="index.php" ><img src="images/logo1.png" height="58" width="265"></a></div>
				</div>
				<div class="search">
					<input type="text" placeholder="Pretraži.." name="search">
  					<button class="searchIcon" type="submit"><img src="images/icons/magnifier.png" height=19 width=19></button>
				</div>
				<nav class="categories">
					 <!-- <div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Računala i oprema
					    <span class="caret"></span>  </button>
					    
					    <ul class="menu-dropdown">
					    <div>
					    	<li class="dropdown-header"><h4>Računala</h4></li>
					    -->
					    	<?php 

					    		$catCount=1;
					    		$sql = "SELECT category.category_id, category.category_name,product.product_name,product.product_id FROM product Inner Join category on category.category_id=product.category_id";
								$query = mysqli_query($conn, $sql);


								$nizKategorija = array();
								$nizProizvoda = array();
					    		while($row = mysqli_fetch_assoc($query))
					    		{
					    			if(!in_array($row["category_name"], $nizKategorija, true))
					    			{
					    				$nizKategorija[$row["category_id"]] = $row["category_name"];
					    			}
					    			if(!in_array($row["product_name"], $nizKategorija, true))
					    			{
					    				$nizProizvoda[$row["product_name"]] = $row["product_name"];
					    			}
					    				
					    		}		

					    		ksort($nizKategorija);	
					    		ksort($nizProizvoda);						
								
					    		$racunala_i_opremaIsSet = false;
					    		$konzole_i_igreIsSet = false;
					    		$smartphone_i_tabletiIsSet = false;

					    		$racunalaIsSet = false;
					    		$komponenteIsSet = false;
					    		$periferijaIsSet = false;
					    		$konzoleIsSet = false;
					    		$igreIsSet = false;
					    		$smartphoneIsSet = false;
					    		$tabletiIsSet = false;


					    		foreach ($nizKategorija as $kategorijaID => $kategorijaIme) 
					    		{



					    				if((int)($kategorijaID/100) == 1)
					    				{
					    					if(!$racunala_i_opremaIsSet)
						    					{
						    						$racunala_i_opremaIsSet = true;
						    						?>

					    								<div class="dropdown">
													    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Računala i oprema
													    <span class="caret"></span>  </button>
													    <ul class="menu-dropdown">



					    							<?php
						    					}
					    					
					    					if((int)($kategorijaID/10) == 11)
					    					{
						    					if(!$racunalaIsSet)
						    					{
						    						$racunalaIsSet = true;
						    						?>
						    							<div>
					    								<li class="dropdown-header"><h4>Racunala</h4></li>
					    							<?php
						    					}
							    			}
							    			else if((int)($kategorijaID/10) == 12)
							    			{
							    				if(!$komponenteIsSet)
						    					{
						    						$komponenteIsSet = true;
						    						?>
						    							</div>

						    							<div>
					    								<li class="dropdown-header"><h4>Komponente</h4></li>
					    							<?php
						    					}

							    			} 
							    			else if((int)($kategorijaID/10) == 13)
							    			{
							    				if(!$periferijaIsSet)
						    					{
						    						$periferijaIsSet = true;
						    						?>
						    							</div>

						    							<div>
					    								<li class="dropdown-header"><h4>Periferija</h4></li>
					    							<?php
						    					}

							    			}
							    		?>						
								    		<li><a href="kategorija.php?link=<?php echo $kategorijaIme ?>"> <?php

								    		$kategorijaPadajucegIzbornika = str_replace("_", " ", $kategorijaIme);
			  								$kategorijaPadajucegIzbornika = ucfirst($kategorijaPadajucegIzbornika);
								    		echo $kategorijaPadajucegIzbornika;


								    		?></a></li>
								    		<?php
					    				}


					    				else if((int)($kategorijaID/100) == 2)
					    				{
					    					if(!$konzole_i_igreIsSet)
						    					{
						    						$konzole_i_igreIsSet = true;
						    						?>
														</div>
													    
													    </ul>
					  									</div>

					    								<div class="dropdown">
													    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Konzole i igre
													    <span class="caret"></span>  </button>
													    <ul class="menu-dropdown">



					    							<?php
						    					}					    					
					    					if((int)($kategorijaID/10) == 21)
					    					{
						    					if(!$konzoleIsSet)
						    					{
						    						$konzoleIsSet = true;
						    						?>
						    							

						    							<div>
					    								<li class="dropdown-header"><h4>Konzole</h4></li>
					    							<?php
						    					}
							    			}
							    			else if((int)($kategorijaID/10) == 22)
							    			{
							    				if(!$igreIsSet)
						    					{
						    						$igreIsSet = true;
						    						?>
						    							
						    							</div>

						    							<div>
					    								<li class="dropdown-header"><h4>Igre</h4></li>
					    							<?php
						    					}
						    					/*else
						    					{
						    						 ?> </div> <?php
						    					} */
						    				}
 
							    			
							    		?>						
								    		<li><a href="kategorija.php?link=<?php echo $kategorijaIme ?>"> <?php

								    		$kategorijaPadajucegIzbornika = str_replace("_", " ", $kategorijaIme);
			  								$kategorijaPadajucegIzbornika = ucfirst($kategorijaPadajucegIzbornika);
								    		echo $kategorijaPadajucegIzbornika;


								    		?></a></li>
								    		<?php
					    			
							    		}



					    				

					    				else if((int)($kategorijaID/100) == 3)
					    				{
					    					if(!$smartphone_i_tabletiIsSet)
						    					{
						    						$smartphone_i_tabletiIsSet = true;
						    						?>
														</div>

													    </ul>
					  									</div>

					    								<div class="dropdown">
													    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Smartphone i tableti
													    <span class="caret"></span>  </button>
													    <ul class="menu-dropdown">



					    							<?php
						    					}					    					
					    					if((int)($kategorijaID/10) == 31)
					    					{
						    					if(!$smartphoneIsSet)
						    					{
						    						$smartphoneIsSet = true;
						    						?>
						    							<div>
					    								<li class="dropdown-header"><h4>Smartphone</h4></li>
					    							<?php
						    					}
							    			}
							    			else if((int)($kategorijaID/10) == 32)
							    			{
							    				if(!$tabletiIsSet)
						    					{
						    						$tabletiIsSet = true;
						    						?>

						    							</div>

						    							<div>
					    								<li class="dropdown-header"><h4>Tableti</h4></li>
					    							<?php
						    					}
												/*else
						    					{
						    						 ?> </div> <?php
						    					} */
						    				}

							    		 
							    			
							    		?>						
							    		<li><a href="kategorija.php?link=<?php echo $kategorijaIme ?>"> <?php

							    		$kategorijaPadajucegIzbornika = str_replace("_", " ", $kategorijaIme);
		  								$kategorijaPadajucegIzbornika = ucfirst($kategorijaPadajucegIzbornika);
							    		echo $kategorijaPadajucegIzbornika;


							    		?></a></li>
							    		<?php
					    				}

					    		}
?>

					    			
					    			

<!--									$kategorijaPadajucegIzbornika = $row["category_name"];
					    			if((int)($row["product_id"]/1000) == $catCount)
					    			{ ?>
-->
					    		

						    

					      <!--<li class="dropdown-header"><h4>Računala</h4></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/racunala/osobna_racunala.php">Osobna računala</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/racunala/laptopi.php">Laptopi</a></li>-->
					      <!--<li><a href="kategorija.php?link=laptopi.php&action=add">Laptopi</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/racunala/laptopi_oprema.php">Laptopi - Dodatna oprema</a></li>-->

					   <!-- </div>
					    <div>
					      <li class="dropdown-header"><h4>Komponente</h4></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/komponente/graficka.php">Grafičke kartice</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/komponente/procesor.php">Procesori</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/komponente/maticna.php">Matične ploče</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/komponente/memorija.php">Memorije</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/komponente/napajanje.php">Napajanja</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/komponente/ssd.php">SSD diskovi</a></li>
					    </div>
					    <div>
					      <li class="dropdown-header"><h4>Periferija</h4></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/periferija/mis.php">Miševi</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/periferija/tipkovnica.php">Tipkovnice</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/periferija/monitor.php">Monitori</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/periferija/zvucnik.php">Zvučnici</a></li>
					      <li><a href="kategorija.php?link=racunala_i_oprema/periferija/hdd_x.php">HDD</a></li>
					    </div>
					    </ul>
					  </div>
					  <div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" action="default.php" type="button" data-toggle="dropdown">Konzole i igre
					    <span class="caret"></span>  </button>
					    <ul class="menu-dropdown menu">
					    	 <div>
					      <li class="dropdown-header"><h4>Konzole</h4></li>
					      <li><a href="kategorija.php?link=konzole_i_igre/konzole/ps4.php">Playstation 4</a></li>
					      <li><a href="kategorija.php?link=ps4.php&action=add">Playstation 4</a></li>
					      <li><a href="kategorija.php?link=konzole_i_igre/konzole/x1.php">Xbox One</a></li>
					      <li><a href="kategorija.php?link=konzole_i_igre/konzole/nSwitch.php">Nintendo Switch</a></li>
					  </div>
					       <div>
					      <li class="dropdown-header"><h4>Igre</h4></li>
					      <li><a href="kategorija.php?link=konzole_i_igre/igre/igre_ps4.php">Igre za Playstation 4</a></li>
					      <li><a href="kategorija.php?link=konzole_i_igre/igre/igre_x1.php">Igre za Xbox One</a></li>
					      <li><a href="kategorija.php?link=konzole_i_igre/igre/igre_nSwitch.php">Igre za Nintendo S</a></li>		
					      </div>			      
					    </ul>
					</div>
					  <div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Smartphone i tableti
					    <span class="caret"></span></button>
					    <ul class="menu-dropdown menu">
					    	 <div>
					      <li class="dropdown-header"><h4>Smartphone</h4></li>
					      <li><a href="kategorija.php?link=telefoni_i_tableti/smartphone/iphone.php">iPhone</a></li>
					      <li><a href="kategorija.php?link=telefoni_i_tableti/smartphone/huawei.php">Huawei</a></li>
					      <li><a href="kategorija.php?link=telefoni_i_tableti/smartphone/samsung.php">Samsung</a></li>
					  </div>
					       <div>
					      <li class="dropdown-header"><h4>Tableti</h4></li>
					      <li><a href="kategorija.php?link=telefoni_i_tableti/tableti/huawei_t.php">Huawei tableti</a></li>
					      <li><a href="kategorija.php?link=telefoni_i_tableti/tableti/ipad.php">iPad</a></li>
					      <li><a href="kategorija.php?link=telefoni_i_tableti/tableti/lenovo_t.php">Lenovo tableti</a></li>	
					      <li><a href="kategorija.php?link=telefoni_i_tableti/tableti/samsung_t.php">Samsung tableti</a></li>-->	
					      </div>			  
					    </ul>
					</div>
				</nav>
				<div class="userActions">						<?php
							//provjeravan preko niza u sesiji jeli logiran, drukciji headeri se ispisuju
							if(!isset($_SESSION['username'])) {
								echo'<a href="prijava.php" class="btn btn-primary">Prijava</a>';
							} else {
								if($_SESSION['username'] == "Ive")
								{
									echo '<div class="dropdown">
									    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Upravljačka ploča
									    <span class="caret"></span></button>
									    <ul class="menu-dropdown menu2">
									      <li><a href="#">Pregledaj korisnike</a></li>				      
									      <li><a href="#"> Pregledaj narudžbe</a></li>      
									      <li><a href="#">Pregledaj preuzimanja</a></li>
									      <li><a href="#" onclick="openNav()">Razgovor<span class="badge">2</span></a></li>
									      <li><form class="logout" action="includes/inc/odjava.inc.php" method="POST">
								 	<button class="btn btn-default" type="submit" name="logoutSubmit">Odjava</button>
								 	</form></li>				      
									    </ul>
									</div>';
								}
								else{
								echo '<div class="dropdown">
										<form>
									    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" onclick="https://www.facebook.com/">Moj Račun
									    </button>
									    </form>
									    <ul class="menu-dropdown menu2">
									      <li><a href="korisnik.php?link=contentUR.php">Uredi račun</a></li>
									      <li><a href="#" onclick="openNav()">Kontaktiraj admina</a></li>
									      <li><a href="korisnik.php?link=contentNarudzbe.php">Narudžbe</a></li>      
									      <li><a href="korisnik.php?link=contentPreuzimanja.php">Preuzimanja</a></li>
									      <li><form class="logout" action="includes/inc/odjava.inc.php" method="POST">
								 	<button class="btn btn-default" type="submit" name="logoutSubmit">Odjava</button>
								 	</form></li>				      
									    </ul>
									</div>';
								}
								 /*	$_SESSION['fist_name']
									$_SESSION['last_name']
									$_SESSION['email']
									$_SESSION['username']
									$_SESSION['profileImage']*/
							}
						?></div>
				<div class="userCart"><a href="kosarica.php" class="btn btn-primary">Košarica / <?php 

				if(!isset( $_SESSION["cijenaAktivneKošarice"]))
						 $_SESSION["cijenaAktivneKošarice"] = 0;
				
						echo $_SESSION["cijenaAktivneKošarice"];


				 ?>,00 KN</a></div>
			</header>




