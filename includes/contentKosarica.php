<div class="kosarica">
	<div class="heading"><h2>Košarica</h2></div>
	<div class="contentKosarica">
	<div class="tablica">
		<div class="botuni">
			<form action="includes/inc/kosarica.inc.php" method="POST">
					
				<div class="botunUkloni">			
				  		<button name="ukloniKosaricu" class="btn btn-danger">Ukloni sve  <img src="images/icons/close-browser.png"></button>
				</div>
			</form>	
			<div class="botunAzuriraj">
				  <button type="button" class="btn btn-warning">Ažuriraj košaricu  <img src="images/icons/refresh-page-arrow-button.png"></button>
			</div>
		</div>
		<table style="width:100%">
			<col width="60%">
  			<col width="12%">
  			<col width="7%">
  			<col width="12%">
			  <tr>
			    <th>Proizvod</th>
			    <th>Cijena</th>
			    <th>Količina</th>
			    <th>Ukupno</th>
			  </tr>





				<?php
					if(isset($_SESSION["cart"]))
					{

					foreach ($_SESSION["cart"] as $proizvodi => $proizvod) 
					{
						
							?>
						  <tr>
						    <td >
						    	<div class="gridTD">

							<form action="includes/inc/kosarica.inc.php" method="POST">
<!--IVE PROMINI OVAJ BOTUN OBAVEZNO!!!!!!!!!!!!!!!!-->
							
						    	<button name="ukloniProizvod" >
						    		<div class="remove"><img src="images/icons/remove.png"></div>
								</button>
							
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
								<input type="hidden" name="proizvodZaUkloniti" value="<?php echo $proizvod['naziv'] ?>"/>
							</form>
								<div><img class="slikajebena" src=<?php echo $proizvod["slika"] ?> height=95 width=106></div>
								<div class="imeProizvoda"><?php echo $proizvod["naziv"] ?></div>
							</div>
						    </td>
						    <td class="cijenaP"><?php echo $proizvod["cijena"] . ',00 Kn' ?></td>
						   <td>

						    	<select class="selector">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								  <option>6</option>
								  <option>7</option>
								  <option>8</option>
								  <option>9</option>
								  <option>10</option>
								  <option>11</option>
								  <option>12</option>
								  <option>13</option>
								  <option>14</option>
								  <option>15</option>
								</select>

							</td>
						    <td class="cijenaP"><?php echo $proizvod["cijena"]*$proizvod["količina"] . ",00Kn" ?></td>
						  </tr>
						  	<?php

					}
				}
				?>
<!--
			 <tr>
			    <td >
			    	<div class="gridTD">
			    	<div class="remove"><img src="images/icons/remove.png"></div>
					<div><img class="slikajebena" src="images/konzole/PlayStation_4.png" height=95 width=106></div>
					<div class="imeProizvoda">Ultrabook Asus Zenbook UX430UA-GV340T, 14" FHD, Intel Core i5-8250U up to 3.4GHz, 8GB DDR3, 256GB SSD</div>
				</div>
			    </td>
			    <td class="cijenaP">2100 Kn</td>
			   <td>

			    	<select class="selector">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					</select>

				</td>
			    <td class="cijenaP">2100 Kn</td>
			  </tr>
			   <tr>
			    <td >
			    	<div class="gridTD">
			    	<div class="remove"><img src="images/icons/remove.png"></div>
					<div><img class="slikajebena" src="images/konzole/PlayStation_4.png" height=95 width=106></div>
					<div class="imeProizvoda">Ultrabook Asus Zenbook UX430UA-GV340T, 14" FHD, Intel Core i5-8250U up to 3.4GHz, 8GB DDR3, 256GB SSD</div>
				</div>
			    </td>
			    <td class="cijenaP">2100 Kn</td>
			    <td>

			    	<select class="selector">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					</select>

				</td>
			    <td class="cijenaP">2100 Kn</td>
			  </tr>
			  <tr>
			    <td >
			    	<div class="gridTD">
			    	<div class="remove"><img src="images/icons/remove.png"></div>
					<div><img class="slikajebena" src="images/konzole/PlayStation_4.png" height=95 width=106></div>
					<div class="imeProizvoda">Ultrabook Asus Zenbook UX430UA-GV340T, 14" FHD, Intel Core i5-8250U up to 3.4GHz, 8GB DDR3, 256GB SSD</div>
				</div>
			    </td>
			    <td class="cijenaP">2100 Kn</td>
			   <td>

			    	<select class="selector">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					</select>

				</td>
			    <td class="cijenaP">2100 Kn</td>
			  </tr>
			   <tr>
			    <td >
			    	<div class="gridTD">
			    	<div class="remove"><img src="images/icons/remove.png"></div>
					<div><img class="slikajebena" src="images/konzole/PlayStation_4.png" height=95 width=106></div>
					<div class="imeProizvoda">Ultrabook Asus Zenbook UX430UA-GV340T, 14" FHD, Intel Core i5-8250U up to 3.4GHz, 8GB DDR3, 256GB SSD</div>
				</div>
			    </td>
			    <td class="cijenaP">2100 Kn</td>
			    <td>

			    	<select class="selector">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					</select>

				</td>
			    <td class="cijenaP">2100 Kn</td>
			  </tr>
			  <tr>
			    <td >
			    	<div class="gridTD">
			    	<div class="remove"><img src="images/icons/remove.png"></div>
					<div><img class="slikajebena" src="images/konzole/PlayStation_4.png" height=95 width=106></div>
					<div class="imeProizvoda">Ultrabook Asus Zenbook UX430UA-GV340T, 14" FHD, Intel Core i5-8250U up to 3.4GHz, 8GB DDR3, 256GB SSD</div>
				</div>
			    </td>
			    <td class="cijenaP">2100 Kn</td>
			    <td>

			    	<select class="selector">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					</select>

				</td>
			    <td class="cijenaP">2100 Kn</td>
			  </tr>
			  <tr>
			    <td >
			    	<div class="gridTD">
			    	<div class="remove"><img src="images/icons/remove.png"></div>
					<div><img class="slikajebena" src="images/konzole/PlayStation_4.png" height=95 width=106></div>
					<div class="imeProizvoda">Ultrabook Asus Zenbook UX430UA-GV340T, 14" FHD, Intel Core i5-8250U up to 3.4GHz, 8GB DDR3, 256GB SSD</div>
				</div>
			    </td>
			    <td class="cijenaP">2100 Kn</td>
			    <td>

			    	<select class="selector">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					  <option>6</option>
					  <option>7</option>
					  <option>8</option>
					  <option>9</option>
					  <option>10</option>
					  <option>11</option>
					  <option>12</option>
					  <option>13</option>
					  <option>14</option>
					  <option>15</option>
					</select>

				</td>
			    <td class="cijenaP">2100 Kn</td>
			  </tr>-->
		</table>
	</div>
	<div class="display" style="height:420px">
		<div class="naslovDisplay">Sveukupno</div>
		<div class="ukupnoDisplay">Ukupno</div>
		<div class="cijenaDisplay"><?php echo $_SESSION["cijenaAktivneKošarice"] . ',00Kn'?></div>
		<div class="dostavaDisplay">Dostava</div>
		<div class="dostavabDisplay">Besplatna dostava</div>
		<div class="ukupnoUDisplay">Ukupno</div>
		<div class="ukupnoCDisplay"><?php echo $_SESSION["cijenaAktivneKošarice"] . ',00Kn'?></div>
		<div class="disCode"><label for="usr">Discount code:</label>
      	<input type="text" class="form-control" id="usr">
      	</div>
		<div class="trgovina">
			
		<a type="button" class="btn btn-primary" href="index.php">Nastavite kupovinu</a></div>
		<div class="checkout"><a type="button" class="btn btn-primary" href="placanje.php">Dovršite narudžbu</a></div>
		<div class="napomena">*Ako cijena narudžbe prelazi iznos od 500 kuna dostava je besplatna, u suprotnom iznosi 20 kuna.</div>
	</div>
</div>
</div>