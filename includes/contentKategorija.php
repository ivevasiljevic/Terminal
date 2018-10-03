<?php


		//$link = $_GET['link'];
		//$pocetak = strrpos($_GET['link'], '/', -4) + 1;
		//$kraj = strrpos($_GET['link'], '.', -2);
		//$ime_kategorije = substr($link, 0/*$pocetak*/, $kraj /*- $pocetak*/); 
		$ime_kategorije = $_GET['link'];
		include('includes/inc/dbh.inc.php');

		$sql = "SELECT image.file_path,product.product_name,product.price, product.product_id FROM product inner join image on product.product_id = image.product_id inner join category on product.category_id = category.category_id
			WHERE category.category_name ='$ime_kategorije'";
		$result = mysqli_query($conn, $sql);
		$numProductsInCat = mysqli_num_rows($result);?>

		<div class="contentCat">
		<nav class="breadcrumb">
  			<a class="breadcrumb-item" href="index.php">Home</a>
  			<span class="breadcrumb-item active"><?php 

  			$kat = str_replace("_", " ", $ime_kategorije);
  			$kat = ucfirst($kat);
  			echo $kat ?>
  				
  			</span>
		</nav>
		<div class="category">
		<?php
		if($numProductsInCat > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{    
				

				


				?>

				<form class="konzola" action="includes/inc/kosarica.inc.php" method="POST">
					
					<div class="konzola">
						<div class="picture"><img src=<?php echo $row["file_path"] ?> height=256 width=256></div>
						<div><?php echo $row["product_name"] ?></div>
						<div><?php echo $row["price"] . ',00 Kn' ?></div>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"]?>"/>
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]?>"/>
						<input type="hidden" name="hidden_image" value="<?php echo $row["file_path"]?>"/>
						<div><button name="dodajUKosaricu" href="#" class="btn btn-primary">Dodaj u košaricu</button></div>

					</div>

				</form>
			<?php }
		}
		else{
			echo '<h1>Produkt ne postoji!</h1>';
		}
	?>
	</div>
</div>