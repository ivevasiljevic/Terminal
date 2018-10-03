<div class="pregledKorisnika">
	<div class="heading"><h2>Pregled narudžbi korisnika</h2></div>
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
		
		$query = $conn->query("SELECT file_path,product_name,price,quantity_in_cart,time_date FROM person inner join usr on person.uid = usr.user_id inner join cart on usr.user_id = cart.user_id inner join holds on cart.cart_id = holds.cart_id inner join product on product.product_id = holds.product_id inner join image on product.product_id = image.product_id
			WHERE person.username = 'Mate123'");

		if($query->num_rows > 0)
		{
			while($row = $query->fetch_assoc())
			{
				?>
					<table style="width:100%">
					<col width="20%">
  					<col width="12%">
  					<col width="7%">
  					<col width="12%">
  					<col width="12%">
			  <tr>
			    <th>Proizvod</th>
			    <th>Cijena</th>
			    <th>Količina</th>
			    <th>Ukupno</th>
			    <th>Vrijeme kupnje</th>
			  </tr>
					<tr>
 						<td>
 						<div class="prNar">
						<div><img  class="slikajebena"src=<?php echo $row["file_path"] ?> height=106 width=106></div>
						<div class="imeProizvoda"><?php echo $row["product_name"] ?></div>
						</div>
					    </td>
					    <td class="cijenaP"><?php echo $row["price"] ?></td>
					    <td>
					    <div class="selector"><?php echo $row["quantity_in_cart"] ?></div>
						</td>
					    <td class="cijenaP"><?php echo $row["price"] ?></td>
					    <td class="cijenaP"><?php echo $row["time_date"] ?></td>
					  </tr>
					  
			<?php }
		}
		else{
			echo '<h1>Nema povijesti narudžbi</h1>';
		}
	?>
	</table>
		</div>
	</div>
</div>