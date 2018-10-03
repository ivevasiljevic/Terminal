<div class="pregledKorisnika">
	<div class="heading"><h2>Pregled registriranih korisnika</h2></div>
	<div class="contentPregledKorisnika">
		<div class="trazilicaKorisnika">
			<div>Upišite ime korisnika kojeg želite pronaći</div>
			<div class="search">
					<input id="searchBox" type="text" placeholder="Pretraži.." name="search">
  					<button class="searchIcon" type="submit"><img src="images/icons/magnifier.png" height=19 width=19></button>

				</div>
		</div>
		<div class="ispisKorisnika">
			<?php
		include('includes/inc/dbh.inc.php');
		$query = $conn->query("SELECT first_name,last_name,email,username FROM person
			WHERE person.username = ''");

		if($query->num_rows > 0)
		{
			while($row = $query->fetch_assoc())
			{
				?>
					<table style="width:100%">
			  <tr>
			    <th>Ime</th>
			    <th>Prezime</th>
			    <th>E-mail</th>
			    <th>Username</th>
			  </tr>
					<tr>
 						<td><?php echo $row["first_name"] ?></td>
					    <td><?php echo $row["last_name"] ?></td>
					    <td><?php echo $row["email"] ?></td>
					    <td><?php echo $row["username"] ?></td>
					  </tr>
					  
			<?php }
		}
		else{
			echo '<h1>Nema pretrazenih podataka</h1>';
		}
	?>
		</table>
		</div>
	</div>
</div>