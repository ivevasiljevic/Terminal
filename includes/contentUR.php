

<div class="UR">
	<div class="heading"><h2>Uredite račun</h2></div>
	<div class="contentUR">
		<div class="trenutni">
			<div>Vaši trenutni podaci računa:</div>
			<?php
		include('includes/inc/dbh.inc.php');

		$user = $_SESSION['username'];
		$query = $conn->query("SELECT first_name,last_name,email,username,image FROM person inner join usr on person.uid = usr.user_id
			WHERE person.username = '$user'");

		if($query->num_rows > 0)
		{
			while($row = $query->fetch_assoc())
			{
				?>
					<div class="racunPodaci">
						<div class="picture"><img src=<?php echo $row["image"] ?> height=80 width=80></div>
						<div>Ime: <?php echo $row["first_name"] ?></div>
						<div>Prezime: <?php echo $row["last_name"] ?></div>
						<div>Username: <?php echo $row["username"] ?></div>
						<div>E-mail: <?php echo $row["email"] ?></div>
					</div>
			<?php }
		}?>
		</div>
		<div class="promjena">
			<div class="container">
		 <form>
		  	<div class="imeprezime">
		    <div class="form-group">
		      <label for="usr">Promijeni ime:</label>
		      <input type="text" class="form-control" id="usr">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Promijeni prezime:</label>
		      <input type="text" class="form-control" id="pwd">
		    </div>
			</div>
			<div class="imeprezime">
			 <div class="form-group">
		      <label for="usr">Promijeni E-mail:</label>
		      <input type="text" class="form-control" id="usr">
		    </div>
		    <div class="form-group">
		      <label for="usr">Promijeni username:</label>
		      <input type="text" class="form-control" id="usr">
		    </div>
		</div>
		    <div>Promjena lozinke:</div>
		    <div class="form-group">
		      <label for="usr">Promijeni lozinku:</label>
		      <input type="password" class="form-control" id="usr">
		      <label for="usr">Ponovi lozinku:</label>
		      <input type="password" class="form-control" id="usr">
		    </div>
		</form>
			</div>
		</div>
	</div>
</div>