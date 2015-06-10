<?php require 'includes/header.php'; ?>
<div class="page-header">
	<h1>GPO enquete</h1>
</div>

<form method="post" action="includes/DB.php" role="form" class="col-md-4" >

	<div class="form-group">
	    <label for="name">Naam van uw bedrijf.</label>
	    <input type="text" class="form-control" name="name" id="name">
  	</div>

	<div class="form-group">
	    <label  for="email">Email van uw bedrijf</label>
	    <input type="email" class="form-control" name="email" id="email" placeholder="email">
  	</div>


	<select class="form-group" name="location" >
	  <option>Winkel</option>
	  <option>Restaurant</option>
	  <option>Hotel</option>
	  <option>Theater</option>
	  <option>bank</option>
	  <option>Bibliotheek</option>
	</select>
	<br>
	<input type="submit" value="volgende" name="select" class="btn btn-large">
</form>

<?php require 'includes/footer.php'; ?>