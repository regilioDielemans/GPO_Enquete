<?php require __DIR__ . '/includes/header.php'; ?>
<div class="page-header">
	<h1>GPO enquete</h1>
</div>

<form method="post" action="controllers/submittercontroller.php" role="form" class="col-md-4" >

	<div class="form-group">
	    <label for="name">Naam van uw bedrijf.</label>
	    <input type="text" class="form-control" name="name" id="name">
  	</div>

	<div class="form-group">
	    <label  for="email">Email van uw bedrijf</label>
	    <input type="email" class="form-control" name="email" id="email">
  	</div>

    <div class="form-group">
        <label for="location">Branche</label>

        <select  class="form-control" name="location" >
            <option>Winkel</option>
            <option>Restaurant</option>
            <option>Hotel</option>
            <option>Theater</option>
            <option>bank</option>
            <option>Bibliotheek</option>
        </select>

    </div>

	<input type="submit" value="volgende" class="btn btn-large">
</form>

<?php require 'includes/footer.php'; ?>