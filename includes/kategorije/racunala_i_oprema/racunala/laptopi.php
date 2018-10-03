
<div class="contentCat">
	<nav class="breadcrumb">
  		<a class="breadcrumb-item" href="index.php">Home</a>

  		<span class="breadcrumb-item active">Laptopi</span>
	</nav>

	<div class="category">
		<?php
		include('includes/inc/dbh.inc.php');

		$query = $conn->query("SELECT file_path,product_name,price FROM product inner join image on product.product_id = image.product_id inner join category on product.category_id = category.category_id
			WHERE category.category_name = 'laptop'");

		if($query->num_rows > 0)
		{
			while($row = $query->fetch_assoc())
			{
				?>
					<div class="konzola">
						<div class="picture"><img src=<?php echo $row["file_path"] ?>height=256 width=256></div>
						<div><?php echo $row["product_name"] ?></div>
						<div><?php echo $row["price"] ?></div>
						<div><a href="#" class="btn btn-primary">Dodaj u košaricu</a></div>
					</div>
			<?php }
		}
		else{
			echo '<h1>Produkt ne postoji!</h1>';
		}
	?>
	</div>
</div>